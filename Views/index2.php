

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "fmttm";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$pdoStat=$conn->prepare('SELECT * FROM vols ORDER BY id ASC ');
$pdoStat2=$conn->prepare('SELECT * FROM destination ORDER BY id ASC');
$pdoStat3=$conn->prepare('SELECT * FROM fusee ORDER BY id ASC');

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
    <link
      href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900"
      rel="stylesheet"
    />

    <title>Fly me to the moon</title>
    <link href="../assets_index/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="../assets_index/css/fontawesome.css" />
    <link rel="stylesheet" href="../assets_index/css/templatemo-style.css" />
    <link rel="stylesheet" href="../assets_index/css/owl.css" />
    <link rel="stylesheet" href="../assets_index/css/lightbox.css" />

  </head>

  <body>
    <div id="page-wraper">
      <!-- Sidebar Menu -->
      <div class="responsive-nav">
        <i class="fa fa-bars" id="menu-toggle"></i>
        <div id="menu" class="menu">
          <i class="fa fa-times" id="menu-close"></i>
          <div class="container">
            <div class="image">
              <a href="#"><img src="assets/images/logo-2.png" alt="" /></a>
            </div>
            <div class="author-content">
              <h4>F.M.T.T.M</h4>
              <span><h5>Fly Me To The Moon</h5></span>

              <span>Agence de voyage spatial</span>
            </div>
            <nav class="main-nav" role="navigation">
              <ul class="main-menu">
                <li><a href="#section1">Connexion</a></li>
                <li><a href="#section2">A propo de nous</a></li>
                <li><a href="#section3">Espace client</a></li>
                <li><a href="#section4">Liste des Vols</a></li>
                  <li><a href="#section5">Contact</a></li>
              </ul>
            </nav>
            <div class="social-network">
              <ul class="soial-icons">
                <li>
                  <a href="https://fb.com/templatemo"
                    ><i class="fa fa-facebook"></i
                  ></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-twitter"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-linkedin"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-dribbble"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-rss"></i></a>
                </li>
              </ul>
            </div>
            <div class="copyright-text">

            </div>
          </div>
        </div>
      </div>

    <?php include'../Model/authentification.php'; ?>

      <section class="section my-services" data-section="section2">
        <div class="container">
          <div class="section-heading">
            <h2> A propo de nous</h2>
            <div class="line-dec"></div>


          <div class="right-image-post">
            <div class="row">
              <div class="col-md-6">
                <div class="left-text">
                  <h3>Notre ambition</h3>
                  <p class="text1">

                    demain il vous sera possible de séjourner à bord du complexe orbital notre agence qui vient pour vous donner cette chance extraordinaire pour decouvrire l'autre monde misterieux, ouii c'est l'espace interplanétaires alors
                    Ne manquez pas cette  magnifiqeue opportunité contacter nous vite pour realiser ce reve

                  </p>
                  <div class="white-button">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-image">
                  <img src="assets/images/right-image.jpg" alt="" />
                </div>
              </div>
            </div>
          </div>



        </div>

      </section>
<?php include'../Model/lien_de_page_du_menu.php'; ?>
<section class="section my-work" data-section="section4">
        <div class="container">
          <div class="section-heading">
            <div class="titre"> Liste des vols   </div>
                <br><br><br><br>
          <table id="datatable" class="table table-striped table-bordered table-dark"  style="width:115%; font-size:10px;">
            <tr>
             <th>   <h2 >Vols :</h2> </th>
             <th>  <h2>Destination :</h2>   </th>
             <th>   <h2 >Fusée :</h2>   </th>
           </tr>
            <tr>



              <td>

        <?php foreach ($vols as $vol): ?>


         <h5> vol: <?= $vol['id']?> | <?=  $vol['duree_vol'] ?> heures | date : <?= $vol['date_vol'] ?>

            </h5>

        <?php endforeach; ?>
        </td>
        <td>

        <?php foreach ($destinations as $destination): ?>
          <h5> <?=  $destination['destination'] ?> ||  <?=  $destination['adresse'] ?>
        </h5>
        <?php endforeach; ?>
        </td>

        <td>

        <?php foreach ($fusees as $fusee): ?>
          <h5> <?=  $fusee['type_fusee'] ?> ||  <?=  $fusee['nombre_voyageur'] ?>voyageurs


          </h5>



           <?php endforeach; ?>
        </td>



        </tr>

      </table><br>
      <!-- <a href="" style="width: 300px; height: 50px;font-size:3em ;  color:white;margin-right: 50px;
       background-color: #1b1e21;padding:5px 10px;  border-radius: 10px; "></a> -->




  <!-- <button  onclick="<?php  $T=1;?>" style="width: 200px; height: 50px;font-size:30px ;  color:white; margin-left:50px;
   background-color: #1b1e21 ;padding:5px 10px;  border-radius: 10px; opacity:0.9" >Trie type >  </button>
      <button  onclick="<?php  $T=0;?> " style="width: 200px; height: 50px;font-size:30px ;  color:white; margin-left:50px;
       background-color: #1b1e21 ;padding:5px 10px;  border-radius: 10px; opacity:0.9">Trie type < </button> -->

