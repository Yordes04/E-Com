<?php 

$dossierBase = $_SERVER['DOCUMENT_ROOT'].DOSSIER_RACINE;

	include_once($dossierBase.'modele/DAO/produit.php');


public function chercher_produits($valeur){
    if ($this->$valeur==$code || $this->$valeur==$desc ){
        return _toString();
    }
}


?>