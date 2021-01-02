<?PHP
include "../Entities/Media.php";
include "../Core/MediaC.php";
if ( isset($_POST['type']) and isset($_POST['quantite']) and isset($_POST['generique'])  and isset($_POST['prix']) and isset($_POST['dimension']))
{
    
  
$media=new Media(1,$_POST['type'],"",$_POST['quantite'],$_POST['generique'],$_POST['dimension'],$_POST['prix']);
//Partie2

var_dump($media);
//Partie3
$mediaC=new MediaC();
$mediaC->ajouterMedia($media);
//header('Location: index.php');

}




?>
<HTML>
   
 
 <title>
 Ajouter 
 </title>
 </head>
 
 
     <body>
     <center>
     <form method="POST" action="" >
     <table class="t1">
     <h1>Ajouter Media</h1>
    
     <td style="vertical-align: inherit;">type</td>
     <td><input class="form-control" type="text" name="type" id="type" ></td>
     </tr>
     <tr>
     <td>quantite </td>
     <td><input class="form-control" type="number" name="quantite" required></td>
     </tr>
     <tr>
     <td>generique</td>
     <td><input class="form-control" type="text" name="generique" required></td>
     </tr>
     <tr>
     <td class="aos-init aos-animate">Prix</td>
     <td><input class="form-control" type="number" name="prix"></td>
     </tr>
     <tr>
         <td>Dimension</td>
         <td><input class="form-control" type="number" name="dimension" required></td>
         </tr>
     <tr>
     <td></td>
     <td><input  class="button" type="submit" name="ajouter" value="ajouter"></td>
     </tr>
     </table>
     </form>
     </center>
     </body>
     </HTMl>
