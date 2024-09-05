<?php
	
	session_start();
    
	$nomUtilisateur = "young";


	if(!ISSET($_SESSION['utilisateurConnecte'])){
		header ("Location: Connexion.php");
	} 
	

	$nomUtilisateur = $_SESSION['utilisateurConnecte'];
	unset($_SESSION['utilisateurConnecte']);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Déconnexion</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/styleFormulaire.css" />
<link rel="stylesheet" type="text/css" href="css/styleLiens.css" />
</head>
<body >
	<h1> <?php  echo $nomUtilisateur;?> : Vous êtes maintenant déconnecté</h1>
	<h3><a href="Connexion.php">Se connecter</a></h3>
</body>
</html>