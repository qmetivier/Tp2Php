<?php 
$_SESSION['erreur'] = 0;

if (!empty($_POST)) {

	if (isset($_POST['login'])) {
		if ($_POST['login'] != 'admin') {
			$_SESSION['erreur'] = 1;
		}
	}
	if (isset($_POST['password'])) {
		if ($_POST['password'] != 'admin') {
			$_SESSION['erreur'] = 1;
		}
	}

	if($_SESSION['erreur'] == 0){
		header('Location: page2.php');
	}else{echo 'Authentification invalide';}

}

function NameSave($elementName)
{
	if (isset($_POST[$elementName])) {
		echo htmlentities($_POST[$elementName]);
	}
}




?>