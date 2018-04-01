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

    function __construct(argument)
    {
      # code...
    }

    function EventCreate($new_event)
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

    function __construct(argument)
    {
      # code...
    }

    function TalentCreate($new_talent)
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

 ?>
