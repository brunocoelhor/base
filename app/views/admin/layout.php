<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Painel Administrativo</title>
		<link rel="stylesheet" href="<?php echo site_url();?>/vendor/twitter/bootstrap/dist/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo site_url();?>/public/css/style_admin.css">
	</head>
	<body>
		<div id="container">
			<div id="conteudo">
				<h2>Bem Vindo <?php echo $nome;  ?></h2>
				<?php require $pagina.'.php';  ?>
			</div>
			</div>
		</div>
		<script type="text/javascript" src="<?php echo site_url();?>/public/js/jquery.js"></script>
	</body>
</html>
