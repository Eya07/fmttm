<?PHP
class Dislike{
    private $id_dislike;
    private $id_produit;
    private $id_user;

	
	function __construct($id_dislike,$id_produit,$id_user){
		$this->id_produit=$id_produit;
		$this->id_user=$id_user;
        $this->id_dislike=$id_dislike;

	}
	function getid_dislike(){
		return $this->id_dislike;
	}
	function getid_produit(){
		return $this->id_produit;
	}
	
	function getid_user(){
		return $this->id_user;
	}
 
	function setid_dislike($id_dislike){
		$this->id_dislike;
	}
	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	
	function setid_user($id_user){
		$this->id_user=$id_user;
	}
	
}

?>