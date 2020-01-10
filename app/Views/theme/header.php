<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/font-awesome/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/style.css">
    <title><?= SYSTEM_TITLE ?></title>
  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-dark">
      <a class="navbar-brand" href="#"><?= SYSTEM_NAME ?></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <?php user_primary_links($_SESSION['userPermmissions']) ?>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url() ?>logout"><i class="fas fa-power-off"></i></a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="container-fluid"  id="main-column-container">
      <div class="row">
        <div class="col-md-12">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
