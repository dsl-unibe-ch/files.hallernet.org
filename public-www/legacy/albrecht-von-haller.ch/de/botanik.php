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
<title>Botanik - Albrecht von Haller</title>
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
<div id="contenttitel">Botanik</div>
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
<li class="LNE_menu_intend"><a class="selected" href="botanik.php">Botanik</a></li>
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
    <p>Hallers botanisches Werk umfasst umfangreiche Bestandesaufnahmen (Floren) gr&ouml;sserer Regionen (Schweiz, Jena, G&ouml;ttingen), Monographien von Pflanzengattungen oder Familien (z.B. europ&auml;ische Laucharten und Orchideen), Beschreibungen botanischer Sammelreisen und eine kritisch kommentierte Bibliographie (*<a href="hallerstexteimnetz.php#Biblbot1771-72">Bibl. bot. 1771-72</a> [1215]) des gesamten botanischen Schrifttums bis in seine Zeit.<br />
Nach mehreren Sammelreisen vor allem in den Alpen und mit Hilfe seiner Freunde, ver&ouml;ffentlichte Haller als G&ouml;ttinger Professor die erste umfassende Schweizer Flora (*<a href="hallerstexteimnetz.php#Enumstirphelv1742">Enum. stirp. helv. 1742</a> [1189]). Dieses sein botanisches Hauptwerk gab er 1768 in wesentlich erweiterter Fassung heraus (*<a href="hallerstexteimnetz.php#Histstirphelv1768">Hist. stirp. helv. 1768</a> [1202]). F&uuml;r die Universit&auml;t G&ouml;ttingen gr&uuml;ndete er den botanischen Garten, dessen reiche Sammlungen er aufbaute und beschrieb (*<a href="hallerstexteimnetz.php#EnumhortGott1753">Enum. hort. Gott. 1753</a> [1241]).</p>
<p>Haller war Wegbereiter verschiedener Bereiche der Botanik: Er hat die Variabilit&auml;t von Pflanzen erkannt und die Artkonstanz verworfen; er pflegte die exakte morphologische Beschreibung einer Art mit wiederholter Beobachtung an zahlreichen Exemplaren auch in verschiedenen Entwicklungsstadien und hielt auch Fundorte und Standortsfaktoren fest. Bekannt sind seine Erkenntnisse zur Pflanzengeographie und zu den H&ouml;henstufen. Ein Besonderes Merkmal von Hallers Pflanzenwerken sind seine ausf&uuml;hrliche Synonymie der alten (vorlinneischen) Pflanzennamen und sein Versuch eines nat&uuml;rlichen Systems der Pflanzen. Mehrere seiner kleineren botanischen Schriften ver&ouml;ffentlichte er in einem Sammelband (*<a href="hallerstexteimnetz.php#Opusculabot1749 ">Opuscula bot. 1749 </a>[1254]).<br />
Die von seinem Zeitgenossen Carl von Linn&eacute; erfolgreich propagierte bin&auml;re Nomenklatur mit dem k&uuml;nstlichen Sexualsystem lehnte Haller aus historischen und wissenschaftlichen Gr&uuml;nden&nbsp; ab. So sind seine Namen der z.B. etwa 300 neu beschriebenen Bl&uuml;tenpflanzen ung&uuml;ltig und seinem botanischem Werk blieb eine gr&ouml;ssere Wirkung versagt.</p>
<p>Haller hat umfangreiche Herbarien angelegt welche heute gr&ouml;sstenteils noch vorhanden sind. Das 60b&auml;ndige Haupt-Herbar liegt in Paris (Mus&eacute;um National d&lsquo; Histoire Naturelle), ein kleineres befindet sich im Albrecht von Haller Institut f&uuml;r Pflanzenwissenschaften der Universit&auml;t G&ouml;ttingen. Einige Belege sind auch im Herbar seines Sohnes Albrecht von Haller filius (1758-1823) in Genf (Conservatoire et Jardin botaniques) zu finden.</p>
<p>&nbsp;</p>
<p><a href="http://www.albrecht-von-haller.ch/haller_im_museum/index.htm">Haller im Museum</a><br />
&nbsp;</p>
<p><strong>Forschungsliteratur</strong><br />
<a href="bis2004.php#Beer1953">Beer 1953</a>, <a href="bis2004.php#Boschung2000">Boschung 2000</a>, <a href="ab2005.php#DrouinLienhard2008">Drouin/Lienhard 2008</a>, <a href="bis2004.php#Fischer1909">Fischer 1909</a>, <a href="bis2004.php#Frey1964">Frey 1964</a>, <a href="ab2005.php#GradsteinSchwerdtfeger2009">Gradstein/Schwerdtfeger 2009</a>,&nbsp;<a href="bis2004.php#Lienhard2000">Lienhard 2000</a>, <a href="ab2005.php#Lienhard2005">Lienhard 2005</a>, <a href="ab2005.php#Lienhard2007">Lienhard 2007</a>, <a href="bis2004.php#Shteir1977">Shteir 1977</a>, <a href="bis2004.php#Toellner2002">Toellner 2002</a>, <a href="ab2005.php#Wagenitz2003a">Wagenitz 2003a</a>,&nbsp;&nbsp;<a href="ab2005.php#Wagenitz2009">Wagenitz 2009</a>,&nbsp;<a href="bis2004.php#Zoller1958">Zoller 1958</a>, <a href="bis2004.php#Zoller1977">Zoller 1977</a>.</p>     </div>
<div id="footer">Eine Website der Albrecht von Haller-Stiftung der Burgergemeinde Bern,<br />des Historischen Instituts der Universität Bern und des Instituts für Medizingeschichte der Universität Bern <br />Konzept und Inhalt: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="botanik.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
