<?PHP
require_once "../config.php";
class CombinaisonC {
   
    function afficherCombinaison(){
		$sql="SElECT * From combinaison";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }	
    
    function afficherCombinaisonParUser($id_user){
		$sql="SElECT * From combinaison where id_user=$id_user ";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
    }	
   
	function ajouterCombinaison($combinaison){
		$sql="insert into combinaison (id_user,photo,date_dajout,quantite,dimension,prix,commande) values (:id_user,:photo,:date_dajout, :quantite,:dimension,:prix,'pas prete')";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
        $date_dajout=date("Y-m-d");
        $quantite=$combinaison->getQuantite();
        $photo=$combinaison->getPhoto();
        $dimension=$combinaison->getDimension();
        $prix=$combinaison->getPrix();
        $id_user=$combinaison->getId_user();

		$req->bindValue(':photo',$photo);
		$req->bindValue(':date_dajout',$date_dajout);
		$req->bindValue(':quantite',$quantite);
        $req->bindValue(':dimension',$dimension);
        $req->bindValue(':prix',$prix);
        $req->bindValue(':id_user',$id_user);


        $req->execute();
           }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }
    function modifierCombinaison($combinaison,$id){
		$sql="UPDATE combinaison SET   quantite=:quantite, photo=:photo, dimension=:dimension, prix=:prix WHERE id_combinaison=$id";
		
		$db = config::getConnexion();
try{		
        $req=$db->prepare($sql);
    
        $quantite=$combinaison->getQuantite();
        $photo=$combinaison->getPhoto();
        $dimension=$combinaison->getDimension();
        $prix=$combinaison->getPrix();
		$req->bindValue(':quantite',$quantite);
        $req->bindValue(':photo',$photo);
        $req->bindValue(':dimension',$dimension);
        $req->bindValue(':prix',$prix);



            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
            echo " Les datas : " ;
        }
		
    }

    function supprimerCombinaison($id){
		$sql="DELETE FROM combinaison where id_combinaison= :id_combinaison";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':id_combinaison',$id);
		try{
            $req->execute();
            //header('Location: afficherMedia.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }/***/
    
    function recupererCombinaison($id_combinaison){
		$sql="SELECT * from combinaison where id_combinaison=$id_combinaison";
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