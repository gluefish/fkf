<!--
registrationhandler.php
the registration implementation page for fkf2
Lou wilson July 2017
-->
<?php
	session_start();
	date_default_timezone_set('America/Los_Angeles');
	$_SESSION["starttime"] = date('m-d-Y H:i:s');
	$_SESSION["sessname"] = "register";

	$uname = $_POST["email"];
	$fname = $_POST["FirstName"];
	$mname = $_POST["MiddleName"];
	$mdname = $_POST["MaidenName"];
	$lname = $_POST["LastName"];
	$pname = $_POST["PreferredName"];
	$relationship = $_POST["Relationship"];
	$bdate = $_POST["Birthdate"];
	$phone = $_POST["userphone"];
	$street = $_POST["userstreet"];
	$city = $_POST["usercity"];
	$state = $_POST["userstate"];
	$zip = $_POST["userzip"];
	$password1 = $_POST["pass1"];
	$password2 = $_POST["pass2"];
	$share = $_POST["share"];
	$xmas = $_POST["xmas"];
	if ($share == "share_yes") {
		$share = true;
		$notifyshare = false;
	}else{
		if ($share == "share_depends") {
			$share=false; 
			$notifyshare=true;
		}else{
			$share=false;
			$notifyshare=false;
		}
	}		
	if ($xmas == "xmas_yes") {
		$xmas=true; 
	}else {
		$xmas=false;
	}
	
//Write the head and body tags.
	echo "<html>\r\n";
	echo "<title>Login Handler</title>\r\n";
	echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\">\r\n";
	echo "</head>\r\n";
	echo "<body>\r\n";
	echo "<center><img src=\"./images/website-logo.jpg\" alt=\"Forbes Family Logo\" width=\"806\" height=\"90\"/><br></center>";


//Open the database
	include "commfunc.php";

//Check for the presence of the user email in the database.  
//if eof then  'If it's not there, add the record.

//this query successfully inserts this stuff into the db in godaddy's manager.
	$bdate=date("Y-m-d",strtotime($bdate));
	$sql=
	"INSERT INTO `users` (
		`users_index`, 
		`username`, 
		`password`, 
		`firstname`, 
		`middlename`, 
		`maidenname`, 
		`lastname`, 
		`preferredname`, 
		`relationship`, 
		`birthdate`, 
		`phone`, 
		`address`, 
		`city`, 
		`state`, 
		`zip`,
		`share`,
		`notifyshare`,
		`christmascardlist`) 
	VALUES (
		(SELECT MAX(users_index)+1 FROM users usr),
		'$uname', 
	  	'$password1', 
		'$fname', 
		'$mname', 
		'$mdname', 
		'$lname', 
		'$pname', 
		'$relationship', 
		'$bdate', 
		'$phone', 
		'$street', 
		'$city', 
		'$state', 
		'$zip',
		'$share',
		'$notifyshare',
		'$xmas')";

//ADD error handling here
	//echo "SQL: " . $sql;
	try {
		$result = mysqli_query(connect(), $sql);
		wLog($uname . " Registered.");
	} catch( Exception $e) {
		wLog($uname . " Registration FAILED.");
	}

//...send an email to the admin account...
//LOOK UP who has the highest access level, send the email to that person

	$sqladmin = "select username from users order by userlevel desc limit 1";
	$lvl_result = mysqli_query(connect(), $sqladmin);
	$row = mysqli_fetch_assoc($lvl_result);
	$admin = $row["username"];

	$to = $admin;
	$subject = "New Record on FKF";
	$message = "There is a new FKF record entered by " . $fname . " " . $lname . "\r\n";
	$message .= "\nCarolyn Please write up a message to send to the admin... \r\n";
	$message .= "To see/edit the database, go to:\r\n";
	$message .= "http://gluefish.com/fkf2/dbedit.php?server=97.74.31.73&username=forbkimb&db=forbkimb&select=users";
	$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$Header .= 'From: FKF Administrator <gluefish@gmail.com >' . "\r\n";
	ini_set('SMTP', "relay-hosting.secureserver.net");
	ini_set('smtp_port', "25");
	if(mail($to, $subject, $message, $Header))
		echo "Admin email sent successfully.<br>";
	else 
		echo "Admin email send failed.<br>";

//...and send mail to the applicant.
	$to = $uname;
	$subject = "Welcome to the Forbes-Kimball-Family website";
	$welcome = file_get_contents('./welcome.txt');
	$welcome = str_replace("'","`", $welcome);
	$message = str_replace("\n", "<br>", $welcome);
	$Header = 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	$Header .= 'From: Administrator <' . $admin . '>' . "\r\n";
	ini_set('SMTP', "relay-hosting.secureserver.net");
	ini_set('smtp_port', "25");
	if(mail($to, $subject, $message, $Header))
		echo "Participant email sent successfully<br>";
	else 
		echo "Participant email send failed.<br>";

//Complete the web page.
    echo "User Name: " . $uname . "<br>";
	echo "session name: " . $_SESSION["sessname"] . "<br><br>";
	echo "</body>\r\n";
	echo "</html>\r\n";
?>	

