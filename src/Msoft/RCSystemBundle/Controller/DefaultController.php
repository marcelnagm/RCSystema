<?php

namespace Msoft\RCSystemBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller
{
    public function indexAction()
    {
        ;
        $user = new \Msoft\RCSystemBundle\Entity\TbUser();
                
        $session = new Session();
        $session->set('user', $this->getUser());
        return $this->render('MsoftRCSystemBundle:Default:index.html.twig', array('name' => $user));
    }
}
