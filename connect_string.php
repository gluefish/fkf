<?php
	//This string is for use on the localhost (Mac 'raxicoricofallapatorius') server.
	$con = mysqli_connect("45.40.164.103", 'dbmine, 'G0ldf!ng') or die('Could not connect to mysql server.' );
	//$con = mysql_connect("localhost", 'root', 'root') or die('Could not connect to mysql server.' );
	
	mysqli_select_db('dbmine', $con) or die('Could not select database!?');	
?>