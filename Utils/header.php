<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./Content/css/style.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <title>SA SA KDO</title>

<body class="p-3 mb-2 bg-info-subtle text-emphasis-info">
  <header>

    <!----- Navbar Bootstrap ----------->

    <nav class="navbar navbar-expand-lg bg-body-tertiary">

      <div class="container-fluid">

      

        <a class="navbar-brand" href="?controller=home&action=home"  ></a><img class="logo" width="10%" src="./Content/images/logo_header.png" alt="logo_header.png"></a>
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