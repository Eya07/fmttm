
<?PHP
include "../Core/MediaC.php";
if(isset($_GET['page']) && !empty($_GET['page'])){
  $currentPage = (int) strip_tags($_GET['page']);
}else{
  $currentPage = 1;
}
 // On détermine le nombre d'articles par page
$parPage = 1;
$mediaC=new MediaC();
$nbMedias=$mediaC->NbMedias(6);
  // On calcule le nombre de pages total
  $pages = ceil($nbMedias / $parPage);
  $premier = ($currentPage * $parPage) - $parPage;   
$listeMedia=$mediaC->afficherMediasParUser(6,$premier, $parPage);

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
<!--
Reflux Template
https://templatemo.com/tm-531-reflux
-->
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css" />
    <link rel="stylesheet" href="assets/css/templatemo-style.css" />
    <link rel="stylesheet" href="assets/css/owl.css" />
    <link rel="stylesheet" href="assets/css/lightbox.css" />

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
            <div class="main-nav" >
              <ul class="main-menu">
                <li><a href="#section1">Logout</a></li>
                <li><a href="#section2">A propos de nous</a></li>
                <li><a href="#section3">Espace client</a></li>
                <li><a href="#section4">My Work</a></li>
              </ul>
</div>
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
              <p>by ahmed / mimi</p>
            </div>
          </div>
        </div>
      </div>

      <section class="section about-me" data-section="section1">
        <div class="container">
          <div class="section-heading">
          

            <div class="line-dec"></div>
            Fly me to the moon

          </div>


        </div>
      </section>

     <section class="section my-services" data-section="section3">
<br><br>
  <div class="row">
  <div class="col-md-12">
				<br>
				<a href="AjouterMedia.php" class="btn btn-primary"> Ajouter Media +</a>
				<br>
				<br>
			</div>

      <form class="form-inline" method="POST" action="pdf.php" >
                      <fieldset >

                      <div class="form-group">
                  
                  
                  <input type="submit" name="telecharger pdf" value="telecharger pdf" class="btn btn-info">
                </div>
                      </fieldset>
                    </form>

  <table id="datatable" class="table table-striped table-bordered table-dark"  style="width:100%">
                      <thead>
                        <tr>
                        <th>Type</th>
									<th>Dimension</th>
									<th>date d'ajout </th>
									<th> Générique</th>
									<th>Prix</th>
									<th>Quantite</th>
                        </tr>
                      </thead>


                      <tbody>
                      <?php foreach ($listeMedia as $media) {?>
								<tr>
									<td><?php echo $media["type"] ?></td>
									<td><?php echo $media["dimension"] ?></td>
									<td><?php echo $media["date_dajout"] ?></td>
									<td><?php echo $media["generique"] ?></td>
									<td><?php echo $media["prix"] ?></td>
                                    <td><?php echo $media["quantite"] ?></td>

									<td>
									<a href="ModifierMedia.php?id_media=<?php echo $media["id_media"] ?>" class="btn btn-success btn-sm">Edit</a>
										<a href="javascript:deleteMedia(confirm('Etes vous sur ?'),'supprimerMedia.php?id_media=<?php echo $media["id_media"] ?>');" class="btn btn-danger btn-sm">Delete</a>
									</td>
								</tr>
								<?php }?>
                      </tbody>
                    </table>
                    <nav>
                    <center>
    <ul class="pagination">
        <!-- Lien vers la page précédente (désactivé si on se trouve sur la 1ère page) -->
        <li class="page-item <?= ($currentPage == 1) ? "disabled" : "" ?>">
            <a href="./index.php?page=<?= $currentPage - 1 ?>" class="page-link">Précédente</a>
        </li>
        <?php for($page = 1; $page <= $pages; $page++): ?>
            <!-- Lien vers chacune des pages (activé si on se trouve sur la page correspondante) -->
            <li class="page-item <?= ($currentPage == $page) ? "active" : "" ?>">
                <a href="./index.php?page=<?= $page ?>" class="page-link"><?= $page ?></a>
            </li>
        <?php endfor ?>
            <!-- Lien vers la page suivante (désactivé si on se trouve sur la dernière page) -->
            <li class="page-item <?= ($currentPage == $pages) ? "disabled" : "" ?>">
            <a href="./index.php?page=<?= $currentPage + 1 ?>" class="page-link">Suivante</a>
        </li>
    </ul>
    </center>
</nav>
    </div>

    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/custom.js"></script>
    <script type="text/javascript">

	function deleteMedia(confirmation, url){
		if(confirmation){
			window.location.href = url;
		}
	}

</script>
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
 
</html>
