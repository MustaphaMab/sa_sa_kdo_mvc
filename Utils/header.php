<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- ------------------------------- stylesheets ------------------------------ -->
  <link rel="stylesheet" href="./Content/css/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="Content/css/styles_home.css">

  <!-- ------------------------------- libraries scripts  ------------------------------ -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bxootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/29aef3fc25.js" crossorigin="anonymous"></script>

  <!-- ---------------------------------icons---------------------------------------- -->
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> 

  <!-- --------------------------------fonts-------------------------------------------- -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700"> 

  <title>SA SA KDO</title>

<body >
  <header>

    <!----- Navbar Bootstrap ----------->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">

      <div class="container-fluid">

      
      <div>
          <a href="?controller=home&action=home" class="href"><img width="15%" class="logo" src="./Content/images/logo_header.png" alt="logo.png"></a>
        </div>

       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?php

        if (isset($_SESSION['nom'])) {

          if ($_SESSION['Statut'] === 'Admin') {
            include('header_admin.php');
          } else {
            include('header_user.php');
          }
        } else {
          echo "Vous n'etes pas connecté";

        ?>



          <a href="?controller=category&action=all_category">Catégories</a>
          <a href="?controller=product&action=all_mugs">Mugs</a>
          <a href="?controller=product&action=all_portes_cles">Portes clés</a>
          <a href="?controller=product&action=all_marques_pages">Marques pages</a>
          <a href="?controller=product&action=all_t-shirts">T-shirts</a>
          <a class="btn btn-primary" href="?controller=home&action=login_form">CONNEXION</a>
        <?php
        }

        ?>

      </div>

    </nav>

  </header>

</body>

</html>