<br>
      <a href="index.php#section4" style="width: 300px; height: 50px;font-size:40px ;  color:white; margin-left:50px;
      background-color: #1b1e21 ;padding:5px 10px;  border-radius: 10px;" > Trie Decroissant</a>
<br>
      <a href="recherche.php" style="width: 300px; height: 50px;font-size:40px ;  color:white; margin-left:50px;
       background-color: #1b1e21 ;padding:5px 10px;  border-radius: 10px;" > Rechercher selon votre Num de Vol </a>

          </div>

        </div>
      </section>


      <section class="section contact-me" data-section="section5">
        <div class="container">
          <div class="section-heading">
            <h2>Contact Me</h2>
            <div class="line-dec"></div>
            <span>Fusce eget nibh nec justo interdum condimentum. Morbi justo ex,
              efficitur at ante ac, tincidunt maximus ligula. Lorem ipsum dolor
              sit amet, consectetur adipiscing elit.</span
            >
          </div>
          <div class="row">
            <div class="right-content">
              <div class="container">
                <form id="contact" action="" method="post">
                  <div class="row">
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="name"
                          type="text"
                          class="form-control"
                          id="name"
                          placeholder="Your name..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-6">
                      <fieldset>
                        <input
                          name="email"
                          type="text"
                          class="form-control"
                          id="email"
                          placeholder="Your email..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <input
                          name="subject"
                          type="text"
                          class="form-control"
                          id="subject"
                          placeholder="Subject..."
                          required=""
                        />
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <textarea
                          name="message"
                          rows="6"
                          class="form-control"
                          id="message"
                          placeholder="Your message..."
                          required=""
                        ></textarea>
                      </fieldset>
                    </div>
                    <div class="col-md-12">
                      <fieldset>
                        <button type="submit" id="form-submit" class="button">
                          Send Message
                        </button>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="../assets_index/vendor/jquery/jquery.min.js"></script>
    <script src="../assets_index/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../assets_index/js/isotope.min.js"></script>
    <script src="../assets_index/js/owl-carousel.js"></script>
    <script src="../assets_index/js/lightbox.js"></script>
    <script src="../assets_index/js/custom.js"></script>
    <script>
      //according to loftblog tut
      $(".main-menu li:first").addClass("active");

      var showSection = function showSection(section, isAnimate) {
        var direction = section.replace(/#/, ""),
          reqSection = $(".section").filter(
            '[data-section="' + direction + '"]'
          ),
          reqSectionPos = reqSection.offset().top - 0;

        if (isAnimate) {
          $("body, html").animate(
            {
              scrollTop: reqSectionPos
            },
            800
          );
        } else {
          $("body, html").scrollTop(reqSectionPos);
        }
      };

      var checkSection = function checkSection() {
        $(".section").each(function() {
          var $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
          if (topEdge < wScroll && bottomEdge > wScroll) {
            var currentId = $this.data("section"),
              reqLink = $("a").filter("[href*=\\#" + currentId + "]");
            reqLink
              .closest("li")
              .addClass("active")
              .siblings()
              .removeClass("active");
          }
        });
      };

      $(".main-menu").on("click", "a", function(e) {
        e.preventDefault();
        showSection($(this).attr("href"), true);
      });

      $(window).scroll(function() {
        checkSection();
      });
    </script>
  </body>
</html>
