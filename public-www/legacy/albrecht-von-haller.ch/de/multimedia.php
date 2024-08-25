<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<!-- +++++++++++++++++++++++++++++++++++++++++++++++++
| LightNEasy 2.2.2 Content Management System
| SQLite version
++++++++++++++++++++++++++++++++++++++++++++++++++++++
| Copyright 2007-2008 Fernando Baptista
| http://lightneasy.org
++++++++++++++++++++++++++++++++++++++++++++++++++++++
| Released under the terms & conditions of v2 of the
| GNU General Public License. For details refer to
| the included gpl.txt file or visit http://gnu.org
+++++++++++++++++++++++++++++++++++++++++++++++++++++++ -->
<title>Multimedia - Albrecht von Haller</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='Content-Language' content='de_DE' />
<meta http-equiv='Content-Script-Type' content='text/javascript' />
<meta http-equiv='Content-Style-Type' content='text/css' />
<meta name='keywords' content='Albrecht von Haller' />
<meta name='description' content='' />
<meta name='author' content='Hannes Saxer' />
<meta name='Robots' content='index,follow' />
<meta http-equiv='imagetoolbar' content='no' /><!-- disable IE's image toolbar -->
<link rel='stylesheet' type='text/css' href='templates/hallermultimedia/style.css' />
<link rel='stylesheet' type='text/css' href='css/lightneasy.css' />
<link rel="alternate" type="application/rss+xml" title="Albrecht von Haller RSS Feed" href="LightNEasy/rss.php" />
<link rel="alternate" type="application/atom+xml" title="Albrecht von Haller Atom Feed" href="LightNEasy/atom.php" />

<script src="http://www.apple.com/library/quicktime/2.0/scripts/prototype.js" language="JavaScript" type="text/javascript"></script>
<script src="http://www.apple.com/library/quicktime/2.0/scripts/qtp_poster.js" language="JavaScript" type="text/javascript"></script>
<link href="http://www.apple.com/library/quicktime/2.0/stylesheets/qtp_poster.css" rel="StyleSheet" type="text/css" />

<link rel="alternate stylesheet" type="text/css" media="screen" title="pbig" href="templates/css/pbig.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="pbiger" href="templates/css/pbiger.css" />

<script type="text/javascript" src="js/styleswitch.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/fadein.js"></script>
<script type="text/javascript" src="js/jquery.randomContent.js"></script>

<script type="text/javascript" src="js/jwplayer.js"></script> 

<script type="text/javascript" src="js/ui.core.js"></script>
<script type="text/javascript" src="js/ui.tabs.js"></script>

<script type="text/javascript" src="js/scrollTo.js"></script>
<script type="text/javascript" src="js/gototop.js"></script>

<script type="text/javascript">
$(document).ready(function() {
  $('#tabs').tabs();
});
</script>
    
<script type="text/javascript">
  $(document).ready(function(){
    $('.haller').randomContent({xmlPath: "haller.xml", nodeName: "fact"});
});
</script>

<script type="text/javascript">
$(window).load(function () {
  $("#annex").fadeIn(2000);
});
</script>



<script>
  $(document).ready(function () {
 $('#content').localScroll();
});
  </script>

</head>

<body name="top" id="top" onLoad="setImage()">
<a href="#top" id="top-link">Top</a>

<div id="wrapper">

<div id="header">
<div id="headerimg"><img src="templates/hallermultimedia/header/head.png" width="960" height="320" /></div>
<div id="logo"><img src="templates/basisdesign/hallerlogo.png" width="200" height="130" /></div>
<div id="contenttitel">Multimedia</div>
</div>

<div id="meta">	
<div id="sprache"><a href="../f/index.php">F</a> | <a href="../e/index.php">E</a></div>
<div id="metanavigation"><a href="kontakt.php">Kontakt</a> | <a href="hallerstiftung.php">Hallerstiftung</a> | <a href="link.php">Links</a></div>		
</div>

<div id="navigation">
  
