 <?php
 

 class Media  {
	private $id_media;
	private $id_user;
	private $type;
	private $date_dajout;
	private $quantite;
	private $generique;
	private $dimension;
	private $prix;
	private $commande;




	function __construct($id_media,$id_user,$type,$date_dajout,$quantite,$generique,$dimension,$prix,$commande){
		$this->id_media=$id_media;
		$this->id_user=$id_user;
		$this->type=$type;
		$this->quantite=$quantite;
		$this->generique=$generique;
		$this->dimension=$dimension;
		$this->prix=$prix;
		$this->date_dajout=$date_dajout;
		$this->commande=$commande;


	}
	
         

	

function getId_media(){
		return $this->Id_media;
	}
	function getId_user(){
		return $this->id_user;
	}
	function getGenerique(){
		return $this->generique;
	}
	function getDimension(){
		return $this->dimension;
	}
	function getQuantite(){
		return $this->quantite;
	}
	function getType(){
		return $this->type;
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
	
	function setId_media($id_media){
		$this->id_media=$id_media;
	}
	function setId_user($id_user){
		$this->id_user=$id_user;
	}
	function setGenerique($generique){
		$this->generique=$generique;
	}
	function setDimension($dimension){
		$this->dimension=$dimension;
	}
	function setQuantite($quantite){
		$this->quantite=$quantite;
	}
	function setType($type){
		$this->type=$type;
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