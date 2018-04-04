<!-- Header -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_header.php"); ?>
<!-- DB Config -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php"); ?>
<body>
  <div class="container-fluid">
    <?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_nav.php"); ?>
    <div class="col-md-12">
      <h1 class='display-4'>Create a New User</h1>
      <p>This is a test system to insert new users into the database. The password field contains password hashing for extra security. This is not to be used in the production release.</p>
      <?php
        // Set Blank variable
        $username = '';
        $password = '';
      ?>

      <div class='row'>
        <div class='col-md-4 border'>
          <!-- Generic Form -->
          <form action="<?php echo $environment; ?>/user_session/functions/func_register.php" method="POST">
            <!-- Name -->
            <label>Name:</label>
            <input class='form-control' type="text" name="username"><br>

            <!-- Password -->
            <label>Password:</label>
            <input class='form-control' type="password" name="password"><br>

            <!-- Submit Button -->
            <input class='btn btn-primary' type="submit" name="add_user" value='Submit'>
        </form>
      </div>
    </div>

    </div>
  <!-- Footer -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_footer.php"); ?>
</div>
