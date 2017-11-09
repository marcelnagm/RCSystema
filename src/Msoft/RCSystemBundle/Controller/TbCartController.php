<?php

namespace Msoft\RCSystemBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Msoft\RCSystemBundle\Entity\TbShop;
use Msoft\RCSystemBundle\Entity\TbCart;
use Msoft\RCSystemBundle\Form\TbCartType;
use Msoft\RCSystemBundle\Entity\HistoryUtil;
use Msoft\RCSystemBundle\Controller\PDVController;

/**
 * TbCart controller.
 *
 */
class TbCartController extends Controller {

    /**
     * Lists all TbCart entities.
     *
     */
    public function listAction(Request $request) {
        $this->checkHasShop($request);
        $session = $request->getSession();
        $this->createAccessDeniedException('id' . $session->get('actual_IdShop'));
        $url = $this->generateUrl(('tb_cart'), array('id' => $session->get('actual_IdShop')));
        return $this->redirect($url);
    }

    public function indexAction($id,Request $request) {
        $this->checkHasShop($request);
        $em = $this->getDoctrine()->getManager();

        $session = $this->getRequest()->getSession();
        $id = $session->get('actual_IdShop');
        $criteria = array('idShop' => $id);
        $entities = $em->getRepository('MsoftRCSystemBundle:TbCart')->findBy($criteria);
        $total = 0;
        foreach ($entities as $entity) {
            $total += $entity->getSubTotal();
        }

        return $this->render('MsoftRCSystemBundle:TbCart:index.html.twig', array(
                    'entities' => $entities, 'total' => $total
        ));
    }

    /**
     * Creates a new TbCart entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new TbCart();
        $this->checkHasShop($request);

        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);
        $session = $request->getSession();
        $id = $session->get('actual_IdShop');
        if ($form->isValid()) {

            $em = $this->getDoctrine()->getManager();

            $criteria = array(
                'idShop' => $id,
                'idProduct' => $entity->getIdProduct()->getId()
            );
            $entry = $em->getRepository('MsoftRCSystemBundle:TbCart')->findOneBy($criteria);
            if ($entry instanceof TbCart) {
                if ($entity->haveStock()) {
                    $entry->setQuantity($entry->getQuantity() + $entity->getQuantity());
                    $entry = HistoryUtil::setUpdated($entry);
                    $em->persist($entry);
                    goto reducao_estoque;
                } else
                    $session->set('error', 'Nao tem estoque suficiente para este pedido');
            }else
            if ($entity->haveStock()) {
                $entity->setIdShop($em->getRepository('MsoftRCSystemBundle:TbShop')->find($id));
                $entity = HistoryUtil::setDateIn($entity);
                $em->persist($entity);
                reducao_estoque:
                $prod = $entity->getIdProduct();
                $prod->setQuantity($prod->getQuantity() - $entity->getQuantity());
                $prod = $entity->getIdProduct();
                $prod->setQuantity($prod->getQuantity() - $entity->getQuantity());
                $prod = HistoryUtil::setUpdated($prod);
                $em->persist($prod);
            } else
                $session->set('error', 'Nao tem estoque suficiente para este pedido');

            $em->flush();








            return $this->listAction($request);
        }

        return $this->listAction($request);
    }

    /**
     * Creates a form to create a TbCart entity.
     *
     * @param TbCart $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(TbCart $entity) {
        $session = new Session();        
        $form = $this->createForm(new TbCartType($this->getDoctrine()->getManager()), $entity, array(
            'action' => $this->generateUrl('tb_cart_create'),
            'method' => 'POST'
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new TbCart entity.
     *
     */
    public function newAction(Request $request) {
        $this->checkHasShop($request);
        $entity = new TbCart();
        $form = $this->createCreateForm($entity);

        return $this->render('MsoftRCSystemBundle:TbCart:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TbCart entity.
     *
     */
    public function editAction(Request $request,$id) {
        $this->checkHasShop($request);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbCart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbCart entity.');
        }

        $editForm = $this->createEditForm($entity);

        return $this->render('MsoftRCSystemBundle:TbCart:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $editForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a TbCart entity.
     *
     * @param TbCart $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(TbCart $entity) {
        $form = $this->createForm(new TbCartType(), $entity, array(
            'action' => $this->generateUrl('tb_cart_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing TbCart entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $this->checkHasShop($request);
        $session = new Session();
        $em = $this->getDoctrine()->getManager();

       
        $entity = new TbCart();
        $entity = $em->getRepository('MsoftRCSystemBundle:TbCart')->find($id);
        $quant = $entity->getQuantity();
        
        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbCart entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
                //qtd anterior maior --> reposicao de estoque
                if($quant >= $entity->getQuantity()){
                    
                    $prod = $entity->getIdProduct();
                    $prod->setQuantity($prod->getQuantity() + ($quant- $entity->getQuantity()));
                    $prod = HistoryUtil::setUpdated($prod);
                    $entity = HistoryUtil::setUpdated($entity);
                    $em->persist($entity);
                    $em->persist($prod);                    
                    $session->set('message', 'produto reposto com sucesso');
                }else{
                    //qtd maior do que anterior
                    $diff =  $entity->getQuantity() - $quant;
                    $entity->setQuantity($diff);
                    if($entity->haveStock()){
                        $session->set('message', 'Aumentado com sucesso');
                        $entity->setQuantity($quant+$diff);
                        $prod = $entity->getIdProduct();
                        $prod->setQuantity($prod->getQuantity() - $diff);
                        $prod = HistoryUtil::setUpdated($prod);
                        $entity = HistoryUtil::setUpdated($entity);
                        $em->persist($entity);
                        $em->persist($prod);                        
                    }else{
                        $session->set('error', 'Nao ha estoque suficiente');
                        return $this->listAction($request);
                    }           
                }
            
            
                 $em->flush();
                                  


        return $this->listAction($request);
        }

        return $this->render('MsoftRCSystemBundle:TbCart:edit.html.twig', array(
                    'entity' => $entity,
                    'form' => $editForm->createView(),
        ));
    }

    /**
     * Deletes a TbCart entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $this->checkHasShop($request);
        $entity = new TbCart();
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('MsoftRCSystemBundle:TbCart')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbCart entity.');
        }

        $prod = $entity->getIdProduct();
        $prod->setQuantity($prod->getQuantity() + $entity->getQuantity());

        $em->remove($entity);
        $em->persist($prod);

        $em->flush();


        return $this->listAction($request);
    }

     public function checkHasShop(Request $request){
         if(!$request->getSession()->has('actual_IdShop')){
            $request->getSession()->set('error', 'Voce deve iniciar uma compra!');
            return $this->redirect($this->generateUrl('pdv'));
        }
    }
    
    public function delete($em,$entity){
        $session = new Session();
         if(!$session->has('actual_IdShop')){
            $session->set('error', 'Voce deve iniciar uma compra!');
            return $this->redirect($this->generateUrl('pdv'));
        }


        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbCart entity.');
        }

        $prod = $entity->getIdProduct();
        $prod->setQuantity($prod->getQuantity() + $entity->getQuantity());

        $em->remove($entity);
        $em->persist($prod);
//        $em->flush();
    }
}
