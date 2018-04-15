<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>About Us</title>

<style type="text/css">
  body {
    background-image: url(images/Tartan-bgd.jpg);
    background-repeat: repeat;
    margin-left: 20px;
    margin-top: 20px;
    margin-right: 20px;
    margin-bottom: 20px;
  }
  .style2 {
    color: #FFFFFF;
    font: bold;
    font-weight: bold;
  }

</style></head>

<?php
  session_start();
  include "headinginclude.php";
  include "commfunc.php";
  wLog("--User " . $_SESSION["user"] . " Navigated to AboutUs");
?>

<table width="50%" border="0" cellspacing="10" cellpadding="5"align="center">
  <tr>
    <td><center>
      <p><img src="images/Carolyn.jpg" alt="Carolyn"  height="200" />      </p>
      <p class="style2">Carolyn - Your Webmaster </p>
    </center>
    </td>
    <td><center>
      <p><img src="images/Lou2002.jpg" alt="Lou"  height="200" />      </p>
      <p class="style2">Lou - Website Database Specialist   </p>
    </center>
    </td>
  </tr>
</table>
<table width="700" align="center" cellpadding="5" cellspacing="5">
  <tr><td bgcolor="#FFFFFF">
<p align="center" class="style2">About Us</p>
<p>The Forbes-Kimball
  Family Website is designed for and about the members of the family consisting
  of the offspring and descendants of George Franklin Forbes and Mary Eleanor
  Kimball. </p>
<p>The purposes of the website are: </p>
<p>	1. To share the information I have gathered since
  1985 and continue to gather,  on the
  history and composition of the family.</p>
<p>2. To facilitate communication and connection
  between members of the family.</p>
<p>3. Where possible, to facilitate and encourage forgiveness
and reconciliation between estranged members of the family.</p>
<p>4. To promote in the members of the family, especially the younger ones, a
  sense of pride, belonging and identification. </p>
<p>5. To encourage all the members of the family to contribute
to this website.</p>
<p>6. To encourage the members of the family to share their
creative works and their accomplishments. </p>
<p>7. To be open to ideas and suggestions from the members
of the family. </p>
<p>Signed, <br />Your Relative and Web Master<br />
Carolyn Forbes</p>
<p>Your &quot;Unca Ooie&quot; and Database Expert<br/>
Louis Wilson<p>&nbsp; </p></td></tr></table>
<!--#include file="FooterInclude.asp"-->
</body>
</html>
