<?php
 

 class Produit  {
	private $id_produit;
	private $nom;
	private $photo;
	private $date_dajout;
	private $quantite;
	private $prix;
	private $nb_like;
	private $nb_dislike;



	function __construct($id_produit,$nom,$photo,$date_dajout,$quantite,$prix,$nb_like,$nb_dislike){
		$this->id_produit=$id_produit;
		$this->photo=$photo;
		$this->nom=$nom;
		$this->quantite=$quantite;
		$this->prix=$prix;
		$this->date_dajout=$date_dajout;
		$this->nb_like=$nb_like;
		$this->nb_dislike=$nb_dislike;


	}
	
         

	

    function getId_produit(){
		return $this->id_produit;
	}
	function getNom(){
		return $this->nom;
	}
	function getPhoto(){
		return $this->photo;
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

	function getNb_like(){
		return $this->nb_like;
	}
	function getNb_dislike(){
		return $this->nb_dislike;
	}

	function setId_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	function setNom($nom){
		$this->nom=$nom;
	}
	function setPhoto($photo){
		$this->photo=$photo;
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
	function setNb_like($nb_like){
		$this->nb_like=$nb_like;
	}
	function setNb_dislike($nb_dislike){
		$this->nb_dislike=$nb_dislike;
	}
}

?>