<?PHP
require_once "../config.php";


class CommentaireC {

	function AjouterCom($pub){
        $sql="insert into commentaires (description,id_pub,id_user) values (:description,:id_pub,:id_user)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id_user=$pub->getid_user();
        $description=$pub->getDescription();
        $id_pub=$pub->getId_pub();

		$req->bindValue(':id_user',$id_user);
        $req->bindValue(':description',$description);
        $req->bindValue(':id_pub',$id_pub);

        $req->execute();
           }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function supprimerCom($id_com){
		$sql="DELETE FROM commentaires where id_com= $id_com";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
        
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}/***/
    function AfficherCom($id_pub){
		$sql="SELECT * from commentaires where id_pub= $id_pub";
		$db = config::getConnexion();
		try{
        $liste=$db->query($sql);
       return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function RecupererPub($id_pub){
		$sql="SELECT * from commentaires where id_pub=$id_pub ";
		$db = config::getConnexion();
		try{
        $liste=$db->query($sql);
       return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    
    function NombreCom($id_pub){
		$sql="SELECT * from commentaires where id_pub=$id_pub ";
		$db = config::getConnexion();
		try{
        $liste=$db->query($sql);
        $num_of_rows = $liste->rowCount() ;
        return $num_of_rows;
    }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
}

?>