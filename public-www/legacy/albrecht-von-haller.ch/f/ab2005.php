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
<title>depuis 2005 - Albrecht von Haller</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='Content-Language' content='de_DE' />
<meta http-equiv='Content-Script-Type' content='text/javascript' />
<meta http-equiv='Content-Style-Type' content='text/css' />
<meta name='keywords' content='' />
<meta name='description' content='' />
<meta name='author' content='Hannes Saxer' />
<meta name='Robots' content='index,follow' />
<meta http-equiv='imagetoolbar' content='no' /><!-- disable IE's image toolbar -->
<link rel='stylesheet' type='text/css' href='templates/forschungsliteratur/style.css' />
<link rel='stylesheet' type='text/css' href='css/lightneasy.css' />
<link rel="alternate" type="application/rss+xml" title="Albrecht von Haller RSS Feed" href="LightNEasy/rss.php" />
<link rel="alternate" type="application/atom+xml" title="Albrecht von Haller Atom Feed" href="LightNEasy/atom.php" />

<link rel="alternate stylesheet" type="text/css" media="screen" title="pbig" href="templates/css/pbig.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="pbiger" href="templates/css/pbiger.css" />

<script type="text/javascript" src="js/styleswitch.js"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/fadein.js"></script>
<script type="text/javascript" src="js/jquery.randomContent.js"></script>

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
  $("div:hidden:first").fadeIn(2000);
});
</script>

</head>

<body name="top" id="top" onLoad="setImage()">
<a href="#top" id="top-link">Top</a>

<div id="wrapper">

<div id="header">
<div id="headerimg"><img src="templates/forschungsliteratur/header/head.png" width="960" height="320" /></div>
<div id="logo"><img src="templates/basisdesign/hallerlogo.png" width="200" height="130" /></div>
<div id="contenttitel">depuis 2005</div>
</div>

<div id="meta">	
<div id="sprache"><a href="../d/index.php">D</a> | <a href="../e/index.php">E</a></div>
<div id="metanavigation"><a href="contact.php">Contact</a> | <a href="fondationalbrechtvonhaller.php">Fondation Albrecht von Haller</a> | <a href="liens.php">Liens</a></div>		
</div>

<div id="navigation">
  
<li class="LNE_menu"><a href="index.php">Accueil</a></li>
<li class="LNE_menu"><a href="savieetsonoeuvre.php">Sa vie et son œuvre</a></li>
<li class="LNE_menu"><a href="fondsmanuscrit.php">Fonds manuscrit</a></li>
<li class="LNE_menu"><a href="recherche.php">Recherche</a></li>
<li class="LNE_menu"><a href="hallerstexteimnetz.php">Haller sur le net</a></li>
<li class="LNE_menu"><a href="litteraturesecondaire.php">Littérature secondaire</a></li>
<li class="LNE_menu_intend"><a href="bis2004.php">jusqu’en 2004</a></li>
<li class="LNE_menu_intend"><a class="selected" href="ab2005.php">depuis 2005</a></li>
<li class="LNE_menu"><a href="alalibrairie.php">À la librairie</a></li>
<li class="LNE_menu"><a href="multimedia.php">Multimedia</a></li>

  <div id="haller"></div>
</div>
<div id="contentbox">
<div id="schrift"><a href="javascript:chooseStyle('none', 60)" style="font-size: 9px">A</a> | <a href="javascript:chooseStyle('pbig', 60)" style="font-size: 12px">A</a> | <a href="javascript:chooseStyle('pbiger', 60)" style="font-size: 14px">A</a></div>
  <div id="content">
    <h2>suppl&eacute;ment &agrave; la Bibliographia Halleriana</h2>
<div id="allesprachen">&nbsp;<img width="32" height="32" alt="" src="/avh/f/images/loader.gif" class="loader" /></div>
<p>
<script>
$('#allesprachen').load('../d/ab2005.php #allesprachen > *', function() {


if($(location).attr("hash")) {
mein_anker = $(location).attr("hash").substring(1);
elem = $('a[name="'+mein_anker+'"]');
if(elem) {
meine_position = $(elem).offset();
$(window).scrollTop(meine_position.top);
}
}//eof hash vorhanden
});
</script>
</p>     </div>
<div id="footer">Un site web de la Fondation Albrecht von Haller de la Bourgeoisie de Berne, <br />de l'Institut d'Histoire et de l'Institut d'Histoire de la Médecine de l'Université de Berne <br />Concept and content: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="ab2005.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
