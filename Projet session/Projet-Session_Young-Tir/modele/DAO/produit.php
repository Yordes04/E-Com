<?php


class Produit{
    private $code;
	private $description;
	private $urlPhoto;
	private $prix;
	private $quantite;

	public function _construct($code, $desc,$url,$prix,$qte=0){
		$this->code=$code;
		$this->desc=$description;
		$this->url=$urlPhoto;
		$this->prix=$prix;
		$this->qte=$quantite;

}
public function get_code(){return $this->$code;}
public function get_description(){return $this->$desc;}
public function get_url(){return $this->$url;}
public function get_prix(){return $this->$prix;}
public function get_quantite(){return $this->$qte;}

public function set_description($valeur){$this->$desc=$valeur;}
public function set_UrlPhoto($valeur){$this->$url=$valeur;}
public function set_Prix($valeur){$this->$prix=$valeur;}
public function ajouterAuStock($quantiteAjoutee){return $this->$qte=$this->$qte+$quantiteAjoutee;}
	public function enleverDuStock($quantiteEnlevee){
		if ($this->$qte>$quantiteEnlevee){
	return $this->$qte=$this->$qte-$quantiteEnlevee;}}	
public function changerPrixPct($pourcentage){return $this->$prix=$this->$prix*($pourcentage/100);}

public function _toString(){
    return  "[#", $this->code, "]", " ", $this->desc, " @", $this->prix, " (", $this->qte, " en stock)";
}
}
?>