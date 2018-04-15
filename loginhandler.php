
<!--	
Name: 	loginhandler.php
Date: 	6/12/2017
Author: Lou Wilson
Purpose:Validate login name, password, and user level,
and forward appropriately. This page does not generate HTML code.	session_start(); 
-->

<?php
	session_start();	
	date_default_timezone_set('America/Los_Angeles');
	$_SESSION["starttime"] = date('m-d-Y H:i:s');
	$_SESSION["sessname"] = "login";

	echo '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">';
	echo '<?xml version="1.0" encoding="utf-8"?>';
	//echo 'Session Started: ' . $_SESSION["starttime"] . "<br>";
	
	include ("commfunc.php");
	//connect();
	//echo 'After commfunc: '; 
	//echo 'Session Name: ' . $_SESSION['sessname'] . "<br>";
	
	/* Strategy for password check
	$_SESSION['logged_in'] = false;
	$_SESSION['successful_attempt'] = false;
	$_SESSION['login_attempt'] = 1;
	*/

	//Answering the Password section
	$loggedin = false;
	$reason = "Unknown";
	$uname = $_POST["uname"];
	$pword = $_POST["pword"];

	//Searching for username in database
	$sql = "SELECT * FROM users WHERE username = '" . $uname . "'";

	$result = mysqli_query(connect(), $sql);

	//If 1 and only 1 is found
    if (mysqli_num_rows($result) == 1)
	{	// Get data from the found row
        while($row = mysqli_fetch_assoc($result)) 
        {
			$db_username = $row["username"];
			$db_pword = $row["password"];
			$db_userlevel = $row["userlevel"];
			$db_firstname = $row["firstname"];
        }
		wLog($db_username . " Logged in.");
		$_SESSION['user'] = $db_username;
    } else {
		//Not found.  REPLACE with another crack at login page
		echo "Results: " . mysqli_num_rows($result);
		$_SESSION = array();
    	session_destroy();
		wLog("Unsuccessful Login Attempt by " . $uname);
        die ("invalid results");

    }

	//Close the database
    //mysqli_close($conn);
	
	//If the password was correct
	if ($db_pword == $pword)
	{	//If the user level was 1 or greater
		if ($db_userlevel > 0)
		{
			$loggedin = true;
			$_SESSION["username"] = $db_username;
			$_SESSION["firstname"] = $db_firstname;
			$_SESSION["userlevel"] = $db_userlevel;
			$_SESSION["logintime"] = date('m-d-Y H:i:s');
			echo $_SESSION["logintime"] . " Hello, " . $_SESSION["firstname"] . "<br>";
			header("Location: home.php");
			exit();
		} else { //Bounce.  MAKE A PAGE FOR THIS
			$loggedin = false;
			$_SESSION = array();
    		session_destroy();
			echo "Your account has not been validated yet. <br>Please contact the administrator.<br>";
			die();
		}
	} else { //bounce. SEND BACK TO LOGIN PAGE
		die ('Invalid user name or password.<br>');
	}
?>