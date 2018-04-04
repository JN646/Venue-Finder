<!-- Header -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_header.php"); ?>
<!-- DB Config -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php"); ?>
<body>
  <div class="container-fluid">
    <?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_nav.php"); ?>
    <div class="col-md-12">
      <?php
        $username = '';
        $password = '';
      ?>

      <form action="<?php echo $environment; ?>/user_session/functions/func_register.php" method="POST">
        Name: <input type="text" name="name"><br>
        Password: <input type="text" name="password"><br>
      <input type="submit" name="add_user" value='Submit'>
    </form>

    </div>
  <!-- Footer -->
<?php include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/views/partials/_footer.php"); ?>
</div>
