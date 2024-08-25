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
<title>Base de données - Albrecht von Haller</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='Content-Language' content='de_DE' />
<meta http-equiv='Content-Script-Type' content='text/javascript' />
<meta http-equiv='Content-Style-Type' content='text/css' />
<meta name='keywords' content='' />
<meta name='description' content='' />
<meta name='author' content='Hannes Saxer' />
<meta name='Robots' content='index,follow' />
<meta http-equiv='imagetoolbar' content='no' /><!-- disable IE's image toolbar -->
<link rel='stylesheet' type='text/css' href='templates/forschung/style.css' />
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
<div id="headerimg"><img src="templates/forschung/header/head.png" width="960" height="320" /></div>
<div id="logo"><img src="templates/basisdesign/hallerlogo.png" width="200" height="130" /></div>
<div id="contenttitel">Base de données</div>
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
<li class="LNE_menu_intend"><a href="historiographie.php">Historiographie</a></li>
<li class="LNE_menu_intend"><a href="projethaller1991-2003.php">Projet Haller 1991–2003</a></li>
<li class="LNE_menu_intend"><a href="projetencours.php">Projet en cours</a></li>
<li class="LNE_menu_intend"><a class="selected" href="basededonnees.php">Base de données</a></li>
<li class="LNE_menu"><a href="hallerstexteimnetz.php">Haller sur le net</a></li>
<li class="LNE_menu"><a href="litteraturesecondaire.php">Littérature secondaire</a></li>
<li class="LNE_menu"><a href="alalibrairie.php">À la librairie</a></li>
<li class="LNE_menu"><a href="multimedia.php">Multimedia</a></li>

  <div id="haller"></div>
</div>
<div id="contentbox">
<div id="schrift"><a href="javascript:chooseStyle('none', 60)" style="font-size: 9px">A</a> | <a href="javascript:chooseStyle('pbig', 60)" style="font-size: 12px">A</a> | <a href="javascript:chooseStyle('pbiger', 60)" style="font-size: 14px">A</a></div>
  <div id="content">
    <p>La base de donn&eacute;es consacr&eacute;e &agrave; Albrecht von Haller contient des donn&eacute;es de r&eacute;f&eacute;rences sur environ 1'200 correspondants de Haller, 17'000 lettres adress&eacute;es par et &agrave; Haller, 23'000 ouvrages de la biblioth&egrave;que de Haller ainsi qu&rsquo;environ 4'000 publications de et sur Haller. Apr&egrave;s avoir int&eacute;gr&eacute; la base de donn&eacute;es de la Soci&eacute;t&eacute; &eacute;conomique de Berne, qui offre de nombreuses possibilit&eacute;s de recoupements avec le r&eacute;seau de Haller, elle est devenue une association de bases de donn&eacute;es, renomm&eacute;e &laquo;&nbsp;Haller-/OeG-DB&nbsp;&raquo;. Cette derni&egrave;re est mise &agrave; jour en permanence &ndash; s&rsquo;enrichissant par exemple de la correspondance du zurichois et savant universel Johann Jakob Scheuchzer. La &laquo;&nbsp;Haller-/OeG-DB&nbsp;&raquo; est impl&eacute;ment&eacute;e sur le serveur de la Biblioth&egrave;que de la Bourgeoisie de Berne. La Fondation Albrecht von Haller est d&eacute;tentrice de la licence du software FAUST au moyen duquel la base de donn&eacute;es a pu &ecirc;tre r&eacute;alis&eacute;e et a commandit&eacute; sa r&eacute;alisation conceptuelle. Martin Stuber en est le responsable. La &laquo;&nbsp;Haller-/OeG-DB&nbsp;&raquo; peut &ecirc;tre consult&eacute;e sur demande &agrave; la Biblioth&egrave;que de la Bourgeoisie de Berne (<a href="mailto:thomas.schmid@burgerbib.ch">Thomas Schmid</a>) ou &agrave; l&rsquo;Institut d&rsquo;histoire de l&rsquo;Universit&eacute; de Berne (<a href="mailto:martin.stuber@hist.unibe.ch">Martin Stuber</a>). &Agrave; moyen terme, il est pr&eacute;vu de la mettre en ligne.</p>
<p><strong>Litt&eacute;rature secondaire:</strong><br />
<a href="bis2004.php#Steinke2003a">Steinke 2003a</a>, <a href="bis2004.php#stuber">Stuber 1999</a>.</p>     </div>
<div id="footer">Un site web de la Fondation Albrecht von Haller de la Bourgeoisie de Berne, <br />de l'Institut d'Histoire et de l'Institut d'Histoire de la Médecine de l'Université de Berne <br />Concept and content: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="basededonnees.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
