<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Mary Kimball's Page</title>

<style type="text/css">

body {
	background-color: #000066;
}

</style></head>

<?php
  session_start();
  include "headinginclude.php";
  include "commfunc.php";
  wLog("--User " . $_SESSION["user"] . " Navigated to MomsPage");
?>




<table width="50%" border="0" cellspacing="5" cellpadding="5" align="center">
  <tr>
    <td bgcolor="#FFCC99"><center>
      <p><img src="images/mary_kimball2.jpg" alt="Mary Kimball" width="202" height="273" />      </p>
      <p>Mary Eleanor Kimball<br /> Oct.23,1923   </p>
    </center>    </td>
  </tr>
  <tr>
    <td bgcolor="#66CCCC"><center>
      <a href="MomAdultAlbum/index.htm">Adult Photo Album      </a>
    </center></td>
  </tr>
  <tr>
    <td bgcolor="#66CCCC"><center>
      <a href="MomChildAlbum-2/index.htm">Child Photo Album      </a>
    </center></td>
  </tr>
</table>
<?include "FooterInclude.php"?>
</body>

</html>
