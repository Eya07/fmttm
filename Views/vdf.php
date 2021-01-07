
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fmttm";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);


$pdoStat=$conn->prepare('SELECT * FROM vols ORDER BY id ');
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
    <title>F.M.T.T.M</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
 <link rel="stylesheet" href="../assets/css/templatemo-style.css" />

</head>

  <body>
    <div id="page-wraper" >

      <!-- Sidebar Menu -->
      <?php include'../Model/menu_admin.php'; ?>

      <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <h1 class="textEnGros">Fly Me To The Moon</h1>
            <div class="line-dec"></div>

            <br><br>
            <h1  style="font-size:50px ;  color:white; margin-left:50px;
            background-color: #1b1e21 ; " > Gestionaire des Vols  </h1>
            <br>
			<form action="connect.php" method="POST">

        <table id="datatable" class="table table-striped table-bordered table-dark"  style="width:115%; font-size:35px;">

<tr>
           <th>   <h2 >Vols :</h2> </th>
           <th>  <h2>Destination :</h2>   </th>
           <th>   <h2 >Fusée :</h2>   </th>
         </tr>
          <tr>



            <td>

      <?php foreach ($vols as $vol): ?>


       <h5> vol: <?= $vol['id']?> | <?=  $vol['duree_vol'] ?> heures | date : <?= $vol['date_vol'] ?>
       <a style="color:violet" href="supprimer2.php?numVol=<?= $vol['id'] ?>" > X </a>
       <a style="color:violet" href="modification.php?numVol=<?= $vol['id'] ?>" > M </a>
          </h5>

      <?php endforeach; ?>
      </td>
      <td>

      <?php foreach ($destinations as $destination): ?>
        <h5> <?=  $destination['destination'] ?> ||  <?=  $destination['adresse'] ?>
        <a style="color:violet" href="supprimer3.php?numDestination=<?= $destination['id'] ?>" > X </a>
      <a style="color:violet" href="modification2.php?numDestination=<?= $destination['id'] ?>" > M </a></h5>
      <?php endforeach; ?>
      </td>

      <td>

      <?php foreach ($fusees as $fusee): ?>
        <h5> <?=  $fusee['type_fusee'] ?> ||  <?=  $fusee['nombre_voyageur'] ?>voyageurs
         <a style="color:violet"  href="supprimer.php?numFusee=<?= $fusee['id'] ?>" > X </a>

        </h5>



         <?php endforeach; ?>
      </td>



      </tr>

    </table><br>

           </form>
<br><br>

             <a href="Vols.php" style="width: 300px; height: 50px;font-size:40px ;  color:white; margin-left:50px;
             background-color: #1b1e21 ;padding:5px 10px;  border-radius: 10px; border: 3px violet solid; " > Ajouter un Vol  </a>
            <br>





    </div>



  </body>
</html>
