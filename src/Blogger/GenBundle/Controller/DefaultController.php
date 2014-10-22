<?php

namespace Blogger\GenBundle\Controller;

<<<<<<< HEAD
=======
use Blogger\MenuBundle\BloggerMenuBundle;
>>>>>>> 187c66b7709525b773b1b0c18b9db5e6507c8389
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
<<<<<<< HEAD
    public function indexAction($name)
    {
        return $this->render('BloggerGenBundle:Default:index.html.twig', array('name' => $name));
=======
    public function indexAction(){
        $menu = new BloggerMenuBundle();
        $menuBlock = $menu->makeMenu();

        return $this->render('BloggerGenBundle:Default:index.html.twig', array('menu' => $menuBlock));
        //return $this->render('BloggerGenBundle:Default:index.html.twig', array('name' => $name));
>>>>>>> 187c66b7709525b773b1b0c18b9db5e6507c8389
    }
}
