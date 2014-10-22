<?php

namespace Blogger\MenuBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BloggerMenuBundle extends Bundle{
    public function makeMenu(){
        $navigation = array(array("href"=>"/","caption"=>"Главная"),array("href"=>"/123","caption"=>"123"));
        return $this->render('BloggerMenuBundle:Default:index.html.twig', array('navigation' => $navigation));
    }
}
