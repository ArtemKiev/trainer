<?php

namespace Blogger\GenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BloggerGenBundle:Default:index.html.twig', array('name' => $name));
    }
}
