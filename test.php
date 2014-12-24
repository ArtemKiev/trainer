<?php
include_once '/vendor/autoload.php';
include_once '/src/App.php';
$html = [
	'testVar' => '123'
];	
echo App::get()->getContainer()->get('twig')->render('test.html.twig', $html);
?>
