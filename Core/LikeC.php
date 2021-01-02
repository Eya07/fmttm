<?PHP
require_once "../config.php";


class LikeC {

	function Like($like){
        $sql="insert into like1 (id_user, id_produit) values (:id_user, :id_produit )";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id_user=$like->getid_user();
        $id_produit=$like->getid_produit();
		$req->bindValue(':id_user',$id_user);
        $req->bindValue(':id_produit',$id_produit);
        $req->execute();
           }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function supprimerLike($id_produit,$id_user){
		$sql="DELETE FROM like1 where id_produit= :id_produit and id_user= :id_user";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
        $req->bindValue(':id_produit',$id_produit);
        $req->bindValue(':id_user',$id_user);

		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}/***/
    function verifierLike($id_produit,$id_user){
		$sql="SELECT * from like1 where id_produit=$id_produit and id_user=$id_user";
		$db = config::getConnexion();
		try{
        $liste=$db->query($sql);
        $num_of_rows = $liste->rowCount() ;
        if($num_of_rows!=0)
        return true;
        else 
        return false;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function nombreLike($id_produit){
		$sql="    SELECT *  FROM like1 WHERE id_produit=$id_produit";
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
    function RecupererLike($id_produit){
		$sql="    SELECT *  FROM like1 WHERE id_produit=$id_produit";
		$db = config::getConnexion();
		try{
        $liste=$db->query($sql);
       
        
        return $liste;
       
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }

    
}

?>