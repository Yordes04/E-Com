<?php 
$dossierBase = $_SERVER['DOCUMENT_ROOT'].DOSSIER_RACINE;
	include_once($dossierBase.'modele/DAO/produit.php');

public function Supprimer_produit($produit_supprimer){
    if (method_exists($produit_supprimer,'_construct')){
		unset($produit_supprimer);
	}
}


?>