

<?PHP
include "../Entities/Media.php";
include "../Core/MediaC.php";

  


     
      
if (isset($_GET["id_media"])) {
    $id      = $_GET["id_media"];
//Partie3
$mediaC=new MediaC();

$mediaC->modifierMediaCommande($id);
$mediaC->envoyerMail("eya.dhamna@esprit.tn");
header("Location: afficherMedias.php");

}

    





?>