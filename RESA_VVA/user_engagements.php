<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Nos Engagements</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="https://kit.fontawesome.com/5e99020fac.js" crossorigin="anonymous"></script>

</head>

<body id="page">
<?php
session_start();
?>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><img src="./assets/img/favicon.png" alt=""> <a href="index.php">RESA<span>.</span></a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto" href="index.php">Home</a></li>
          <li><a class="nav-link scrollto active" href="user_engagements.php">Nos Engagements</a></li>
          <li><a class="nav-link scrollto" href="user_view_heb.php">Nos Hebergements</a></li>
          <li><a class="nav-link scrollto " href="user_view_resa.php">Mes R??servations</a></li>
          <?php include_once("component_gestion_dropdown.php"); ?>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .navbar -->


      <?php
      include_once("./header/header_with_login.php");
      ?>
    </div>
  </header><!-- End Header -->

  <!-- modal login-->
  <div class="modal fade" id="modalLog">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color:black;">
        <div class="modal-header" style="border-color:#ffbb38;">
          <h5 class="modal-title" style="color: #ffbb38"><b>LOGIN<b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="" method="post">
            <input type="text" placeholder="Email / Username" name="email" required class="get-started-btn scrollto">
            <input type="password" placeholder="Password" name="password" required class="get-started-btn scrollto">
        </div>
        <div class="modal-footer" style="border:none">
          <button type="button" class="get-started-btn" style="background: #ffbb38;color: #343a40;" data-bs-dismiss="modal">Close</button>
          <input type="submit" value="LOGIN" name="btnconnexion" class="get-started-btn">
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal login -->

  <!-- modal disconnect-->
  <div class="modal fade" id="modalout">
    <div class="modal-dialog">
      <div class="modal-content" style="background-color:black;">
        <div class="modal-header" style="border-color:#ffbb38;">
          <h5 class="modal-title" style="color: #ffbb38"><b>SIGN OUT<b></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="color: red;">
          ??tes-vous s??r de vouloir vous D??connecter ?
        </div>
        <div class="modal-footer" style="border:none">
          <form action="" method="post">
            <button type="button" class="get-started-btn" style="background: #ffbb38;color: #343a40;" data-bs-dismiss="modal">Close</button>
            <input type='submit' value='SIGN OUT' name='btndeconnexion' class='get-started-btn'>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- end modal disconnect -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs" data-aos="fade-down">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Nos Engagements</h2>
          <ol>
            <li><a href="index.php">Home</a></li>
            <li>Nos Engagements</li>
          </ol>
        </div>
      </div>
    </section>
    <!-- End Breadcrumbs -->

    <section class="inner-page">

      <div class="container bg-white">
        <div class="row  text-center p-3">
          <h1>Les Engagements de VVA</h1>
        </div>
        <div class="row">
          <div class="col text-center border p-4">
            <h3>L'histoire</h3>
            <h1 style="color:#48C9B0" data-aos="flip-left" data-aos-duration="2000"><i class="fas fa-book"></i></h1>
            <div class="text-start">
              <p>??? Installer des villages exclusivement en France, dans des territoires naturels pr??serv??s, ou ?? proximit?? de grands sites touristiques en basse, moyenne ou haute montagne.</p>
              <p>??? Pr??f??rer toujours des villages ?? taille humaine et un excellent rapport qualit??-prix pour des vacances de qualit?? accessibles au plus grand nombre.</p>
              <p>??? Respecter toutes les diversit??s, toutes les diff??rences, au niveau des salari??s comme au niveau des villageois et travailler main dans la main avec les communes d'accueil.</p>
            </div>
          </div>

          <div class="col text-center border p-4">
            <h3>Le Sourire</h3>
            <h1 style="color:#F0B27A" data-aos="flip-right" data-aos-duration="2000"><i class="fas fa-smile-beam"></i></h1>
            <div class="text-start">
              <p>??? Constituer dans chaque village une ??quipe comp??tente et accueillante, qui permette de passer des vacances en toute s??r??nit?? et garantir un accueil chaleureux et personnalis??.</p>
              <p>??? Offrir au quotidien et ?? tous les niveaux une excellente qualit?? de service.</p>
            </div>
          </div>
        </div>

        <div class="row ">
          <div class="col text-center border p-4">
            <h3>Le Plaisir</h3>
            <h1 style="color:#1E8449" data-aos="flip-left" data-aos-duration="2000"><i class="fas fa-tree"></i></h1>
            <div class="text-start">
              <p>??? Proposer une diversit?? d'animations, avec des animateurs pour qui plaisir rime avec rire.</p>
              <p>??? Offrir un grand choix d'activit??s sportives ou culturelles, encadr??es par des passionn??s de leur discipline et permettre de vivre sa passion lors de s??jours th??matiques.</p>
              <p>??? Faire d??couvrir la nature par des randonn??es hors des sentiers battus.</p>
            </div>
          </div>

          <div class="col text-center border p-4">
            <h3>Les Enfants</h3>
            <h1 style="color:#F1948A" data-aos="flip-right" data-aos-duration="2000"><i class="fas fa-child"></i></h1>
            <div class="text-start">
              <p>??? Proposer des ??quipements sp??cialement adapt??s aux b??b??s de 3 ?? 36 mois.</p>
              <p>??? Inscrire les enfants dans un projet p??dagogique ??panouissant, ouvert sur les autres et sur le monde et les sensibiliser au d??veloppement durable et ?? la pr??servation de la plan??te.</p>
            </div>
          </div>
        </div>

        <div class="row ">
          <div class="col text-center border p-4">
            <h3>Le Confort</h3>
            <h1 style="color:#D7BDE2" data-aos="flip-left" data-aos-duration="2000"><i class="fas fa-shield-alt"></i></h1>
            <div class="text-start">
              <p>??? R??nover sans cesse nos villages, dans le cadre d'un plan de modernisation consid??rable.</p>
              <p>??? Assurer la s??curit?? au quotidien par des audits d'hygi??ne en restauration, des analyses syst??matiques de tous les points d'eau, des contr??les r??guliers des aires de jeux et des espaces sportifs. Prendre en compte les handicaps, dans des villages labellis??s Tourisme et Handicap.</p>
            </div>
          </div>

          <div class="col text-center border p-4">
            <h3>Le Go??t</h3>
            <h1 style="color:#F4D03F" data-aos="flip-right" data-aos-duration="2000"><i class="fas fa-utensils"></i></h1>
            <div class="text-start">
              <p>??? Permettre d'??tre vraiment en vacances avec la pension compl??te et proposer de nouveaux menus, originaux et cr??atifs.</p>
              <p>??? Garantir une cuisine familiale et une bonne qualit?? des ingr??dients avec un service personnalis??, attentionn?? et convivial et faire go??ter les sp??cialit??s r??gionales.</p>
            </div>
          </div>
        </div>

        <div class="row ">
          <div class="col text-center border p-4">
            <h3>Le Pouvoir d'Achat</h3>
            <h1 style="color:#3498DB" data-aos="flip-left" data-aos-duration="2000"><i class="fas fa-money-check-alt"></i></h1>
            <div class="text-start">
              <p>??? R??nover sans cesse nos villages, dans le cadre d'un plan de modernisation consid??rable.</p>
              <p>??? Assurer la s??curit?? au quotidien par des audits d'hygi??ne en restauration, des analyses syst??matiques de tous les points d'eau, des contr??les r??guliers des aires de jeux et des espaces sportifs. Prendre en compte les handicaps, dans des villages labellis??s Tourisme et Handicap.</p>
            </div>
          </div>

          <div class="col text-center border p-4">
            <h3>Le D??veloppement Local</h3>
            <h1 style="color:#E74C3C" data-aos="flip-right" data-aos-duration="2000"><i class="fas fa-home"></i></h1>
            <div class="text-start">
              <p>??? Assumer, une mission fondamentale d'acteur de l'??conomie sociale et solidaire et jouer, un r??le moteur dans l'am??nagement et le d??veloppement du territoire de proximit??.</p>
              <p>??? ??changer r??guli??rement avec les voisins, les riverains, les habitants de la commune.</p>
              <p>??? Privil??gier le recours ?? l'emploi local, en recrutant des saisonniers originaires de la r??gion et les circuits courts de distribution, en achetant aux producteurs locaux.</p>
            </div>
          </div>
        </div>

        <div class="row ">
          <div class="col text-center border p-4">
            <h3>L'Emploi</h3>
            <h1 style="color:#000" data-aos="flip-left" data-aos-duration="2000"><i class="fas fa-user-tie"></i></h1>
            <div class="text-start">
              <p>??? Agir en employeur responsable, pour d??velopper la motivation, l'implication et les comp??tences des ??quipes et garantir aux 1300 salari??s de VVA de bonnes conditions de travail.</p>
              <p>??? Rejeter toute forme de discrimination ?? l'embauche, en favorisant en particulier l'accueil des salari??s handicap??s et ??tre attentif ?? la parit?? et ?? l'??galit?? de salaire entre hommes et femmes.</p>
            </div>
          </div>

          <div class="col text-center border p-4">
            <h3>La Formation</h3>
            <h1 style="color:#CA6F1E" data-aos="flip-right" data-aos-duration="2000"><i class="fas fa-users"></i></h1>
            <div class="text-start">
              <p>??? Professionnaliser les m??tiers de VVA l'accueil, l'h??bergement, l'animation, la restauration, la maintenance et les espaces verts.</p>
              <p>??? D??velopper les contrats en alternance et les contrats d'apprentissage et veiller ?? l'accueil de stagiaires pour leur transmettre nos savoirs.</p>
            </div>
          </div>
        </div>

        <div class="row ">
          <div class="col text-center border p-4">
            <h3>La D??veloppement Solidaire</h3>
            <h1 style="color:#8E44AD" data-aos="flip-left" data-aos-duration="2000"><i class="fas fa-handshake"></i></h1>
            <div class="text-start">
              <p>??? ??tre une entreprise responsable dans tous les domaines et choisir des fournisseurs en fonction de leur politique salariale et de leur engagement durable.</p>
              <p>??? Respecter au maximum l'environnement de chaque village et ne pas construire n'importe o??, n'importe comment.</p>
              <p>??? ??tre au plus pr??s des enjeux ??cologiques en ??tudiant toutes les alternatives en termes de mat??riaux de construction ou d'appareils ??lectrom??nagers.</p>
              <p>??? Recenser et diffuser les bonnes pratiques des villages et sensibiliser ?? ces pratiques tous nos partenaires en informant ??galement nos villageois.</p>
            </div>
          </div>

          <div class="col text-center border p-4">
            <h3>La Plan??te</h3>
            <h1 style="color:#2E86C1" data-aos="flip-right" data-aos-duration="2000"><i class="fas fa-globe-africa"></i></h1>
            <div class="text-start">
              <p>??? Sensibiliser parents et enfants aux d??placements ?? pied et ?? v??lo, dans et autour des villages.</p>
              <p>??? Organiser sur des sites sensibles des animations "faune et flore" avec des organismes de d??fense de l'environnement (par exemple la LPO, Ligue de Protection des Oiseaux).</p>
              <p>??? R??cup??rer l'eau de pluie, installer des composteurs sur tous les sites, installer des ??conomiseurs d'eau, mettre en place des ampoules basse consommation, ??quiper les villages de voiturettes ??lectriques, utiliser des mat??riaux de r??cup??ration pour les activit??s manuelles et donner l'exemple au si??ge de VVA, en ??conomisant l'eau, en r??cup??rant le papier brouillon, etc.</p>
            </div>
          </div>
        </div>

      </div>
    </section>


  </main><!-- End #main -->


  <?php
  include_once("component_footer.php");
  include_once("component_message.php");
  ?>
</body>



</html>