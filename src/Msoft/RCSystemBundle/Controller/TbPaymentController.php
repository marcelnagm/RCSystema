<?php

namespace Msoft\RCSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Msoft\RCSystemBundle\Entity\TbPayment;
use Msoft\RCSystemBundle\Form\TbPaymentFilterType;

/**
 * TbPayment controller.
 *
 */
class TbPaymentController extends Controller {

    /**
     * Lists all TbPayment entities.
     *
     */
    public function printAction(Request $request) {
        return $this->forward('MsoftRCSystemBundle:TbPayment:index', array('print' => true));
    }

    /**
     * Lists all TbPayment entities.
     *
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        if ($request->getSession()->get('filter_tb_payment') == null) {
            $entities = $em->getRepository('MsoftRCSystemBundle:TbPayment')->findAll();
        } else
            $entities = $em->getRepository('MsoftRCSystemBundle:TbPayment')->findBy($request->getSession()->get('filter_tb_payment'));


        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $entities, $this->get('request')->query->get('page', 1)/* page number */, 3/* limit per page */
        );

        $form = $this->getFilterForm($request);

        $print = $request->get('print');
        if ($print) {
            $template = 'MsoftRCSystemBundle:TbPayment:print.html.twig';
            $data = array(
                    'pagination' => $entities);
        } else {
            $template = 'MsoftRCSystemBundle:TbPayment:index.html.twig';
            $data = array(
                    'pagination' => $pagination,
                    'form' => $form->createView());
        }

        return $this->render($template, $data        );
    }

    /**
     * Finds and displays a TbPayment entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('MsoftRCSystemBundle:TbPayment')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find TbPayment entity.');
        }

        return $this->render('MsoftRCSystemBundle:TbPayment:show.html.twig', array(
                    'entity' => $entity,
        ));
    }

    public function indexFilterAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $form = $this->getFilterForm($request);
        $form->handleRequest($request);
        $session = $request->getSession();
        $criteria = array();
        if ($form->isValid()) {


            if ($form->get('idMethod')->getData() != null) {
                $criteria['idMethod'] = $form->get('idMethod')->getData();
            }
            if ($form->get('idClient')->getData() != NULL) {
                $criteria['idClient'] = $form->get('idClient')->getData();
            }

            $request->getSession()->set('filter_tb_payment', $criteria);
            return $this->indexAction($request);
            $request->getSession()->set('filter_tb_payment', null);
        }
        $request->getSession()->set('filter_tb_payment', $criteria);
        return $this->indexAction($request);
        $request->getSession()->set('filter_tb_payment', null);
    }

    private function getFilterForm(Request $request) {
        $data = $request->getSession()->get('filter_tb_payment');
        $em = $this->getDoctrine()->getManager();
        $form = $this->createForm(new TbPaymentFilterType(), null, array(
            'action' => $this->generateUrl('tb_payment_filter'),
            'method' => 'POST',
        ));
        $form->add('submit', 'submit', array('label' => 'Filter'));
        if ($data != null) {
            if (array_key_exists('idClient', $data)) {
                $form->get('idClient')->setData($em->getReference('MsoftRCSystemBundle:TbClient', $data['idClient']));
            }
            if (array_key_exists('idMethod', $data)) {
                $form->get('idMethod')->setData($em->getReference('MsoftRCSystemBundle:TbMethodPayment', $data['idMethod']));
            }
        }
        return $form;
    }

}
