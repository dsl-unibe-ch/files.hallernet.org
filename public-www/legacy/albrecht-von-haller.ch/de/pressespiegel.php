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
<title>Pressespiegel - Albrecht von Haller</title>
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
<div id="contenttitel">Pressespiegel</div>
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
<li class="LNE_menu_intend"><a href="hallersgarten.php">Hallers Garten</a></li>
<li class="LNE_menu_intend"><a href="haller300.php">Haller 300</a></li>
<li class="LNE_menu_doubleintend"><a href="programmheft.php">Programmheft</a></li>
<li class="LNE_menu_doubleintend"><a href="projektteam.php">Projektteam</a></li>
<li class="LNE_menu_doubleintend"><a href="patronatskomitee.php">Patronatskomitee</a></li>
<li class="LNE_menu_doubleintend"><a class="selected" href="pressespiegel.php">Pressespiegel</a></li>
<li class="LNE_menu_doubleintend"><a href="radioundfernsehen.php">Radio und Fernsehen</a></li>
<li class="LNE_menu_intend"><a href="bilder.php">Bilder</a></li>
<li class="LNE_menu_intend"><a href="theatermusikcomic.php">Theater, Musik, Comic</a></li>

  <div id="haller"></div>
</div>
<div id="contentbox">
<div id="schrift"><a href="javascript:chooseStyle('none', 60)" style="font-size: 9px">A</a> | <a href="javascript:chooseStyle('pbig', 60)" style="font-size: 12px">A</a> | <a href="javascript:chooseStyle('pbiger', 60)" style="font-size: 14px">A</a></div>
  <div id="content">
    <h2>Eine Auswahl von 100 Schweizer Pressestimmen zum Haller-Jahr 2008</h2>
