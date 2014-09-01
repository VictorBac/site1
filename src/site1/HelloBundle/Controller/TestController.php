<?php

namespace site1\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
    public function indexAction(){
    	return $this->render("HelloBundle:Test:index.html.twig");
    }
}
