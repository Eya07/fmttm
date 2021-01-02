<?php
 

 class Combinaison  {
	private $id_combinaison;
	private $id_user;
	private $photo;
	private $date_dajout;
	private $quantite;
	private $dimension;
	private $prix;
	private $commande;




	function __construct($id_combinaison,$id_user,$photo,$date_dajout,$quantite,$dimension,$prix,$commande){
		$this->id_combinaison=$id_combinaison;
		$this->id_user=$id_user;
		$this->photo=$photo;
		$this->quantite=$quantite;
		$this->dimension=$dimension;
		$this->prix=$prix;
		$this->date_dajout=$date_dajout;
		$this->commande=$commande;


	}
	
         

	

    function getId_combinaison(){
		return $this->id_combinaison;
	}
	function getId_user(){
		return $this->id_user;
	}
	function getPhoto(){
		return $this->photo;
	}
	function getDimension(){
		return $this->dimension;
	}
	function getQuantite(){
		return $this->quantite;
	}
	
	function getDate_dajout(){
		return $this->date_dajout;
	}
	function getPrix(){
		return $this->prix;
	}
	function getCommande(){
		return $this->commande;
	}
	
	function setId_combinaison($id_combinaison){
		$this->id_combinaison=$id_combinaison;
	}
	function setId_user($id_user){
		$this->id_user=$id_user;
	}
	function setPhoto($photo){
		$this->photo=$photo;
	}
	function setDimension($dimension){
		$this->dimension=$dimension;
	}
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}

	function setDate_dajout($date_dajout){
		$this->date_dajout=$date_dajout;
	}
	function setPrix($prix){
		$this->prix=$prix;
	}
	function setCommande($commande){
		$this->commande=$commande;
	}
}

?>