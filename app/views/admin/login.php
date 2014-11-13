<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Painel Administrativo</title>
		<link rel="stylesheet" href="<?php echo site_url();?>/vendor/twitter/bootstrap/dist/css/bootstrap.css">
		<link rel="stylesheet" href="<?php echo site_url();?>/public/css/styles.css">
	</head>
	<body>
		<div id="container">
			<form class="form-horizontal" action="/logar" method="post" accept-charset="utf-8">
			  <div class="form-group">
			    <label for="email" class="col-sm-2 control-label">E-mail</label>
			    <div class="col-sm-4">
			      <input type="email" class="form-control" name="email" placeholder="E-mail">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputPassword3" class="col-sm-2 control-label">Senha</label>
			    <div class="col-sm-4">
			      <input type="password" class="form-control" name="pass" placeholder="Senha">
			    </div>
			  </div>
			  <div class="form-group">
			    <div class="col-sm-offset-2 col-sm-4">
			      <input type="submit" name="logar" class="btn btn-default" value="Logar">
			    </div>
			  </div>
			</form>
			<?php echo isset($erro) ? '<div class="alert-danger"><b>Os seguintes erros foram encontrados:</b><br />'.$erro.'</div>' : ''?>
			</div>
		</div>
	</body>
</html>
