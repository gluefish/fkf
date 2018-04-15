<html xmlns="undefined">

<head>
<meta http-equiv=Content-Type content="text/html; charset=macintosh" />
<meta name=ProgId content=Excel.Sheet />
<style type="text/css">

body {
	background-color: #99FFFF;
	vertical-align: middle;
}

</style>
<script type="text/JavaScript">
<!--
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
<title>Introduction</title></head>

<?php
  session_start();
  include "headinginclude.php";
  include "commfunc.php";
  wLog("--User " . $_SESSION["user"] . " Navigated to Introduction");
?>


<table cellpadding=3 cellspacing=0  align="center">
  <!--DWLayoutTable-->
 
    <tr>
      <td><h2>Introduction</h2></td>
    </tr></table>
  
  <tr><td>&nbsp;</td>
  </tr>
  <center>
  </center>
  <tr><td colspan="4"><div align="center"><a href="RegisterPage.html" target="_top" onClick="MM_nbGroup('down','group1','next','file:///Millen-eon/Users/carolynforbes/Desktop/www.forbes-kimball-family/nav_bar_buttons/nextgold.gif',1)" onMouseOver="MM_nbGroup('over','next','file:///Millen-eon/Users/carolynforbes/Desktop/www.forbes-kimball-family/nav_bar_buttons/next_green.gif','',1)" onMouseOut="MM_nbGroup('out')"></a></div>
    </td>
</tr>
<tr><br /></tr>
 <table width="800" align="center">
             <td width="800" bordercolor="#990066" align="justify"><center>
               <h2>Purpose, Structure
               and Content of the Website               </h2>
             </center></td>
     
 <tr><td  align="justify" valign="middle">     
 <p>We have created this website
   for the benefit and use of the members of the extended family: the Forbes
   Family. The intention of this website is to facilitate communication and
   connection among the members of the family, and to provide information
   about the history and composition of the family.</p>
   <p> The number of living people in this group, as of the December, 2008, is 91. 
   This includes Mary Kimball, her ten children, her 28 grandchildren, her 36 great-grandchildren
   and one great-great grand-daughter;  Zoe. </p>
   <p>This also includes 26 spouses in the family. This number does not include ex-spouses.
   The number of people is, of course, growing all the time. There are also
   numerous family members that are such by marriage or relationship. For
   example, step-children. Although we consider step-children to be full members
   of the family, from a strict genealogical viewpoint, they are not counted
   as descendants of Mary and George.</p> 
  
     <p>The web page will be accessible only to
       members of the family, through the use of registration and a password.
       This is so we can feel free to put in information about ourselves that
       we wouldn't want available to strangers.
     <p> We have requested feedback from
       the family members as to how they feel about this website being limited
       to family, or family and cousins, or the general public. a few people have
       answered, but not enough to get a sense of the general consensus. Please
       email us with your opinion if you haven't yet. </p>
     <p><strong>1. Photos:</strong> There is a
       page with photos of each of the ten children, with links to
       their individual pages.  The Individual Pages will consist of a page
       for each of the ten children. On this page will be photos of them and
       their children and grand-children, and all descendants that follow.
       In the future, users will be able to upload photos and other things
       themselves. Until then, if you wish to have a photo placed here, email
       it to us or upload it to Facebook or Myspace and we can grab it and use it
       here. Email us and let us know when you do. </p>
     
       <strong>2. Genealogy:</strong>
       <p> This
         page will contain the complete family genealogy. It will be updated as new people are found or born or new history is found.</p>
       The present size of the family tree is 23 generations. This will eventually
       include a downloadable pdf of Carolyn's family history book, with pedigree charts and the life stories of ancestors, as well as
       other pertinent information, such as historical events in an ancestor&#8217;s
       lifetime, and artwork showing the clothing of the period.
       <p> In the future,
         when a person is connected to the family through marriage and children
         in common, their genealogy will also be posted. </p>
      <strong>3. Biographies:</strong> Under development.
         <p>This
           page will have prompts with free-form answers or multiple choice, to allow
           you to input information that we can use to write a biography for you.
           The biographies will be accessible through the home page
           of the Forbes child in your family. </p>
         <p>Some prompts will include: achievements
           and awards, degrees earned or special training, careers or occupations,
           hobbies, interests, religious persuasion, political persuasion, favorite
           saying, heroes, travels,  etc. </p>
         <p> If a person declines to
           enter a biography, only the statistical data will be included, as long
           as they live, or until they agree. This will include such things as place and date of
           birth, parents and children&#8217;s
           names, dates and places of marriages, names of spouses, and dates and
           places of death, and occupation. </p>
         <p>The webmaster or a designated assistant
           will be responsible for collecting biographical information for a deceased
           person from their close family members. Only positive information will
           be posted. Consider whether you
           want your biography to be written by you,
           or someone else.</p>
        
           <p><strong>4. News:</strong> This section
             will be updated occasionally, as news-worthy events occur. It will have
             information such as births, deaths, marriages, divorces and graduations. Also included
             will be achievements and awards, and any other news or announcements
             a user might want to list. The general tone of the newletter will be positive.</p>
             <strong>6. Descendants: </strong>This is a link to
             a webpage, generated by my PAF (Personal Ancestral File&reg;) data base
             which contains all of the descendants of George &amp; Mary Forbes. </p>

</table>
<?include "FooterInclude.php"?>
</body>

</html>
