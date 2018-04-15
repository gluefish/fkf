<script type="text/javascript" src="functions.js"></script>
<? //session_start();
//This is the design of the interaction between this header and all subsequent pages.  This header page:
//1. Checks to see if the caller has logged in (that is, has a session variable "username" available.
// This session variable times out after 20 minutes of inactivity, or on closing the browser.
//2. If the caller isn't logged in, this header redirects him to the RegisterPage.html.
//3. If he IS logged in, puts up the header, which includes some pix of George and Mary, 
// a row of anchor buttons, some JavaScript for activating those buttons, and a headline.
//   At that point the rest of the called page appears.
//4. All pages will include an 'include' directive to this header, except the RegisterPage.html.  This
// 'include' directive will REPLACE the body tag, since the header includes a body tag.
//5. All pages will be PHP pages.
/*if ( == "")
{
  header("Location: RegisterPage.html"); // WARNING: unable to convert session
}
else
{
  echo "<center>".."</center>"; // WARNING: unable to convert session
}
*/
function button_bar($href, $alias, $target, $mouseovr, $img)
{
  echo "\r\n<!-- ".$alias." button -->\r\n";
  echo "        <a href=\"".$href."\"\r\n";
  echo "          onClick=\"MM_nbGroup('down','group1','".$alias."','".$target."',1)\"\r\n";
  echo "          onMouseOver=\"MM_nbGroup('over','".$alias."','".$mouseovr."','',1)\"\r\n";
  echo "          onMouseOut=\"MM_nbGroup('out')\">\r\n";
  echo "          <img src=\"".$img."\"\r\n";
  echo "            name=\"".$alias."\"\r\n";
  echo "            border=\"0\"\r\n";
  echo "            id=\"".$alias."\"\r\n";
  echo "            onload=\"\" />\r\n";
  echo "        </a>\r\n\r\n";
}
?>
<script type="text/JavaScript">
<!-- //the following script is for handling the buttons: Normal colors, rollovers, last button hit, etc.
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_nbGroup(event, grpName) { //v6.0
  var i,img,nbArr,args=MM_nbGroup.arguments;
  if (event == "init" && args.length > 2) {
    if ((img = MM_findObj(args[2])) != null && !img.MM_init) {
      img.MM_init = true; img.MM_up = args[3]; img.MM_dn = img.src;
      if ((nbArr = document[grpName]) == null) nbArr = document[grpName] = new Array();
      nbArr[nbArr.length] = img;
      for (i=4; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
        if (!img.MM_up) img.MM_up = img.src;
        img.src = img.MM_dn = args[i+1];
        nbArr[nbArr.length] = img;
    } }
  } else if (event == "over") {
    document.MM_nbOver = nbArr = new Array();
    for (i=1; i < args.length-1; i+=3) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = (img.MM_dn && args[i+2]) ? args[i+2] : ((args[i+1])? args[i+1] : img.MM_up);
      nbArr[nbArr.length] = img;
    }
  } else if (event == "out" ) {
    for (i=0; i < document.MM_nbOver.length; i++) {
      img = document.MM_nbOver[i]; img.src = (img.MM_dn) ? img.MM_dn : img.MM_up; }
  } else if (event == "down") {
    nbArr = document[grpName];
    if (nbArr)
      for (i=0; i < nbArr.length; i++) { img=nbArr[i]; img.src = img.MM_up; img.MM_dn = 0; }
    document[grpName] = nbArr = new Array();
    for (i=2; i < args.length-1; i+=2) if ((img = MM_findObj(args[i])) != null) {
      if (!img.MM_up) img.MM_up = img.src;
      img.src = img.MM_dn = (args[i+1])? args[i+1] : img.MM_up;
      nbArr[nbArr.length] = img;
  } }
}
//-->
</script>
<style>
.blink_text {

    animation:1s blinker linear infinite;
    -webkit-animation:1s blinker linear infinite;
    -moz-animation:1s blinker linear infinite;

     color: red;
    }

    @-moz-keyframes blinker {  
     0% { opacity: 1.0; }
     50% { opacity: 0.0; }
     100% { opacity: 1.0; }
     }

    @-webkit-keyframes blinker {  
     0% { opacity: 1.0; }
     50% { opacity: 0.0; }
     100% { opacity: 1.0; }
     }

    @keyframes blinker {  
     0% { opacity: 1.0; }
     50% { opacity: 0.0; }
     100% { opacity: 1.0; }
     }
</style>

