<?php
session_start();
if (isset($_POST['login'])) {
	$_SESSION['login'] = $_POST['login'];
	$_SESSION['password'] = $_POST['password'];
}
	
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Page 1</title>

</head>
<body>
	<h1 class="title">Identification</h1>

<div class="identification">
	<div class="element error"><?php require 'function.php'; ?></div>
	<form method="post" action="index.php">
			<br>
		<div class="element">
			<label for="e1" >Login : </label>
			<span><input id="e1" type="text" size="25" name="login"
				value="<?php NameSave('login') ?>"></span>
			</div>
				<br>
			<div class="element">
				<label for="e2" >Mot de passe : </label>
				<span><input id="e2" type="password" size="25" name="password"></span>
			</div>
				<br>
			<div class="Send">
				<input id="Send" type="submit" value="Se Connecter">
			</div>
				<br>
		</form>
</div>
	</body>
	</html>