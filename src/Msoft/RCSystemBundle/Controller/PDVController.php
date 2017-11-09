<?php

namespace Msoft\RCSystemBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;
use Doctrine\ORM\Query\ResultSetMapping;

use Msoft\RCSystemBundle\Form\TbPaymentType;
use Msoft\RCSystemBundle\Form\TbShopType;
use Msoft\RCSystemBundle\Entity\TbShop;
use Msoft\RCSystemBundle\Entity\TbCart;
use Msoft\RCSystemBundle\Entity\TbPayment;
use Msoft\RCSystemBundle\Entity\HistoryUtil;
use Msoft\RCSystemBundle\Entity\TbInstallment;

class PDVController extends Controller {

    public function indexAction(Request $request) {
        $session = new Session();

        $entity = new TbShop();
        $form = $this->createCreateForm($entity);
        if ($session->has('actual_IdShop')) {
            $session->set('error', 'Compra ja iniciada ');
        }

        return $this->render('MsoftRCSystemBundle:PDV:index.html.twig', array('form' => $form->createView()
        ));
    }

    private function paymentCreateForm(TbPayment $entity) {
        $form = $this->createForm(new TbPaymentType(), $entity, array(
            'action' => $this->generateUrl('pdv_pay_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Select'));

        return $form;
    }

    private function createCreateForm(TbShop $entity) {
        $form = $this->createForm(new TbShopType(), $entity, array(
            'action' => $this->generateUrl('pdv_select_client'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Iniciar nova Compra'));

        return $form;
    }

    public function confirmAction(Request $request) {
        $this->checkHasShop($request);
        $id = $request->getSession()->get('actual_IdShop');
        $em = $this->getDoctrine()->getManager();
        $shop = $em->getRepository('MsoftRCSystemBundle:TbShop')->find($id);
        $shop = HistoryUtil::setDateIn($shop);
        $em->persist($shop);

        $request->getSession()->remove('actual_IdShop');
        $request->getSession()->remove('totalRemain');
        $em->flush();
        return $this->redirect($this->generateUrl('pdv'));
    }

    private function calculateTotal($id) {

        $criteria = array('idShop' => $id);
        $em = $this->getDoctrine()->getManager();
        $carts = $em->getRepository('MsoftRCSystemBundle:TbCart')->findBy($criteria);

        $total = 0;
        $cart = new TbCart();
        foreach ($carts as $cart) {
            $total += $cart->getSubtotal();
        }
        return $total;
    }

    public function deletePaymentAction($id) {
        $this->checkHasShop($request);
        $em = $this->getDoctrine()->getManager();
        $pay = $em->getRepository('MsoftRCSystemBundle:TbPayment')->find($id);

        if (!$pay) {
            throw $this->createNotFoundException('Payment not found');
        }
        $em->getConnection()->exec('delete from tb_installment where id_payment = ' . $id);
        $em->remove($pay);

        $em->flush();
        return $this->redirect($this->generateUrl('pdv_summary'));
    }

    public function createPaymentAction(Request $request) {
        $this->checkHasShop($request);
        $entity = new TbPayment();
        $form = $this->paymentCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $session = new Session();
            if ($entity->getValue() > $session->get('totalRemain')) {
                $session->set('error', 'O valor a ser pago eh menor');
                return $this->redirect($this->generateUrl('pdv_summary'));
            }
            $em = $this->getDoctrine()->getManager();
            $shop = $em->getRepository('MsoftRCSystemBundle:TbShop')->find($id = $request->getSession()->get('actual_IdShop'));
            $entity->setIdShop($shop);
            $entity->setIdClient($shop->getIdClient());
            $entity = HistoryUtil::setDateIn($entity);
            $em->persist($entity);
            $em->flush();


//               $installments_num = 4;
            $installments_num = $form->get('installments')->getData();
            $method = $entity->getIdMethod();
            $client = $entity->getIdClient();
            if ($installments_num > 0) {
                $value = $entity->getValue() / $installments_num;

                $date = explode('/', date('d/m/Y'));





                $dia = $date[0];
                $mes = $date[1];
                $ano = $date[2];
                for ($i = 0; $i <= $installments_num; $i++) {

                    $entityInstallment = new TbInstallment();
                    $entityInstallment->setValuePaid(0);
                    $entityInstallment->setIdPayment($entity);
                    $entityInstallment->setIdClient($client);
                    $mes = $mes + 1;
                    if ($mes > 12) {
                        $mes = 1;
                        // ++$ano;
                        $ano = $ano + 1;
                    }
                    $dueDate = new \DateTime(date("Y/m/d", mktime(0, 0, 0, $mes, $dia, $ano)));
                    $entityInstallment->setDueDate($dueDate);

//                   $dueDate = date('Y/m/d', strtotime('+30 days'));                   

                    $entityInstallment->setValue($value);

                    $entityInstallment->setType($method->getType());
                    $em->persist($entityInstallment);
                }

                $em->flush();
            } else {
                $session->set('error', 'Numero de parcelas invalido');
            }
        }

        return $this->redirect($this->generateUrl('pdv_summary'));
    }

    public function selectPaymentAction(Request $request) {
        $this->checkHasShop($request);
        $session = new Session();
        $entity = new TbPayment();
        $form = $this->paymentCreateForm($entity);


        $id = $request->getSession()->get('actual_IdShop');

        $em = $this->getDoctrine()->getManager();
        $shop = $em->getRepository('MsoftRCSystemBundle:TbShop')->find($id);
        $totalRemain = $session->get('totalRemain');


        return $this->render('MsoftRCSystemBundle:PDV:select_payment.html.twig', array('total' => $shop->getTotal(), 'form' => $form->createView(), 'totalRemain' => $totalRemain));
    }

    public function reviewAction(Request $request) {
        $this->checkHasShop($request);
        $id = $request->getSession()->get('actual_IdShop');


        $em = $this->getDoctrine()->getManager();
        $shop = $em->getRepository('MsoftRCSystemBundle:TbShop')->find($id);
//        if($shop->getTotal()==0){
        $shop->setTotal($this->calculateTotal($id));
        $em->persist($shop);
        $em->flush();
//        }

        $payments = $em->getRepository('MsoftRCSystemBundle:TbPayment')->findBy(array('idShop' => $id));
        $totalPayd = 0;
        foreach ($payments as $payment) {
            $totalPayd += $payment->getValue();
        }
        $session = new Session();

        $totalRemain = $shop->getTotal() - $totalPayd;
        $session->set('totalRemain', $totalRemain);
        return $this->render('MsoftRCSystemBundle:PDV:review.html.twig', array(
                    'shop' => $shop,
                    'entities' => $payments,
                    'totalPayd' => $totalPayd,
                    'totalRemain' => $totalRemain
        ));
    }

    public function selectClientAction(Request $request) {
        $entity = new TbShop();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            $session = $this->getRequest()->getSession();
            if ($request->getSession()->has('actual_IdShop')) {
                $this->deleteShop();
            }
            $session->set('actual_IdShop', $entity->getId());
            return $this->redirect($this->generateUrl('tb_cart', array('id' => $entity->getId())));
        }

        return $this->render('MsoftRCSystemBundle:PDV:index.html.twig', array('form' => $form->createView()
        ));
    }

    public function checkHasShop(Request $request) {
        if (!$request->getSession()->has('actual_IdShop')) {
            $request->getSession()->set('error', 'Voce deve iniciar uma compra!');
            return $this->redirect($this->generateUrl('pdv'));
        }
    }

    public function deleteShop() {
        $session = new Session();
        $em = $this->getDoctrine()->getManager();
        $id = $session->get('actual_IdShop');
        $criteria = array('idShop' => $id);
        $entities = $em->getRepository('MsoftRCSystemBundle:TbCart')->findBy($criteria);
        foreach ($entities as $entity) {
            $this->get('acme.hello.controller')->delete($em, $entity);
        }
                
        $query = $em->getConnection()->executeQuery('select id from tb_payment where id_shop = ' . $id);
        $payments = $query->fetchAll();
        if(count($payments)>0){
        
       
        
        
        $list = '';
        foreach ($payments as $payment){
            $list .= $payment['id'].',';
        }
        $list = substr($list, 0, strlen($list)-1);
        
        $em->getConnection()->exec('delete from tb_installment where id_payment in (' . $list." );");
        $em->getConnection()->exec('delete from tb_payment where id in (' . $list." );");
        $em->flush();
        }
//

    }

}
