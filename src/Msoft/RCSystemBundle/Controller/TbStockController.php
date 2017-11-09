<?php

namespace Msoft\RCSystemBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Msoft\RCSystemBundle\Entity\TbStock;
use Msoft\RCSystemBundle\Form\TbStockType;
use Msoft\RCSystemBundle\Entity\HistoryUtil;

/**
 * TbStock controller.
 *
 */
class TbStockController extends Controller {

    public function confirmAction($id) {
        $em = $this->getDoctrine()->getManager();
//        $tbentry = new \Msoft\RCSystemBundle\Entity\TbEntry();
        $tbentry = $em->getRepository('MsoftRCSystemBundle:TbEntry')->find($id);

        $criteria = array('idEntry' => $id);
        $entities = $em->getRepository('MsoftRCSystemBundle:TbStock')->findBy($criteria);
        $entity = new TbStock();

        foreach ($entities as $entity) {
            $product = new \Msoft\RCSystemBundle\Entity\TbProduct();
            $product = $entity->getIdProduct();
            $product->setQuantity($product->getQuantity() + $entity->getQuantity());
            $product->setPriceCost($entity->getPriceCost());
            $product->setPriceSell($entity->getPriceSell());
            $product = HistoryUtil::setUpdated($product);
            $em->persist($product);
        }

        $tbentry = HistoryUtil::setDateIn($tbentry);
        $em->persist($tbentry);
        $em->flush();
        return $this->redirect($this->generateUrl('tb_entry'));
    }

    /**
     * Lists all TbStock entities.
     *
     */
    public function indexOneAction($id) {
        $em = $this->getDoctrine()->getManager();


        $criteria = array('idEntry' => $id);
        $entities = $em->getRepository('MsoftRCSystemBundle:TbStock')->findBy($criteria);

        return $this->render('MsoftRCSystemBundle:TbStock:indexOne.html.twig', array(
                    'entities' => $entities,
                    'id' => $id
        ));
    }

    /*
     * Creates a new TbStock entity.
     *
     */

    public function createAction(Request $request) {
        $entity = new TbStock();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();

            $criteria = array('idEntry' => $entity->getIdEntry()->getId(),
                'idProduct' => $entity->getIdProduct()->getId()
            );
//             $entitySearch = new TbStock();
            $entitySearch = null;
            $entitySearch = $em->getRepository('MsoftRCSystemBundle:TbStock')->findOneBy($criteria);
            if ($entitySearch instanceof TbStock) {
                $entitySearch->setQuantity($entitySearch->getQuantity() + $entity->getQuantity());
                $entitySearch = HistoryUtil::setUpdated($entitySearch);
                $em->persist($entitySearch);
            } else {
                $entity = HistoryUtil::setDateIn($entity);
                $em->persist($entity);
            }
            $em->flush();

            return $this->redirect($this->generateUrl('tb_entry_add_stock', array('id' => $entity->getIdEntry()->getId())));
        }

        return $this->render('MsoftRCSystemBundle:TbStock:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'id' => $entity->getIdEntry()->getId()
        ));
    }

    /**
     * Creates a form to create a TbStock entity.
     *
     * @param TbStock $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TbStock $entity, $id = null) {
        $em = $this->getDoctrine()->getManager();

        $form = $this->createForm(new TbStockType(), $entity, array(
            'action' => $this->generateUrl('tb_stock_create'),
            'method' => 'POST'
        ));

        if ($entity->getIdEntry() != null) {
            $form->remove('idEntry');
            $form->add('idEntry', null, array('required' => 'required', 'read_only' => 'read_only', 'choices' => array($entity->getIdEntry()->getId() => $entity->getIdEntry())))
            ;
        }





        return $form;
    }

    /**
     * Displays a form to create a new TbStock entity.
     *
     */
    public function newOneAction($id) {
        $em = $this->getDoctrine()->getManager();
        $entity = new TbStock();
        $entity->setIdEntry($em->getRepository('MsoftRCSystemBundle:TbEntry')->find($id));
        $form = $this->createCreateForm($entity);

        return $this->render('MsoftRCSystemBundle:TbStock:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
                    'id' => $id
        ));
    }

    /**
     * Displays a form to create a new TbStock entity.
     *
     */
    public function newAction() {
        $entity = new TbStock();
        $form = $this->createCreateForm($entity);

        return $this->render('MsoftRCSystemBundle:TbStock:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TbStock entity.
     *
     */
    public function editAction($id, $id_entry) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbStock')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbStock entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->remove('idEntry');
        $editForm->add('idEntry', null, array('required' => 'required', 'read_only' => 'read_only', 'choices' => array($entity->getIdEntry()->getId() => $entity->getIdEntry())));





        return $this->render('MsoftRCSystemBundle:TbStock:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $editForm->createView(),
                    'id' => $id_entry
        ));
    }

    /**
     * Creates a form to edit a TbStock entity.
     *
     * @param TbStock $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(TbStock $entity) {
        $form = $this->createForm(new TbStockType(), $entity, array(
            'action' => $this->generateUrl('tb_stock_update', array('id' => $entity->getId())),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing TbStock entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = new TbStock();
        $entity = $em->getRepository('MsoftRCSystemBundle:TbStock')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbStock entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $entity= HistoryUtil::setUpdated($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('tb_entry_add_stock', array('id' => $entity->getIdEntry()->getId())));
        }

        return $this->render('MsoftRCSystemBundle:TbStock:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'id' => $entity->getIdEntry()->getId()
        ));
    }

    /**
     * Deletes a TbStock entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();
        if ($request->getMethod() == 'GET') {


            $entity = $em->getRepository('MsoftRCSystemBundle:TbStock')->find($id);

            $url = $this->generateUrl('tb_entry_add_stock', array('id' => $entity->getIdEntry()->getId()));
            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($url);
    }

}
