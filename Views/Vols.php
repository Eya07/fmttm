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

            <br><br><br>

			<form action="connect.php" method="POST">

            <table      width="100%" class="connexion1" border="4" >
              <a href="Vols.php"> <h2 style="color: white">Gestion des vols</h2></a>
              <br>




              <tr>
                <td>
                  <label for="duree_vol">durée vol:
                  </label>
                </td>
                <td> <input  type="number" id="duree_vol" name="duree_vol" min="0" max="1000" required > heures</td>
              </tr>

              <tr>
                <td>
                  <label for="date_vol">date de depart:
                  </label>
                </td>
                <td><input  type="date" id="date_vol" name="date_vol" max="20050-01-01" required ></td>
              </tr>


              <tr>

                <td>
                  <input style="background: #888888" type="submit" name="forminscription" value="Envoyer" >
                </td>
                <td >
                  <input style="background: #888888"   type="reset" value="Annuler">
                </td>
              </tr>





            </table>

           </form>
<br><br><br><br>

             <a href="destination.php" >  <img class="imagenext" src="../assets/images/next.png"  >  </a>
            <br>
            <h1 class="imagenext1">Suivant</h1>




    </div>



  </body>
</html>
