<?php
	define("DOSSIER_RACINE", "Projet-Session_Young-Tir/");
	include_once("modele/DAO/UtilisateurDAO.class.php");
	session_start();

	if(ISSET($_POST['nom_utilisateur']) AND ISSET($_POST['mot_passe'])) {

		$unUtilisateur=UtilisateurDAO::chercher($_POST['nom_utilisateur']);
		if ($unUtilisateur != null) {
			if ($unUtilisateur->verifierMotPasse($_POST['mot_passe'])){
				$_SESSION['utilisateurConnecte']=$_POST['nom_utilisateur'];
				header ("Location: index.php");
			}
		}
	}
	
	elseif(ISSET($_SESSION['utilisateurConnecte'])){
		header ("Location: index.php");
	} 
	
	
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<title>Connexion</title>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="css/styleFormulaire.css" />
<link rel="stylesheet" type="text/css" href="css/styleLiens.css" />
</head>
<body >
	<h1>Connexion</h1>
	<form action="" method="post">
		<label for="nom_utilisateur">Nom utilisateur:</label>
		<input type="text" id="nom_utilisateur" name="nom_utilisateur" />
		<label for="mot_passe">Mot de passe :</label>
		<input type="text" id="mot_passe" name="mot_passe" />
		<input type="submit" value="Se connecter" />
	</form>
	<h3><a href="index.php">Maison</a></h3>
</body>
</html>