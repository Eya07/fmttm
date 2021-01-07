<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fmttm";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$id=$_GET['date'];

$pdoStat=$conn->prepare('SELECT * FROM  vols where id=$id ORDER BY id ');
$pdoStat2=$conn->prepare('SELECT * FROM destination ORDER BY id');
$pdoStat3=$conn->prepare('SELECT * FROM fusee ORDER BY id');

$execute= $pdoStat->execute();
$execute2= $pdoStat2->execute();
$execute3= $pdoStat3->execute();

$vols=$pdoStat->fetchAll();
$destinations=$pdoStat2->fetchAll();
$fusees=$pdoStat3->fetchAll();



//var_dump($vols);
// var_dump($destinations);
// var_dump($fusees);
 ?>
 <!DOCTYPE html>
 <html lang="en">
   <head>
     <meta charset="utf-8" />
     <meta
       name="viewport"
       content="width=device-width, initial-scale=1, shrink-to-fit=no"
     />
     <meta name="description" content="" />
     <meta name="author" content="" />


     <title>Fly me to the moon</title>


     <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />


       <link rel="stylesheet" href="assets/css/fontawesome.css" />

       <link rel="stylesheet" href="assets/css/owl.css" />
       <link rel="stylesheet" href="assets/css/lightbox.css" />
     <!--      a modifier   -->
      <link rel="stylesheet" href="assets/css/votePageCSS.css" />

   </head>

   <body>
     <div id="page-wraper">

       <section class="section about-me" data-section="section1">
         <div class="container">
           <div class="section-heading">
             <div class="titre" style="color:white">Rechercher</div>

             <div class="line-dec"></div>
             <br>  <br>  <br>  <br>  <br>  <br>  <br>
      <div>
             <form action="rech.php" method="POST" style="background-color:rgba(0, 0, 0, 0.2)" style="border-color:pink" class="texte1">


          <br>
                  <input type="text" placeholder="Numero du vol" name="date" required>


                 <input type="submit" nom='Rechercher' value='Rechercher' >
                 <input type="reset" nom="Annuler" value="Annuler">
                 <br>

             <br>

             </form>
           </div>
           <div>
             <table   width="100%" style="background-color:rgba(0, 0, 0, 0.5)" style="border-color:pink" class="texte1">

             <tr>



                 <td>
                 <h1 >Vols :</h1>
             <?php foreach ($vols as $vol): ?>


             <h5> vol: <?= $vol['id']?> | <?=  $vol['duree_vol'] ?> heures | date : <?= $vol['date_vol'] ?>
             <a href="supprimer2.php?numVol=<?= $vol['id'] ?>" > X </a>
             <a href="modification.php?numVol=<?= $vol['id'] ?>" > M </a>
               </h5>



             <?php endforeach; ?>
             </td>
             <td>
             <h1>Destination :</h1>
             <?php foreach ($destinations as $destination): ?>
             <h5> <?=  $destination['destination'] ?> ||  <?=  $destination['adresse'] ?>
             <a href="supprimer3.php?numDestination=<?= $destination['id'] ?>" > X </a>
             <a href="modification2.php?numDestination=<?= $destination['id'] ?>" > M </a></h5>
             <?php endforeach; ?>
             </td>

             <td>
             <h1 >Fusée :</h1>
             <?php foreach ($fusees as $fusee): ?>
             <h5> <?=  $fusee['type_fusee'] ?> ||  <?=  $fusee['nombre_voyageur'] ?>
              <a href="supprimer.php?numFusee=<?= $fusee['id'] ?>" > X </a>
              <a href="modification3.php?numFusee=<?= $fusee['id'] ?>" > M </a>
             </h5>



              <?php endforeach; ?>
             </td>



             </tr>

             </table>
           </div><br>
           </div>



         </div>
       </section>



     </div>


   </body>
 </html>
