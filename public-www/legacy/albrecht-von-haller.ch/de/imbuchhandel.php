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
<title>Im Buchhandel - Albrecht von Haller</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='Content-Language' content='de_DE' />
<meta http-equiv='Content-Script-Type' content='text/javascript' />
<meta http-equiv='Content-Style-Type' content='text/css' />
<meta name='keywords' content='Albrecht von Haller' />
<meta name='description' content='' />
<meta name='author' content='Hannes Saxer' />
<meta name='Robots' content='index,follow' />
<meta http-equiv='imagetoolbar' content='no' /><!-- disable IE's image toolbar -->
<link rel='stylesheet' type='text/css' href='templates/buchhandel/style.css' />
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
<div id="headerimg"><img src="templates/buchhandel/header/head.png" width="960" height="320" /></div>
<div id="logo"><img src="templates/basisdesign/hallerlogo.png" width="200" height="130" /></div>
<div id="contenttitel">Im Buchhandel</div>
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
<li class="LNE_menu"><a class="selected" href="imbuchhandel.php">Im Buchhandel</a></li>
<li class="LNE_menu"><a href="multimedia.php">Multimedia</a></li>

  <div id="haller"></div>
</div>
<div id="contentbox">
<div id="schrift"><a href="javascript:chooseStyle('none', 60)" style="font-size: 9px">A</a> | <a href="javascript:chooseStyle('pbig', 60)" style="font-size: 12px">A</a> | <a href="javascript:chooseStyle('pbiger', 60)" style="font-size: 14px">A</a></div>
  <div id="content">
    <div id="buchhandel">
