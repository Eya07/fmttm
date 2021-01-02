<?PHP
class Produit{
	private $id_produit;
    private $type;
	private $date_dajout;
	private $quantité;
	function __construct($id_produit,$type,$prix,$date_dajout,$quantité){
		$this->id_produit=$id_produit;
		$this->type=$type;
		$this->prix=$prix;
        $this->quantité=$quantité;

	}
	
	function getId_produit(){
		return $this->id_produit;
	}
	function getType(){
		return $this->type;
	}
	function getDate_dajout(){
		return $this->date_dajout;
	}
	function getQuantité(){
		return $this->quantité;
	}
	
	function setId_produits($id_produit){
		$this->id_produit=$id_produit;
	}
	function setType($type){
		$this->type=$type;
	}
	function setDate_dajout($date_dajout){
		$this->date_dajout=$date_dajout;
	}
	function setQuantité($quantité){
		$this->quantité=$quantité;
    }
   
	
}

?>