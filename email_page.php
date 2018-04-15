<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<%@LANGUAGE="VBSCRIPT" CODEPAGE="1252"%>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>MailTo</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">

body {
	background-image: url(images/Tartan-bgd.jpg);
}

</style>
</head>

<?php
  session_start();
  include "headinginclude.php";
  include "commfunc.php";
  wLog("--User " . $_SESSION["user"] . " Navigated to email_page");
?>

<center>
<form action="mailto.php" method="post" name="emailrequest" id="emailrequest" >
<font face="Arial, Helvetica, sans-serif"><b>
<table width="75%" height="429" border="1" cellpadding="10" cellspacing="10" bgcolor="#000000">
  <tr>
    <td bgcolor="#FFFFFF" width="20%" height="39">Address:</td>
        <td bgcolor="#FFFFFF"width="80%"> Webmaster
          <input type="hidden" name="recipient" value="gluefish@gmail.com" /></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF"height="262">Message:</td>
    <td bgcolor="#FFFFFF"><textarea name="msg" cols="80" rows="20" ></textarea></td>
  </tr>
  <tr>
    <td bgcolor="#FFFFFF" height="39" ></td>
    <td bgcolor="#FFFFFF"><input name="Send" type="submit" value="Send" /></td>
  </tr></table>
</b></font>
</form>
</center>
<? include "FooterInclude.php" ?>
</body>
</html>
