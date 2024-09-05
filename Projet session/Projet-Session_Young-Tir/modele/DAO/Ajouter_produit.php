<?php 

$dossierBase = $_SERVER['DOCUMENT_ROOT'].DOSSIER_RACINE;

	include_once($dossierBase.'modele/DAO/produit.php');

public function Ajouter_produit($n_code,$_desc,$n_url,$n_prix,$n_qte=0){ 
	$n_produit = new Produit($n_code,$_desc,$n_url,$n_prix,$n_qte=0);
    if (method_exists($n_produit,'_construct')){
		echo 'Le produit existe deja';
	}else {
		$n_produit = new Produit($n_code,$_desc,$n_url,$n_prix,$n_qte=0);
	}
}


?>