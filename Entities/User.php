<?PHP

class User{

    private $id_user;
    private $nom;
    private $prenom;
    
    private $email;
    private $password;
    private $confirm_password;
    private $role;

    
    function __construct($id_user, $nom, $prenom, $email, $password, $confirm_password,$role)
    {
        $this->id_user = $id_user;
        $this->nom = $nom;
        $this->prenom = $prenom;
     
        $this->email = $email;
        $this->password = $password;
        $this->confirm_password = $confirm_password;
        $this->role = $role;

    }
    
    //Getters
    function getId_user(){
        return $this->id_user;
    }
    function getNom(){
        return $this->nom;
    }
    function getPrenom(){
        return $this->prenom;
    }
  
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
    function getConfirm_password(){
        return $this->confirm_password;
    }
    function getRole(){
        return $this->role;
    }
    //Setters
    function setNom($nom){
        $this->nom = $nom;
    }
    function setPrenom($prenom){
        $this->prenom = $prenom;
    }
   
    
    function setEmail($email){
        $this->email = $email;
    }
    function setPassword($password){
        $this->password = $password;
    }
    function setConfirm_password($confirm_password){
        $this->confirm_password = $confirm_password;
    }
    function setRole($role){
        $this->role = $role;
    }
   
}
?>
