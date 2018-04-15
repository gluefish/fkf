<!--
//commfunc.php
//a collection of common functions to be included as part of all php files
//lou wilson 6/13/17
-->
<?php
    function connect() {
        //echo "commfunc - Session started " . $_SESSION["starttime"] . "<br>";
        $servername = '97.74.31.73'; 
        $username = 'forbkimb';
        $password = 'G0ldf!ng';
        $dbname = 'forbkimb';

        // Create connection
        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        //echo "Commfunc: Session: " . $_SESSION["starttime"] . "<br>";
        //echo "Commfunc: Session Name: " . $_SESSION["sessname"] . "<br>";
        //echo "Commfunc: Connected successfully.<br>";
        return $conn;
    }
    function wLog($msg) {
        $fn = "logs/" . date("ymd-") . "logfile.txt";
        date_default_timezone_set("America/Los_Angeles");
        $msg = "\n" . date("m/d/y h:i:s ") . $msg;
        $fp = fopen($fn, "a");
        fwrite($fp, $msg);
        fclose($fp);
    }
?>