<?php

namespace Blogger\GenBundle\Controller;

use Blogger\MenuBundle\BloggerMenuBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction(){
        $menu = new BloggerMenuBundle();
        $menuBlock = $menu->makeMenu();

        return $this->render('BloggerGenBundle:Default:index.html.twig', array('menu' => $menuBlock));
        //return $this->render('BloggerGenBundle:Default:index.html.twig', array('name' => $name));
    }
}