<div id="allesprachen">
<p><img width="73" height="117" alt="" src="../medien/image/avh_in_goettingen_zur_aufklaerung.jpg" />Albrecht von Haller im G&ouml;ttingen der Aufkl&auml;rung / hrsg. von Norbert Elsner und Nicolaas A. Rupke (G&ouml;ttingen: Wallstein, 2009). &ndash; 453 S.</p>
<p><img width="73" height="106" src="../medien/image/hallers_landschaft.jpg" alt="" />Hallers Landschaften und Gletscher, in: Beitr&auml;ge zu den Veranstaltungen der Akademien Schweiz 2008 zum Jubil&auml;umsjahr &laquo;Haller300&raquo;. Sonderdruck aus den Mitteilungen der Naturforschenden Gesellschaft in Bern, Neue Folge, Bd. 66, 2009. &ndash; 238 S.</p>
<p><img width="75" height="105" src="../medien/image/gelehrte_kritik.jpg" alt="" />Profos Frick, Claudia: Gelehrte Kritik. Albrecht von Hallers literarisch-wissenschaftliche Rezensionen in den &laquo;G&ouml;ttingischen Gelehrten Anzeigen&raquo;. Basel: Verlag Schwabe &amp; Co, 2009 (Studia Halleriana, Bd. X). &ndash; 450 S. &ndash; Ill.</p>
<p><img width="75" height="88" src="../medien/image/kartoffeln_klee.jpg" alt="" />Kartoffeln, Klee und kluge K&ouml;pfe. Die Oekonomische und Gemeinn&uuml;tzige Gesellschaft des Kantons Bern OGG, 1759-2009 / hrsg. von Martin Stuber, Peter Moser, Gerrendina Gerber-Visser, Christian Pfister (Bern: Haupt, 2009). &ndash; 309 S. &ndash; Ill.</p>
<p><img width="73" height="102" src="../medien/image/wiegrebe.jpg" alt="" />Wiegrebe, Wolfgang: Albrecht von Haller als apologetischer Physikotheologe. Physikotheologie: Erkenntnis Gottes aus der Natur. Bern: Peter Lang. 2009. &ndash; 550 S.</p>
<p><img width="85" height="126" src="../medien/image/leben-werk-epoche.jpg" alt="" />Albrecht von Haller: Leben &ndash; Werk &ndash; Epoche / hrsg. von Hubert Steinke, Urs Boschung und Wolfgang Pro&szlig; (G&ouml;ttingen: Wallstein, 2008. &ndash; 544 S. &ndash; Ill.</p>
<p><img width="75" height="105" src="../medien/image/premier_voyage.jpg" alt="" />Premier voyage dans les Alpes et autres textes 1728-1732 / Albrecht von Haller; edition &eacute;tablie et annot&eacute; par Aur&eacute;lie Luther sous la direction de Claire Jaquier avec la collaboration de Laure Chappuis Sandoz et Luc Lienhard (Gen&egrave;ve: Editions Slatkine, 2008; Travaux sur la Suisse des Lumi&egrave;res), 160 S. &ndash; Ill.</p>
<p><img width="75" height="108" src="../medien/image/zum_300_geburtstag.jpg" alt="" />Albrecht von Haller zum 300. Geburtstag / hrsg. von Jean-Daniel Candaux, Alain Cernuschi, Anett L&uuml;tteken, Jesko Reiling (Schweizerische Gesellschaft zur Erforschung des 18. Jahrhunderts: Themenheft Nr. 1, 2008). &ndash; 144 S. &ndash; Ill.</p>
<p><img width="143" height="210" src="../medien/image/wissen_im_netz.jpg" alt="" />Wissen im Netz. Botanik und Pflanzentransfer in europ&auml;ischen Korrespondenznetzen des 18. Jahrhunderts / hrsg. von Regina Dauser, Stefan H&auml;chler. Michael Kemppe, Franz Mauelshagen und Martin Stuber (Berlin: Akademie Verlag, 2008; Colloquia Augustana, Bd. 24). &ndash; 427 S. &ndash; Ill.</p>
<p><img width="75" height="107" src="../medien/image/nuetzliche_wissenschaft.jpg" alt="" />N&uuml;tzliche Wissenschaft und &Ouml;konomie im Ancien R&eacute;gime. Akteure, Themen, Kommunikationsformen / hrsg. von Andr&eacute; Holenstein, Martin Stuber und Gerrendina Gerber-Visser (Heidelberg: Palatina, 2007, Cardanus. Jahrbuch f&uuml;r Wissenschaftsgeschichte, 7). - 196 S. &ndash; Ill.</p>
<p><img width="111" height="228" src="../medien/image/spaziergaenge.jpg" alt="" />Sch&auml;rer, Monika: Haller-Spazierg&auml;nge durch die Stadt Bern. Auf den Spuren des Berner Universalgelehrten Albrecht von Haller, 1708-1777 (Bern: Benteli, 2007). &ndash; 27 S. &ndash; Ill.</p>
<p><img width="75" height="125" src="../medien/image/versuch_schweizerischer_gedichte.jpg" alt="" />Haller, Albrecht von: Versuch Schweizerischer Gedichte. Nachdruck der 11., verm. und verb. Ausg. (Z&uuml;rich: Georg Olms Verlag, 2006; Helvetia rara). - 343 S. &ndash; Ill.</p>
<p><img width="75" height="106" src="../medien/image/usong.jpg" alt="" />Salama, Dalia: Albrecht von Hallers &laquo;Usong&raquo;. Ein orientalisierender Staatsroman (Hamburg: Verlag Dr. Kovac, 2006; Studien zur Germanistik; Bd. 19). - 289 S.</p>
<p><img width="75" height="113" src="../medien/image/irritating.jpg" alt="" />Steinke, Hubert: Irritating experiments : Haller&rsquo;s concept and the European controversy on irritability and sensibility 1750-1790 (Amsterdam / New York: Rodopi, 2005, Clio Medica, 76). &ndash; 354 S. &ndash; Ill.</p>
<p><img width="148" height="192" src="../medien/image/hallers_netz.jpg" alt="" />Hallers Netz. Ein europ&auml;ischer Gelehrtenbriefwechsel zur Zeit der Aufkl&auml;rung / hrsg. von Martin Stuber, Stefan H&auml;chler und Luc Lienhard (Basel: Verlag Schwabe &amp; Co, 2005, Studia Halleriana, Bd. IX). &ndash; 592 S. &ndash; Ill.http://www.haller.unibe.ch/Hallers Netz Inhalt Vorwort Register.pdf</p>
<p><img width="155" height="200" src="../medien/image/bibliographia_halleriana.jpg" alt="" />Bibliographia Halleriana. Verzeichnis der Schriften von und &uuml;ber Albrecht von Haller/ hrsg. von Hubert Steinke und Claudia Profos, unter Mitarbeit von Pia Burkhalter (Basel: Schwabe 2004, Studia Halleriana, Bd. VIII). - 452 S. &ndash; Ill.http://www.haller.unibe.ch/Bibliographia Halleriana Inhalt Einleitung Register.pdf</p>
<p><img width="156" height="229" src="../medien/image/von_newton_zu_haller.jpg" alt="" />De Angelis, Simone: Von Newton zu Haller: Studien zum Naturbegriff zwischen Empirismus und deduktiver Methode in der Schweizer Fr&uuml;haufkl&auml;rung (T&uuml;bingen : Max Niemeyer, 2003, Fr&uuml;he Neuzeit; 74). - XII, 504 S.</p>
<p><img width="156" height="215" src="../medien/image/repertorium.jpg" alt="" />Repertorium zu Albrecht von Hallers Korrespondenz 1724-1777 / hrsg. von Urs Boschung, Barbara Braun-Bucher, Stefan H&auml;chler, Anne Kathrin Ott, Hubert Steinke und Martin Stuber (Basel : Verlag Schwabe &amp; Co, 2002, Studia Halleriana, Bd. VII). - 2 Bde. (XLVIII, 634; 352 S.) + 1 CD-ROM. - Ill., Portr. [Bibliographia Halleriana 1452].</p>
<p><img width="163" height="218" src="../medien/image/commentatorium.jpg" alt="" />Haller, Albrecht von: Commentarius de formatione cordis in ovo incubato / edizione critica a cura di Maria Teresa Monti (Basel : Verlag Schwabe &amp; Co, 2000, Studia Halleriana, Bd. VI). &ndash; 860 S. &ndash; + CD-ROM, - Ill. [Bibliographia Halleriana 0904].</p>
<p><img width="151" height="214" src="../medien/image/ancien_regime.jpg" alt="" />Stuber, Martin / H&auml;chler, Stefan: Ancien R&eacute;gime vernetzt. Albrecht von Hallers bernische Korrespondenz, in: Berner Zeitschrift f&uuml;r Geschichte und Heimatkunde, 62, 2000/4, S. 125-190 [Bibliographia Halleriana 1459].</p>
<p><img width="163" height="234" src="../medien/image/der_nuetzliche_brief.jpg" alt="" />Der n&uuml;tzliche Brief: die Korrespondenz zwischen Albrecht von Haller und Christoph Jakob Trew 1733-1763 / hrsg. von Hubert Steinke (Basel: Verlag Schwabe &amp; Co, 1999, Studia Halleriana, Bd. V). - 163 S. - Ill., Portr. [Bibliographia Halleriana 1741].</p>
<p><img width="159" height="228" src="../medien/image/john_pringle.jpg" alt="" />John Pringle`s correspondence with Albrecht von Haller / edited by Otto Sonntag (Basel: Verlag Schwabe &amp; Co, 1999, Studia Halleriana, Bd. IV). - 383 S. - Ill., Portr. [Bibliographia Halleriana 1688].</p>
<p><img width="142" height="219" src="../medien/image/die_alpen.jpg" alt="" />Haller, Albrecht von: Die Alpen und andere Gedichte. Auswahl und Nachwort von Adalbert Elschenbroich. Stuttgart: P. Reclam jun. 1998 (unver&auml;nderter Nachdruck der Ausgabe von 1965. &ndash; 119 S. [Bibliographia Halleriana 0092].</p>
</div>
<p>&nbsp;</p>
</div>     </div>
<div id="footer">Eine Website der Albrecht von Haller-Stiftung der Burgergemeinde Bern,<br />des Historischen Instituts der Universität Bern und des Instituts für Medizingeschichte der Universität Bern <br />Konzept und Inhalt: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="imbuchhandel.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
