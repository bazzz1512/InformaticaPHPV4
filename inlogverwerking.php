<?php
session_start();
 if (!isset($_SESSION['ingelogd'])) {
    $_SESSION['ingelogd'] = false;
	}
    if (isset($_POST['wachtwoord'])) {
    $sWachtwoord = $_POST['wachtwoord'];
	}

if (isset($_POST['gebruikersnaam'])) {
    $sGebruikersnaam = $_POST['gebruikersnaam'];
}
//	$_SESSION['gebruikersnaam']= $_POST['gebruikersnaam'];
//	$_SESSION['wachtwoord']= $_POST['wachtwoord'];
	if($sWachtwoord == 'informatica')
		{
			$_SESSION['ingelogd']= true;
			header ('Location: inde.php');	
			
		}
		else
		{
			header ('Location: inlog.php');
			$_SESSION['ingelogd']= false;
		}

?>

