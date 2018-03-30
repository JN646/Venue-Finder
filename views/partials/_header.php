<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">

    <!-- Page title -->
    <title>Venue Finder</title>

    <!-- Server config file -->
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_var.php"); ?>

    <!-- Bootstrap file -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="<?php echo $environment; ?>/public/css/custom.css">
  </head>
  <body>

  <!-- Nav bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?php echo $environment; ?>index.php">Gig Hub</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Nav bar content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active"><a class="nav-link" href="<?php echo $environment; ?>index.php">Home <span class="sr-only">(current)</span></a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo $environment; ?>/views/pages/about.php">About</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo $environment; ?>/views/pages/services.php">Services</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Link</a></li>
      </ul>

      <!-- Search bar -->
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>
<br>
