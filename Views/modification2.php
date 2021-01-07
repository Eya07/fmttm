
<?php


$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fmttm";

   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $pdoStat=$conn->prepare('SELECT * FROM destination WHERE id = :num ');

   $pdoStat->bindValue('num',$_GET['numDestination'],PDO::PARAM_INT);

   $executeIsOk=$pdoStat->execute();

   $destination = $pdoStat->fetch();
   //var_dump($vol);
   // header('Location: index.php');




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

      <!-- Sidebar Menu --><div class="responsive-nav">
      <i class="fa fa-bars" id="menu-toggle"></i>
      <div id="menu" class="menu">
        <i class="fa fa-times" id="menu-close"></i>
        <div class="container">
          <div class="image">
            <a href="#"><img src="../assets/images/logo-2.png"  alt="" /></a>
          </div>
          <div class="author-content">
            <h4>Fly Me To The Moon</h4>
            <span>agence de voyage spatial</span>
          </div>

          <nav class="main-nav" role="navigation">
            <ul class="main-menu">
              <li><a href="#">Connexion</a></li>
              <li><a href="#">Billet </a></li>
              <li><a href="#">Produit </a></li>
              <li> <a href="#" > Vols </a> </li>
              <li><a href="#">Coaching</a></li>
              <li><a href="#">Historique</a></li>

            </ul>
          </nav>


          

        </div>
      </div>
    </div> <!-- Sidebar Menu -->

      <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <h1 class="textEnGros">Fly Me To The Moon</h1>
            <div class="line-dec"></div>

            <br><br><br>

            <form action="modifier2.php" method="POST">
              <table border="4"  width="100%" class="connexion1" >
                  <a href="#"> <h2 style="color: white">Gestion des vols</h2></a>
                  <hr style="color: white" color=#a43f49 size="5" width="300">
                  <a href="#">  <h2 style="color: white">Gestion de la destination</h2>

                       <input type="hidden" name="numDestination" value="<?= $destination['id'] ?>">

                  <tr>
                     <td> <label >destination</label></td>
                      <td>
												  <label for="mars" > Mars </label>
                      <input type="radio" id="mars" name="destination" >
                         <label for="lune" >Lune</label>
                      <input type="radio" id="lune" name="destination" >


                      <td>
                  </tr>
                  <tr>
                      <td>
                          <label for="adresse">adresse:
                          </label>
                      </td>
                      <td><input  type="text"  id="adresse" name="adresse" maxlength="20" value="<?= $destination['adresse'] ?>"></td>
                  </tr>

                  <tr>


                  </tr>




              </table>
          </form>
<br><br><br><br>


            <br>
           <input style="background: #888888; background-color: #a43f49; color:white; font-size:50px;" type="submit"  value="Modifier la destination" >




    </div>



  </body>
</html>
