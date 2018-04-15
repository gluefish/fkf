<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Barbie's page</title>
<style type="text/css">

body {
	background-color: #D0FFD6;
}

</style>
</head>

<?php
  session_start();
  include "headinginclude.php";
  include "commfunc.php";
  wLog("--User" . $_SESSION["user"] . " Navigated to Barbies-page");
?>


<table width="700" border="0" cellspacing="0" cellpadding="0"align=center>
  <tr>
    <td><center>
      <h1>Barbie's Page      </h1>
    </center>    </td>
  </tr>
  <tr>
    <td><center>
      <p align="center">&nbsp; &nbsp; &nbsp; &nbsp;<img src="images/Barbie&amp;Mike2.jpg" alt="Barb-Mike" width="292" height="195" /></p>
          </center>    </td>
  </tr>
  <tr>
    <td>      
      <center>
        Michael, Barbie Mundt 
      </center>      <center>
      </center></td>
  </tr>
</table>
<p align="center"><a href="Alicebio.asp">Alice's Biography </a></p>
<table width="50%" border="0" cellspacing="0" cellpadding="0" align=center>
  <tr>
    <td><center>
      <img src="images/1975Barb-twins.jpg" alt="Barb-twins" width="359" height="259" />
    </center>    </td>
    <td><img src="images/Barb-fam2006.jpg" alt="Barbie's Family" height="250 " /></td>
  </tr>
  <tr>
    <td><center>
      Barbie and the twins; Anne &amp; Alice, 1975 
    </center></td>
    <td><center>
      2006: Barbie &amp; Mike Mundt, Anthony &amp; Ann Belindo, Alice &amp; Robert
      Kennedy, Andrew Kennedy, Adrianna Kennedy
    </center></td>
  </tr>
  <tr>
    <td><img src="images/Barbie-4grp.jpg" alt="Barbie4" height="300" align="top" /></td>
    <td><p align="center"><a href="images/Ann,AnthonyBelindo.jpg"><img src="images/Ann,AnthonyBelindo.jpg" alt="Ann,AnthonyBelindo" height="300" border="0" align="top" /></a>
    </p>
	<p align="center">Ann and Anthony Belindo 2010 </p>
    </td>
  </tr>
  <tr>
    <td><center>
      Mike &amp; Barbie Mundt, Adrianna &amp; Andrew Kennedy 
    </center></td>
    
	<td>  </td>
  </tr>
</table>
<? include "FooterInclude.php" ?>
</body>
</html>
