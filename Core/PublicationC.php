<?PHP
require_once "../config.php";


class PublicationC {

	function AjouterPub($pub){
        $sql="insert into publication (description,image,id_user,titre,nb_vue) values (:description,:image,:id_user,:titre,0 )";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $id_user=$pub->getid_user();
        $description=$pub->getDescription();
        $image=$pub->getImage();
        $titre=$pub->getTitre();

		$req->bindValue(':id_user',$id_user);
        $req->bindValue(':description',$description);
        $req->bindValue(':image',$image);
        $req->bindValue(':titre',$titre);

        $req->execute();
           }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function supprimerPub($id_pub){
		$sql="DELETE FROM publication where id_pub= $id_pub";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
        
		try{
            $req->execute();
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}/***/
    function AfficherPub1(){
        $sql="SELECT * from publication  ORDER BY `created_at` DESC ";
        $db = config::getConnexion();

		$query = $db->prepare($sql);

    

        // On exécute
        $query->execute();

        // On récupère les valeurs dans un tableau associatif
        $articles = $query->fetchAll(PDO::FETCH_ASSOC);
        return $articles;
    }
    function AfficherPub($q){
        $sql='SELECT * FROM publication WHERE titre LIKE "%'.$q.'%" ORDER BY created_at DESC';
        $db = config::getConnexion();

		$query = $db->prepare($sql);

       

        // On exécute
        $query->execute();

        // On récupère les valeurs dans un tableau associatif
        $articles = $query->fetchAll(PDO::FETCH_ASSOC);
        return $articles;
    }
    function NbPubs(){
        $sql="SELECT * from publication  ";
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
    function RecupererPub($id_pub){
		$sql="SELECT * from publication where id_pub=$id_pub ";
		$db = config::getConnexion();
		try{
        $liste=$db->query($sql);
       return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }
    function modifierNbVues($pub,$id){
		$sql="UPDATE publication SET  nb_vue=:nb_vue WHERE id_pub=$id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
    
        $nb_vue=$pub+1;
         $req->bindValue(':nb_vue',$nb_vue);



            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
        }
		
    }
  
    
    
}

?>