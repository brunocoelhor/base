<?php

$app->get('/', function() use($app,$twig)
{
    
    $dados = array(

	);

	$template = $twig->loadTemplate('home.html');
	$template->display($dados);

});