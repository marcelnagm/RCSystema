<?php

namespace Msoft\RCSystemBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Msoft\RCSystemBundle\Entity\TbCategory;
use Msoft\RCSystemBundle\Form\TbCategoryType;

/**
 * TbCategory controller.
 *
 */
class TbCategoryController extends Controller
{

    /**
     * Lists all TbCategory entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MsoftRCSystemBundle:TbCategory')->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $entities, $this->get('request')->query->get('page', 1)/* page number */, 3/* limit per page */
        );
        
        return $this->render('MsoftRCSystemBundle:TbCategory:index.html.twig', array(
            'pagination' => $pagination,
        ));
    }
    /**
     * Creates a new TbCategory entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TbCategory();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tb_categorty'));
        }

        return $this->render('MsoftRCSystemBundle:TbCategory:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TbCategory entity.
     *
     * @param TbCategory $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TbCategory $entity)
    {
        $form = $this->createForm(new TbCategoryType(), $entity, array(
            'action' => $this->generateUrl('tb_categorty_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TbCategory entity.
     *
     */
    public function newAction()
    {
        $entity = new TbCategory();
        $form   = $this->createCreateForm($entity);

        return $this->render('MsoftRCSystemBundle:TbCategory:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TbCategory entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbCategory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MsoftRCSystemBundle:TbCategory:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TbCategory entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbCategory entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('MsoftRCSystemBundle:TbCategory:new.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a TbCategory entity.
    *
    * @param TbCategory $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TbCategory $entity)
    {
        $form = $this->createForm(new TbCategoryType(), $entity, array(
            'action' => $this->generateUrl('tb_categorty_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TbCategory entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbCategory')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbCategory entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('tb_categorty_edit', array('id' => $id)));
        }

        return $this->render('MsoftRCSystemBundle:TbCategory:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TbCategory entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);
$em = $this->getDoctrine()->getManager();
        if ($form->isValid()) {            
            $entity = $em->getRepository('MsoftRCSystemBundle:TbCategory')->find($id);          
        }
        if($request->getMethod() == 'GET'){            
             $entity = $em->getRepository('MsoftRCSystemBundle:TbCategory')->find($id);
        }

          if (!$entity) {
                throw $this->createNotFoundException('Unable to find TbSubcategory entity.');
            }else{
            $em->remove($entity);
            $em->flush();
            }
        return $this->redirect($this->generateUrl('tb_categorty'));
    }

    /**
     * Creates a form to delete a TbCategory entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tb_categorty_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
