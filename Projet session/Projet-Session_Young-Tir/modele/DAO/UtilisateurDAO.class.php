<?php
	$dossierBase = $_SERVER['DOCUMENT_ROOT'].DOSSIER_RACINE;
	
	include_once($dossierBase."modele/DAO/DAO.interface.php");
	include_once($dossierBase."modele/utilisateur.class.php");

	class UtilisateurDAO implements DAO {	
		
		public static function chercher($cles) { 
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			
			$leUtilisateur=null; 
				
			$requete= $connexion->prepare("SELECT * FROM utilisateur WHERE nom=:leNom");
			
			$requete->bindParam(":leNom",$cles);  
		  
			$requete->execute();			
			
			if ($requete->rowCount() > 0) {
				$enregistrement=$requete->fetch();
				$leUtilisateur=new Utilisateur($enregistrement['nom'], $enregistrement['mot_passe']);
			}
			
			$requete-> closeCursor();
			ConnexionDB::close();	
		  
			return $leUtilisateur;	 
		} 
		
		static public function chercherTous() { 
			return self::chercherAvecFiltre("");
		} 
		
		static public function chercherAvecFiltre($filtre){ 
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			
			$liste = array(); 
					
			$requete= $connexion->prepare("SELECT * FROM utilisateur ".$filtre);

			$requete-> execute();			

			foreach ($requete as $enregistrement) {
				$leUtilisateur=new Utilisateur($enregistrement['nom'], $enregistrement['mot_passe']);
				array_push($liste, $leUtilisateur);
			}
			
			$requete-> closeCursor();
			ConnexionDB::close();	
			
			return $liste;	 
		} 

		static function inserer($unUtilisateur){ 
			
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			$commandeSQL  = "INSERT INTO Utilisateur (nom,mot_passe)";  
			$commandeSQL .=  "VALUES (?,?)";
			
			$requete = $connexion->prepare($commandeSQL);

			$tab = [$unUtilisateur->getNomUtilisateur(), $unUtilisateur->getMotPasse()];
			return	$requete-> execute($tab);
		}

		static public function modifier($unUtilisateur) {
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			$commandeSQL = "UPDATE utilisateur SET nom=?, mot_passe=?";
			$requete = $connexion->prepare($commandeSQL);
			$tab = [$unUtilisateur->getNomUtilisateur(), $unUtilisateur->getMotPasse()];
			return	$requete-> execute($tab);
		}
		
		static public function supprimer($unUtilisateur){
			try {
				$connexion=ConnexionDB::getInstance();
			} catch (Exception $e) {
				throw new Exception("Impossible d’obtenir la connexion à la BD."); 
			}
			$commandeSQL = "DELETE FROM utilisateur WHERE nom=?";
			$requete = $connexion->prepare($commandeSQL);
			return	$requete-> execute([$unUtilisateur->getNomUtilisateur()]);
		} 
		
		
		
	}
	
?>