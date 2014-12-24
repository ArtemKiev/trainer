<?php

namespace Blogger\GenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction(){
      
        return $this->render('BloggerGenBundle:Default:index.html.twig', array('menu' => 'fgh'));
        //return $this->render('BloggerGenBundle:Default:index.html.twig', array('name' => $name));
    }
}
