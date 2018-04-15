<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
	<TITLE>Verification Page</TITLE>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
<!-- Put the Javascript validation code here -->
<script language="JavaScript">
<!--

//Validating the user input entries - client side.
function validate_form ( )
{	var f=document.registerrequest;
   	if (f.email.value == "" ){ alert ( "Please fill in the 'Email' box." ); return false; }
	if (f.email.value.indexOf("@") == -1) {alert ("Email must contain an '@' sign."); return false; }
	if (f.email.value.indexOf(".") == -1) {alert ("Email must contain a '.'"); return false; }
	if (f.FirstName.value == "" )  {alert ( "Please fill in the First Name box." ); return false; }
	if (f.LastName.value == "" )  {alert ( "Please fill in the Last Name box." ); return false; }
	if (f.Relationship.value == "" )  {alert ( "Please fill in the Relationship box." ); return false; }
	if (f.Birthdate.value == "" )  {alert ( "Please fill in the Birth Date box." ); return false; }
	if (f.Birthdate.value.length != 10 ) {alert ("Birthdate must be like '01/23/1945'"); return false; }
	if (f.Birthdate.value.indexOf("/") == -1) {alert ("Birthdate must be like '01/23/1945'"); return false; }
	if (f.userphone.value == "" )  {alert ( "Please fill in the Phone Number box." ); return false; }
	if (f.userphone.value.length != 12 ) {alert ("Phone must be like '555-555-5555'"); return false; }
	if (f.userphone.value.indexOf("-") == -1) {alert ("Phone must be like '555-555-5555'"); return false; }
	if (f.userstreet.value == "" )  {alert ( "Please fill in the Street box." ); return false; }
	if (f.usercity.value == "" )  {alert ( "Please fill in the City box." ); return false; }
	if (f.userstate.value == "" )  {alert ( "Please fill in the State box." ); return false; }
	if (f.userzip.value == "" )  {alert ( "Please fill in the Zip box." ); return false; }
	if (f.userzip.value.length != 5 ) {alert ("Zip must be like '12345'"); return false; }
	if (f.pass1.value == "" )  {alert ( "Please fill in the 1st Password box." ); return false; }
	if (f.pass2.value == "" )  {alert ( "Please fill in the 2nd Password box." ); return false; }
	if (f.pass1.value != f.pass2.value ) {alert ("Passwords must match."); return false; }
	if (f.pass1.value.length < 6 ) {alert ("Passwords must be 6 characters or more."); return false; }
    return true;
}

