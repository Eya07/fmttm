<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>F.M.T.T.M</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
 <link rel="stylesheet" href="../assets/css/templatemo-style.css" />

</head>

<body>
<div id="page-wraper">
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
                    <li><a href="connexion.html">Connexion</a></li>
                    <li><a href="billet.html">Billet </a></li>
                    <li><a href="produit.html">Produit </a></li>
                    <li> <a href="vdf.php" > Vols </a> </li>
                    <li><a href="coaching.html">Coaching</a></li>
                    <li><a href="historique.html">Historique</a></li>

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
                <h1 class="textEnGros" >Fly Me To The Moon</h1>
                <div class="line-dec"></div>

                <br><br><br>
              <form action="connect2.php" method="POST">
                <table border="4"  width="100%" class="connexion1" >
                    <a href="Vols.php"> <h2 style="color: white">Gestion des vols</h2></a>
                    <hr style="color: white" color=#a43f49 size="5" width="300">
                    <a href="destination.php">  <h2 style="color: white">Gestion de la destination</h2>







                    <tr>
                       <td> <label>destination</label></td>
                        <td>
                        <input type="radio" id="mars" name="destination" value="Mars">
                        <label for="mars" > Mars </label>
                        <input type="radio" id="lune" name="destination" value="Lune">
                        <label for="lune" >Lune</label>

                        <td>


                    </tr>



                    <tr>

                        <td>
                            <label for="adresse">adresse:
                            </label>
                        </td>
                        <td><input  type="text"  id="adresse" name="adresse" maxlength="20"></td>
                    </tr>

                    <tr>

                        <td>
                            <input style="background: #888888"   type="submit" value="Envoyer">
                        </td>
                        <td >
                            <input style="background: #888888"   type="reset" value="Annuler">
                        </td>
                    </tr>




                </table>
            </form>
                <br><br><br><br>

                <a href="fusée.php" >  <img class="imagenext" src="../assets/images/next.png"  >  </a>
                <br>
                <h1 class="imagenext1">Suivant</h1>



    </section>





</div>



</body>
</html>
