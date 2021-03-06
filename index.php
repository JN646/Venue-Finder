<!-- Header -->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_header.php"); ?>
<!-- DB Config -->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php"); ?>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/functions/func_countstat.php"); ?>
<body>
  <div class="container-fluid">
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_nav.php"); ?>
    <div class="col-md-12">

      <!-- Jumbotron -->
      <div id="jumboHome" class="jumbotron">
        <div class="row">
          <div class="col-md-8">
            <!-- Title -->
            <h1 class="display-2">Event Plaza</h1>

            <!-- Description -->
            <h3 class="display-4">Hello World! - Alpha</h3>
          </div>
          <div class="col-md-4">
            <p>Side menu that can hold more information, stats, links or widgets.</p>
          </div>
        </div>
      </div>

      <!-- Number of Things -->
      <div class="row">
        <!-- Number of Talent -->
        <div class="col-md-4">
          <div class="col-md-12 border border-primary">
            <h1 class='text-center'><i class="far fa-star"></i> Talent</h1>
            <h1 class='text-center display-4'><?php echo StatCounters::counterTalent() ?></h1>
          </div>
        </div>

        <!-- Number of Venues -->
        <div class="col-md-4">
          <div class="col-md-12 border border-success">
            <h1 class='text-center'><i class="fas fa-home"></i> Venues</h1>
            <h1 class='text-center display-4'><?php echo StatCounters::counterVenues() ?></h1>
          </div>
        </div>

        <!-- Number of Events -->
        <div class="col-md-4">
          <div class="col-md-12 border border-danger">
            <h1 class='text-center'><i class="far fa-calendar-alt"></i> Events</h1>
            <h1 class='text-center display-4'><?php echo StatCounters::counterEvents() ?></h1>
          </div>
        </div>
      </div>

      <br>
      <hr>

      <!-- Intro Text -->
      <h1><?php echo "Hello World!"; ?></h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

      <!-- Item Section -->
      <div class="row">

        <!-- Block 1 -->
        <div class="col-md-4">
          <div class="col-md-12 border">
            <h2 class="text-center">Entertainers</h2>
            <img src="<?php echo $environment; ?>/public/images/megaphone-1.png" alt="Talent" class="rounded mx-auto d-block" width=30%>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="btn btn-link" style='font-size: 36px;' href="<?php echo $environment; ?>/views/pages/talent.php"><i class="fas fa-info-circle"></i></a>
          </div>
        </div>

        <!-- Block 2 -->
        <div class="col-md-4">
          <div class="col-md-12 border">
            <h2 class="text-center">Venues</h2>
            <img src="<?php echo $environment; ?>/public/images/home.png" alt="Venues" class="rounded mx-auto d-block" width=30%>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="btn btn-link" style='font-size: 36px;' href="<?php echo $environment; ?>/views/pages/venues.php"><i class="fas fa-info-circle"></i></a>
          </div>
        </div>

        <!-- Block 3 -->
        <div class="col-md-4">
          <div class="col-md-12 border">
            <h2 class="text-center">Looking for something to see?</h2>
            <img src="<?php echo $environment; ?>/public/images/smartphone-1.png" alt="Network" class="rounded mx-auto d-block" width=30%>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a class="btn btn-link" style='font-size: 36px;' href="<?php echo $environment; ?>/views/pages/somethingsee.php"><i class="fas fa-info-circle"></i></a>
          </div>
        </div>
      </div>
    </div>

  <!-- Footer -->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_footer.php"); ?>
</div>
