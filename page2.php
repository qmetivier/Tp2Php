<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Page 2</title>
</head>
<body>
	<?php if (!isset($_SESSION['login'])) {
		header('Location: page1.php');
	}
	?>

	<h1>Page 2</h1>
	<br>
	<?php 
	echo "<span> Login : ".$_SESSION['login']."</span>"."<span> Mdp : ".$_SESSION['login']."</span>";
	?>
	<form method="post" action="LogOut.php">
		<input id="Send" type="submit" value="Deconnection">
	</form>
</body>
</html>