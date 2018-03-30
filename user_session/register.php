<!-- Header -->
<?php include '../views/partials/_header.php';?>
<!-- DB Config -->
<?php include '../config/db_config.php';?>
<body>
  <div class="container">
    <!-- Nav -->
    <?php include '../views/partials/_nav.php';?>
    <div class="md-col-12">
      <h1>Register</h1>
      <?php
      // Define variables and initialise with empty values
      $username = $password = $confirm_password = "";
      $username_err = $password_err = $confirm_password_err = "";
      // Processing form data when form is submitted
      if($_SERVER["REQUEST_METHOD"] == "POST"){
          // Validate username
          if(empty(trim($_POST["username"]))){
              $username_err = "Please enter a username.";
          } else{
              // Prepare a select statement
              $sql = "SELECT id FROM user WHERE username = ?";
              if($stmt = $mysqli->prepare($sql)){
                  // Bind variables to the prepared statement as parameters
                  $stmt->bind_param("s", $param_username);
                  // Set parameters
                  $param_username = trim($_POST["username"]);
                  // Attempt to execute the prepared statement
                  if($stmt->execute()){
                      // store result
                      $stmt->store_result();
                      if($stmt->num_rows == 1){
                          $username_err = "This username is already taken.";
                      } else{
                          $username = trim($_POST["username"]);
                      }
                  } else{
                      echo "Oops! Something went wrong. Please try again later.";
                  }
              }
              // Close statement
              $stmt->close();
          }
          // Validate password
          if(empty(trim($_POST['password']))){
              $password_err = "Please enter a password.";
          } elseif(strlen(trim($_POST['password'])) < 6){
              $password_err = "Password must have at least 6 characters.";
          } else{
              $password = trim($_POST['password']);
          }
          // Validate confirm password
          if(empty(trim($_POST["confirm_password"]))){
              $confirm_password_err = 'Please confirm password.';
          } else{
              $confirm_password = trim($_POST['confirm_password']);
              if($password != $confirm_password){
                  $confirm_password_err = 'Password did not match.';
              }
          }
          // Check input errors before inserting in database
          if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
              // Prepare an insert statement
              $sql = "INSERT INTO user (username, password) VALUES (?, ?)";
              if($stmt = $mysqli->prepare($sql)){
                  // Bind variables to the prepared statement as parameters
                  $stmt->bind_param("ss", $param_username, $param_password);
                  // Set parameters
                  $param_username = $username;
                  $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
                  // Attempt to execute the prepared statement
                  if($stmt->execute()){
                      // Redirect to login page
                      header("location: ../talent/talent_welcome.php");
                  } else{
                      echo "Something went wrong. Please try again later.";
                  }
              }
              // Close statement
              $stmt->close();
          }
          // Close connection
          $mysqli->close();
      }
      ?>
      <body>
      <head>
      	<title>Register</title>
      </head>
          <div class="container">
              <h2>Sign Up</h2>
              <p>Please fill this form to create an account.</p>
              <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                  <div class="form-group <?php echo (!empty($username_err)) ? 'has-error' : ''; ?>">
                      <label>Username:<sup>*</sup></label>
                      <input type="text" name="username"class="form-control" value="<?php echo $username; ?>">
                      <span class="help-block"><?php echo $username_err; ?></span>
                  </div>
                  <div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
                      <label>Password:<sup>*</sup></label>
                      <input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
                      <span class="help-block"><?php echo $password_err; ?></span>
                  </div>
                  <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                      <label>Confirm Password:<sup>*</sup></label>
                      <input type="password" name="confirm_password" class="form-control" value="<?php echo $confirm_password; ?>">
                      <span class="help-block"><?php echo $confirm_password_err; ?></span>
                  </div>
                  <div class="form-group">
                      <input type="submit" class="btn btn-primary" value="Submit">
                      <input type="reset" class="btn btn-default" value="Reset">
                  </div>
                  <p>Already have an account? <a href="login.php">Login here</a>.</p>
              </form>
          </div>
    </div>
  <!-- Footer -->
<?php include '../views/partials/_footer.php';?>
</div>
