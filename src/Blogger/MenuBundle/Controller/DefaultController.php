<?php

namespace Blogger\MenuBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function makeMenu(){
        $navigation = array("navigation"=>array(array("href"=>"/","caption"=>"Главная"),array("href"=>"/123","caption"=>"123")));
        return $this->render('BloggerMenuBundle:Default:index.html.twig', array('navigation' => $navigation));
    }
}
