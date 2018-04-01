<?php
  /**
   * Event Class
   */
  class EventBooking
  {
    var $eventName;
    var $eventTalentId;
    var $eventVenueId;
    var $eventDate;
    var $eventTime;

    function __construct($argument)
    {
      # code...
    }

    function EventCreate()
    {
      # code...
    }

    function EventEdit()
    {
      # code...
    }

    function EventDelete()
    {
      # code...
    }
  }

  /**
   * Talent
   */
  class Talent
  {
    var $talenttName;
    var $talentType;
    var $talentSubtype;
    var $talentDistance;

    function __construct($argument)
    {
      # code...
    }

    function TalentCreate()
    {
      # code...
    }

    function TalentEdit()
    {
      # code...
    }

    function TalentDelete()
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
 ?>
