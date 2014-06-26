<?php
// src/Acme/UserBundle/Controller/PageController.php

namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class PageController extends Controller
{
    public function indexAction()
    {
        return $this->render('AcmeUserBundle:Page:index.html.twig');
    }
}