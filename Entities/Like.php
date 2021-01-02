<?PHP
class Like{
    private $id_like;
    private $id_produit;
    private $id_user;

	
	function __construct($id_like,$id_produit,$id_user){
		$this->id_produit=$id_produit;
		$this->id_user=$id_user;
        $this->id_like=$id_like;

	}
	function getid_like(){
		return $this->id_like;
	}
	function getid_produit(){
		return $this->id_produit;
	}
	
	function getid_user(){
		return $this->id_user;
	}
 
	function setid_like($id_like){
		$this->id_like;
	}
	function setid_produit($id_produit){
		$this->id_produit=$id_produit;
	}
	
	function setid_user($id_user){
		$this->id_user=$id_user;
	}
	
}

?>