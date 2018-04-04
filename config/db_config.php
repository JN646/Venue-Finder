 <?php
require_once ($_SERVER["DOCUMENT_ROOT"] . "/venue/venue-finder/lib/meekrodb.2.3.class.php");

//Customise this file to match your server configutation. If you are unsure what settings these need to be, then contact you system administrator.

//MySQL connection
//Server, Username, Password, Database.
$mysqli = new mysqli('localhost', 'root', '', 'venues');

//If connection fail
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_errno . ') '
            . $mysqli->connect_error);
}

// Meekro Setup
DB::$user = 'root';
DB::$password = '';
DB::$dbName = 'venues';
?>
