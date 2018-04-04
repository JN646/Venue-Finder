<!-- Header -->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_header.php"); ?>
<!-- DB Config -->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php"); ?>
<body>
  <div class="container-fluid">
    <?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_nav.php"); ?>
    <div class="col-md-12">

      <?php
        $username = 'David';
        $password = 'MyPassword';

        $password = password_hash($password, PASSWORD_DEFAULT);

        if ($_POST['add_user'] == 'Submit') {
            $sql = "INSERT INTO user (username, password) VALUES ('$username', '$password')";

            if (mysqli_query($mysqli, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($mysqli);
            }

            mysqli_close($mysqli);
        } else {
            echo 'Function not called.';
        }
      ?>

    </div>
  <!-- Footer -->
<?php include($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_footer.php"); ?>
</div>
