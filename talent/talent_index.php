<!-- Header -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_header.php"); ?>
<!-- DB Config -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php"); ?>
<body>
  <div class="container-fluid">
    <?php
    // Get talent_id from URL.
    $UID = (int)$_GET["talent_id"];

    // Attempt select query execution
    $sql_talent = "SELECT * FROM talent WHERE talent_id='$UID'";
    $result = mysqli_query($mysqli, $sql_talent);
    $rs = mysqli_fetch_array($result);

    // Assign Variables.
    $talent_name = $rs['talent_name'];
    $talent_profilepicture = $rs['talent_profilepicture'];
    $talent_bio = $rs['talent_bio'];
    $talent_type = $rs['talent_type'];
    $talent_country = $rs['talent_country'];
    $talent_county = $rs['talent_county'];
    $talent_town = $rs['talent_town'];

     ?>
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_nav.php"); ?>
    <div class="md-col-12">
      <div class="row">

        <!-- Sidebar -->
        <div class="col-md-2 border">

          <!-- Profile Picture -->
          <?php

          // Does the profile picture field have a value?
          if ($talent_profilepicture !== '0') {

            // Load the file from the database.
            echo '<img width=100% src="../user_data/profile_picture/'.$talent_profilepicture.'" />';

            // If the file does not exist.
          } else {

            // Load the default image.
            echo '<img width=100% src="../user_data/profile_picture/nopp.png" />';
          }
          ?>
          <h3>Sidebar</h3>
          <table width='100%'>
            <tr>
              <td>Rating:</td>
              <td></td>
            </tr>
            <tr>
              <td>Bookings:</td>
              <td></td>
            </tr>
            <tr>
              <td>Type:</td>
              <td><?php echo $talent_type; ?></td>
            </tr>
            <tr>
              <td>Sub Type:</td>
              <td></td>
            </tr>
            <tr>
              <td>Country</td>
              <td><?php echo $talent_country; ?></td>
            </tr>
            <tr>
              <td>County</td>
              <td><?php echo $talent_county; ?></td>
            </tr>
            <tr>
              <td>Town</td>
              <td><?php echo $talent_town; ?></td>
            </tr>
          </table>
        </div>

        <!-- Main Content -->
        <div class="col-md-10">
          <h1 class="display-4"><?php echo $talent_name; ?></h1>

          <!-- Bio Sections -->
          <?php
          if ($talent_bio == '') {
          echo "<div id='ProfileBio' class='border'>";
            echo "<h3>Bio</h3>";
            echo $talent_bio;
          echo "</div>";
          echo "<br>";
          }
          ?>

          <!-- Media Sections -->
          <div class="row">

            <!-- Media Block 1 -->
            <div class="col-md-3">
              <div class="col-md-12 border">
                <h3>Media</h3>
                <img src="https://picsum.photos/150" width="100%" alt="Profile Picture">
              </div>
            </div>

            <!-- Media Block 2 -->
            <div class="col-md-3">
              <div class="col-md-12 border">
                <h3>Media</h3>
                <img src="https://picsum.photos/150" width="100%" alt="Profile Picture">
              </div>
            </div>

            <!-- Media Block 3 -->
            <div class="col-md-3">
              <div class="col-md-12 border">
                <h3>Media</h3>
                <img src="https://picsum.photos/150" width="100%" alt="Profile Picture">
              </div>
            </div>

            <!-- Media Block 4 -->
            <div class="col-md-3">
              <div class="col-md-12 border">
                <h3>Media</h3>
                <img src="https://picsum.photos/150" width="100%" alt="Profile Picture">
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  <!-- Footer -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_footer.php"); ?>
</div>
