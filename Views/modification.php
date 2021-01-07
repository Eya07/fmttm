
<?php


$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "fmttm";

   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $pdoStat=$conn->prepare('SELECT * FROM vols WHERE id = :num ');

   $pdoStat->bindValue('num',$_GET['numVol'],PDO::PARAM_INT);

   $executeIsOk=$pdoStat->execute();

   $vol = $pdoStat->fetch();
  // var_dump($vol);
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
          <div class="social-network">
            <ul class="soial-icons">
              <li>
                <a href="https://facebook.com/ahmed1990909/"
                ><img src="assets/images/facebook.png"> </a>
              </li>
              <li>
                <a href="https://www.youtube.com/watch?v=yyzsOKUSAMg&ab_channel=NightcoreMtb"><img src="assets/images/youtuve.png"></a>
              </li>

            </ul>
          </div>
          <audio class="audio2" src="assets/musique/fly-me-to-the-moon-lyrics.mp3" controls></audio>

          <div class="copyright-text">
            <p>2A26 le Groupe de l'espace </p>
          </div>

        </div>
      </div>
    </div> <!-- Sidebar Menu -->

      <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
            <h1 class="textEnGros">Fly Me To The Moon</h1>
            <div class="line-dec"></div>

            <br><br><br>

			<form action="modifier.php" method="POST">

            <table      width="100%" class="connexion1" border="4" >
              <a href="#"> <h2 style="color: white">Gestion des vols</h2></a>
              <br>

          <input type="hidden" name="numVol" value="<?= $vol['id'] ?>">


              <tr>
                <td>
                  <label for="duree_vol">durée vol:
                  </label>
                </td>
                <td> <input id="duree_vol" type="number"  name="duree_vol" min="0" max="1000" value="<?= $vol['duree_vol'] ?>" > heures</td>
              </tr>

              <tr>
                <td>
                  <label for="date_vol">date de depart:
                  </label>
                </td>
                <td><input id="date_vol" type="date"  name="date_vol" max="2050-01-01" min="1000-01-01" value="<?= $vol['date_vol']?>" ></td>
              </tr>


              <tr>


              </tr>





            </table>


<br><br><br><br>


            <br>
            <input style="background: #888888; background-color: #a43f49; color:white; font-size:50px;" type="submit"  value="Modifier le vol" >


</form>

    </div>



  </body>
</html>
