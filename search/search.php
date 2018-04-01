<!-- Header -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_header.php"); ?>
<!-- DB Config -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php"); ?>
<body>
  <div class="container-fluid">
    <?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_nav.php"); ?>
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-2">
          <div class="col-md-12 border">
            <h1>Filters</h1>
            <form class="" action="index.html" method="post">
              <div class='form-group'>
                <!-- Type -->
                <label for="">Type</label>
                <br>
                <select class="form-control" name="">
                  <option value="0">Please Select</option>
                  <option value="1">Musician</option>
                  <option value="2">Magic</option>
                  <option value="3">DJ</option>
                </select>
                <br>

                <!-- County -->
                <label for="">County</label>
                <br>
                <select class="form-control" name="">
                  <option value="0">Please Select</option>
                  <option value="1">Bedfordshire</option>
                  <option value="2">London</option>
                  <option value="3">Yorkshire</option>
                </select>
                <br>

                <!-- postcode -->
                <label for="">Postcode</label>
                <br>
                <input class="form-control" type="text" name="" value="">
                <br>

                <!-- Distance -->
                <label for="">Distance</label>
                <br>
                <input class="form-control" type="range" min="1" max="100" value="50" class="slider" id="distanceRange">
                <br>

                <!-- Filter Button -->
                <br>
                <button class="form-control btn btn-primary" type="submit" name="submit">Filter</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-10">
          <h1>Results</h1>
          <?php
            $sql = "SELECT * FROM talent";
            $result = mysqli_query($mysqli, $sql);
            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                echo "<table class='table table-bordered'>";
                    echo "<tr>";
                        echo "<th class='text-center'>ID</th>";
                        echo "<th class='text-center'>Name</th>";
                        echo "<th class='text-center'>Type</th>";
                        echo "<th class='text-center'>Country</th>";
                        echo "<th class='text-center'>County</th>";
                        echo "<th class='text-center'>Town</th>";
                        echo "<th class='text-center'>Distance</th>";
                    echo "</tr>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                        echo "<td class='text-center'><a href=../talent/talent_index.php?talent_id=" .$row['talent_id'].
												">Profile</a></th>";
                        echo "<td class='text-center'>" . $row["talent_name"] . "</th>";
                        echo "<td class='text-center'>" . $row["talent_type"] . "</th>";
                        echo "<td class='text-center'>" . $row["talent_country"] . "</th>";
                        echo "<td class='text-center'>" . $row["talent_county"] . "</th>";
                        echo "<td class='text-center'>" . $row["talent_town"] . "</th>";
                        echo "<td class='text-center'>" . $row["talent_distance"] . "</th>";
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
      </div>
    </div>
  <!-- Footer -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_footer.php"); ?>
</div>
