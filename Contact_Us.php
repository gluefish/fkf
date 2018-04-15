<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Contact Us</title>
<style type="text/css">

body {
	background-image: url(images/Tartan-bgd.jpg);
	background-repeat: repeat;
	margin-left: 5px;
	margin-top: 5px;
	margin-right: 5px;
	margin-bottom: 5px;
}

</style></head>
<?php
  session_start();
  include "headinginclude.php";
  include "commfunc.php";
  wLog("--User " . $_SESSION["user"] . " Navigated to Contact_Us");
?>
<table align="center">
  <tr>
    <td>
      <div style="width:638px;height:370px;overflow:hidden;">
        <iframe 
          src="https://docs.google.com/presentation/d/e/2PACX-1vRUQkU2NyupyYSV6E6OsbBTWCmDgE5OXkAtX89-xTMucl0eLwm1Q-xEnre7VpZSHCCCFtmCS00RuJ_a/embed?start=false&loop=false&delayms=3000" 
          frameborder="0" 
          width="640" 
          height="400" 
          align="middle">
        </iframe>  
      </div>
    </td>
  </tr> 
</table>      
<? include "FooterInclude.php" ?>
</body>
</html>
