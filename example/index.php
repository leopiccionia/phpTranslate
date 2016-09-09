<!DOCTYPE html>
<?php
	include '../translator.php';
	if($_GET['lang'] == 'pt' || $_GET['lang'] == 'pt-br')
		$lang = new Translator(['pt-br', 'en']);
	else
		$lang = new Translator('en');
	
	$name = $lang->get('anonymous');
	if(!empty($_GET['name']))
		$name = $_GET['name'];
?>
<html>
	<head>
		<meta charset="UTF-8" />
		<title><?= $lang->get('page-title') ?></title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />
	</head>
	<body>
		<h1><?= strtoupper($lang->get('sign-in')) ?></h1>
		<p><?= $lang->get_and_replace('hello-message', ['name' => $name]) ?></p>
		<form class="form-group" method="post">
			<label for="email"><?= $lang->get('email') ?></label>
			<input type="email" class="form-control" id="email" name="email" />
			<label for="password"><?= $lang->get('password') ?></label>
			<input type="password" class="form-control" id="password" name="password" />
			<p><a href="#"><?= $lang->get('sign-up') ?></a></p>
			<p><a href="#"><?= $lang->get('forgot-password') ?></a></p>
			<button class="form-control"><?= $lang->get('submit') ?></button>
		</form>
	</body>
</html>