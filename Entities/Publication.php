<?PHP
class Publication{
	private $id_pub;
    private $description;
	private $image;
	private $titre;
	private $nb_vue;


	private $id_user;
	function __construct($id_pub,$description,$image,$id_user,$titre,$nb_vue){

		$this->id_pub=$id_pub;
        $this->description=$description;
        $this->image=$image;
        $this->titre=$titre;
        $this->nb_vue=$nb_vue;

		$this->id_user=$id_user;
	}
	function getId_pub(){
		return $this->id_pub;
    }
    function getDescription(){
		return $this->description;
	}
	function getImage(){
		return $this->image;
	}
	function getId_user(){
		return $this->id_user;
	}
	function getNb_vue(){
		return $this->nb_vue;
	}
	function getTitre(){
		return $this->titre;
	}
	function setId_pub($id_pub){
		$this->id_pub=$id_pub;
	}
	function setDescription($description){
		$this->description=$description;
    }
    function setImage($image){
		$this->image=$image;
	}
		function setId_user($id_user){
		$this->id_user=$id_user;
	}
	function setNb_vue($nb_vue){
		$this->nb_vue=$nb_vue;
	}
		function setTitre($titre){
		$this->titre=$titre;
	}
}
?>