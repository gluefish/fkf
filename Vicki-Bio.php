<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Untitled Document</title>
<style type="text/css">

body {
	background-color: #CCCCFF;
}
.style1 {color: #000000}

</style>
</head>

<?php
  session_start();
  include "headinginclude.php";
  include "commfunc.php";
  wLog("--User" . $_SESSION["user"] . " Navigated to Vicki-bio");
?>

<table width="80%" border="5" cellspacing="5" cellpadding="5" align="center">
  <tr>
    <td width="17%" bgcolor="#FFE9FA">&nbsp;</td>
    <td width="65%" bgcolor="#FFFFFF"><center class="style1">
      <img src="images/Vicki2.jpg" alt="Vicki"  height="200" />
    </center></td>
    <td width="18%" bgcolor="#FFE9FA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFE9FA">&nbsp;</td>
    <td bgcolor="#FFFFFF"><h2 align="center">Biography of Marie Eleanor Forbes: </h2>
      <h2 align="center">aka Vicki Marie Rector </h2>
      <p align="center"><span class="style1">May 20, 2003 <br />
      </span>      </p>      </td>
    <td bgcolor="#FFE9FA">&nbsp;</td>
  </tr>
  <tr>
    <td bgcolor="#FFE9FA">&nbsp;</td>
    <td bgcolor="#FFFFFF"><div align="justify">
      <p class="style1">Engaged in the second half of
        the 100 years allotted in this reality, Vicki strives to be a perpetual
        student. Every endeavor not attempted is an eventual target, every book
        not read is a potential undertaking, every person not met is a future
        comrade.<br />
        Diverse in her interests, she enjoys Opera and Bruce Springsteen, Mozart
          Symphonies and Paul McCartney. Spanish, Contemporary Theology, prayer,
          hiking, counted cross-stitch, tennis and playing with babies top the
          list of her favorite hobbies.<br />
        As a wife of 41 years, mother of five amazing young women and grandmother
        of seven (now nine - ed.) precious children, life becomes more astonishing
        each day. Passionate about the respect for all human life, she is pro-life
        at both ends of human existence - opposing abortion, euthanasia and the
        death penalty.<br />
        Her motto is: We are not human beings seeking a divine existence; we
        are spiritual beings having a human experience.</p>
      </div></td>
    <td bgcolor="#FFE9FA">&nbsp;</td>
  </tr>
</table>
<?include "FooterInclude.php"?>
</body>
</html>
