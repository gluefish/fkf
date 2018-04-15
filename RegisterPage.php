<!--
RegisterPage.php
Entry page for registering a new user for fkf2
Lou wilson July 2017
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<xml version="1.0" encoding="utf-8">

<HTML xmlns="http://www.w3.org/1999/xhtml">
<HEAD>
	<TITLE>Forbes Website Login</TITLE>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <script type="text/javascript" src="functions.js"></script>	

<!-- Put the Javascript validation code here -->
  <script language="JavaScript">
  //<!--
    function validate_login ( )
    {	var f=document.passwordrequest;
      if (f.uname.value == "" ){ alert ( "Please fill in the 'Username' box." ); return false;}
	    if (f.pword.value == "" )  {alert ( "Please fill in the 'Password' box." ); return false;}
      return true;
    }

    //Validating the required user input entries - client side.
    function validate_form ( )
    {	var f=document.registerrequest;
   	  if (f.email.value == "" ){ alert ( "Please fill in the 'Email' box." ); return false; }
	    if (f.email.value.indexOf("@") == -1) {alert ("Email must contain an '@' sign."); return false; }
	    if (f.email.value.indexOf(".") == -1) {alert ("Email must contain a '.'"); return false; }
	    if (f.FirstName.value == "" )  {alert ( "Please fill in the First Name box." ); return false; }
	    if (f.LastName.value == "" )  {alert ( "Please fill in the Last Name box." ); return false; }
	    if (f.pass1.value == "" )  {alert ( "Please fill in the 1st Password box." ); return false; }
	    if (f.pass2.value == "" )  {alert ( "Please fill in the 2nd Password box." ); return false; }
	    if (f.pass1.value != f.pass2.value ) {alert ("Passwords must match."); return false; }
	    if (f.pass1.value.length < 6 ) {alert ("Passwords must be 6 characters or more."); return false; }
      return true;
    }
  //-->
  </script>

</HEAD>
<BODY bgcolor="#FFFFFF" >
  <center>
    <font size="4" face="Arial, Helvetica, sans-serif"> <img src="./images/website-logo.jpg" alt="Forbes Family Logo" width="806" height="90"/><br />
    <br />
<!--    <strong>Web Site for the family of George Franklin Forbes and Mary Eleanor Kimball.*<br />
    If you already have your password, come on in!</strong><br />
    <br />
    </font> 
  </center>	
  <form name="passwordrequest" method="post" action="loginhandler.php" onSubmit="return validate_login();">
    <font size="3" face="Arial, Helvetica, sans-serif">
    <table width="700" border="0" cellspacing="5" cellpadding="5" align="center">
      <tr>
        <td valign="top" bgcolor="#FFFFCC">Enter Your Username (email address)</td> 
        <td bgcolor="#FFFFCC" colspan="2"><input type="text" id="uname" name="uname" size="50" maxlength="50"/></td>
      </tr><tr>
        <td width="300" bgcolor="#FFFFCC">Enter Your Password </td>  
        <td bgcolor="#FFFFCC"> <input type="password" id="pword" name="pword"  size="25" maxlength="25"/> </td>
        <td bgcolor="#FFFFCC" ><input type="submit" id="submit" name="submit"  value="Log In"/></td>
    </tr>
    <tr>
      <td colspan="3"><font size="1" face="Arial, Helvetica, sans-serif">*Access to this site 
        is restricted to the people who are descended from this couple, or are a spouse 
        of a descendant. (As of Dec. 2008, there are 91 people.). To register, enter your 
        information below. As a family member, you will receive a confirmation by email. </font>
      </td>
    </tr>
    </table>
    </font>
  </form>
  <center>