<div id="allesprachen">
<ul id="link">
    <li><a target="_blank" href="../medien/pdf/2008_01_24_BernzerZeitung.pdf">Karl der K&uuml;hne und der Kubus, Berner Zeitung, 24.1.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_01_24_DerBund.pdf">Jahr der Superlative, Der Bund, 24.1.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_02_01_BernerZeitung.pdf">Das Genie wird gross gefeiert, Berner Zeitung, 1.2.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_02_01_DerBund.pdf">100 Anl&auml;sse zu Hallers 300., Der Bund, 1.2.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_02_07_AppenzellerZeitung.pdf">Albrecht von Haller: Weltklasse aus Bern, Appenzeller Zeitung, 7.2.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_02_11_ch.pdf">Haller. &sbquo;Er arbeitete wie eine Maschine&lsquo;, .ch, 11.2.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_02_28_Pearls.pdf">Eine Schweizer Jahrhundertgestalt, The Pearls of Switzerland, 28.2.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_02_29_Tierwelt.pdf">Grosser Naturforscher, Dichter, Alpen-Pionier, Tierwelt, 29.2.2008</a></li>
    <li><a href="../medien/pdf/2008_02_29_Bund.pdf">Warten mit Haller, Der Bund, 29.2.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_03_01_SolothurnerZeitung.pdf">Eine unbekannte Berner Gr&ouml;sse feiern, Solothurner Zeitung, 1.3.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_03_13_Unikum.pdf">Nachgefragt, Unikum &ndash; Universit&auml;t Bern, 13.3.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_03_20_BernerBaer.pdf">Belebte Haller-Station, Berner B&auml;r, 20.3.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_03_20_EchoduGrosdeVaud.pdf">Albert de Haller, L&rsquo;Echo du Gros-de-Vaud, 20.3.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_03_29_BernerZeitung.pdf">V&ouml;lkerwanderung durch 34 Museen, Berner Zeitung, 29.3.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_04_10_Gartenbau.pdf">Hallers (G)Arten, Der Gartenbau, 10.4.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_04_14_BrunneZytig.pdf">Haller 300, Brunne Zytig, 14.4.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_04_15_BernerBaer.pdf">Gr&ouml;sster Berner aller Zeiten, Berner B&auml;r, 15.4.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_04_18_BernerZeitung.jpg">Pflanzen erz&auml;hlen Geschichten, Berner Zeitung, 18.4.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_04_18_DerBund.jpg">Bl&uuml;hendes Geschichtsbuch, Der Bund, 18.4.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_04_18_GrenchnerTagblatt.JPG">Blumen f&uuml;r Albrecht von Haller, Grenchner Tagblatt, 18.4.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_04_24_AargauerZeitung.pdf">Wieso Blauf&auml;rber &sbquo;blaumachten&lsquo;, Aargauer Zeitung, 24.4.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_04_24_ZuerichseeZeitung.pdf">Jugendliches Innovationspotenzial f&ouml;rdern, Z&uuml;richsee-Zeitung, 24.4.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_04_24_BernerBaer.pdf">Naturerlebnis gestern und heute, Berner B&auml;r, 24.4.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_05_05_AargauerZeitung.pdf">Gletscher, Firne und die Alpen, Aargauer Zeitung, 5.5.2008</a></li>
    <li><a href="../medien/pdf/2008_05_06_Brienzer.pdf">Dank von Haller 6 Prozent Dividende, Der Brienzer, 6.5.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_05_06_DerBund.pdf">Theater um Universalgenie, Der Bund, 6.5.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_05_06_CoopZeitung.pdf">Universalgelehrter, Coop Zeitung, 6.5.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_05_08_LokalNachrichten.pdf">Sonderf&uuml;hrung durch die Burgerbibliothek, Lokal-Nachrichten Muri-G&uuml;mligen, 8.5.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_05_09_BernerOberlaender.pdf">Auf den Spuren eines Berners, Berner Oberl&auml;nder, 9.5.2008</a></li>
    <li><a href="../medien/pdf/2008_05_15_Freischuetz.pdf">Ein Genie stellt sich vor, Der Freisch&uuml;tz, 15.5.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_05_16_DerBrienzer.pdf">Mit Vollgas in die Vergessenheit, Der Brienzer, 16.5.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_05_20_WohlerAnzeiger.pdf">Zwei Genies, eine Passion, Wohler Anzeiger, 20.5.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_05_22_kulturagenda.pdf">Von Arterien und Bergk&auml;mmen, Berner Kulturagenda, 22.5.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_05_23_Freischuetz.pdf">&sbquo;Ich seh&lsquo; die innere Welt, sie ist der H&ouml;lle gleich&lsquo;, Der Freisch&uuml;tz, 23.5.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_05_23_DerBund.pdf">Rolls-Royce der Sekret&auml;re, Der Bund, 23.5.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_06_06_DerBund.pdf">Standpauke f&uuml;r Regierung, Der Bund, 6.6.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_06_20_24heures.pdf">Le Chablais c&eacute;l&egrave;bre Haller, 24heures, 20.6.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_06_24_BernerOberlaender.pdf">Alpengarten Schynige Platte, Berner Oberl&auml;nder, 24.6.2008</a></li>
    <li><a href="../medien/pdf/2008_07_10_PS.pdf">von haller, hodler &amp; co, P.S., 10.7.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_07_17_Papeterie.pdf">Der h&ouml;lzerne Sekret&auml;r, Papeterie und B&uuml;ro, 17.7.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_07_20_NZZaS.pdf">Albrecht von Haller lebt, NZZ am Sonntag, 20.7.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_07_24_Obersimmentaler.pdf">21. Sommer Universit&auml;t Lenk, Obersimmentaler, 24.7.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_07_28_24heures.pdf">80 Objets pour &eacute;voquer Haller, 24heures, 28.7.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_07_28_BernerRundschau.pdf">Haller300: positive erste Zwischenbilanz, Berner Rundschau, 28.7.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_07_31_Schweizer_Bauer_Nutzpflanzen.jpg">Nutzpflanzen unter &sbquo;anatomischem Messer&lsquo;, Schweizer Bauer, 30.7.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_08_05_LeNouvelliste.pdf">Exposition &agrave; Roche, Le Nouvelliste, 5.8.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_08_07_DerBund.pdf">F&uuml;r Haller ans Telefon, Der Bund, 7.8.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_08_08_DerBund.pdf">Das Sommerfestival im Schloss, Der Bund, 8.8.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_08_08_DerBrienzer.pdf">Entromantisierung von Hallers Alpen, Der Brienzer, 8.8.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_09_06_BernerZeitung.jpg">Eine seltene Pflanze bl&uuml;ht wieder am G&auml;belbach, Berner Zeitung, 6.9.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_09_06_DerBund.jpg">Der Alant kehrt zur&uuml;ck, Der Bund, 6.9.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_09_25_LebenuGlauben.pdf">Zwischen All und Nichts, Leben &amp; Glauben, 25.9.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_09_26_reformiert.pdf">Dichter, Denker, Forscher, Zweifler, reformiert, 26.9.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_04_BernerZeitung.pdf">&sbquo;In Bern hat man bezweifelt, ob ich von Nutzen sei&lsquo;, Berner Zeitung, 4.10.2008</a></li>
    <li><a href="../medien/pdf/2008_10_04_Bund.pdf">Ausstellung verl&auml;ngert, Der Bund, 4.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_09_Lexpress.pdf">Albrecht von Haller r&eacute;&eacute;dit&eacute;, L&rsquo;Express, 9.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_14_Corriere.pdf">Albrecht von Haller, in genio universale, Corriere del Ticino, 14.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_16_bazkulturmagazin.pdf">&sbquo;Braucht, was die Kunst erfand und die Natur euch gab&lsquo;, baz kultur magazin, 15.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_15_Tagesanzeiger.pdf">Krneta, Greis &amp; Apfelb&ouml;ck, Tagesanzeiger, 15.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_16_Uster.pdf">Generalist unter den Gelehrten, Anzeiger von Uster, 16.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_16_Blick.pdf">Der gelehrteste Berner, Blick, 16.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_16_BuendnerTagblatt.pdf">Arzt, Forscher, Politiker, B&uuml;ndner Tagblatt, 16.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_16_SolothurnerTagblatt.pdf">Ode an einen Verstaubten, Solothurner Tagblatt, 16.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_16_Tagesanzeiger.pdf">Unter der Per&uuml;cke verbirgt sich ein moderner Kopf, Tagesanzeiger, 16.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_16_Suedostschweiz.pdf">Eines Berner Wissenschaftspioniers gedacht, Die S&uuml;dostschweiz, 16.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_17_DerBund.pdf">M&auml;nnerbund im Geiste Hallers, Der Bund, 17.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_18_Baselland.pdf">Ein sprach-langatmiges Theater, Basellandschaftliche Zeitung, 18.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_18_BazKulturMag.pdf">Mann mit zwei Gesichtern, baz kultur magazin, 18.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_18_BernerZeitung.pdf">Ein theatrales Jubil&auml;um, Berner Zeitung, 18.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_18_Blick.pdf">Bern im Haller-Fieber, Blick, 18.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_18_DerBund.pdf">Edler Haller, Leuchte aller!, Der Bund, 18.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_18_Suedostschweiz.pdf">B&auml;rfuss&lsquo; Gratulantengruppe kratzt am Berner Denkmal, Die S&uuml;dostschweiz, 18.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_18_NZZ.pdf">Ein Mann mit vielen Eigenschaften, Neue Z&uuml;rcher Zeitung, 18.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_18_Tagesanzeiger.pdf">Hallers Geburtstag, Tagesanzeiger, 18.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_18_ThurgauerZeitung.pdf">Eine &sbquo;Feier&lsquo; f&uuml;r Albrecht von Haller, Thurgauer Zeitung, 18.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_23_BernerOberlaender.pdf">Forscher auf der Suche nach Eis, Berner Oberl&auml;nder, 21.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_21_NZZ.pdf">Das Geheimnis der Blattlaus &ndash; Ein Berner Kongress, Neue Z&uuml;rcher Zeitung, 21.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_21_NZZ_Schlafrock.pdf">Gelehrsamkeit im Schlafrock, Neue Z&uuml;rcher Zeitung, 21.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_10_23_Nidwaldner.pdf">Wer war Albrecht von Haller?, Nidwaldner Wochenblatt, 23.10.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_11_02_NZZaS.pdf">Universaler Geist, NZZ am Sonntag, 2.11.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_11_05_Suedostschweiz.pdf">Simon Crameri erh&auml;lt Sonderpreis, Die S&uuml;dostschweiz, 5.11.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_11_21_Agricoltore.pdf">Albrecht von Haller allo studio die funghi, Agricoltore Ticinese, 21.11.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_11_27_TerreetNature.pdf">Sur les pas d&rsquo;un savant, Terre &amp; Nature, 27.11.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_11_29_DerbkleineBund.pdf">Wozu dieser Haller?, Der kleine Bund, 29.11.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_11_30_NZZaS.pdf">Grosser Geist und Hypochonder, NZZ am Sonntag, 30.11.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_12_01_DerBund.pdf">Goldglanz und Kannonendonner &ndash; &sbquo;Berns goldene Zeit&lsquo;, Der Bund, 1.12.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_12_02_20minuten.pdf">Albrecht von Haller f&auml;rht auf Bernmobil ab, 20 minuten, 2.12.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_12_04_BernerZeitung.pdf">Haller im Spiegel der Jahrhunderte, Berner Zeitung, 4.12.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_12_04_DerBund.pdf">Der Universalgelehrte (Historisches Museum), Der Bund, 4.12.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_12_04_DerLandbote.pdf">Die Lebensstationen des Universalgenies, Der Landbote, 4.12.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_12_04_Suedostschweiz.pdf">Das Haller-Jahr klingt in Bern mit einer grossen Schau aus, Die S&uuml;dostschweiz, 4.12.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_12_06_LaLiberte.pdf">Von Haller, l&rsquo;homo universalis, La Libert&eacute;, 6.12.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_12_09_BernerBaer.pdf">Heller Haller im Kubus, Berner B&auml;r, 9.12.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_12_11_24weekend.pdf">Albert de Haller, savant universel, 24heures, weekend, 11.12.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_12_11_DerBund.pdf">Die &lsquo;Populasse&rsquo; verdross den Kaiser, Der Bund, 11.12.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_12_11_Weltwoche.pdf">Schweizer Universalgenie, Die Weltwoche, 11.12.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_12_30_DerBrienzer.pdf">Das Werk des Alpendichters, Der Brienzer, 30.12.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2008_12_13_NZZ.pdf">Ein Genie?, Neue Z&uuml;rcher Zeitung, 13.12.2008</a></li>
    <li><a target="_blank" href="../medien/pdf/2009_01_06_Tagesanzeiger.pdf">Ein europ&auml;ischer Gelehrter aus Bern, Tagesanzeiger, 6.1.2009</a></li>
    <li><a target="_blank" href="../medien/pdf/2009_01_13_LeCourrier.pdf">Von Haller, l&rsquo;homo universalis, Le Courrier, 13.1.2009</a></li>
</ul>
</div>     </div>
<div id="footer">Eine Website der Albrecht von Haller-Stiftung der Burgergemeinde Bern,<br />des Historischen Instituts der Universität Bern und des Instituts für Medizingeschichte der Universität Bern <br />Konzept und Inhalt: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="pressespiegel.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
