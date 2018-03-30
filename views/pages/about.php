<!-- Header -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_header.php"); ?>
<!-- DB Config -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php"); ?>
<body>
  <div class="container-fluid">
    <!-- Jumbotron -->
    <div id="jumboAbout" class="jumbotron">
      <div class="row">
        <div class="col-md-10">
          <!-- Description -->
          <h3 class="display-4">Learn about what we do!</h3>
        </div>
        <div class="col-md-2">
          <ul>
            <br>
            <a href="#venues" class="whitelinks"><li>Venue</li></a><br>
            <a href="#entertainers" class="whitelinks"><li>Entertainers</li></a><br>
            <a href="#Events" class="whitelinks"><li>Events</li></a><br>
          </ul>
        </div>
      </div>
    </div>
    <!-- Nav -->
    <?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_nav.php"); ?>
    <div class="md-col-12">
            <h1>The Service</h1>
      <p>we gone make you money bitch</p>
        <h3 id="venues">Venues</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
          dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <h3 id="entertainers">Entertainers</h3>
        <p>From musicians to magicians and impressionts to contortionists, if you have a skill you want people to see, we want to help you get it out there. We provide a platform for artists and performers to network with Venues </p>
            <h3 id="Events">Events</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
    <!-- Number of Artists -->
    <div class="row">
      <div class="col-md-6">
        <div class="col-md-12 border border-primary">
          <h1 class='text-center'>Talent</h1>
          <h1 class='text-center display-4'>5</h1>
        </div>
      </div>
      <div class="col-md-6">
        <div class="col-md-12 border border-primary">
          <h1 class='text-center'>Venues</h1>
          <h1 class='text-center display-4'>2</h1>
        </div>

      </div>
    </div>
</div>
  <!-- Footer -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_footer.php"); ?>
</div>
