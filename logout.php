<?php
	session_start();
    $fn = "logs/" . date("ymd-") . "logfile.txt";
	date_default_timezone_set("America/Los_Angeles");
	$msg = "\n" . date("m/d/y h:i:s ") . "--User " . $_SESSION['user'] . " has logged out.\n";
	$fp = fopen($fn, "a");
	fwrite($fp, $msg);
	fclose($fp);
	session_destroy();
	header("Location: fkf.php");
?>	
