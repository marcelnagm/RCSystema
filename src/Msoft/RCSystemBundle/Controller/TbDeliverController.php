<?php

namespace Msoft\RCSystemBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Msoft\RCSystemBundle\Entity\TbDeliver;
use Msoft\RCSystemBundle\Form\TbDeliverType;

/**
 * TbDeliver controller.
 *
 */
class TbDeliverController extends Controller
{

    /**
     * Lists all TbDeliver entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MsoftRCSystemBundle:TbDeliver')->findAll();
  $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $entities, $this->get('request')->query->get('page', 1)/* page number */, 5/* limit per page */
        );
        return $this->render('MsoftRCSystemBundle:TbDeliver:index.html.twig', array(
            'pagination' => $pagination,
        ));
    }
    /**
     * Creates a new TbDeliver entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TbDeliver();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tb_deliver_show', array('id' => $entity->getId())));
        }

        return $this->render('MsoftRCSystemBundle:TbDeliver:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TbDeliver entity.
     *
     * @param TbDeliver $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TbDeliver $entity)
    {
        $form = $this->createForm(new TbDeliverType(), $entity, array(
            'action' => $this->generateUrl('tb_deliver_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TbDeliver entity.
     *
     */
    public function newAction()
    {
        $entity = new TbDeliver();
        $form   = $this->createCreateForm($entity);

        return $this->render('MsoftRCSystemBundle:TbDeliver:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TbDeliver entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbDeliver')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbDeliver entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MsoftRCSystemBundle:TbDeliver:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TbDeliver entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbDeliver')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbDeliver entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MsoftRCSystemBundle:TbDeliver:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TbDeliver entity.
    *
    * @param TbDeliver $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TbDeliver $entity)
    {
        $form = $this->createForm(new TbDeliverType(), $entity, array(
            'action' => $this->generateUrl('tb_deliver_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TbDeliver entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbDeliver')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbDeliver entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tb_deliver_edit', array('id' => $id)));
        }

        return $this->render('MsoftRCSystemBundle:TbDeliver:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TbDeliver entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MsoftRCSystemBundle:TbDeliver')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TbDeliver entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tb_deliver'));
    }

    /**
     * Creates a form to delete a TbDeliver entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tb_deliver_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
