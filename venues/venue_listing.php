<!-- Header -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_header.php"); ?>
<!-- DB Config -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php"); ?>
<body>
  <div class="container-fluid">
    <?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_nav.php"); ?>
    <div class="md-col-12">
      <!-- Talent Listing -->
      <h1>Talent List</h1>
      <?php
      $sql = "SELECT talent_id, talent_name, talent_type FROM talent";
      $result = mysqli_query($mysqli, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($result)) {
              echo " " . $row["talent_id"]. " - " . $row["talent_name"]. " - " . $row["talent_type"]. "<br>";
          }
      } else {
          echo "0 results";
      }

      // Close connection
      mysqli_close($mysqli);
      ?>
    </div>
  <!-- Footer -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_footer.php"); ?>
</div>
