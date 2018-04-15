<!--
home.php
home page for fkf2
Lou wilson July 2017
-->

<?php
	session_start();
  //echo $_SESSION['starttime'] . "<br>";
  //echo "Welcome, " . $_SESSION['username'] . "<br>";
?>  
<!--

-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
<title>Forbes Kimball Family
</title>
<style type="text/css">

body {
	background-image: url(images/Tartan-bgd.jpg);
}
.style1 {
	color: #FF0000;
	font-weight: bold;
}
#welcome {
	background-color: #FFFFCC;
	padding: 0 20px 0 20px;
	margin: 0;
	position: absolute;
	width: 782px;
	height: 142px;
	left: 152px;
	top: 348px;
	
}
#access {
	background-color: #FFFFCC;
	padding: 0 20px 0 20px;
	margin_top: 0;
	position: absolute;
	left: 675px;
	top: 1034px;
	width: 333px;
	height: 161px;
}
#pages {
	background-color: #FFFFCC;
	padding: 0 20px 0 20px;
	margin_top: 0;
	position: absolute;	
	left:87px;
	top:518px;
	width:519px;
	height:1248px;
}
#trailer {
	background-color: #FFFFCC;
	padding: 0 20px 0 20px;
	margin_top: 0;
	position: absolute;
	left: 676px;
	top: 515px;
	width: 334px;
	height: 472px;
}
#footer{
	padding: 0 20px 0 20px;
	margin_top: 100;
	position: absolute;
	left: 211px;
	top: 1844px;
	width: 651px;
	height: 63px;
}		
.style2 {
	font-size: 18px;
	font-weight: bold;
}
.style3 {font-size: 18px}
.style4 {font-size: 24px; }
.style8 {font-size: 18px; font-weight: bold; color: #000000; }
.style9 {color: #FFFFFF}


</style>

</head>
<body>
  <?php
    //echo "Session Started: " . $_SESSION["username"] . "<br>";
    //print_r("Session variables: " . $_SESSION . "<br>") ;
    //exit(); 
    include "headinginclude.php";
  ?>
  <center><br/>
    <h1 class="style9">Forbes + Kimball Family Home Page (v2)</h1>
  </center>
  <div id="welcome"> 
    <br/>
    <h3>Welcome! - to the Forbes - Kimball Family Website. This website 
      is for the members of the family consisting of the children, grandchildren, 
      great-grandchildren and great-great-grandchildren of Mary Eleanor Kimball and 
      George Franklin Forbes.  
      For a <a href="Introduction.php" class="style4">more</a> detailed description of the purpose and structure of the website, 
      click here. </h3><br/>
    
  </div>
  <div id="access"> 
  <br/>
    <p>Access to the website is restricted to family members by means 
      of a <a href="RegisterPage.html" class="style3"><strong>log-in/registration page</strong></a>. Only those who 
      are members of the family will be able to see this website. This is to protect 
      your privacy. </p>
  </div>
  <div id="pages"> 
  <br/>
    <p align="center">There is a <span class="style1">new</span> page: <a href="ForbesAlbum.php" class="style2">Forbes 
      Family Album</a>. It has group photos of the Forbes family from 1950 to the 
    present. </p>
    <p align="center">There is a page for <a href="MomsPage.php" class="style2">Mary Kimball</a> </p>
    <p align="center">and a page <a href="GeorgeAlbum.php" class="style2">George Forbes</a>. </p>
    <p align="center">There is a page representing each 
      of the ten children of Mary and George. Those ten children are; <a href="Vickis-page.php"><br/>
      <span class="style3"><strong>Marie 
        (Vicki)</strong></span></a><span class="style3"><strong><a href="Dorothys-page.php"><br/>
        Dorothy</a><a href="Carolyns-page.php"><br/>
        Carolyn</a><a href="Kens-page.php"><br/>
        Kenneth</a><a href="Barbies-page.php"><br/>
        Barbara</a><a href="Margies-page.php"><br/>
        Marjorie</a><a href="Marilyn%27s-page.php"><br/>
        Marilyn</a><a href="Chris-page.php"><br/>
        Christopher</a></strong></span><a href="Bills-page.php"><br/>
        <span class="style2">William</span></a><a href="Pattys-page.php"><br/>
        <span class="style2">Patricia</span></a></p>
    <p>On their pages are photos of them 
      and their children and grandchildren, and eventually there will be links to biographies and family 
      group sheets when they become available. </p>
    <p align="center">There is a <a href="photo_page.php" class="style3"><strong>photo page</strong></a> showing the ten children. </p>
    <p align="center">There is  historical information on the family, including a <a href="pedigree.php" class="style3"><strong>pedigree</strong></a> </p>
    <p align="center">and photos  of   our <a href="Ancestors-photos.php" class="style2">ancestors</a>.    </p>
    <p align="center">There is a page showing the <span class="style3"><strong><a href="Forbes-Kimball_History.php">Crests</a></strong></span> of both families, and the <span class="style8">tartan</span> and
      other <span class="style8">regalia</span> of the Forbes Clan. </p>
    <p align="center">There is a <a href="familychart.php" class="style3"><strong>Name Chart</strong></a> showing  everyone who is a member of the
          family, including some step-children. </p>
        <p>When it is ready,  there will be a link  to the <span class="style3"><strong>book</strong></span> about the family
          history which consists of around 300 pages, and has information going
          back to the year 1370. This includes information on 23 generations of Mary's
          side of the family and eight generations on George's side, going
          back from Zoe Shepard, the first of the fifth generation. George's ancestors are Scots and French, from Canada. There
          were Huguenots, too. Mary's ancestors are English. She is descended from
          Puritans. </p>
        <p>There will be a <span class="style3"><strong><a href="BlankGroupSheet.pdf" class="style3">Family Group Sheet form</a></strong></span> you can fill out to provide
          the basic information about your family groups. We are also working on a biography
          form to fill out.  The information you provide
          in it will be used to  write a biography for you. Or you can write your own biography
          and send it to us, and we will link it to your page. </p>
          <p>Here is a link to my book <a href="book/book.pdf">Forbes-Kimball: a 600 Year History</a>.  This is an  unfinished work in progress. Please don't tell me about mistakes unless it's a factual error about you or your family.</p>
        <p align="center">There is a <a href="ForbesNews.php" class="style3"><strong>News Page</strong></a> with Births,
          Marriages, Deaths, Graduations, and  other news item about the family. </p>
        <p align="left">There are links to other websites. </p>
        <p align="center">One is a PAF-generated website which
          has all of <span class="style3"><strong><a href="ZoesAncestors.php">Zoe's Shepard's ancestors</a>.</strong></span> Zoe is  Mary Kimball's first great-great grandchild. </p>
        <p align="center">Another one is a PAF-generated website which lists all of the <a href="geo_mary_/GFF-Descendants-website.htm" class="style3"><strong>descendants
          of George and Mary Forbes</strong></a>. </p>
        <p align="center">Also there is a link to a Rootsweb page
          where we have uploaded all of our <a href="http://wc.rootsweb.ancestry.com/cgi-bin/igm.cgi?op=PED&amp;db=forbeskimball&amp;id=I273" class="style3"><strong>genealogy records</strong></a>. </p>
        <p>&nbsp;</p>
  </div>
  <div id="trailer"> 
  <br />
    <p align="justify">We hope you enjoy what is presented here and get a lot of use out of
      it.  The third and fourth generations especially will benefit from having this information
      available to them. </p>
    <p align="justify">Your participation in this website will contribute to its quality and
          usefulness. Please send in your recent photos, your birth, wedding and
          graduation announcements, your biographies, etc. </p>
        <p align="justify">Your feedback is welcome; suggestions, comments, error reports, etc. </p>
        
    <p align="justify"><strong>At some point, We will need to pass on the maintenance and management 
      of this website to someone in the family in the third or fourth generation.  So if you are in the younger 
      generations, have some computer and web savvy, and are willing to take on 
      the responsibility, please let me know, and we will train you in the design, 
      upkeep and improvement of the website and prepare you to take over, some 
      day. </strong></p>    
  </div>		
  <div id="footer"> 
    <center>
    <!-- Start of StatCounter Code -->
    <script type="text/javascript">
    var sc_project=4415313; 
    var sc_invisible=0; 
    var sc_partition=55; 
    var sc_click_stat=1; 
    var sc_security="52ac8fd6"; 
    </script>
    <script type="text/javascript" src="http://www.statcounter.com/counter/counter.js"></script><noscript><div class="statcounter"><a title="visitors on myspace" href="http://www.statcounter.com/myspace/" target="_blank"><img class="statcounter" src="http://c.statcounter.com/4415313/0/52ac8fd6/0/" alt="visitors on myspace" /></a></div></noscript>
    <!-- End of StatCounter Code -->
    <br/><!--#include file="FooterInclude.php"--><br/>
    
    </center>
  </div>

</body>
</html>
