<?PHP
include_once "../config.php";
class UserC{
    
    
    function ajouterUser($user){
		$sql="insert into user (nom,prenom,email,password,confirm_password,role) values (:nom,:prenom,:email,:password,:confirm_password,'client')";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
  
        $nom = $user->getNom();
        $prenom = $user->getPrenom();
       
        $email = $user->getEmail();
        $password = $user->getPassword();
        $confirm_password = $user->getConfirm_password();
        
		$req->bindValue(':nom',$nom);
		$req->bindValue(':prenom',$prenom);
		
		$req->bindValue(':email',$email);
		$req->bindValue(':password',$password);
        $req->bindValue(':confirm_password',$confirm_password);
		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
		
    }
    function afficherUsers(){
        $sortBy = (isset($_POST['sortBy']) ? $_POST['sortBy'] : NULL);
		$sql="SElECT * From user";
        if($sortBy != NULL)
        {
            $sql.=" ORDER BY ".$sortBy;
        }
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }
    public function Logedin($username,$password)
	{
		$sql="SELECT * from user where email='$username' and password='$password'";
		$db = config::getConnexion();
	
        try{
            $liste=$db->query($sql);
            return $liste;
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }	
		
	}
    
    function recupererUser($id_user){
		$sql="SELECT * from user where id_user=$id_user";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
    
    //
   
}
?>
