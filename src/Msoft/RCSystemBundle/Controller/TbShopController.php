<?php

namespace Msoft\RCSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


use Msoft\RCSystemBundle\Entity\TbShop;
use Msoft\RCSystemBundle\Form\TbShopType;

/**
 * TbShop controller.
 *
 */
class TbShopController extends Controller {

    /**
     * Lists all TbShop entities.
     *
     */
    public function indexClientAction(Request $request) {
        $entity = new TbShop();
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new TbShopType(), $entity, array(
            'action' => $this->generateUrl('tb_shop_client'),
            'method' => 'POST'
        ));
        
        $form->add('submit', 'submit', array('label' => 'Create'));
          

        if ($request->getMethod() == 'POST') {

            $form->handleRequest($request);

            if ($form->isValid()) {


                $criteria = array('idClient' => $form->get('idClient')->getData() );
                $entities = $em->getRepository('MsoftRCSystemBundle:TbShop')->findBy($criteria);
               

                return $this->render('MsoftRCSystemBundle:TbShop:indexClient.html.twig', array(
                            'entities' => $entities,
                ));
            }
        }
          return $this->render('MsoftRCSystemBundle:TbShop:indexClient.html.twig', array(
                        'form' => $form->createView(),
            ));
    }

    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('MsoftRCSystemBundle:TbShop')->findAll();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $entities, $this->get('request')->query->get('page', 1)/* page number */, 3/* limit per page */
        );

        return $this->render('MsoftRCSystemBundle:TbShop:index.html.twig', array(
                    'pagination' => $pagination,
        ));
    }

    /**
     * Finds and displays a TbShop entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

//        $entity = TbShop();
        $entity = $em->getRepository('MsoftRCSystemBundle:TbShop')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbShop entity.');
        }

        $criteira = array('idShop' => $entity->getId());
        $payments = $em->getRepository('MsoftRCSystemBundle:TbPayment')->findBy($criteira);

//        $criteira = array('idShop' => $entity->getId());        
        $products = $em->getRepository('MsoftRCSystemBundle:TbCart')->findBy($criteira);

        return $this->render('MsoftRCSystemBundle:TbShop:show.html.twig', array(
                    'entity' => $entity,
                    'payments' => $payments,
                    'products' => $products
        ));
    }

}
