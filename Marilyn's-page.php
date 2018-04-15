<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Untitled Document</title>
<style type="text/css">

body {
	background-color: #DDCBE8;
}

</style></head>

<?php
  session_start();
  include "headinginclude.php";
  include "commfunc.php";
  wLog("--User" . $_SESSION["user"] . " Navigated to Marilyn's-page");
?>


<table width="50%" border="0" cellspacing="0" cellpadding="0" align=center>
  <tr>
    <td><center><img src="images/Marilyn&amp;Ron7.JPG"  height="250" />
    </center>    
    </td>
  </tr>
  <tr>
    <td><center>
      Ron &amp; Marilyn Gandy 
    </center></td>
  </tr>
  <tr>
    <td><center>
      <img src="images/GandyFamily2008.jpg" alt="GandyFamily" width="473" height="293" />
    </center>    </td>
  </tr>
  <tr>
    <td>    <center>
      The Gandy Family: Marilyn, Rawn, Ron, Meagan (Rawn's wife), Evva, Michael 
    </center></td>
  </tr>
</table>
<?include "FooterInclude.php"?>
</body>
</html>
