<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Photo Album</title>
<style type="text/css">
body {
	background-image: url(images/Tartan-bgd.jpg);
}

</style></head>

<?php
  session_start();
  include "headinginclude.php";
  include "commfunc.php";
  wLog("--User" . $_SESSION["user"] . " Navigated to photo_page");
?>

<table cellpadding=3 cellspacing=0 width="800" align="center">
  <!--DWLayoutTable-->
 
    <tr>
    </tr></table>
	<br />
	<table width="50%" border="1" cellpadding="1" align=center>
      <caption>&nbsp;
      </caption>
      <tr>
        <td bgcolor="#FFFFFF"><center>
        The Ten Children of George and Mary Forbes. <br>From youngest to oldest.<br>Each picture is a link
          to that person's page. 
        </center></td>
      </tr>
</table>
    <table width="50%" border="0" cellspacing="0" cellpadding="0" align=center>
      <tr>
        <td><center>
          <img src="images/ten-kids1975.jpg" alt="ten kids 1971" width="461" height="230" border="0" />
        </center>        </td>
      </tr>
      <tr>
        <td bgcolor="#FFFFFF"><center>
        Patty, Bill, Chris, Marilyn, Margie, Barbie, Ken, Carolyn, Dorothy, Vicki
            - 1975
        </center></td>
      </tr>
    </table>
    <br/>
<table border="0" align=center cellpadding="0" cellspacing="0">
<tr height="10"><td bgcolor="#ccccff" ><p><a href="Ancestors-photos.php">&#160;Click
        here for Ancestor's Photos&#160;</a></p></td></tr></table>
	<br />
    
	<table width="80%" border="0" align="center" cellpadding="1">
     
	  <tr>
        <td bgcolor="#CCCCFF"><center>
          <a href="Vickis-page.php"></a>
          <a href="Vickis-page.php"><img src="images/vicki08-2.jpg" alt="Vicki" height="200" border="0" /></a>
        </center>        </td>
	    <td bgcolor="#CCCCFF"><center>
	      <a href="Dorothys-page.php"><img src="images/Dorothy2010.jpg" alt="Dorothy"  height="200" /></a>
        </center>	    </td>
	    <td bgcolor="#CCCCFF"><center>
	      <a href="Carolyns-page.php"></a>
	      <a href="Carolyns-page.php"><img src="images/Carolyn-4-2010.jpg" alt="Carolyn"  height="200" border="0" /></a>
	    </center>	    </td>
	    <td bgcolor="#CCCCFF"><center>
	      <a href="Kens-page.php"></a>
	      <a href="Kens-page.php"><img src="images/Ken-April2010.jpg" alt="Ken"  height="200" border="0" /></a>
        </center>	    </td>
	    <td bgcolor="#CCCCFF"><center>
	      <a href="Barbies-page.php"><img src="images/Barbie2010.jpg" alt="Barbie"  height="200" /></a>
	    </center>	    </td></tr>
	    <tr>
        <td bgcolor="#ccccFF"><center>
        Vicki Rector 
        </center></td>
        <td bgcolor="#ccccFF"><center>
        Dorothy Tils 
        </center></td>
        <td bgcolor="#ccccFF"><center>
        Carolyn Forbes 
        </center></td>
        <td bgcolor="#ccccFF"><center>
        Kenneth Forbes 
        </center></td>
        <td bgcolor="#ccccFF"><center>
        Barbara Mundt 
        </center></td>
		</tr><tr><td bgcolor="#CCCCFF"><center>
		  <a href="Margies-page.php"></a>
		  <a href="Margies-page.php"><img src="images/Margie-April2010.jpg" alt="Margie" height="200" border="0" /></a>
		  </center>
		</td>
	    <td bgcolor="#CCCCFF"><center>
	     
	      <a href="Marilyn%27s-page.php"></a>
	      <a href="Marilyn%27s-page.php"><img src="images/Marilyn2010.jpg" alt="Marilyn" height="200" border="0" /></a>
	    </center>	    </td>
	    <td bgcolor="#CCCCFF"><center>
	      <a href="Chris-page.php"></a>
	      <a href="Chris-page.php"><img src="images/Chris-Apr2010.jpg" alt="Chris"  height="200" border="0" /></a>
	    </center>	    </td>
	    <td bgcolor="#CCCCFF"><center>
	      <a href="Bills-page.php"></a>
	      <a href="Bills-page.php"><img src="images/Bill2009.jpg" alt="Bill" height="200" border="0" /></a>
	    </center>	    </td>
	    <td bgcolor="#CCCCFF"><center>
	      <a href="Pattys-page.php"></a>
	      <a href="Pattys-page.php"><img src="images/Patty 2007.jpg" alt="Patty"  height="200" border="0" /></a>
	      </center>	    </td>
      </tr>
      
        <td bgcolor="#ccccFF"><center>
        Margie Winkler 
        </center></td>
        <td bgcolor="#ccccFF"><center>
        Marilyn Gandy 
        </center></td>
        <td bgcolor="#ccccFF"><center>
        Chris Forbes 
        </center></td>
        <td bgcolor="#ccccFF"><center>
        Bill Forbes 
        </center></td>
        <td bgcolor="#ccccFF"><center>
        Patricia Forbes 
        </center></td>
      </tr>
</table>
<?include "FooterInclude.php"?>
</body>
</html>
