<!-- Footer -->

<!-- Get Application Version from Git -->
<?php
class ApplicationVersion
{
    // Define version numbering
    const MAJOR = 0;
    const MINOR = 2;
    const PATCH = 2;

    public static function get()
    {
        // Prepare git information to form version number.
        $commitHash = trim(exec('git log --pretty="%h" -n1 HEAD'));

        // Get date and time information.
        $commitDate = new \DateTime(trim(exec('git log -n1 --pretty=%ci HEAD')));
        $commitDate->setTimezone(new \DateTimeZone('UTC'));

        // Format all information into a version identifier.
        return sprintf('v%s.%s.%s-dev.%s (%s)', self::MAJOR, self::MINOR, self::PATCH, $commitHash, $commitDate->format('Y-m-d H:m:s'));
    }
}
// Usage: echo 'MyApplication ' . ApplicationVersion::get();
?>

<!-- Footer Content -->
<hr>
<p class="text-center">Copyright &copy; 2018 Copyright Holder All Rights Reserved.</p>

<!-- Display Version information -->
<p class="text-center" style='font-size: 80%;'><?php echo 'Version ' . ApplicationVersion::get(); ?></p>

<!-- The Debug navigation bar. -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <ul class="navbar-nav mr-auto">
    <li class="nav-item"><a class="nav-link" href="<?php echo $environment; ?>user_session/login.php">Login</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo $environment; ?>/talent/talent_index.php">Talent</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo $environment; ?>user_session/register.php">Register</a></li>
    <li class="nav-item"><a class="nav-link" href="<?php echo $environment; ?>/talent/talent_listing.php">Listing</a></li>
  </ul>
</nav>

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
