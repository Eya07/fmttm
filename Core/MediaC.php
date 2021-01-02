<?PHP
require_once "../config.php";
class MediaC {
   
    function afficherMedias(){
		$sql="SElECT * From media";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }	
    function afficherMediasParUser($id_user ,$premier,$parPage){
		$sql="SElECT * From media where id_user=$id_user LIMIT :premier, :parpage;";
        $db = config::getConnexion();

		$query = $db->prepare($sql);

        $query->bindValue(':premier', $premier, PDO::PARAM_INT);
        $query->bindValue(':parpage', $parPage, PDO::PARAM_INT);

        // On exécute
        $query->execute();

        // On récupère les valeurs dans un tableau associatif
        $medias = $query->fetchAll(PDO::FETCH_ASSOC);
        return $medias;
    }
    function NbMedias($id_user){
        $sql="SELECT * from media where id_user=$id_user ";
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
	function ajouterMedia($media){
		$sql="insert into media (id_user,type,date_dajout,quantite,generique,dimension,prix,commande) values (:id_user,:type,:date_dajout, :quantite,:generique,:dimension,:prix,'pas prete')";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $type=$media->getType();
        $date_dajout=date("Y-m-d");
        $quantite=$media->getQuantite();
        $generique=$media->getGenerique();
        $dimension=$media->getDimension();
        $prix=$media->getPrix();
        $id_user=$media->getId_user();

		$req->bindValue(':type',$type);
		$req->bindValue(':date_dajout',$date_dajout);
		$req->bindValue(':quantite',$quantite);
        $req->bindValue(':generique',$generique);
        $req->bindValue(':dimension',$dimension);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':id_user',$id_user);


        $req->execute();
           }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function modifierMedia($media,$id){
		$sql="UPDATE media SET  type=:type, quantite=:quantite, generique=:generique, dimension=:dimension, prix=:prix WHERE id_media=$id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
    
        $type=$media->getType();
        $quantite=$media->getQuantite();
        $generique=$media->getGenerique();
        $dimension=$media->getDimension();
        $prix=$media->getPrix();
         $req->bindValue(':type',$type);
		$req->bindValue(':quantite',$quantite);
        $req->bindValue(':generique',$generique);
        $req->bindValue(':dimension',$dimension);
        $req->bindValue(':prix',$prix);



            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
        }
		
    }
    function modifierMediaCommande($id){
		$sql="UPDATE media SET  commande='prete' WHERE id_media=$id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
    
       



            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
        }
		
    }
    function supprimerMedia($id){
		$sql="DELETE FROM media where id_media= :id_media";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_media',$id);
		try{
            $req->execute();
            //header('Location: afficherMedia.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}/***/
    
    function recupererMedia($id_media){
		$sql="SELECT * from media where id_media=$id_media";
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