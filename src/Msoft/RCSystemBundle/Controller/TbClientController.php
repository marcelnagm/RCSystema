<?php

namespace Msoft\RCSystemBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

use Msoft\RCSystemBundle\Entity\TbClient;
use Msoft\RCSystemBundle\Form\TbClientType;
use Msoft\RCSystemBundle\Entity\HistoryUtil;

/**
 * TbClient controller.
 *
 */
class TbClientController extends Controller {

    /**
     * Lists all TbClient entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MsoftRCSystemBundle:TbClient')->findAll();

        return $this->render('MsoftRCSystemBundle:TbClient:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new TbClient entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new TbClient();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        if ($request->getMethod() == 'POST') {
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $entity = HistoryUtil::setDateIn($entity);
                $em->persist($entity);
                $em->flush();
                $session = new Session();
                if ($session->get('PDVAction')) {
                    $session->set('PDVAction', false);
                    return $this->redirect($this->generateUrl('pdv'));
                }
                return $this->redirect($this->generateUrl('tb_client'));
            }else{
                $session->set('error', 'Erro no formulario');
            }
        }

        return $this->render('MsoftRCSystemBundle:TbClient:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'titleAction' => 'Novo Cliente'
        ));
    }

    /**
     * Creates a form to create a TbClient entity.
     *
     * @param TbClient $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TbClient $entity) {
        $form = $this->createForm(new TbClientType(), $entity, array(
            'action' => $this->generateUrl('tb_client_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TbClient entity.
     *
     */
    public function newPDVAction() {
        $session = new Session();
        $session->set('PDVAction', true);

        return $this->newAction();
    }

    /**
     * Displays a form to create a new TbClient entity.
     *
     */
    public function newAction() {
        $entity = new TbClient();
        $form = $this->createCreateForm($entity);

        return $this->render('MsoftRCSystemBundle:TbClient:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'titleAction' => 'Novo Cliente'
        ));
    }

    /**
     * Displays a form to edit an existing TbClient entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbClient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbClient entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('MsoftRCSystemBundle:TbClient:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $editForm->createView(),
                    'titleAction' => 'Editando Cliente'
        ));
    }

    /**
     * Creates a form to edit a TbClient entity.
     *
     * @param TbClient $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(TbClient $entity) {
        $form = $this->createForm(new TbClientType(), $entity, array(
            'action' => $this->generateUrl('tb_client_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing TbClient entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbClient')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbClient entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity = HistoryUtil::setUpdated($entity);
            $em->flush();
            return $this->redirect($this->generateUrl('tb_client'));
        }

        return $this->render('MsoftRCSystemBundle:TbClient:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a TbClient entity.
     *
     */
    public function deleteAction(Request $request, $id) {

        if ($request->getMethod() == 'GET') {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MsoftRCSystemBundle:TbClient')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TbClient entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tb_client'));
    }

}