-->
    <font color="#FF0000" size="5" face="Arial, Helvetica, sans-serif"><strong>Registration</strong><br />
    To be added to the member list, fill in your info.</font> 
  </center>
  <form action="registerhandler.php" method="post" name="registerrequest" onSubmit="return validate_form();" >
  <font size="3" face="Arial, Helvetica, sans-serif">
  <table cols="2" width="700" border="0" bordercolor="#99ffff" cellspace="5" cellpadding="5" align="center">
      <tr> 
        <td width="299" valign="top" bgcolor="#CCFFFF"><font size="5" face="Arial, Helvetica, sans-serif" color="red"><strong>* 
          </strong></font><strong>Email Address:<br>
          </strong> (this will be your user name<font size="3" face="Arial, Helvetica, sans-serif">)</font></td> 
        <td width="475" bgcolor="#CCFFFF"><input type="text" name="email" size="50" maxlength="50"/></td>
    </tr><tr>
        <td valign="top" bgcolor="#CCFFFF" ><strong><font size="5" face="Arial, Helvetica, sans-serif" color="red"><strong>* 
          </strong></font><strong></strong>First Name:</strong> </td>
        <td bgcolor="#CCFFFF" ><input type="text" name="FirstName" size="35" maxlength="35"/></td>
    </tr><tr>
        <td valign="top" bgcolor="#CCFFFF" >Middle Name:</td>
        <td bgcolor="#CCFFFF" > <input type="text" name="MiddleName" size="35" maxlength="35"/></td>
    </tr><tr>
      <td valign="top" bgcolor="#CCFFFF">Maiden Name:</td>
        <td bgcolor="#CCFFFF" > <input type="text" name="MaidenName" size="35" maxlength="35"/></td>
    </tr><tr>
        <td  valign="top" bgcolor="#CCFFFF"><strong><font size="5" face="Arial, Helvetica, sans-serif" color="red"><strong>* 
          </strong></font><strong></strong>Last Name:</strong></td>
        <td bgcolor="#CCFFFF" > <input type="text" name="LastName" size="35" maxlength="35"/></td>
    </tr><tr>
      <td valign="top" bgcolor="#CCFFFF">Name you like to be called:</td>
        <td bgcolor="#CCFFFF" > <input type="text" name="PreferredName" size="35" maxlength="35"/></td>
    </tr><tr>      
      <td valign="top" bgcolor="#CCFFFF"> Relationship to Mary & George:</td>
        <td bgcolor="#CCFFFF"><input type="text" name="Relationship" size="35" maxlength="35"/></td>
    </tr><tr>
        <td valign="top" bgcolor="#CCFFFF">Birth date: (<font size="3" face="arial">like 
          '01/23/1945' </font>): </td>
        <td bgcolor="#CCFFFF"> <input type="text" name="Birthdate" size="15" maxlength="10" /></td>
      </tr><tr>
        <td  valign="top" bgcolor="#CCFFFF">Phone Number: (like '555-555-5555')</td>
        <td bgcolor="#CCFFFF" > <input type="text" name="userphone" size="15" maxlength="15"/></td>
    </tr><tr>
      <td  valign="top" bgcolor="#CCFFFF">Street Address:</td>  
        <td bgcolor="#CCFFFF" ><input type="text" name="userstreet" size="35" maxlength="35"/></td>
    </tr><tr>
        <td  valign="top" bgcolor="#CCFFFF">City:</td>
        <td bgcolor="#CCFFFF" > <input type="text" name="usercity" size="35" maxlength="35"/></td>
    </tr><tr>
      <td  valign="top" bgcolor="#CCFFFF">State:</td>
        <td bgcolor="#CCFFFF" ><input type="text" name="userstate" size="5" maxlength="2" /></td>
    </tr><tr>
        <td  valign="top" bgcolor="#CCFFFF">Zip: </td>
        <td bgcolor="#CCFFFF" ><input type="text" name="userzip" size="5" maxlength="5"/></td>
    </tr><tr>
        <td  valign="top" bgcolor="#CCFFFF"><strong><font size="5" face="Arial, Helvetica, sans-serif" color="red"><strong>* 
          </strong></font><strong></strong>Password:</strong></td>
        <td bgcolor="#CCFFFF" ><input type="password" name="pass1" size="20" maxlength="20"/></td>
    </tr><tr>
        <td  valign="top" bgcolor="#CCFFFF"><strong><font size="5" face="Arial, Helvetica, sans-serif" color="red"><strong>* 
          </strong></font><strong></strong>re-enter password:</strong></td>
        <td bgcolor="#CCFFFF" ><input type="password" name="pass2" size="20" maxlength="20"/></td>
    </tr><tr>
        <td colspan="2" bgcolor="#CCFFFF">We will email confirmation of your registration 
          <font size="3" face="Arial, Helvetica, sans-serif">when</font> we <font size="3" face="Arial, Helvetica, sans-serif">verify</font> 
          that you are <font size="3" face="Arial, Helvetica, sans-serif">part
          of</font> 
          the family. Otherwise, we will request more information from you. </td>
      </tr><tr>
        <td colspan="2" bgcolor="#CCFFFF">May we share your address, phone number and email with other
          members of the family?<br />
          (We will not share your info with anyone outside the family.)<br />
          Yes<input type="radio" name="share" value="share_yes" />
          No<input type="radio" name="share" value="share_no" checked="checked"/>
          Depends (call me) <input type="radio" name="share" value="share_depends"/></td>
      </tr><tr>
        <td colspan="2" bgcolor="#CCFFFF"><p><font size="3" face="Arial, Helvetica, sans-serif">Would
              you like to be included in and receive by email, an annual Christmas
              card list ? </font><br />
          Yes
          <input type="radio" name="xmas" value="xmas_yes" />
          No
          <input type="radio" name="xmas" value="xmas_no" checked="checked"/>
      </tr><tr>
        <td  bgcolor="#CCFFFF"><center><input type="submit" value="Register"/></center></td>
        <td  bgcolor="#CCFFFF"><center><input name="Reset" type="reset" value="Reset" /></center></td>
      </tr>
    </table></font>
  </form>
</BODY>
</HTML>
