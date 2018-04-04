<?php
/**
 * User Management
 */
class User
{
  var $username;
  var $password;

  function __construct($argument)
  {
    # code...
  }

  function CreateUser()
  {
    # code...
  }
}

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

      // Usage: echo 'MyApplication ' . ApplicationVersion::get();
  }

  class StatCounters
  {
      // Counts the number of talent on the system.
      public static function counterTalent()
      {
          include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php");
          $query = "SELECT COUNT(*) FROM talent";
          $result = mysqli_query($mysqli,$query);
          $rows = mysqli_fetch_row($result);

          return $rows[0];
      }

      // Counts the number of venues on the system.
      public static function counterVenues()
      {
          include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php");
          $query = "SELECT COUNT(*) FROM venue";
          $result = mysqli_query($mysqli,$query);
          $rows = mysqli_fetch_row($result);

          // Debug increase value.
          $rows[0] = $rows[0] * 1;

          // Simplify the number if over 1000.
          if ($rows[0] > 1000) {
            // If over 1000.
            $rows[0] = number_format((float)$rows[0] / 1000, 2, '.', '')  . "K";
          }

          return $rows[0];
      }

      // Counts the number of users on the system.
      public static function counterUsers()
      {
          include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php");
          $query = "SELECT COUNT(*) FROM user";
          $result = mysqli_query($mysqli,$query);
          $rows = mysqli_fetch_row($result);

          // Debug increase value.
          $rows[0] = $rows[0] * 1;

          // Simplify the number if over 1000.
          if ($rows[0] > 1000) {
            // If over 1000.
            $rows[0] = number_format((float)$rows[0] / 1000, 2, '.', '')  . "K";
          }

          return $rows[0];
      }

      // Counts the number of events on the system.
      public static function counterEvents()
      {
          include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php");
          $query = "SELECT COUNT(*) FROM events";
          $result = mysqli_query($mysqli,$query);
          $rows = mysqli_fetch_row($result);

          // Debug increase value.
          $rows[0] = $rows[0] * 1;

          // Simplify the number if over 1000.
          if ($rows[0] > 1000) {
            // If over 1000.
            $rows[0] = number_format((float)$rows[0] / 1000, 2, '.', '')  . "K";
          }

          return $rows[0];
      }
    }
 ?>
