<?php

$app->get('/painel', function() use($app)
{
	
	\app\traits\login::estaLogado('administrador_logado',$app);
	
	$view = $app->view();
	$view->setTemplatesDirectory(TEMPLATE_ADMIN);
	
	
	$dados = array(
		'pagina' => 'painel',
		'nome'   => $_SESSION['administrador_nome']
	);
	
	$app->render('layout.php',$dados);
	
});
