<?php

namespace Msoft\RCSystemBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Msoft\RCSystemBundle\Entity\TbMethodPayment;
use Msoft\RCSystemBundle\Form\TbMethodPaymentType;
use Msoft\RCSystemBundle\Entity\HistoryUtil;

/**
 * TbMethodPayment controller.
 *
 */
class TbMethodPaymentController extends Controller
{

    /**
     * Lists all TbMethodPayment entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MsoftRCSystemBundle:TbMethodPayment')->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $entities, $this->get('request')->query->get('page', 1)/* page number */, 3/* limit per page */
        );
         
        return $this->render('MsoftRCSystemBundle:TbMethodPayment:index.html.twig', array(
            'pagination' => $pagination,
        ));
    }
    /**
     * Creates a new TbMethodPayment entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TbMethodPayment();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity= HistoryUtil::setDateIn($entity);
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tb_method_payment'));
        }

        return $this->render('MsoftRCSystemBundle:TbMethodPayment:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'titleAction' => 'Novo Metodo de pagamento'
            
        ));
    }

    /**
     * Creates a form to create a TbMethodPayment entity.
     *
     * @param TbMethodPayment $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TbMethodPayment $entity)
    {
        $form = $this->createForm(new TbMethodPaymentType(), $entity, array(
            'action' => $this->generateUrl('tb_method_payment_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TbMethodPayment entity.
     *
     */
    public function newAction()
    {
        $entity = new TbMethodPayment();
        $form   = $this->createCreateForm($entity);

        return $this->render('MsoftRCSystemBundle:TbMethodPayment:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),            
            'titleAction' => 'Novo metodo de pagamento'
        ));
    }

    /**
     * Displays a form to edit an existing TbMethodPayment entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbMethodPayment')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbMethodPayment entity.');
        }

        $editForm = $this->createEditForm($entity);        

        return $this->render('MsoftRCSystemBundle:TbMethodPayment:new.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),            
            'titleAction' => 'Editando metodo de pagamento'
        ));
    }

    /**
    * Creates a form to edit a TbMethodPayment entity.
    *
    * @param TbMethodPayment $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TbMethodPayment $entity)
    {
        $form = $this->createForm(new TbMethodPaymentType(), $entity, array(
            'action' => $this->generateUrl('tb_method_payment_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TbMethodPayment entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbMethodPayment')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbMethodPayment entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity = HistoryUtil::setUpdated($entity);
            $em->flush();

          return $this->redirect($this->generateUrl('tb_method_payment'));
        }

        return $this->render('MsoftRCSystemBundle:TbMethodPayment:new.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'titleAction' => 'Editando metodo de pagamento'
        ));
    }
    /**
     * Deletes a TbMethodPayment entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
       
        if ($request->getMethod() == 'GET') {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MsoftRCSystemBundle:TbMethodPayment')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TbMethodPayment entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tb_method_payment'));
    }

   
}
