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
	<title>Page 1</title>
</head>
<body>
	<h1>Identification</h1>

	<?php require 'function.php'; ?>


	<form method="post" action="page1.php">

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
			<input id="Send" type="submit" value="Envoyer le formulaire">

		</form>

	</body>
	</html>