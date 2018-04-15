<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Dorothy's Page</title>
<style type="text/css">

.style1 {
	color: #FFFF00;
	font: bold;
}
body {
	background-color: #FFCC99;
}
.style2 {color: #FF0000}

</style>
</head>

<?php
  session_start();
  include "headinginclude.php";
  include "commfunc.php";
  wLog("--User" . $_SESSION["user"] . " Navigated to Dorothys-page");
?>


<table width="50%" border="0" cellpadding="0" align=center>
  <tr>
    <td><h1 align="center" class="style1 style2">Dorothy's Page </h1></td>
  </tr>
</table>
<table width="50%" border="1" cellpadding="1" align=center>
  <tr>
    <td  align=center><p><img src="images/Dorothy,Roy2010.jpg" alt="Dorothy,Roy" width="373" height="280" /></p>
      <p>Royal &amp; Dorothy Tils </p></td>
  </tr>
</table>
<table width="50%" border="1" cellpadding="1" align=center>
  <tr>
    <td align=center><p><img src="images/Kirk-Family.jpg" alt="Kirk&amp;fam" width="217" height="315" /></p>
    <p> Jill McCauley, Kirk Lane, Garrett, Bailey</p></td>
    <td align=center><p><img src="images/Kirk2010.jpg" alt="Kirk" width="231" height="308" /></p>
    <p>Kirk Lane </p></td>
  </tr>
  <tr>
    <td colspan="2" align=center><p><img src="images/GarrettLane2010.jpg" alt="Garrett" width="275" height="287" /></p>
    <p>Garrett Lane </p></td>
  </tr>
</table>
<? include "FooterInclude.php" ?>
</body>
</html>
