<!-- Header -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_header.php"); ?>
<!-- DB Config -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php"); ?>
<body>
  <div class="container-fluid">
    <?php
    // Get talent_id from URL.
    $UID = (int)$_GET["venue_id"];

    // Attempt select query execution
    $sql_venue = "SELECT * FROM venue WHERE venue_id='$UID'";
    $result = mysqli_query($mysqli, $sql_venue);
    $rs = mysqli_fetch_array($result);

    // Assign Variables.
    $venue_name = $rs['venue_name'];
    $venue_bio = $rs['venue_bio'];
    $venue_type = $rs['venue_type'];
    $venue_country = $rs['venue_country'];

     ?>
    <?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_nav.php"); ?>
    <div class="md-col-12">
      <div class="row">
        <div class="col-md-2 border">
          <img src="https://picsum.photos/150" alt="Profile Picture" width="100%">
          <h3>Sidebar</h3>
          <p>Rating:</p>
          <p>Bookings:</p>
          <p>Type: <?php echo $venue_type; ?></p>
          <p>Subtype:</p>
          <p>Location: <?php echo $venue_country; ?></p>
        </div>
        <div class="col-md-10">
          <h1 class="display-4"><?php echo $venue_name; ?></h1>
          <div id="ProfileBio" class="border">
            <h3>Bio</h3>
            <?php echo $venue_bio; ?>
          </div>
          <br>
        </div>
      </div>
    </div>
  <!-- Footer -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_footer.php"); ?>
</div>
