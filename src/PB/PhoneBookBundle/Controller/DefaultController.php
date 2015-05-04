<?php

namespace PB\PhoneBookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function mainAction()
    {
        return $this->render('PBPhoneBookBundle:Default:main.html.twig');
    }

    public function indexAction()
    {
        return $this->render('PBPhoneBookBundle:Default:index.html.twig');
    }
}
