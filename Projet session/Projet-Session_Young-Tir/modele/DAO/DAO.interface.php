<?php
	$dossierBase = $_SERVER['DOCUMENT_ROOT'].DOSSIER_RACINE;

	include_once($dossierBase.'modele/DAO/connexionBD.class.php');
	include_once($dossierBase.'modele/DAO/Supprimer_produit.php');
	include_once($dossierBase.'modele/DAO/Ajouter_produit.php');
	include_once($dossierBase.'modele/DAO/Chercher_produit.php');
	include_once($dossierBase.'modele/DAO/Afficher_produit.php');
	interface DAO {	
	
		static public function chercher($cles); 
		
		static public function chercherTous(); 
	
		static public function chercherAvecFiltre($filtre); 
		
		static public function inserer($unObjet); 
		
		static public function modifier($unObjet);
		
		static public function supprimer($unObjet); 

		static public function Supprimer_produit($unObjet);

		static public function Ajouter_produit($unObjet);

		static public function Chercher_produit($unObjet);

		static public function Afficher_produit($unObjet);
	}
?>