<body onLoad="MM_preloadImages(
		'nav_bar_buttons/home_gold.gif',
		'nav_bar_buttons/home_green.gif',
		'nav_bar_buttons/Sitemap_gold.gif',
		'nav_bar_buttons/Sitemap_green.gif',
		'nav_bar_buttons/what_new_gold.gif',
		'nav_bar_buttons/what_new_green.gif',
		'nav_bar_buttons/news_gold.gif',
		'nav_bar_buttons/news_green.gif',
		'nav_bar_buttons/about_usgold.gif',
		'nav_bar_buttons/about_usgreen.gif',
		'nav_bar_buttons/email_gold.gif',
		'nav_bar_buttons/email_green.gif',
		'nav_bar_buttons/contactUs_gold.gif',
		'nav_bar_buttons/contactUs_green.gif',
		'nav_bar_buttons/log_out_gold.gif',
		'nav_bar_buttons/log_out_green.gif',
		'nav_bar_buttons/feedbackgold.gif',
		'nav_bar_buttons/feedback_green.gif')">
    <table cellpadding=3 
      cellspacing=0 
	    width="50%" 
	    align="center">
	
<!-- Top Bar, Admin links and "Welcome Firstname -->

	  <tr>
		<td bgcolor="#FFFF99">
      <?php 
        //$ulevel = $_SESSION("userlevel");
        if(!isset($_SESSION['userlevel']) || empty($_SESSION['userlevel'])) {
          echo 'You have not logged in.  Please return to the ';
          echo "<a href='./fkf.php'>login page.</a>";
          die();
        }
        if ($_SESSION["userlevel"] >= 3 )
        {
          echo "<a href='http://goo.gl/BX1ugu' target='_blank' >Edit Users</a>";
        } 
        if ($_SESSION["userlevel"] == 0 )
        {
          echo "Your account has not been validated yet.<br>Please contact the administrator.";
          die();
        }
      ?>		
    </td>
		<td bgcolor="#66FFFF"><center><?php echo "Welcome " . $_SESSION["firstname"] ?> </center></td>
		<td bgcolor="#FFFF99"><span id="timeout" class="blink" ></span></td>
	  </tr>
	  
<!-- Middle Row with pictures and "Forbes Family Website" banner -->  
      <tr>
        <td width="49%" 
          rowspan="2"  
		  align="center" 
		  valign="bottom" 
		  bgcolor="#FFFFFF"><center>
		  <img src="images/George-Mary-Young.jpg" 
			alt="George&amp;Mary" 
			height=100 /><br>George &amp; Mary <br>Forbes, 1940's</center>
        </td>
        <td align="center" 
	      valign="bottom">
	      <img src="images/website-logo.JPG" 
			alt="FamilyLogo" 
			width="806" 
			height="90"   
			align="absbottom" />
        </td>
        <td width="48%" 
	  	  rowspan="2"  
		  align="center" 
		  valign="bottom" 
		  bgcolor="#FFFFFF">
	      <img src="images/George-Mary-b_w.jpg" 
			alt="Mom-Dad-old"  
			height="100" /><br>George &amp; Mary<br>Forbes, 1986
	    </td>
      </tr>
	  
<!-- Bottom row with button bar -->	  
      <tr>
        <td width="3%"  
	   	  height="50" 
		  align="center" 
		  bgcolor="#FFFFFF">
		
<? 
//This piece of code makes it easy to manipulate the buttons on the button bar.
//          TARGET FILE          ALIAS           GOLD BUTTON NAME                        GREEN BUTTON NAME                       BLUE BUTTON NAME
button_bar("Home.php",          "home",         "nav_bar_buttons/home_gold.gif",        "nav_bar_buttons/home_green.gif",       "nav_bar_buttons/home_blue.gif"); 
button_bar("SiteMap.php",       "sitemap",      "nav_bar_buttons/Sitemap_gold.gif",     "nav_bar_buttons/Sitemap_green.gif",    "nav_bar_buttons/Sitemap_blue.gif"); 
button_bar("WhatsNew.php",      "whatsnew",     "nav_bar_buttons/what_new_gold.gif",    "nav_bar_buttons/what_new_green.gif",   "nav_bar_buttons/what_new_blue.gif"); 
button_bar("ForbesNews.php",    "news",         "nav_bar_buttons/news_gold.gif",        "nav_bar_buttons/news_green.gif",       "nav_bar_buttons/news_blue.gif"); 
button_bar("AboutUs.php",       "aboutus",      "nav_bar_buttons/about_usgold.gif",     "nav_bar_buttons/about_usgreen.gif",    "nav_bar_buttons/about_usblue.gif"); 
button_bar("email_page.php",    "email",        "nav_bar_buttons/email_gold.gif",       "nav_bar_buttons/email_green.gif",      "nav_bar_buttons/email_blue.gif"); 
button_bar("Contact_Us.php",    "contactUs",    "nav_bar_buttons/contactUs_gold.gif",   "nav_bar_buttons/contactUs_green.gif",  "nav_bar_buttons/contactUs_blue.gif"); 
button_bar("logout.php",        "logout",       "nav_bar_buttons/log_out_gold.gif",     "nav_bar_buttons/log_out_green.gif",    "nav_bar_buttons/log_out_blue.gif"); 
?>
					
	    </td>
      </tr>
    </table>
	<br>