<li class="LNE_menu"><a href="index.php">Home</a></li>
<li class="LNE_menu"><a href="lebenundwerk.php">Leben und Werk</a></li>
<li class="LNE_menu"><a href="nachlass.php">Nachlass</a></li>
<li class="LNE_menu"><a href="forschung.php">Forschung</a></li>
<li class="LNE_menu"><a href="hallerstexteimnetz.php">Hallers Texte im Netz</a></li>
<li class="LNE_menu"><a href="forschungsliteratur.php">Forschungsliteratur</a></li>
<li class="LNE_menu"><a href="imbuchhandel.php">Im Buchhandel</a></li>
<li class="LNE_menu"><a class="selected" href="multimedia.php">Multimedia</a></li>
<li class="LNE_menu_intend"><a href="hallerimmuseum.php">Haller im Museum</a></li>
<li class="LNE_menu_intend"><a href="hallersgarten.php">Hallers Garten</a></li>
<li class="LNE_menu_intend"><a href="haller300.php">Haller 300</a></li>
<li class="LNE_menu_doubleintend"><a href="programmheft.php">Programmheft</a></li>
<li class="LNE_menu_doubleintend"><a href="projektteam.php">Projektteam</a></li>
<li class="LNE_menu_doubleintend"><a href="patronatskomitee.php">Patronatskomitee</a></li>
<li class="LNE_menu_doubleintend"><a href="pressespiegel.php">Pressespiegel</a></li>
<li class="LNE_menu_doubleintend"><a href="radioundfernsehen.php">Radio und Fernsehen</a></li>
<li class="LNE_menu_intend"><a href="bilder.php">Bilder</a></li>
<li class="LNE_menu_intend"><a href="theatermusikcomic.php">Theater, Musik, Comic</a></li>

  <div id="haller"></div>
</div>
<div id="contentbox">
<div id="schrift"><a href="javascript:chooseStyle('none', 60)" style="font-size: 9px">A</a> | <a href="javascript:chooseStyle('pbig', 60)" style="font-size: 12px">A</a> | <a href="javascript:chooseStyle('pbiger', 60)" style="font-size: 14px">A</a></div>
  <div id="content">
    <div class="bildlink" style="background-image: url(&quot;templates/basisdesign/bg-museum.jpg&quot;);">
<div class="textdiv">
<h2>Haller im Museum</h2>
<p>Ausstellung &laquo;Albrecht von Haller. Der grosse Gelehrte der Schweiz&raquo; im Historischen Museum Bern, 4.12.2008 &ndash; 13.4.2009</p>
</div>
<div class="buttondiv"><a href="../haller_im_museum/index.htm" class="button" title="Titel">zeigen &raquo; </a></div>
</div>
<p>&nbsp;</p>
<div class="bildlink" style="background-image: url(&quot;templates/basisdesign/bg-garten.jpg&quot;);">
<div class="textdiv">
<h2>Ein Gang durch Hallers (G)Arten in 12 Bildstrecken</h2>
<p>ein historischer Diskussionsbeitrag <br />
zu den aktuellen Themen <br />
Biodiversit&auml;t und nach-<br />
wachsende Rohstoffe</p>
</div>
<div class="buttondiv"><a href="hallersgarten.php" class="button" title="Titel">zeigen &raquo; </a></div>
</div>
<p>&nbsp;</p>
<div class="bildlink" style="background-image: url(&quot;templates/basisdesign/bg-haller300.jpg&quot;);">
<div class="textdiv">
<h2>Haller 300</h2>
<p>Das Haller-Jahr 2008</p>
</div>
<div class="buttondiv"><a href="haller300.php" class="button" title="Titel">zeigen &raquo; </a></div>
</div>
<p>&nbsp;</p>     </div>
<div id="footer">Eine Website der Albrecht von Haller-Stiftung der Burgergemeinde Bern,<br />des Historischen Instituts der Universität Bern und des Instituts für Medizingeschichte der Universität Bern <br />Konzept und Inhalt: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="multimedia.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
