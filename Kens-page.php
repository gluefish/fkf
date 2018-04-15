<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Ken's Page</title>
<style type="text/css">

body {
	background-color: #CCCCFF;
}

</style></head>

<?php
  session_start();
  include "headinginclude.php";
  include "commfunc.php";
  wLog("--User" . $_SESSION["user"] . " Navigated to Kens-page");
?>


<table width="50%" border="0" cellpadding="5" align=center>
  <tr>
    <td><center>
      <h1>Kenneth's Page      </h1>
    </center></td>
  </tr>
  <tr>
    <td><center>
      <p><img src="images/Ken,Corky2010.jpg" alt="Ken, Corky" width="432" height="294" /></p>
      <p>Kenneth George Forbes and Corky 2010    </p>
    </center>      </td>
  </tr>
</table>
<table width="500" border="0" cellpadding="5" align=center>
  <tr>
    <td colspan="2"><p align="center"><img src="images/KenFamily1975-color%20.jpg" alt="Ken1975"  height="200" /></p>
    <p align="center">Ken &amp; Nancy Forbes, Lisa, Jonathan 1975 </p></td>
    <td colspan="5"><center>
      <p><img src="images/KensFamily.jpg" alt="Ken's Family" width="541" height="277" /></p>
      <p>Ken &amp; Corkie. Ken's kids: Lisa with husband Hal, and sons Martin, Ethan and Joseph.Jeremy with wife Irene.
        Corky's kids: Michelle, Allison and Luke. Please let me know who else is there. </p>
      </center>      <center>
        </center></td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2"><center>
      <img src="images/Lisa,hubby,son.jpg" alt="Lisa Family" width="432" height="194" />Lisa and Hal Goldstein, son Martin 
    2010
    </center>
      <center>
      </center></td>
    <td rowspan="2"><center>
      <p><img src="images/Jon-gr-copy.jpg" alt="Jon" width="128"  height="157" /></p>
      <p>Jonathan Forbes   </p>
    </center>    </td>
    <td rowspan="2"><p align="center"><img src="images/DawnSnow-Forbes.jpg" alt="Dawn" width="79" height="120" /></p>
    <p align="center">Dawn Snow-Forbes </p></td>
    <td><center>
        <p><img src="images/Jeremy2010.jpg" alt="Jeremy" width="160" height="169" align="top" /></p>
        <p>&nbsp;</p>
    </center>    </td>
    <td><img src="images/Irene.JPG" alt="Irene" width="134" height="187" align="top" /></td>
    <td rowspan="2"><center>
      <p>&nbsp;</p>
      <p><img src="images/Kevin,Kathleen%20Forbes&amp;baby.jpg" alt="Kevin &amp; Family" width="213" height="157" /></p>
      <p>Kevin and Kathleen Forbes  and son </p>
    </center>    </td>
  </tr>
  <tr>
    <td colspan="2"><center>
      Jeremy and Irene Forbes 2010 
    </center></td>
  </tr>
  <tr>
    <td><p align="center"><img src="images/EthanAndFamily.jpg" alt="EthanFamily" width="130" height="97" /></p>
      <p align="center">Ethan, Kimberly and baby Evangeline Beltran 
    2009 </p></td>
    <td><center>
      <p><img src="images/Lisa%27a%20sons2009.jpg" alt="Lisa's sons" width="117" height="148" />      </p>
      <p>Joseph &amp; Ethan Beltran<br />
      Martin Goldstein </p>
    </center>
    </td>
    <td colspan="2"><center>
      <p><img src="images/Tove,%20Jill,%20Lindsey.jpg" alt="3 Sisters" width="263" height="120" /></p>
      <p>Tove and Jill Westrup, Lindsey Edwards<br />
        aka<br />
      Jennifer, Jessica and Kierelle Forbes  </p>
    </center>    </td>
    <td colspan="2"><p align="center"><img src="images/Paul2010.jpg" alt="Paul" width="154" height="182" /></p>
    <p align="center">Jeremy's son Paul, 2010 </p></td>
    <td><center>
    </center>    </td>
  </tr>
</table>
<?include "FooterInclude.php"?>
</body>
</html>
