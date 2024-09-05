<?php

class Utilisateur {
	
	private $nomUtilisateur;
	private $motPasse;

	public function __construct($nomUtilisateur,$motPasse){
		$this->nomUtilisateur=$nomUtilisateur;
		$this->motPasse=$motPasse;
	}
	
	public function getNomUtilisateur() {return $this->nomUtilisateur;}
	public function getMotPasse() {return $this->motPasse;}

	
	public function verifierMotPasse($motAVerifier) { return $this->motPasse == $motAVerifier; }
	
	public function __toString(){
		$message=$this->nomUtilisateur;
		return $message;
	}
}
?>






