<?php

// src/Sdz/BlogBundle/Controller/BlogController.php

namespace test1\Page1Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class Page1Controller extends Controller
{
  public function indexAction()
  {
	return $this->render('test1page1Bundle:test1:index.html.twig');    
	//NomDuBundle:NomDuContrôleur:NomDeLAction.
	//return new Response("Hello World ! \n Heyyyy !");
  }
}
