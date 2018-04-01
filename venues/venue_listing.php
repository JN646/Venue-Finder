<!-- Header -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_header.php"); ?>
<!-- DB Config -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php"); ?>
<body>
  <div class="container-fluid">
    <?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_nav.php"); ?>
    <div class="md-col-12">
      <!-- Venue Listing -->
      <h1>Venue List</h1>
      <?php
      $sql = "SELECT * FROM venue";
      $result = mysqli_query($mysqli, $sql);
      if (mysqli_num_rows($result) > 0) {
          // output data of each row
          echo "<table class='table table-bordered'>";
              echo "<tr>";
                  echo "<th class='text-center'>Profile</th>";
                  echo "<th class='text-center'>ID</th>";
                  echo "<th class='text-center'>Name</th>";
                  echo "<th class='text-center'>Type</th>";
                  echo "<th class='text-center'>Country</th>";
                  echo "<th class='text-center'>Town</th>";
              echo "</tr>";
          while($row = mysqli_fetch_assoc($result)) {
              echo "<tr>";
                  echo "<td class='text-center'><a href=../venues/venue_index.php?venue_id=" .$row['venue_id'].
              ">Profile</a></th>";
                  echo "<td class='text-center'>" . $row["venue_id"] . "</th>";
                  echo "<td class='text-center'>" . $row["venue_name"] . "</th>";
                  echo "<td class='text-center'>" . $row["venue_type"] . "</th>";
                  echo "<td class='text-center'>" . $row["venue_country"] . "</th>";
                  echo "<td class='text-center'>" . $row["venue_town"] . "</th>";
              echo "</tr>";
          }
          echo "</table>";
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
