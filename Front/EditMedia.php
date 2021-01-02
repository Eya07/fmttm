

<?PHP
include "../Entities/Media.php";
include "../Core/MediaC.php";

  


     
      
if ( isset($_POST['type']) and isset($_POST['quantite']) and isset($_POST['generique'])  and isset($_POST['prix']) and isset($_POST['dimension']))
{
    
  
$media=new Media($_POST['id_media'],6,$_POST['type'],"",$_POST['quantite'],$_POST['generique'],$_POST['dimension'],$_POST['prix'],"");
//Partie2

var_dump($media);
//Partie3
$mediaC=new MediaC();

$mediaC->modifierMedia($media,$_POST['id_media']);
header("Location: Index.php");

}

    





?>