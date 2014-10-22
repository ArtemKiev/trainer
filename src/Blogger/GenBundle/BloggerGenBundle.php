<?php

namespace Blogger\GenBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BloggerGenBundle extends Bundle{
	public function makeMenu(){
		return $this->render('BloggerBlogBundle:Default:index.html.twig');
		//return $this->render('BloggerBlogBundle:Default:index.html.twig', array('name' => $name));
	}
       
}
