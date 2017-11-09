<?php

namespace Msoft\RCSystemBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Msoft\RCSystemBundle\Entity\TbProduct;
use Msoft\RCSystemBundle\Form\TbProductType;

/**
 * TbProduct controller.
 *
 */
class TbProductController extends Controller {

    /**
     * Lists all TbProduct entities.
     *
     */
    public function printAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        
        $entities = $em->getRepository('MsoftRCSystemBundle:TbProduct')->createQueryBuilder('u')->andWhere('u.quantity = 0');
          

        $template = 'MsoftRCSystemBundle:TbProduct:print.html.twig';    
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $entities, $this->get('request')->query->get('page', 1)/* page number */, 5000000/* limit per page */
        );
        $option= array(
                    'actionTitle' => 'Lista de Produtos sem estoque',
                    'entities' => $pagination,
                    'index' => true);

        return $this->render($template, $option
                );
    }
    
    public function noStockAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        
        $entities = $em->getRepository('MsoftRCSystemBundle:TbProduct')->createQueryBuilder('u')->andWhere('u.quantity = 0');
          

        $template = 'MsoftRCSystemBundle:TbProduct:index.html.twig';    
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $entities, $this->get('request')->query->get('page', 1)/* page number */, 3/* limit per page */
        );
        $option= array(
                    'actionTitle' => 'Lista de Produtos sem estoque',
                    'pagination' => $pagination,
                    'index' => true);

        return $this->render($template, $option
                );
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MsoftRCSystemBundle:TbProduct')->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $entities, $this->get('request')->query->get('page', 1)/* page number */, 3/* limit per page */
        );




        return $this->render('MsoftRCSystemBundle:TbProduct:index.html.twig', array(
                    'actionTitle' => 'Lista de Produtos',
                    'pagination' => $pagination
        ));
    }

    /**
     * Creates a new TbProduct entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new TbProduct();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tb_product_show', array('id' => $entity->getId())));
        }

        return $this->render('MsoftRCSystemBundle:TbProduct:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TbProduct entity.
     *
     * @param TbProduct $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TbProduct $entity) {
        $form = $this->createForm(new TbProductType(), $entity, array(
            'action' => $this->generateUrl('tb_product_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TbProduct entity.
     *
     */
    public function newAction() {
        $entity = new TbProduct();
        $form = $this->createCreateForm($entity);

        return $this->render('MsoftRCSystemBundle:TbProduct:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TbProduct entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbProduct')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbProduct entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MsoftRCSystemBundle:TbProduct:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TbProduct entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbProduct')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbProduct entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('MsoftRCSystemBundle:TbProduct:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $editForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a TbProduct entity.
     *
     * @param TbProduct $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(TbProduct $entity) {
        $form = $this->createForm(new TbProductType(), $entity, array(
            'action' => $this->generateUrl('tb_product_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing TbProduct entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbProduct')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbProduct entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tb_product_edit', array('id' => $id)));
        }

        return $this->render('MsoftRCSystemBundle:TbProduct:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TbProduct entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MsoftRCSystemBundle:TbProduct')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TbProduct entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('tb_product'));
    }

    /**
     * Creates a form to delete a TbProduct entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('tb_product_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
