<?php
// src/Acme/UserBundle/Controller/UsersAdminController.php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersAdminController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeUserBundle:Users:index.html.twig');
    }
}