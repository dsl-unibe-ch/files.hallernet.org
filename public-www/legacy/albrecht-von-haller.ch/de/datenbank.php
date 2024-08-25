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
<title>Datenbank - Albrecht von Haller</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='Content-Language' content='de_DE' />
<meta http-equiv='Content-Script-Type' content='text/javascript' />
<meta http-equiv='Content-Style-Type' content='text/css' />
<meta name='keywords' content='Albrecht von Haller' />
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
<div id="contenttitel">Datenbank</div>
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
<li class="LNE_menu_intend"><a href="forschungsgeschichte.php">Forschungsgeschichte</a></li>
<li class="LNE_menu_intend"><a href="hallerprojekt1991-2003.php">Haller-Projekt 1991–2003</a></li>
<li class="LNE_menu_intend"><a href="aktuelleprojekte.php">Aktuelle Projekte</a></li>
<li class="LNE_menu_intend"><a class="selected" href="datenbank.php">Datenbank</a></li>
<li class="LNE_menu"><a href="hallerstexteimnetz.php">Hallers Texte im Netz</a></li>
<li class="LNE_menu"><a href="forschungsliteratur.php">Forschungsliteratur</a></li>
<li class="LNE_menu"><a href="imbuchhandel.php">Im Buchhandel</a></li>
<li class="LNE_menu"><a href="multimedia.php">Multimedia</a></li>

  <div id="haller"></div>
</div>
<div id="contentbox">
<div id="schrift"><a href="javascript:chooseStyle('none', 60)" style="font-size: 9px">A</a> | <a href="javascript:chooseStyle('pbig', 60)" style="font-size: 12px">A</a> | <a href="javascript:chooseStyle('pbiger', 60)" style="font-size: 14px">A</a></div>
  <div id="content">
    <p>Die Forschungsdatenbank zu Albrecht von Haller enth&auml;lt die Eckdaten von rund 1200 Korrespondenten Hallers, 17&rsquo;000 Briefen von und an Haller, 23&rsquo;000 Publikationen aus Hallers Bibliothek sowie den rund 4000 Publikationen von und &uuml;ber Haller. Mit der Integration der Forschungsdatenbank zur Oekonomischen Gesellschaft Bern, die personell und inhaltlich zahlreiche Ber&uuml;hrungspunkte zu Hallers Netz aufweist, transformierte sich die Haller-Datenbank zum Datenbankverbund &laquo;Haller-/OeG-DB&raquo;. Dieser wird laufend weiter ausgebaut, so beispielsweise mit der Integration der Korrespondenz des Z&uuml;rcher Universalgelehrten Johann Jakob Scheuchzer. Die &laquo;Haller-/OeG-DB&raquo; ist implementiert auf dem Server der Burgerbibliothek Bern, Lizenznehmerin der Datenbanksoftware FAUST ist die Albrecht von Haller-Stiftung, in deren Auftrag Martin Stuber die konzeptionelle Verantwortung tr&auml;gt. Die &laquo;Haller-/OeG-DB&raquo; kann nach Absprache konsultiert werden in der Burgerbibliothek Bern (<a href="mailto:thomas.schmid@burgerbib.ch">Thomas Schmid</a>) und am Historischen Institut der Universit&auml;t Bern (Martin Stuber).</p>
<p>Seit August 2016 l&auml;uft das Umbaurojekt &laquo;Haller online&raquo;, das die seit  1991 bestehende relationale Haller Datenbank in eine TEI.konforme  XML-Datenstruktur &uuml;berf&uuml;hrt und auf Ende 2018 als Editions- und  Forschungsplattform zug&auml;nglich macht: <a href="http://www.hist.unibe.ch/forschung/forschungsprojekte/haller_online/index_ger.html">Haller online</a></p>
<p>Forschungsliteratur:</p>
<p><a href="bis2004.php#Steinke2003a">Steinke 2003a</a>, <a href="bis2004.php#stuber">Stuber 1999</a>.<a href="index.php#definition"><br />
</a></p>     </div>
<div id="footer">Eine Website der Albrecht von Haller-Stiftung der Burgergemeinde Bern,<br />des Historischen Instituts der Universität Bern und des Instituts für Medizingeschichte der Universität Bern <br />Konzept und Inhalt: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="datenbank.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
