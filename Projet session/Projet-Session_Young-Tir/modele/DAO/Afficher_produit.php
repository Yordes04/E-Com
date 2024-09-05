<?php 

$dossierBase = $_SERVER['DOCUMENT_ROOT'].DOSSIER_RACINE;

	include_once($dossierBase.'modele/DAO/produit.php');
	
public function Afficher_produits(){
	return  "[#", $this->code, "]", " ", $this->desc, " @", $this->prix, " (", $this->qte, " en stock)";
}

?>