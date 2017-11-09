<?php

namespace Msoft\RCSystemBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Msoft\RCSystemBundle\Entity\TbEntry;
use Msoft\RCSystemBundle\Form\TbEntryType;
use Msoft\RCSystemBundle\Entity\HistoryUtil;

/**
 * TbEntry controller.
 *
 */
class TbEntryController extends Controller
{

    /**
     * Lists all TbEntry entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MsoftRCSystemBundle:TbEntry')->findAll();
$paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $entities, $this->get('request')->query->get('page', 1)/* page number */, 4/* limit per page */
        );
        
        return $this->render('MsoftRCSystemBundle:TbEntry:index.html.twig', array(
              'pagination' => $pagination,
        ));
    }
    /**
     * Creates a new TbEntry entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new TbEntry();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $entity = HistoryUtil::setDateIn($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tb_entry_show', array('id' => $entity->getId())));
        }

        return $this->render('MsoftRCSystemBundle:TbEntry:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a TbEntry entity.
     *
     * @param TbEntry $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TbEntry $entity)
    {
        $form = $this->createForm(new TbEntryType(), $entity, array(
            'action' => $this->generateUrl('tb_entry_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TbEntry entity.
     *
     */
    public function newAction()
    {
        $entity = new TbEntry();
        $form   = $this->createCreateForm($entity);

        return $this->render('MsoftRCSystemBundle:TbEntry:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),            
            'titleAction' =>'Nova Nota'
        ));
    }

    /**
     * Finds and displays a TbEntry entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = new TbEntry;
        $entity = $em->getRepository('MsoftRCSystemBundle:TbEntry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbEntry entity.');
        }

        
        $criteria = array('idEntry' => $id);
        $entities = $em->getRepository('MsoftRCSystemBundle:TbStock')->findBy($criteria);

        return $this->render('MsoftRCSystemBundle:TbEntry:show.html.twig', array(
            'entity'      => $entity,
            'stockEntities' => $entities,
            'id' => $id
            ));
    }

    /**
     * Displays a form to edit an existing TbEntry entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbEntry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbEntry entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('MsoftRCSystemBundle:TbEntry:new.html.twig', array(
            'entity'      => $entity,
            'form'   => $editForm->createView(),
            'titleAction' =>'Editando Nota'
        ));
    }

    /**
    * Creates a form to edit a TbEntry entity.
    *
    * @param TbEntry $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(TbEntry $entity)
    {
        $form = $this->createForm(new TbEntryType(), $entity, array(
            'action' => $this->generateUrl('tb_entry_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing TbEntry entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbEntry')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbEntry entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity = HistoryUtil::setUpdated($entity);            
            $em->flush();

            return $this->redirect($this->generateUrl('tb_entry_edit', array('id' => $id)));
        }

        return $this->render('MsoftRCSystemBundle:TbEntry:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a TbEntry entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('MsoftRCSystemBundle:TbEntry')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find TbEntry entity.');
            }

            $em->remove($entity);
            $em->flush();
        

        return $this->redirect($this->generateUrl('tb_entry'));
    }

    /**
     * Creates a form to delete a TbEntry entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tb_entry_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
