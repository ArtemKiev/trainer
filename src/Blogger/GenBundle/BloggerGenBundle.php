<?php

namespace Blogger\GenBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class BloggerGenBundle extends Bundle{
<<<<<<< HEAD
	public function indexAction($name){
		return $this->render('BloggerBlogBundle:Default:index.html.twig', array('name' => $name));
=======
	public function makeMenu(){
		return $this->render('BloggerBlogBundle:Default:index.html.twig');
		//return $this->render('BloggerBlogBundle:Default:index.html.twig', array('name' => $name));
>>>>>>> 187c66b7709525b773b1b0c18b9db5e6507c8389
	}
       
}