function ajaxGetData()
{
var xmlHttp;
try
  {
  // Firefox, Opera 8.0+, Safari
  xmlHttp=new XMLHttpRequest();
  }
catch (e)
  {
  // Internet Explorer
  try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
  catch (e)
    {
    try
      {
      xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    catch (e)
      {
      alert("Your browser does not support AJAX!");
      return false;
      }
    }
  }
  xmlHttp.onreadystatechange=function()
    {
    if(xmlHttp.readyState==4)
      {
      document.myForm.time.value=xmlHttp.responseText;
      }
    }
  xmlHttp.open("GET","time.php",true);
  xmlHttp.send(null);
  }

//-->
</script>

</HEAD>
<BODY bgcolor="#FFFFFF" >
<center>
  <font size="4" face="Arial, Helvetica, sans-serif"> <img src="./images/website-logo.jpg" alt="Forbes Family Logo" width="806" height="90"/><br />
  <br />
  <strong>Verification Page. Access limited to administrator(s).</strong><br />
  </font> 
  <form name="form1" method="post" action="">
    <font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif">Select 
  an entry in the database:</font><select name="select" onChange="ajaxGetData();">
    </select>
  </form>
</center>	
<form action="registerhandler.php" method="post" name="registerrequest" onSubmit="return validate_form();" >
  <font size="3" face="Arial, Helvetica, sans-serif">
<table cols="2" width="700" border="0" bordercolor="#99ffff" cellspace="5" cellpadding="5" align="center">
    <tr> 
      <td valign="top" bgcolor="#CCFFFF">Email Address<font face="arial"> <font size="3">(</font>user 
        name):</font></td> 
      <td bgcolor="#CCFFFF"><input type="text" name="email" size="50" maxlength="50"/></td>
	</tr><tr>
      <td valign="top" bgcolor="#CCFFFF" >First Name: </td>
      <td bgcolor="#CCFFFF" ><input type="text" name="FirstName" size="25" maxlength="25"/></td>
	</tr><tr>
      <td valign="top" bgcolor="#CCFFFF" >Middle Name:</td>
      <td bgcolor="#CCFFFF" > <input type="text" name="MiddleName" size="25" maxlength="25"/></td>
	</tr><tr>
      <td  valign="top" bgcolor="#CCFFFF">Last Name (maiden):</td>
      <td bgcolor="#CCFFFF" > <input type="text" name="LastName" size="25" maxlength="25"/></td>
	</tr><tr>
      <td valign="top" bgcolor="#CCFFFF"> Relationship to Mary & George:</td>
      <td bgcolor="#CCFFFF"><input type="text" name="Relationship" size="35" maxlength="35"/></td>
	</tr><tr>
      <td valign="top" bgcolor="#CCFFFF">Birth date: (<font size="3" face="arial">like 
        '01/23/1945' </font>): </td>
      <td bgcolor="#CCFFFF"> <input type="text" name="Birthdate" size="12" maxlength="10" /></td>
    </tr><tr>
      <td  valign="top" bgcolor="#CCFFFF">Phone Number: (like '555-555-5555')</td>
      <td bgcolor="#CCFFFF" > <input type="text" name="userphone" size="15" maxlength="15"/></td>
	</tr><tr>
	  <td  valign="top" bgcolor="#CCFFFF">Street Address:</td>  
      <td bgcolor="#CCFFFF" ><input type="text" name="userstreet" size="25" maxlength="25"/></td>
	</tr><tr>
      <td  valign="top" bgcolor="#CCFFFF">City:</td>
      <td bgcolor="#CCFFFF" > <input type="text" name="usercity" size="30" maxlength="30"/></td>
	</tr><tr>
	  <td  valign="top" bgcolor="#CCFFFF">State:</td>
      <td bgcolor="#CCFFFF" ><input type="text" name="userstate" size="2" maxlength="2" /></td>
	</tr><tr>
      <td  valign="top" bgcolor="#CCFFFF">Zip: </td>
      <td bgcolor="#CCFFFF" ><input type="text" name="userzip" size="5" maxlength="5"/></td>
	</tr><tr>
      <td  valign="top" bgcolor="#CCFFFF">Password:</td>
      <td bgcolor="#CCFFFF" ><input type="password" name="pass1" size="20" maxlength="20"/></td>
	</tr><tr>
      <td  valign="top" bgcolor="#CCFFFF">re-enter password:</td>
      <td bgcolor="#CCFFFF" ><input type="password" name="pass2" size="20" maxlength="20"/></td>
	</tr>
    <tr> 
      <td bgcolor="#CCFFFF">Access Level:</td>
	  <td bgcolor="#CCFFFF"><input type="radio" name="radiobutton" value="radiobutton" />None<br />
          <input type="radio" name="radiobutton" value="radiobutton" />Read-Only <br />
          <input type="radio" name="radiobutton" value="radiobutton" />Edit<br />
          <input type="radio" name="radiobutton" value="radiobutton" />Administrator
      </td>
    </tr>
    <tr> 
      <td bgcolor="#CCFFFF">Share address, phone number and email?</td>
	  <td bgcolor="#CCFFFF"><input type="radio" name="share" value="share_yes" checked="checked"/>Yes<br />
       	  <input type="radio" name="share" value="share_no" />No
      </td>
    </tr><tr>
      <td  bgcolor="#CCFFFF"><center><input type="submit" value="Register"/></center></td>
      <td  bgcolor="#CCFFFF"><center><input name="Reset" type="reset" value="Reset" /></center></td>
    </tr>
  </table></font>
</form>
</BODY>
</HTML>
