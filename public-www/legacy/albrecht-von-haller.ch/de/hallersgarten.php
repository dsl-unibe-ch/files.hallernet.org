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
<title>Hallers Garten - Albrecht von Haller</title>
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

<link rel="stylesheet" href="css/lytebox.css" type="text/css" media="screen" />
<script type="text/javascript" src="js/lytebox.js"></script>
</head>

<body name="top" id="top" onLoad="setImage()">
<a href="#top" id="top-link">Top</a>

<div id="wrapper">

<div id="header">
<div id="headerimg"><img src="templates/hallermultimedia/header/head.png" width="960" height="320" /></div>
<div id="logo"><img src="templates/basisdesign/hallerlogo.png" width="200" height="130" /></div>
<div id="contenttitel">Hallers Garten</div>
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
<li class="LNE_menu"><a href="multimedia.php">Multimedia</a></li>
<li class="LNE_menu_intend"><a href="hallerimmuseum.php">Haller im Museum</a></li>
<li class="LNE_menu_intend"><a class="selected" href="hallersgarten.php">Hallers Garten</a></li>
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
    <h2>Ein Gang durch Hallers (G)Arten in 12 Bildstrecken:</h2>
<p>Basiert auf der Sonderausstellung &laquo;Hallers (G)Arten&raquo; im Botanischen Garten Bern BOGA, 18.4.-24.10.2008. Projektgruppe: Luc Lienhard, Martin Stuber, Sabine Tsch&auml;ppeler, in Zusammenarbeit mit dem <a target="_blank" href="http://boga.unibe.ch/boga/">Botanischen Garten Bern</a> (Verena Gysin, Christian B&uuml;hler und BOGA-Gartenteam).</p>
<p>&nbsp;</p>
<div id="allesprachen">
<div style="background-image: url(&quot;templates/basisdesign/allium.jpg&quot;);" class="bildlink">
<div class="textdiv">
<h2>Mager, aber reich</h2>
<p>Gekielter Lauch</p>
</div>
<div class="buttondiv"><a href="galeries/Allium/Allium.jpg" rel="lytebox[galeries/Allium]" title="Allium" class="button">zeigen &raquo; </a></div>
<div class="displaynone"><h2>Allium</h2><br />
<a href="galeries/Allium/Allium.jpg" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium.jpg" class="bordered" /></a>
<a href="galeries/Allium/Allium.jpg.orig" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium.jpg.orig" class="bordered" /></a>
<a href="galeries/Allium/Allium2.jpg" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium2.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium2.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium2.jpg" class="bordered" /></a>
<a href="galeries/Allium/Allium2.jpg.orig" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium2.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium2.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium2.jpg.orig" class="bordered" /></a>
<a href="galeries/Allium/Allium3.jpg" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium3.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium3.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium3.jpg" class="bordered" /></a>
<a href="galeries/Allium/Allium3.jpg.orig" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium3.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium3.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium3.jpg.orig" class="bordered" /></a>
<a href="galeries/Allium/Allium4.jpg" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium4.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium4.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium4.jpg" class="bordered" /></a>
<a href="galeries/Allium/Allium4.jpg.orig" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium4.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium4.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium4.jpg.orig" class="bordered" /></a>
<a href="galeries/Allium/Allium5.jpg" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium5.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium5.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium5.jpg" class="bordered" /></a>
<a href="galeries/Allium/Allium5.jpg.orig" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium5.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium5.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium5.jpg.orig" class="bordered" /></a>
<a href="galeries/Allium/Allium6.jpg" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium6.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium6.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium6.jpg" class="bordered" /></a>
<a href="galeries/Allium/Allium6.jpg.orig" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium6.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium6.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium6.jpg.orig" class="bordered" /></a>
<a href="galeries/Allium/Allium7.jpg" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium7.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium7.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium7.jpg" class="bordered" /></a>
<a href="galeries/Allium/Allium7.jpg.orig" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium7.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium7.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium7.jpg.orig" class="bordered" /></a>
<a href="galeries/Allium/Allium8.jpg" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium8.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium8.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium8.jpg" class="bordered" /></a>
<a href="galeries/Allium/Allium8.jpg.orig" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium8.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium8.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium8.jpg.orig" class="bordered" /></a>
<a href="galeries/Allium/Allium9.jpg" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium9.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium9.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium9.jpg" class="bordered" /></a>
<a href="galeries/Allium/Allium9.jpg.orig" rel="lytebox[galeries/Allium]" title="galeries/Allium/Allium9.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Allium/Allium9.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Allium/Allium9.jpg.orig" class="bordered" /></a>
</div>
</div>
<p>&nbsp;</p>
<div style="background-image: url(&quot;templates/basisdesign/anthericum.jpg&quot;);" class="bildlink">
<div class="textdiv">
<h2>Blumenuhr</h2>
<p>&Auml;hrige Graslilie</p>
</div>
<div class="buttondiv"><a href="galeries/Anthericum/Anthericum.jpg" rel="lytebox[galeries/Anthericum]" title="Anthericum" class="button">zeigen &raquo; </a></div>
<div class="displaynone"><h2>Anthericum</h2><br />
<a href="galeries/Anthericum/Anthericum.jpg" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum.jpg" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum.jpg.orig" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum.jpg.orig" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum2.jpg" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum2.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum2.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum2.jpg" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum2.jpg.orig" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum2.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum2.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum2.jpg.orig" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum3.jpg" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum3.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum3.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum3.jpg" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum3.jpg.orig" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum3.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum3.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum3.jpg.orig" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum4.jpg" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum4.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum4.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum4.jpg" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum4.jpg.orig" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum4.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum4.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum4.jpg.orig" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum5.jpg" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum5.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum5.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum5.jpg" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum5.jpg.orig" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum5.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum5.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum5.jpg.orig" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum6.jpg" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum6.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum6.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum6.jpg" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum6.jpg.orig" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum6.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum6.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum6.jpg.orig" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum7.jpg" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum7.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum7.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum7.jpg" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum7.jpg.orig" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum7.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum7.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum7.jpg.orig" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum8.jpg" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum8.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum8.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum8.jpg" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum8.jpg.orig" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum8.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum8.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum8.jpg.orig" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum9.jpg" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum9.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum9.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum9.jpg" class="bordered" /></a>
<a href="galeries/Anthericum/Anthericum9.jpg.orig" rel="lytebox[galeries/Anthericum]" title="galeries/Anthericum/Anthericum9.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Anthericum/Anthericum9.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Anthericum/Anthericum9.jpg.orig" class="bordered" /></a>
</div>
</div>
<p>&nbsp;</p>
<div style="background-image: url(&quot;templates/basisdesign/artemisia.jpg&quot;);" class="bildlink">
<div class="textdiv">
<h2>Gesch&uuml;ttelt, nicht ger&uuml;hrt</h2>
<p>Wermut</p>
</div>
<div class="buttondiv"><a href="galeries/Artemisia/Artemisia.jpg" rel="lytebox[galeries/Artemisia]" title="Artemisia" class="button">zeigen &raquo; </a></div>
<div class="displaynone"><h2>Artemisia</h2><br />
<a href="galeries/Artemisia/Artemisia.jpg" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia.jpg" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia.jpg.orig" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia.jpg.orig" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia2.jpg" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia2.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia2.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia2.jpg" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia2.jpg.orig" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia2.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia2.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia2.jpg.orig" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia3.jpg" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia3.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia3.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia3.jpg" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia3.jpg.orig" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia3.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia3.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia3.jpg.orig" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia4.jpg" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia4.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia4.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia4.jpg" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia4.jpg.orig" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia4.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia4.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia4.jpg.orig" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia5.jpg" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia5.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia5.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia5.jpg" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia5.jpg.orig" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia5.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia5.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia5.jpg.orig" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia6.jpg" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia6.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia6.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia6.jpg" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia6.jpg.orig" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia6.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia6.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia6.jpg.orig" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia7.jpg" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia7.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia7.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia7.jpg" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia7.jpg.orig" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia7.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia7.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia7.jpg.orig" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia8.jpg" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia8.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia8.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia8.jpg" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia8.jpg.orig" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia8.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia8.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia8.jpg.orig" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia9.jpg" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia9.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia9.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia9.jpg" class="bordered" /></a>
<a href="galeries/Artemisia/Artemisia9.jpg.orig" rel="lytebox[galeries/Artemisia]" title="galeries/Artemisia/Artemisia9.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Artemisia/Artemisia9.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Artemisia/Artemisia9.jpg.orig" class="bordered" /></a>
</div>
</div>
<p>&nbsp;</p>
<div style="background-image: url(&quot;templates/basisdesign/astrantia.jpg&quot;);" class="bildlink">
<div class="textdiv">
<h2>Buntgeschm&uuml;ckte Kr&auml;uter</h2>
<p>Grosse Sterndolde</p>
</div>
<div class="buttondiv"><a href="galeries/Astrantia/Astrantia.jpg" rel="lytebox[galeries/Astrantia]" title="Astrantia" class="button">zeigen &raquo; </a></div>
<div class="displaynone"><h2>Astrantia</h2><br />
<a href="galeries/Astrantia/Astrantia.jpg" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia.jpg" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia.jpg.orig" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia.jpg.orig" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia2.jpg" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia2.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia2.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia2.jpg" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia2.jpg.orig" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia2.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia2.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia2.jpg.orig" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia3.jpg" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia3.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia3.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia3.jpg" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia3.jpg.orig" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia3.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia3.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia3.jpg.orig" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia4.jpg" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia4.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia4.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia4.jpg" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia4.jpg.orig" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia4.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia4.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia4.jpg.orig" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia5.jpg" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia5.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia5.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia5.jpg" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia5.jpg.orig" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia5.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia5.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia5.jpg.orig" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia6.jpg" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia6.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia6.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia6.jpg" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia6.jpg.orig" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia6.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia6.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia6.jpg.orig" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia7.jpg" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia7.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia7.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia7.jpg" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia7.jpg.orig" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia7.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia7.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia7.jpg.orig" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia8.jpg" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia8.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia8.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia8.jpg" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia8.jpg.orig" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia8.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia8.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia8.jpg.orig" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia9.jpg" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia9.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia9.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia9.jpg" class="bordered" /></a>
<a href="galeries/Astrantia/Astrantia9.jpg.orig" rel="lytebox[galeries/Astrantia]" title="galeries/Astrantia/Astrantia9.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Astrantia/Astrantia9.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Astrantia/Astrantia9.jpg.orig" class="bordered" /></a>
</div>
</div>
<p>&nbsp;</p>
<div style="background-image: url(&quot;templates/basisdesign/cypripedium.jpg&quot;);" class="bildlink">
<div class="textdiv">
<h2>Hell und vielf&auml;ltig</h2>
<p>Frauenschuh</p>
</div>
<div class="buttondiv"><a href="galeries/Cypripedium/Cypripedium.jpg" rel="lytebox[galeries/Cypripedium]" title="Cypripedium" class="button">zeigen &raquo; </a></div>
<div class="displaynone"><h2>Cypripedium</h2><br />
<a href="galeries/Cypripedium/Cypripedium.jpg" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium.jpg" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium.jpg.orig" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium.jpg.orig" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium2.jpg" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium2.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium2.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium2.jpg" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium2.jpg.orig" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium2.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium2.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium2.jpg.orig" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium3.jpg" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium3.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium3.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium3.jpg" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium3.jpg.orig" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium3.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium3.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium3.jpg.orig" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium4.jpg" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium4.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium4.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium4.jpg" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium4.jpg.orig" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium4.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium4.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium4.jpg.orig" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium5.jpg" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium5.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium5.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium5.jpg" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium5.jpg.orig" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium5.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium5.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium5.jpg.orig" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium6.jpg" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium6.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium6.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium6.jpg" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium6.jpg.orig" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium6.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium6.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium6.jpg.orig" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium7.jpg" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium7.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium7.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium7.jpg" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium7.jpg.orig" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium7.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium7.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium7.jpg.orig" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium8.jpg" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium8.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium8.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium8.jpg" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium8.jpg.orig" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium8.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium8.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium8.jpg.orig" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium9.jpg" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium9.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium9.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium9.jpg" class="bordered" /></a>
<a href="galeries/Cypripedium/Cypripedium9.jpg.orig" rel="lytebox[galeries/Cypripedium]" title="galeries/Cypripedium/Cypripedium9.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Cypripedium/Cypripedium9.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Cypripedium/Cypripedium9.jpg.orig" class="bordered" /></a>
</div>
</div>
<p>&nbsp;</p>
<div style="background-image: url(&quot;templates/basisdesign/esparsette.jpg&quot;);" class="bildlink">
<div class="textdiv">
<h2>Futter statt Dornen</h2>
<p>Esparsette</p>
</div>
<div class="buttondiv"><a href="galeries/Esparsette/Esparsette.jpg" rel="lytebox[galeries/Esparsette]" title="Esparsette" class="button">zeigen &raquo; </a></div>
<div class="displaynone">
gallery Esparsette
</div>
</div>
<p>&nbsp;</p>
<div style="background-image: url(&quot;templates/basisdesign/inula.jpg&quot;);" class="bildlink">
<div class="textdiv">
<h2>Feuchte Schweiz</h2>
<p>Schweizer Alant</p>
</div>
<div class="buttondiv"><a href="galeries/Inula/Inula.jpg" rel="lytebox[galeries/Inula]" title="Inula" class="button">zeigen &raquo; </a></div>
<div class="displaynone"><h2>Inula</h2><br />
<a href="galeries/Inula/Inula.jpg" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula.jpg" class="bordered" /></a>
<a href="galeries/Inula/Inula.jpg.orig" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula.jpg.orig" class="bordered" /></a>
<a href="galeries/Inula/Inula2.jpg" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula2.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula2.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula2.jpg" class="bordered" /></a>
<a href="galeries/Inula/Inula2.jpg.orig" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula2.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula2.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula2.jpg.orig" class="bordered" /></a>
<a href="galeries/Inula/Inula3.jpg" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula3.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula3.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula3.jpg" class="bordered" /></a>
<a href="galeries/Inula/Inula3.jpg.orig" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula3.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula3.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula3.jpg.orig" class="bordered" /></a>
<a href="galeries/Inula/Inula4.jpg" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula4.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula4.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula4.jpg" class="bordered" /></a>
<a href="galeries/Inula/Inula4.jpg.orig" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula4.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula4.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula4.jpg.orig" class="bordered" /></a>
<a href="galeries/Inula/Inula5.jpg" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula5.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula5.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula5.jpg" class="bordered" /></a>
<a href="galeries/Inula/Inula5.jpg.orig" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula5.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula5.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula5.jpg.orig" class="bordered" /></a>
<a href="galeries/Inula/Inula6.jpg" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula6.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula6.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula6.jpg" class="bordered" /></a>
<a href="galeries/Inula/Inula6.jpg.orig" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula6.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula6.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula6.jpg.orig" class="bordered" /></a>
<a href="galeries/Inula/Inula7.jpg" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula7.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula7.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula7.jpg" class="bordered" /></a>
<a href="galeries/Inula/Inula7.jpg.orig" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula7.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula7.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula7.jpg.orig" class="bordered" /></a>
<a href="galeries/Inula/Inula8.jpg" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula8.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula8.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula8.jpg" class="bordered" /></a>
<a href="galeries/Inula/Inula8.jpg.orig" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula8.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula8.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula8.jpg.orig" class="bordered" /></a>
<a href="galeries/Inula/Inula9.jpg" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula9.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula9.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula9.jpg" class="bordered" /></a>
<a href="galeries/Inula/Inula9.jpg.orig" rel="lytebox[galeries/Inula]" title="galeries/Inula/Inula9.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Inula/Inula9.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Inula/Inula9.jpg.orig" class="bordered" /></a>
</div>
</div>
<p>&nbsp;</p>
<div style="background-image: url(&quot;templates/basisdesign/kartoffel.jpg&quot;);" class="bildlink">
<div class="textdiv">
<h2>Gescheibelt, getrocknet, gemahlen</h2>
<p>Kartoffel</p>
</div>
<div class="buttondiv"><a href="galeries/Kartoffel/Kartoffel.jpg" rel="lytebox[galeries/Kartoffel]" title="Kartoffel" class="button">zeigen &raquo; </a></div>
<div class="displaynone"><h2>Kartoffel</h2><br />
<a href="galeries/Kartoffel/Kartoffel.jpg" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel.jpg" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel.jpg.orig" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel.jpg.orig" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel2.jpg" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel2.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel2.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel2.jpg" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel2.jpg.orig" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel2.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel2.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel2.jpg.orig" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel3.jpg" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel3.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel3.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel3.jpg" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel3.jpg.orig" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel3.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel3.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel3.jpg.orig" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel4.jpg" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel4.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel4.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel4.jpg" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel4.jpg.orig" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel4.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel4.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel4.jpg.orig" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel5.jpg" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel5.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel5.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel5.jpg" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel5.jpg.orig" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel5.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel5.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel5.jpg.orig" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel6.jpg" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel6.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel6.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel6.jpg" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel6.jpg.orig" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel6.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel6.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel6.jpg.orig" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel7.jpg" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel7.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel7.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel7.jpg" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel7.jpg.orig" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel7.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel7.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel7.jpg.orig" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel8.jpg" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel8.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel8.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel8.jpg" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel8.jpg.orig" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel8.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel8.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel8.jpg.orig" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel9.jpg" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel9.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel9.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel9.jpg" class="bordered" /></a>
<a href="galeries/Kartoffel/Kartoffel9.jpg.orig" rel="lytebox[galeries/Kartoffel]" title="galeries/Kartoffel/Kartoffel9.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Kartoffel/Kartoffel9.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Kartoffel/Kartoffel9.jpg.orig" class="bordered" /></a>
</div>
</div>
<p>&nbsp;</p>
<div style="background-image: url(&quot;templates/basisdesign/morus.jpg&quot;);" class="bildlink">
<div class="textdiv">
<h2>Luxus am seidenen Faden</h2>
<p>Maulbeerbaum</p>
</div>
<div class="buttondiv"><a href="galeries/Morus/Morus.jpg" rel="lytebox[galeries/Morus]" title="Morus" class="button">zeigen &raquo; </a></div>
<div class="displaynone"><h2>Morus</h2><br />
<a href="galeries/Morus/Morus.jpg" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus.jpg" class="bordered" /></a>
<a href="galeries/Morus/Morus.jpg.orig" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus.jpg.orig" class="bordered" /></a>
<a href="galeries/Morus/Morus2.jpg" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus2.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus2.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus2.jpg" class="bordered" /></a>
<a href="galeries/Morus/Morus2.jpg.orig" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus2.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus2.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus2.jpg.orig" class="bordered" /></a>
<a href="galeries/Morus/Morus3.jpg" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus3.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus3.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus3.jpg" class="bordered" /></a>
<a href="galeries/Morus/Morus3.jpg.orig" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus3.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus3.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus3.jpg.orig" class="bordered" /></a>
<a href="galeries/Morus/Morus4.jpg" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus4.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus4.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus4.jpg" class="bordered" /></a>
<a href="galeries/Morus/Morus4.jpg.orig" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus4.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus4.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus4.jpg.orig" class="bordered" /></a>
<a href="galeries/Morus/Morus5.jpg" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus5.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus5.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus5.jpg" class="bordered" /></a>
<a href="galeries/Morus/Morus5.jpg.orig" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus5.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus5.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus5.jpg.orig" class="bordered" /></a>
<a href="galeries/Morus/Morus6.jpg" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus6.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus6.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus6.jpg" class="bordered" /></a>
<a href="galeries/Morus/Morus6.jpg.orig" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus6.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus6.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus6.jpg.orig" class="bordered" /></a>
<a href="galeries/Morus/Morus7.jpg" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus7.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus7.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus7.jpg" class="bordered" /></a>
<a href="galeries/Morus/Morus7.jpg.orig" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus7.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus7.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus7.jpg.orig" class="bordered" /></a>
<a href="galeries/Morus/Morus8.jpg" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus8.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus8.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus8.jpg" class="bordered" /></a>
<a href="galeries/Morus/Morus8.jpg.orig" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus8.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus8.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus8.jpg.orig" class="bordered" /></a>
<a href="galeries/Morus/Morus9.jpg" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus9.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus9.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus9.jpg" class="bordered" /></a>
<a href="galeries/Morus/Morus9.jpg.orig" rel="lytebox[galeries/Morus]" title="galeries/Morus/Morus9.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Morus/Morus9.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Morus/Morus9.jpg.orig" class="bordered" /></a>
</div>
</div>
<p>&nbsp;</p>
<div style="background-image: url(&quot;templates/basisdesign/prunus.jpg&quot;);" class="bildlink">
<div class="textdiv">
<h2>Bl&uuml;hende Klimaforschung</h2>
<p>Kirschbaum</p>
</div>
<div class="buttondiv"><a href="galeries/Prunus/Prunus.jpg" rel="lytebox[galeries/Prunus]" title="Prunus" class="button">zeigen &raquo; </a></div>
<div class="displaynone"><h2>Prunus</h2><br />
<a href="galeries/Prunus/Prunus.jpg" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus.jpg" class="bordered" /></a>
<a href="galeries/Prunus/Prunus.jpg.orig" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus.jpg.orig" class="bordered" /></a>
<a href="galeries/Prunus/Prunus2.jpg" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus2.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus2.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus2.jpg" class="bordered" /></a>
<a href="galeries/Prunus/Prunus2.jpg.orig" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus2.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus2.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus2.jpg.orig" class="bordered" /></a>
<a href="galeries/Prunus/Prunus3.jpg" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus3.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus3.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus3.jpg" class="bordered" /></a>
<a href="galeries/Prunus/Prunus3.jpg.orig" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus3.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus3.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus3.jpg.orig" class="bordered" /></a>
<a href="galeries/Prunus/Prunus4.jpg" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus4.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus4.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus4.jpg" class="bordered" /></a>
<a href="galeries/Prunus/Prunus4.jpg.orig" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus4.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus4.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus4.jpg.orig" class="bordered" /></a>
<a href="galeries/Prunus/Prunus5.jpg" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus5.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus5.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus5.jpg" class="bordered" /></a>
<a href="galeries/Prunus/Prunus5.jpg.orig" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus5.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus5.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus5.jpg.orig" class="bordered" /></a>
<a href="galeries/Prunus/Prunus6.jpg" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus6.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus6.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus6.jpg" class="bordered" /></a>
<a href="galeries/Prunus/Prunus6.jpg.orig" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus6.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus6.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus6.jpg.orig" class="bordered" /></a>
<a href="galeries/Prunus/Prunus7.jpg" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus7.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus7.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus7.jpg" class="bordered" /></a>
<a href="galeries/Prunus/Prunus7.jpg.orig" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus7.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus7.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus7.jpg.orig" class="bordered" /></a>
<a href="galeries/Prunus/Prunus8.jpg" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus8.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus8.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus8.jpg" class="bordered" /></a>
<a href="galeries/Prunus/Prunus8.jpg.orig" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus8.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus8.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus8.jpg.orig" class="bordered" /></a>
<a href="galeries/Prunus/Prunus9.jpg" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus9.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus9.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus9.jpg" class="bordered" /></a>
<a href="galeries/Prunus/Prunus9.jpg.orig" rel="lytebox[galeries/Prunus]" title="galeries/Prunus/Prunus9.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Prunus/Prunus9.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Prunus/Prunus9.jpg.orig" class="bordered" /></a>
</div>
</div>
<p>&nbsp;</p>
<div style="background-image: url(&quot;templates/basisdesign/pulsatilla.jpg&quot;);" class="bildlink">
<div class="textdiv">
<h2>Ruhm und Ehre</h2>
<p>Hallers Anemone</p>
</div>
<div class="buttondiv"><a href="galeries/Pulsatilla/Pulsatilla.jpg" rel="lytebox[galeries/Pulsatilla]" title="Pulsatilla" class="button">zeigen &raquo; </a></div>
<div class="displaynone"><h2>Pulsatilla</h2><br />
<a href="galeries/Pulsatilla/Pulsatilla.jpg" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla.jpg" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla.jpg.orig" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla.jpg.orig" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla2.jpg" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla2.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla2.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla2.jpg" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla2.jpg.orig" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla2.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla2.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla2.jpg.orig" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla3.jpg" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla3.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla3.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla3.jpg" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla3.jpg.orig" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla3.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla3.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla3.jpg.orig" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla4.jpg" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla4.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla4.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla4.jpg" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla4.jpg.orig" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla4.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla4.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla4.jpg.orig" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla5.jpg" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla5.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla5.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla5.jpg" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla5.jpg.orig" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla5.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla5.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla5.jpg.orig" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla6.jpg" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla6.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla6.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla6.jpg" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla6.jpg.orig" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla6.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla6.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla6.jpg.orig" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla7.jpg" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla7.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla7.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla7.jpg" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla7.jpg.orig" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla7.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla7.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla7.jpg.orig" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla8.jpg" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla8.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla8.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla8.jpg" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla8.jpg.orig" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla8.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla8.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla8.jpg.orig" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla9.jpg" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla9.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla9.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla9.jpg" class="bordered" /></a>
<a href="galeries/Pulsatilla/Pulsatilla9.jpg.orig" rel="lytebox[galeries/Pulsatilla]" title="galeries/Pulsatilla/Pulsatilla9.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Pulsatilla/Pulsatilla9.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Pulsatilla/Pulsatilla9.jpg.orig" class="bordered" /></a>
</div>
</div>
<p>&nbsp;</p>
<div style="background-image: url(&quot;templates/basisdesign/rubia.jpg&quot;);" class="bildlink">
<div class="textdiv">
<h2>Einheimischer Farbstoff</h2>
<p>Krapp</p>
</div>
<div class="buttondiv"><a href="galeries/Rubia/Rubia.jpg" rel="lytebox[galeries/Rubia]" title="Rubia" class="button">zeigen &raquo; </a></div>
<div class="displaynone"><h2>Rubia</h2><br />
<a href="galeries/Rubia/Rubia.jpg" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia.jpg" class="bordered" /></a>
<a href="galeries/Rubia/Rubia.jpg.orig" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia.jpg.orig" class="bordered" /></a>
<a href="galeries/Rubia/Rubia2.jpg" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia2.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia2.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia2.jpg" class="bordered" /></a>
<a href="galeries/Rubia/Rubia2.jpg.orig" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia2.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia2.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia2.jpg.orig" class="bordered" /></a>
<a href="galeries/Rubia/Rubia3.jpg" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia3.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia3.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia3.jpg" class="bordered" /></a>
<a href="galeries/Rubia/Rubia3.jpg.orig" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia3.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia3.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia3.jpg.orig" class="bordered" /></a>
<a href="galeries/Rubia/Rubia4.jpg" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia4.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia4.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia4.jpg" class="bordered" /></a>
<a href="galeries/Rubia/Rubia4.jpg.orig" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia4.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia4.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia4.jpg.orig" class="bordered" /></a>
<a href="galeries/Rubia/Rubia5.jpg" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia5.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia5.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia5.jpg" class="bordered" /></a>
<a href="galeries/Rubia/Rubia5.jpg.orig" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia5.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia5.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia5.jpg.orig" class="bordered" /></a>
<a href="galeries/Rubia/Rubia6.jpg" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia6.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia6.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia6.jpg" class="bordered" /></a>
<a href="galeries/Rubia/Rubia6.jpg.orig" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia6.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia6.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia6.jpg.orig" class="bordered" /></a>
<a href="galeries/Rubia/Rubia7.jpg" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia7.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia7.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia7.jpg" class="bordered" /></a>
<a href="galeries/Rubia/Rubia7.jpg.orig" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia7.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia7.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia7.jpg.orig" class="bordered" /></a>
<a href="galeries/Rubia/Rubia8.jpg" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia8.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia8.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia8.jpg" class="bordered" /></a>
<a href="galeries/Rubia/Rubia8.jpg.orig" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia8.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia8.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia8.jpg.orig" class="bordered" /></a>
<a href="galeries/Rubia/Rubia9.jpg" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia9.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia9.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia9.jpg" class="bordered" /></a>
<a href="galeries/Rubia/Rubia9.jpg.orig" rel="lytebox[galeries/Rubia]" title="galeries/Rubia/Rubia9.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Rubia/Rubia9.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Rubia/Rubia9.jpg.orig" class="bordered" /></a>
</div>
</div>
</div>     </div>
<div id="footer">Eine Website der Albrecht von Haller-Stiftung der Burgergemeinde Bern,<br />des Historischen Instituts der Universität Bern und des Instituts für Medizingeschichte der Universität Bern <br />Konzept und Inhalt: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="hallersgarten.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
