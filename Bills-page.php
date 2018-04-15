<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Bill's Page</title>
<style type="text/css">

body {
	background-color: #8BE8CC;
}
.style1 {
	font-size: xx-large;
	color: #0000FF;
}
.style2 {color: #003300}

</style></head>

<?php
  session_start();
  include "headinginclude.php";
  include "commfunc.php";
  wLog("--User" . $_SESSION["user"] . " Navigated to Bills-page");
?>


<table width="30%" align="center" border="2" cellspacing="2" cellpadding="2">
  <tr>
    <td bgcolor="#FFFFFF"><h1 align="center" class="style1 style2">Bill's Page </h1></td>
  </tr>
</table>
<p>&nbsp;</p>

<table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td colspan="4" border="0" cellspacing="0" cellpadding="0" align="center">
      <img src="images/FamilyPhoto1983-edit.jpg" alt="Bill-Jackie-kids"  height="250" />
      <br />Shannon (Stefan), Sarah (Genevieve), Jackie, Bill, Aaron, Ariel, 
     
    </center></td>
    <td  border="5" cellspacing="10" cellpadding="10" align="center"><img src="images/Bill&amp;family09edit.jpg" alt="photo blank"  height="350" /><br />Mary Lynn, Aaron, Ariel, Genevieve,<br />
Bill, <br />
Zachary, George </td>
    <td  border="5" cellspacing="10" cellpadding="10" align="center">&nbsp;</td>
  </tr></table>
  <table align="center"><tr>
    <td colspan="4" >      <center>
        <img src="images/Jackie.jpg" alt="Jacqueline Barton"  height="165" /><br>
      Jacqueline Marie Theresa Barton r.i.p.   <br />      
      <br> 
    </center>
    </td>
  </table>
	<table align="center">
      <!--DWLayoutTable-->
 
  </tr>
  <tr>
    <td height="228" colspace="2"><center>
    </center>
        <center>
          <img src="images/Stef-06.jpg" alt="Stef" height="154" /><br />
          Shannan William Dearborn Barton &quot;Stefan&quot;<br />
          <br />
      </center></td>
    <td colspace="2"><center>
      <img src="images/Ariel-Aaron-Sarah.jpg" alt="Aaron&amp;Sarah" height="154" /><br />
      Ariel, Aaron, Sarah &quot;Genevieve&quot;
    </center></td>
  </tr>
</table>
	<table align="center">
    <td ><center>
        <img src="images/Mario-Ariel2004.jpg" alt="Mario-Ariel"  height="154" /><br />Mario and Ariel Rasgado 
    </center>    </td>
    <td >      <center>
    <img src="images/Aaron,SarahForbes.JPG" alt="Aaron &amp; wife" height="154" /><br />
      Aaron and Sarah Forbes  
    </center>    </td>
    <td ><center>
        <img src="images/Sarah,Hubby.jpg" alt="Sarah, Hubby"   height="154" /><br />Genevieve and Jose Maldonado 
    </center>    </td>
    
</table>
<p>&nbsp;</p>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>

  </tr>
</table>
<? include "FooterInclude.php" ?>
</body>
</html>
