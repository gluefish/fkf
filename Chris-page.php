<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Christopher Forbes</title>
<style type="text/css">

body {
	background-color: #66CC99;
}
.style1 {
	font-size: 36px;
	color: #FF6600;
}

</style></head>

<?php
  session_start();
  include "headinginclude.php";
  include "commfunc.php";
  wLog("--User" . $_SESSION["user"] . " Navigated to Chris-page");
?>


<table width="50%" border="0" cellspacing="0" cellpadding="0" align=center>
  <tr>
    <th colspan="3">      <center>
      <table width="43%" border="2" align="center" cellpadding="5" cellspacing="5">
        <tr>
          <td bgcolor="#FFFF99"><center>
            <span class="style1">Chris' Page </span>
          </center>          </td>
        </tr>
      </table>
      </center>      <center>
      </center>    <center>
    </center></th>
  </tr>
  <tr>
    <td colspan="3"><center>
      <p><img src="images/Chris,Shari2010.jpg" alt="Chris, Shari" width="432" height="323" />      </p>
      <p>Chris, Sheri Forbes   </p>
    </center>    </td>
  </tr>
  <tr>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td><img src="images/Chris-Forbes-family.jpg" alt="Chris Forbes family"  height="300" /></td>
    <td><img src="images/Devin-karate.jpg" alt="Devin" height="300" /></td>
    <td><img src="images/Devin-trophy.jpg" alt="Trophy"  height="300" /></td>
  </tr>
  <tr>
    <td><center>
      Chris &amp; Sheri and Devin Forbes
    </center></td>
    <td><center>
      Devin is a Karate student 
    </center></td>
    <td><center>
      Devin's Karate trophy 
    </center></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><center>
      <img src="images/Devin2010.jpg" alt="Devin 2010"  height="200" />
    </center>
    </td>
    <td><center>
    </center>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><center>
      Devin 2010 
    </center></td>
    <td>&nbsp;</td>
  </tr>
</table>
<? include "FooterInclude.php" ?>
</body>
</html>
