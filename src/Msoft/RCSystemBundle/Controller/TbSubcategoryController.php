<?php

namespace Msoft\RCSystemBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Msoft\RCSystemBundle\Entity\TbSubcategory;
use Msoft\RCSystemBundle\Form\TbSubcategoryType;

/**
 * TbSubcategory controller.
 *
 */
class TbSubcategoryController extends Controller {

    /**
     * Lists all TbSubcategory entities.
     *
     */
    public function listAction() {
        $em = $this->getDoctrine()->getManager();
        $request = $this->container->get('request');
        $id = $request->query->get('id');

        $criteria = array(
            'idCategory' => $id
        );
        $entities = $em->getRepository('MsoftRCSystemBundle:TbSubcategory')->findBy($criteria);
        $entity = new TbSubcategory;
        $response = array();
        foreach ($entities as $entity) {
            $response[$entity->getId()] = $entity->getDescription();
        }

        return new Response(json_encode($response));
    }

    /**
     * Lists all TbSubcategory entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MsoftRCSystemBundle:TbSubcategory')->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $entities, $this->get('request')->query->get('page', 1)/* page number */, 3/* limit per page */
        );

        return $this->render('MsoftRCSystemBundle:TbSubcategory:index.html.twig', array(
                    'pagination' => $pagination,
        ));
    }

    /**
     * Creates a new TbSubcategory entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new TbSubcategory();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tb_subcategory_show', array('id' => $entity->getId())));
        }

        return $this->render('MsoftRCSystemBundle:TbSubcategory:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TbSubcategory entity.
     *
     * @param TbSubcategory $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TbSubcategory $entity) {
        $form = $this->createForm(new TbSubcategoryType(), $entity, array(
            'action' => $this->generateUrl('tb_subcategory_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TbSubcategory entity.
     *
     */
    public function newAction() {
        $entity = new TbSubcategory();
        $form = $this->createCreateForm($entity);

        return $this->render('MsoftRCSystemBundle:TbSubcategory:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TbSubcategory entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbSubcategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbSubcategory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MsoftRCSystemBundle:TbSubcategory:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TbSubcategory entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbSubcategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbSubcategory entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('MsoftRCSystemBundle:TbSubcategory:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $editForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a TbSubcategory entity.
     *
     * @param TbSubcategory $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(TbSubcategory $entity) {
        $form = $this->createForm(new TbSubcategoryType(), $entity, array(
            'action' => $this->generateUrl('tb_subcategory_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing TbSubcategory entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbSubcategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbSubcategory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tb_subcategory'));
        }

        return $this->render('MsoftRCSystemBundle:TbSubcategory:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TbSubcategory entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        if ($form->isValid()) {
            $entity = $em->getRepository('MsoftRCSystemBundle:TbSubcategory')->find($id);
        }
        if ($request->getMethod() == 'GET') {
            $entity = $em->getRepository('MsoftRCSystemBundle:TbSubcategory')->find($id);
        }

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbSubcategory entity.');
        } else {
            $em->remove($entity);
            $em->flush();
        }
        return $this->redirect($this->generateUrl('tb_subcategory'));
    }

    /**
     * Creates a form to delete a TbSubcategory entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('tb_subcategory_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
