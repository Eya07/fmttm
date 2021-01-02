<?PHP
class Commentaire{
	private $id_com;
    private $description;
	private $id_pub;
	private $id_user;


	function __construct($id_com,$description,$id_pub,$id_user){

		$this->id_pub=$id_pub;
        $this->description=$description;
        $this->id_com=$id_com;
       
		$this->id_user=$id_user;
	}
	function getId_pub(){
		return $this->id_pub;
    }
    function getDescription(){
		return $this->description;
	}
	function getId_com(){
		return $this->id_com;
	}
	function getId_user(){
		return $this->id_user;
	}
	
	function setId_pub($id_pub){
		$this->id_pub=$id_pub;
	}
	function setDescription($description){
		$this->description=$description;
    }
    function setId_com($id_com){
		$this->id_com=$id_com;
	}
		function setId_user($id_user){
		$this->id_user=$id_user;
	}
	
}
?>