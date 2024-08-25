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
<title>Bibliothek und Rezensionen - Albrecht von Haller</title>
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
<div id="contenttitel">Bibliothek und Rezensionen</div>
</div>

<div id="meta">	
<div id="sprache"><a href="../f/index.php">F</a> | <a href="../e/index.php">E</a></div>
<div id="metanavigation"><a href="kontakt.php">Kontakt</a> | <a href="hallerstiftung.php">Hallerstiftung</a> | <a href="link.php">Links</a></div>		
</div>

<div id="navigation">
  
<li class="LNE_menu"><a href="index.php">Home</a></li>
<li class="LNE_menu"><a href="lebenundwerk.php">Leben und Werk</a></li>
<li class="LNE_menu_intend"><a href="biographie.php">Biographie</a></li>
<li class="LNE_menu_intend"><a href="dichtungstaatsphilosophietheologie.php">Dichtung, Staatsphilosophie, Theologie</a></li>
<li class="LNE_menu_intend"><a href="medizin.php">Medizin</a></li>
<li class="LNE_menu_intend"><a href="botanik.php">Botanik</a></li>
<li class="LNE_menu_intend"><a href="magistratundoekonomischerpatriot.php">Magistrat und ökonomischer Patriot</a></li>
<li class="LNE_menu_intend"><a href="forscherundgelehrter.php">Forscher und Gelehrter</a></li>
<li class="LNE_menu_intend"><a class="selected" href="bibliothekundrezensionen.php">Bibliothek und Rezensionen</a></li>
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
    <p>Albrecht von Haller besass einer der gr&ouml;ssten Bibliotheken seiner  Zeit. Nach seinem Tod wurde sie zu ihrem gr&ouml;ssten Teil nach Mailand  verkauft. Die Einheit von Hallers Sammlung, die vor allem auf die  allgemeine medizinisch-naturwissenschaftliche Abteilung der Biblioteca  Braidense in Mailand und die Universit&auml;tsbibliothek von Pavia verteilt  wurde, liess sich nur dank Besitzervermerken, handschriftlichen  Anmerkungen und der Ex Libris rekonstruieren. Dank dem von Maria Teresa  Monti erstellten Katalog sind wir &uuml;ber den Bestand mit seinen rund  23 000 Titeln genau informiert (<a href="bis2004.php#Monti1983-94">Monti 1983-1994</a>). Eine ausf&uuml;hrliche  Untersuchung &uuml;ber die Entstehung von Hallers Bibliothek und deren  Bedeutung f&uuml;r seine Arbeit steht noch aus. Eine erste Analyse widmet  sich Hallers eigenem Katalog von 1735, der 1200 Titel verzeichnet  (<a href="bis2004.php#Boschung1995">Boschung 1995</a>). Die Forschungsdatenbank zu Albrecht von Haller enth&auml;lt  den ganzen Katalog von Monti sowie denjenigen von 1735 und Teile des  umfangreichen Katalogs von 1757/68 mit rund 7250 Titeln. Sie ist der  ideale Ausgangspunkt f&uuml;r weiterf&uuml;hrende Studien. Dabei sollten auch  Hallers 10-b&auml;ndige Bibliographien der medizinischen und botanischen  Literatur beigezogen werden, in denen die Best&auml;nde aus Hallers eigener  Bibliothek mit einem Stern markiert sind (<a href="ab2005.php#Braun-Bucher2008">Braun-Bucher 2008</a>).</p>
<p>Haller notierte sich seit 1728 rund 5000 handschriftliche  Zusammenfassungen und Kritiken gelesener B&uuml;cher in seinen &laquo;Iudicia  librorum&raquo; (Burgerbibliothek Bern, Mss. Haller 32-54). Seit 1737 schrieb  er zudem Rezensionen f&uuml;r verschiedene Zeitschriften und seit 1745  insbesondere f&uuml;r die G&ouml;ttingischen Gelehrten Anzeigen (&laquo;GGA&raquo;), f&uuml;r die  er rund 9 000 Beitr&auml;ge verfasste. Die handschriftlichen Rezensionen sind  noch nirgends erfasst, von den GGA-Rezensionen sind nur diejenigen  literarischer Werke verzeichnet (<a href="bis2004.php#Guthke1962">Guthke 1962</a>, <a href="ab2005.php#ProfosFrick2009">Profos Frick 2009</a>), die in  anderen Periodika gedruckten Rezensionen sind nachgewiesen in der  &laquo;Bibliographia Halleriana&raquo; (<a href="ab2005.php#SteinkeProfos2004">Steinke/Profos 2004</a>). Zu Hallers Kritik der  sch&ouml;nen Literatur existieren umfassende Studien (<a href="bis2004.php#Guthke1962">Guthke 1962</a>, <a href="ab2005.php#ProfosFrick2009">Profos  Frick 2009</a>), nicht aber zu derjenigen der Wissenschaft und &Ouml;konomie. Zum  Zusammenspiel von Korrespondenz und Rezensionswesen liegt eine erste  Analyse vor (<a href="ab2005.php#Stuber2004">Stuber 2004</a>).</p>     </div>
<div id="footer">Eine Website der Albrecht von Haller-Stiftung der Burgergemeinde Bern,<br />des Historischen Instituts der Universität Bern und des Instituts für Medizingeschichte der Universität Bern <br />Konzept und Inhalt: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="bibliothekundrezensionen.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
