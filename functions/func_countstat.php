<?php
// Function to count the number of differnt objects.

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

        return $rows[0];
    }

    // Counts the number of users on the system.
    public static function counterUsers()
    {
        include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php");
        $query = "SELECT COUNT(*) FROM user";
        $result = mysqli_query($mysqli,$query);
        $rows = mysqli_fetch_row($result);

        return $rows[0];
    }

    // Counts the number of events on the system.
    public static function counterEvents()
    {
        include ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/config/db_config.php");
        $query = "SELECT COUNT(*) FROM events";
        $result = mysqli_query($mysqli,$query);
        $rows = mysqli_fetch_row($result);

        return $rows[0];
    }
}
