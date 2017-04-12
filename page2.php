<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header('Location: index.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Page 2</title>
</head>
<body>

	<h1 class="title">Page 2</h1>
	<br>
	<div class="identification">
		<h3>
			<?php 
			echo "<span> Bonjour ".$_SESSION['login']."</span>";
			?>
		</h3>
		<div class="swap">
			<a href="page3.php">Go to Page 3</a>
		</div>
		<form method="post" action="LogOut.php">
			<div class="Send">
				<input id="Send" type="submit" value="Se Déconnecter">
			</div>
		</form>
	</div>
</body>
</html>