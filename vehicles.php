<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
    session_start();
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Forbes Family Album</title>

<!--link rel="stylesheet" href="Blue.css" type="text/css"/ -->
<style type="text/css">

.style1 {color: #000000}
body {
	background-image: url(images/Tartan-bgd.jpg);
}
.style9 {color: #FFFFFF}
</style>
</head>
<?php
  include "headinginclude.php";
  include "commfunc.php";
  /*if(!isset($_SESSION['userlevel']) || empty($_SESSION['userlevel'])) 
  {
      echo "YOWTCH - userlevel";
      header ("http://www.gluefish.com/fkf/fkf.php");
  }  else {
      echo "Userlevel: " . $_SESSION['userlevel'];
  }
*/
  wLog("--User " . $_SESSION["user"] . " Navigated to ForbesAlbum");
?>
<center>
<h1 class="style9">VEHICLES</h1>
<br>
<table width="1000";>

    <tr><td>&nbsp;</td><td width="80%">><<iframe border="0" width="1000" height="1000" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vQOREf1HVHFGmGNwF5VWzxCJAp7_2wCdhFG9rPpYRXybsL97tbjDZERE9doilPdoIwiVI1XDEuzg-oD/pubhtml?widget=true&amp;headers=false"></iframe></td><td>&nbsp;</td></tr>
</table>
</center>
<?php 
    include"FooterInclude.php"
?>
</body>
</html>


