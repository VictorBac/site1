<?php

namespace test1\page1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('test1page1Bundle:Default:index.html.twig', array('name' => $name));
    }
}
