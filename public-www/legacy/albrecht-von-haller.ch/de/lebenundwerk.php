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
<title>Leben und Werk - Albrecht von Haller</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='Content-Language' content='de_DE' />
<meta http-equiv='Content-Script-Type' content='text/javascript' />
<meta http-equiv='Content-Style-Type' content='text/css' />
<meta name='keywords' content='Albrecht von Haller' />
<meta name='description' content='' />
<meta name='author' content='Hannes Saxer' />
<meta name='Robots' content='index,follow' />
<meta http-equiv='imagetoolbar' content='no' /><!-- disable IE's image toolbar -->
<link rel='stylesheet' type='text/css' href='templates/lebenundwerk/style.css' />
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
<div id="headerimg"><img src="templates/lebenundwerk/header/head.png" width="960" height="320" /></div>
<div id="logo"><img src="templates/basisdesign/hallerlogo.png" width="200" height="130" /></div>
<div id="contenttitel">Leben und Werk</div>
</div>

<div id="meta">	
<div id="sprache"><a href="../f/index.php">F</a> | <a href="../e/index.php">E</a></div>
<div id="metanavigation"><a href="kontakt.php">Kontakt</a> | <a href="hallerstiftung.php">Hallerstiftung</a> | <a href="link.php">Links</a></div>		
</div>

<div id="navigation">
  
<li class="LNE_menu"><a href="index.php">Home</a></li>
<li class="LNE_menu"><a class="selected" href="lebenundwerk.php">Leben und Werk</a></li>
<li class="LNE_menu_intend"><a href="biographie.php">Biographie</a></li>
<li class="LNE_menu_intend"><a href="dichtungstaatsphilosophietheologie.php">Dichtung, Staatsphilosophie, Theologie</a></li>
<li class="LNE_menu_intend"><a href="medizin.php">Medizin</a></li>
<li class="LNE_menu_intend"><a href="botanik.php">Botanik</a></li>
<li class="LNE_menu_intend"><a href="magistratundoekonomischerpatriot.php">Magistrat und ökonomischer Patriot</a></li>
<li class="LNE_menu_intend"><a href="forscherundgelehrter.php">Forscher und Gelehrter</a></li>
<li class="LNE_menu_intend"><a href="bibliothekundrezensionen.php">Bibliothek und Rezensionen</a></li>
<li class="LNE_menu_intend"><a href="korrespondenz.php">Korrespondenz</a></li>
<li class="LNE_menu"><a href="nachlass.php">Nachlass</a></li>
<li class="LNE_menu"><a href="forschung.php">Forschung</a></li>
<li class="LNE_menu"><a href="hallerstexteimnetz.php">Hallers Texte im Netz</a></li>
<li class="LNE_menu"><a href="forschungsliteratur.php">Forschungsliteratur</a></li>
<li class="LNE_menu"><a href="imbuchhandel.php">Im Buchhandel</a></li>
<li class="LNE_menu"><a href="multimedia.php">Multimedia</a></li>

  <div id="haller"></div>
</div>
<div id="contentbox">
<div id="schrift"><a href="javascript:chooseStyle('none', 60)" style="font-size: 9px">A</a> | <a href="javascript:chooseStyle('pbig', 60)" style="font-size: 12px">A</a> | <a href="javascript:chooseStyle('pbiger', 60)" style="font-size: 14px">A</a></div>
  <div id="content">
    <p>Hallers Leben und Werk sind von einer beeindruckenden F&uuml;lle. Der  Berner Gelehrte schrieb 24 monographische Werke in 50 B&auml;nden. Neben  einem kleinen Gedichtband sind dies drei politische Romane, vier B&auml;nde  religi&ouml;se, zehn B&auml;nde botanische und 32 B&auml;nde medizinische Schriften.  Daneben verfasste er 52 kurze (weniger als zehn Seiten) und 84 l&auml;ngere  wissenschaftliche Abhandlungen, 10 Inauguraldissertationen (die seine  Sch&uuml;ler verteidigten), 200 medizinische &lsquo;Encyclop&eacute;die&rsquo;-Artikel, 25  Vorreden und 80 essay-artige Buchbesprechungen. Insgesamt f&uuml;llte er  damit rund 25&rsquo;000 Seiten, ungez&auml;hlt die &uuml;berarbeiteten Neuauflagen  seiner Werke, die er in weiteren 25 B&auml;nden herausgab. Und ungez&auml;hlt  ebenso die 9000 Rezensionen in den &laquo;G&ouml;ttingischen Gelehrten Anzeigen&raquo;  wie auch die 10 weiteren Werke in 52 B&auml;nden, deren Herausgabe er  besorgte.</p>
<p>Doch gilt es hier zu pr&auml;zisieren: Haller mag das Wissen und Denken  seiner Zeit wie vielleicht kein Zweiter umfassend &uuml;berblickt,  reflektiert, als Rezensent kommentiert und allenfalls auch f&uuml;r sich in  eine stimmige Einheit gebracht haben, er war aber selbst nicht in einer  f&uuml;r sein Jahrhundert ungew&ouml;hnlichen Breite als produktiver Forscher und  Gelehrter t&auml;tig. Seine zentralen Beitr&auml;ge beschr&auml;nken sich auf die  Bereiche Dichtung, Literaturkritik (Rezensionswesen), medizinische  Wissenschaften (insbesondere Anatomie, Physiologie und Embryologie) und  Botanik sowie auf einzelne Gebiete der Naturgeschichte, Landwirtschaft  und Technologie. Dabei war er wie viele seiner gelehrten Zeitgenossen  als Magistrat t&auml;tig und unterhielt einen umfangreichen Briefwechsel.</p>
<p>Die einzelnen Rubriken informieren kurz &uuml;ber Hallers Wirken in den  einzelnen Bereichen. Einen ausf&uuml;hrlicheren &Uuml;berblick &uuml;ber Hallers Leben  und Werk liefert <a href="ab2005.php#SteinkeBoschungPross2008">Steinke/Boschung Pross 2008</a>.<br />
Die gesamte Literatur von und &uuml;ber Haller verzeichnet die &laquo;Bibliographia Halleriana&raquo; (<a href="ab2005.php#SteinkeProfos2004">Steinke/Profos 2004</a>).</p>     </div>
<div id="footer">Eine Website der Albrecht von Haller-Stiftung der Burgergemeinde Bern,<br />des Historischen Instituts der Universität Bern und des Instituts für Medizingeschichte der Universität Bern <br />Konzept und Inhalt: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="lebenundwerk.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
