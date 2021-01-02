<?php
 class Média extends Produit {
        
            function_construct($id_produit,$type,$date_dajout,$quantité){
            parent::_construct($id_produit,$type,$date_dajout,$quantité)
		$this->id_combinaison=$id_combinaison;
		$this->taille=$taille;
		$this->checkbox=$checkbox;
        $this->couleur=$couleur;
        $this->quantité=$quantité;
        $this->prix=$prix;

	}
	
	function getId_combinaison(){
		return $this->Id_combinaison;
	}
	function getTaille(){
		return $this->taille;
	}
	function getCheckbox(){
		return $this->checkbox;
	}
	function getCouleur(){
		return $this->couleur;
	}
	
	function setId_combinaison($id_combinaison){
		$this->id_combinaison=$id_combinaison;
	}
	function setTaille($taille){
		$this->taillee=$taille;
	}
	function setCheckbox($checkbox){
		$this->checkbox=$checkbox;
	}
	function setCouleur($couleur){
		$this->couleur=$couleur;
	}
	
}

?>