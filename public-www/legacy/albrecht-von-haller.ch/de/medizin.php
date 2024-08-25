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
<title>Medizin - Albrecht von Haller</title>
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
<div id="contenttitel">Medizin</div>
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
<li class="LNE_menu_intend"><a class="selected" href="medizin.php">Medizin</a></li>
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
    <p>Hallers herausragende Stellung in der Medizin des 18. Jahrhunderts ist vor allem bedingt durch seine systematische Untersuchung des lebenden und toten K&ouml;rpers. In der Anatomie betonte er die Notwendigkeit der wiederholten Sektion, welche allein die h&auml;ufig auftretenden Strukturen von seltenen Varianten unterscheiden kann. Durch die Pr&auml;paration von nahezu 400 Leichen gelang es ihm, in bisher nicht erreichter Vollkommenheit den Verlauf der Arterien im menschlichen K&ouml;rper darzustellen (*<a href="hallerstexteimnetz.php#Iconesanat1743-56">Icones anat. 1743-56</a>). Weitere Arbeiten galten den Missbildungen und ihren Gesetzm&auml;ssigkeiten. Der Name von Haller war jahrelang verbunden mit den anatomischen Strukturen des Zwerchfells (arcus lumbocostales Halleri), der Hoden (rete Halleri) und des Gef&auml;sssystems (tripus Halleri).</p>
<p>Die Anatomie bildete f&uuml;r Haller die Grundlage zur Erforschung der Lebensvorg&auml;nge, Physiologie war f&uuml;r ihn belebte Anatomie (anatomia animata). Die alles entscheidende Forschungsmethode aber war das Experiment am lebenden K&ouml;rper. Mit der systematischen Durchf&uuml;hrung zahlreicher &ndash; oft grausamer - Tierexperimente zur Bestimmung von Sensibilit&auml;t und Irritabilit&auml;t (Reizbarkeit) einzelner K&ouml;rperteile kann Haller als Begr&uuml;nder der experimentellen Physiologie gelten. Als Resultat seiner Untersuchungen (*<a href="hallerstexteimnetz.php#Departirrit1753">De part. irrit. 1753</a>) ordnete er spezifischen organischen Strukturen spezifische Eigenschaften zu (Muskel - Irritabilit&auml;t; Nerv - Sensibilit&auml;t) und hielt damit die bisher unklar getrennten Bereiche der Bewegung und Empfindung auseinander. Dadurch l&ouml;ste er eine europaweite Kontroverse aus, welche die medizinischen Konzepte in der zweiten H&auml;lfte des 18. Jahrhunderts wesentlich mitpr&auml;gte.</p>
<p>Haller begutachtete seine eigenen Schriften immer wieder und publizierte sie oft in mehreren &uuml;berarbeiteten Fassungen. Aus der Kombination von eigener Forschung und kritischer Verarbeitung der Schriften Anderer formte Haller schliesslich seine grossen kritischen Synthesen in der Physiologie (*<a href="hallerstexteimnetz.php#Boerhaaveprael1739-44">Boerhaave prael. 1739-44</a> [373], *<a href="hallerstexteimnetz.php#Primlinphysiol1747">Prim. lin. physiol. 1747</a> [390], *<a href="hallerstexteimnetz.php#Elphysiol1757-66">El. physiol. 1757-66</a> [423]). Das letzgenannte Werk, die achtb&auml;ndigen &laquo;Elementa physiologiae&raquo;, wurden zum Ausgangspunkt f&uuml;r die weitere Entwicklung der Physiologie im 19. Jahrhundert.</p>
<p>Weitere Studien galten der Str&ouml;mung des Blutes, dem Aufbau des Knochens und der Embryonalentwicklung (*<a href="hallerstexteimnetz.php#Deformationecordis1767">De formatione cordis 1767</a> [903]). Durch umfangreiche Studien am H&uuml;hnerei und geleitet von weltanschaulichen &Uuml;berzeugungen, vertrat Haller die Auffassung, dass der Keim nicht neu entsteht, sondern von Anfang an gebildet lediglich w&auml;chst und sichtbar wird (Pr&auml;formationsthese). Um den aktuellen Wissensstand zu dokumentieren und der gelehrten Welt verf&uuml;gbar zu machen, verzeichnete und kommentierte Haller das gesamte Schrifttum der Medizin in drei Bibliographien (*<a href="hallerstexteimnetz.php#Biblanat1774-77">Bibl. anat. 1774-77</a> [329], *<a href="hallerstexteimnetz.php#Biblchir1774-75">Bibl. chir. 1774-75</a> [1089], *<a href="hallerstexteimnetz.php#Biblmedpract1776-88">Bibl. med. pract. 1776-88</a> [1091]).</p>
<p>Hallers T&auml;tigkeit als praktischer Arzt wurde lange untersch&auml;tzt. Wie sein Briefwechsel belegt, praktizierte er nicht nur 1729-36 in Bern, sondern war Zeit seines Lebens nebenbei als beratender Arzt t&auml;tig (insbesondere in schwierigen Krankheitsf&auml;llen). Mit seinem Namen verbindet sich das &laquo;Elixir acidum Halleri&raquo;, das aus einem Teil Schwefels&auml;ure und drei Teilen Weingeist besteht und das noch in der &laquo;Pharmacopoea Helvetica Quarta&raquo; (1907, g&uuml;ltig bis 1933) aufgef&uuml;hrt ist.<br />
<br />
<strong>Forschungsliteratur</strong><br />
Anatomie und Physiologie: <a href="bis2004.php#Duchesneau1982">Duchesneau 1982</a>, <a href="bis2004.php#Monti1990">Monti 1990</a>, <a href="bis2004.php#Roe1984">Roe 1984</a>, <a href="bis2004.php#Schaer1958">Sch&auml;r 1958</a>, <a href="ab2005.php#Steinke2005">Steinke 2005</a>, <a href="ab2005.php#Steinke2007">Steinke 2007</a>, <a href="ab2005.php#Steinke2008">Steinke 2008</a>. <br />
Embryologie: *De formatione cordis 2000, <a href="bis2004.php#Cherni1998">Cherni 1998</a>, <a href="ab2005.php#Detlefsen2006">Detlefsen 2006</a>, <a href="bis2004.php#Duchesneau1982">Duchesneau 1982</a>, <a href="bis2004.php#Mazzolini1977">Mazzolini 1977</a>, <a href="bis2004.php#Monti1990">Monti 1990</a>, <a href="ab2005.php#Monti2008">Monti 2008</a>, <a href="bis2004.php#Roe1981">Roe 1981</a>.<br />
Praktische Medizin: <a href="bis2004.php#Boschung1977">Boschung 1977</a>, <a href="bis2004.php#Boschung1985a">Boschung 1985a</a>, <a href="bis2004.php#Boschung1996">Boschung 1996</a>, <a href="ab2005.php#Boschung2008a">Boschung 2008a</a>, <a href="ab2005.php#SteinkeBoschung2007">Steinke/Boschung 2007</a>.</p>     </div>
<div id="footer">Eine Website der Albrecht von Haller-Stiftung der Burgergemeinde Bern,<br />des Historischen Instituts der Universität Bern und des Instituts für Medizingeschichte der Universität Bern <br />Konzept und Inhalt: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="medizin.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
