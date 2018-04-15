<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Vicki's page</title>
<style type="text/css">

.style1 {
	color: #FF0000;
	font: bold;
}
body {
	background-color: #FFFFC1;
}

</style>
</head>

<?php
  session_start();
  include "headinginclude.php";
  include "commfunc.php";
  wLog("--User" . $_SESSION["user"] . " Navigated to Vickis-page");
?>

  
</table>
<table width="50%" border="0" cellpadding="1" align=center>
  <tr>
    <td><h1 align="center" class="style1">Vicki's Page </h1></td>
  </tr>
</table>
<table width="50%" border="0" cellspacing="0" cellpadding="0" align=center>
  <tr>
 
  </tr>
</table>
<p>&nbsp;</p>
<table width="100%" border="0" cellpadding="1" align=center>
  <tr>
    <td colspan="5" align=center><center>
        <img src="images/Rector.jpg" alt="Rector"  height="250" />
        <br />Dan, Vicki Rector 
        <br /><a href="Vicki-Bio.php">Vicki's Biography</a>    </p>
      </center>      </td>
  </tr>
</table>
<center>
</center>
<table width="100%" border="0" cellpadding="1">
  <tr valign="bottom">
    <td align="center" valign="top"><img src="images/Gillman.jpg" alt="Gillmans"  height="250" /><br />
      Scott,
      Danielle &amp; Deborah Gillman </td>
    <td align="center" valign="top"><img src="images/Herrin.jpg" alt="Herrins"  height="250" /><br />
    Sean, Kaia &amp; Wendy Herrin </td>
    <td align="center" valign="top"><img src="images/Hagan.jpg" alt="Hagans"  height="250" /><br />
      Mitchell, Kathleen, 
      <br />
      Bryce, Mariah &amp; Dylan Hagan    </td>
  </tr>
  <tr valign="bottom">
    <td align="center" valign="top"><img src="images/Benjamins.jpg" alt="Benjamins" height="250" />
      <br />
      Jennifer, Keith, Duncan &amp; Cameron Benjamin </p></td>
    <td align="center" valign="top"><img src="images/Melendez.jpg" alt="Melendez"  height="250" /><br/> Pollyanna,
      Jorge, Sabrina &amp; Sebastian Melendez
      </td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
</table>
<?include "FooterInclude.php"?>
</body>
</html>
