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
<title>Theater, Musik, Comic - Albrecht von Haller</title>
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
<div id="contenttitel">Theater, Musik, Comic</div>
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
<li class="LNE_menu_doubleintend"><a href="pressespiegel.php">Pressespiegel</a></li>
<li class="LNE_menu_doubleintend"><a href="radioundfernsehen.php">Radio und Fernsehen</a></li>
<li class="LNE_menu_intend"><a href="bilder.php">Bilder</a></li>
<li class="LNE_menu_intend"><a class="selected" href="theatermusikcomic.php">Theater, Musik, Comic</a></li>

  <div id="haller"></div>
</div>
<div id="contentbox">
<div id="schrift"><a href="javascript:chooseStyle('none', 60)" style="font-size: 9px">A</a> | <a href="javascript:chooseStyle('pbig', 60)" style="font-size: 12px">A</a> | <a href="javascript:chooseStyle('pbiger', 60)" style="font-size: 14px">A</a></div>
  <div id="content">
    <h2>Alpen-Rap</h2>
<ul id="link">
    <li><strong>&laquo;Umgekehrti T&auml;ler&raquo;</strong> &ndash; Literatur nach Haller von Guy Krneta, Greis &amp; Apfelb&ouml;ck, Museumsnacht, 28.3.2008 (Kornhausbibliothek Bern) [Aufnahme Benjamin Stoll]. Zu beziehen f&uuml;r Fr. 11.&ndash; im Buchhandel oder via E-Mail bei den <a href="mailto:sekretariat@kornhausbibliotheken.ch">Kornhausbibliotheken</a> <br />
    <a href="../medien/krneta_greis_apfelboeck/umgekehrti_taeler.mp3" onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a></li>
</ul>
<p>&nbsp;</p>
<h2>Vertonung</h2>
<ul id="link">
    <li>Regula Steinke (Mezzosopran) und Gregor Ehrsam (Cembalo)<br />
    <strong>Die Alpen.</strong> [Auff&uuml;hrung im Naturmuseum Winterthur, 9.9.2005, Aufnahme: mati AG, 8134 Adliswil].<br />
    <a href="../medien/steinke_ehrsam/die_alpen/01_die_alpen.mp3" onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a> &ndash; Ihr Sch&uuml;ler der Natur... (Zeilen 31-40)<br />
    <a href="../medien/steinke_ehrsam/die_alpen/02_die_alpen.mp3" onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a> &ndash; Zwar die Natur bedeckt... (Zeilen 51-60)<br />
    <a href="../medien/steinke_ehrsam/die_alpen/03_die_alpen.mp3" onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a> &ndash; Hier herrscht kein Unterschied... (Zeilen 71-80)<br />
    <a href="../medien/steinke_ehrsam/die_alpen/04_die_alpen.mp3" onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a> &ndash; Hat nun die m&uuml;de Welt... (Zeilen 251-260)<br />
    <a href="../medien/steinke_ehrsam/die_alpen/05_die_alpen.mp3" onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a> &ndash; Ein junger Sch&auml;fer... (Zeilen 271-280)<br />
    <a href="../medien/steinke_ehrsam/die_alpen/06_die_alpen.mp3" onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a> &ndash; Dann hier, wo Gotthards Haupt... (Zeilen 311-320)<br />
    <a href="../medien/steinke_ehrsam/die_alpen/07_die_alpen.mp3" onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a> &ndash; Hier zeigt ein steiler Berg.... (Zeilen 351-360)<br />
    <a href="../medien/steinke_ehrsam/die_alpen/08_die_alpen.mp3" onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a> &ndash; Dort ragt das hohe Haupt... (Zeilen 381-390)<br />
    <a href="../medien/steinke_ehrsam/die_alpen/09_die_alpen.mp3" onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a> &ndash; Allein wohin auch nie... (Zeilen 401-410)<br />
    <a href="../medien/steinke_ehrsam/die_alpen/10_die_alpen.mp3" onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a> &ndash; Aus Schreckhorns kaltem Haupt... (Zeilen 431-440)<br />
    <a href="../medien/steinke_ehrsam/die_alpen/11_die_alpen.mp3" onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a>  &ndash; Bei euch, vergn&uuml;gtes Volk... (Zeilen 471-480)<br />
    <a href="../medien/steinke_ehrsam/die_alpen/12_die_alpen.mp3" onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a> &ndash; O selig! wer wie Ihr... (Zeilen 481-490)</li>
    <li>Regula Steinke (Mezzosopran) und Gregor Ehrsam (Cembalo)<br />
    <strong>Heuchler</strong> (Verse aus &laquo;Die Falschheit menschlicher Tugenden&raquo;) / Haller. In: Singe-Spiel um General-Bass-&Uuml;bungen / Georg Friedrich Telemann (Hamburg: [s.d.], 1733-34) [Auff&uuml;hrung an der Haller-Vernissage im Museum f&uuml;r Kommunikation Bern, 2.5.2001].<br />
    <a href="../medien/steinke_ehrsam/haller_vernissage/der_heuchler.mp3" onclick="window.open(this.href,'Heuchler','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a></li>
    <li>Regula Steinke (Mezzosopran) und Gregor Ehrsam (Cembalo)<br />
    <strong>An Doris</strong> / Haller. In: Neue Lieder-Melodien nebst einer Kantate zum Singen beym Klavier / Componiert Carl Philipp Emanuel Bach (L&uuml;beck: bey Christian Gottfried Donatius, 1789), S. 40-46 [Auff&uuml;hrung an der Haller-Vernissage im Museum f&uuml;r Kommunikation Bern, 2.5.2001].<br />
    <a href="../medien/steinke_ehrsam/haller_vernissage/doris_steffan.mp3" onclick="window.open(this.href,'AnDoris','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a></li>
    <li>Regula Steinke (Mezzosopran) und Gregor Ehrsam (Cembalo)<br />
    <strong>Doris</strong> / Albrecht von Haller. In: Das Wiener Lied von 1778 bis Mozarts Tod / Josef Anton Steffan; bearb. von Margarete Anison (Text) und Irene Schlaffenberg (Musik) (Wien: Universal-Edition; Leipzig: Breitkopf &amp; H&auml;rtel, 1920), S. 6-7 [Auff&uuml;hrung an der Haller-Vernissage im Museum f&uuml;r Kommunikation Bern, 2.5.2001].<br />
    <a onclick="window.open(this.href,'Doris','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false" href="../medien/steinke_ehrsam/haller_vernissage/doris_bach.mp3">h&ouml;ren</a></li>
</ul>
<p>&nbsp;</p>
<h2>Poesie und Musik</h2>
<ul id="link">
    <li>Hans Witschi (Rezitation), Gilbert Paeffgen (Hackbrett, Perkussion), <strong>&laquo;Die Alpen&raquo;</strong> im Botanischen Garten Bern BOGA, Vernissage Hallers (G)Arten, 28.4.2008.<br />
    <a href="../medien/witschi/die_alpen.mp3" onclick="window.open(this.href,'','resizable=no,location=no,menubar=no,scrollbars=no,status=no,toolbar=no,fullscreen=no,dependent=no,width=400,height=100,status'); return false">h&ouml;ren</a></li>
</ul>
<p>&nbsp;</p>
<h2>Theater</h2>
<ul id="link">
    <li><strong>&laquo;Ebenda &ndash; Ein Ged&auml;chtnistheater&raquo;</strong>. Projekt von Christian Probst und <a target="_blank" href="http://www.theater.ch/lukasbaerfuss">Lukas B&auml;rfuss</a> zu Albrecht von Haller. Urauff&uuml;hrungsproduktion. Regie: Christoph Probst. Dramaturgie: Lukas B&auml;rfuss. B&uuml;hne: Christoph Wagenknecht. Musik: Simon Hostettler. Mit Matthias Brambeer, Doro Mueggler, <a target="_blank" href="http://www.theater.ch/andrischenardi">Andri Schenardi</a>, Marcus Signer, Ernst C. Sigrist, <a target="_blank" href="http://www.theater.ch/diegovalsecchi">Diego Valsecchi</a>. Produktion: <a target="_blank" href="http://www.theater.ch/stadttheater.bern">Stadttheater Bern</a>.</li>
</ul>
<div id="container">Loading the player ...</div>
<script type="text/javascript"> 
jwplayer("container").setup({ 
flashplayer: "js/player.swf", 
file: "../medien/ebenda/ebenda.mp4", 
height: 373, 
width: 575 }); 
</script>
<p>&nbsp;</p>
<h2>Comic</h2>
<div style="background-image: url(&quot;templates/basisdesign/bg-comic.jpg&quot;);" class="bildlink">
<div class="textdiv">
<h2>Entwurf zu vier Bildergeschichten</h2>
<p>Konzept und Ausf&uuml;hrung: Roland de Loriol, Bern</p>
</div>
<div class="buttondiv"><a href="galeries/Comic/Comic01.jpg" rel="lytebox[galeries/Comic]" title="Comic.jpg" class="button">Episode 1: Lebendversuche &raquo; </a>
<div class="displaynone"><h2>Comic</h2><br />
<a href="galeries/Comic/Comic01.jpg" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic01.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic01.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic01.jpg" class="bordered" /></a>
<a href="galeries/Comic/Comic01.jpg.orig" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic01.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic01.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic01.jpg.orig" class="bordered" /></a>
<a href="galeries/Comic/Comic02.jpg" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic02.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic02.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic02.jpg" class="bordered" /></a>
<a href="galeries/Comic/Comic02.jpg.orig" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic02.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic02.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic02.jpg.orig" class="bordered" /></a>
<a href="galeries/Comic/Comic03.jpg" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic03.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic03.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic03.jpg" class="bordered" /></a>
<a href="galeries/Comic/Comic03.jpg.orig" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic03.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic03.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic03.jpg.orig" class="bordered" /></a>
<a href="galeries/Comic/Comic04.jpg" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic04.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic04.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic04.jpg" class="bordered" /></a>
<a href="galeries/Comic/Comic04.jpg.orig" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic04.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic04.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic04.jpg.orig" class="bordered" /></a>
<a href="galeries/Comic/Comic05.jpg" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic05.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic05.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic05.jpg" class="bordered" /></a>
<a href="galeries/Comic/Comic05.jpg.orig" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic05.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic05.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic05.jpg.orig" class="bordered" /></a>
<a href="galeries/Comic/Comic06.jpg" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic06.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic06.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic06.jpg" class="bordered" /></a>
<a href="galeries/Comic/Comic06.jpg.orig" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic06.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic06.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic06.jpg.orig" class="bordered" /></a>
<a href="galeries/Comic/Comic07.jpg" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic07.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic07.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic07.jpg" class="bordered" /></a>
<a href="galeries/Comic/Comic07.jpg.orig" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic07.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic07.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic07.jpg.orig" class="bordered" /></a>
<a href="galeries/Comic/Comic08.jpg" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic08.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic08.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic08.jpg" class="bordered" /></a>
<a href="galeries/Comic/Comic08.jpg.orig" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic08.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic08.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic08.jpg.orig" class="bordered" /></a>
<a href="galeries/Comic/Comic09.jpg" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic09.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic09.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic09.jpg" class="bordered" /></a>
<a href="galeries/Comic/Comic09.jpg.orig" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic09.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic09.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic09.jpg.orig" class="bordered" /></a>
<a href="galeries/Comic/Comic10.jpg" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic10.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic10.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic10.jpg" class="bordered" /></a>
<a href="galeries/Comic/Comic10.jpg.orig" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic10.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic10.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic10.jpg.orig" class="bordered" /></a>
<a href="galeries/Comic/Comic11.jpg" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic11.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic11.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic11.jpg" class="bordered" /></a>
<a href="galeries/Comic/Comic11.jpg.orig" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic11.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic11.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic11.jpg.orig" class="bordered" /></a>
<a href="galeries/Comic/Comic12.jpg" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic12.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic12.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic12.jpg" class="bordered" /></a>
<a href="galeries/Comic/Comic12.jpg.orig" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic12.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic12.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic12.jpg.orig" class="bordered" /></a>
<a href="galeries/Comic/Comic13.jpg" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic13.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic13.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic13.jpg" class="bordered" /></a>
<a href="galeries/Comic/Comic13.jpg.orig" rel="lytebox[galeries/Comic]" title="galeries/Comic/Comic13.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comic/Comic13.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comic/Comic13.jpg.orig" class="bordered" /></a>
</div>
<a href="galeries/Comicplot/Comicplot01.jpg" rel="lytebox[galeries/Comicplot]" title="Comic.jpg" class="button">Entw&uuml;rfe zu drei weiteren Episoden &raquo; </a>
<div class="displaynone"><h2>Comicplot</h2><br />
<a href="galeries/Comicplot/Comicplot01.jpg" rel="lytebox[galeries/Comicplot]" title="galeries/Comicplot/Comicplot01.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comicplot/Comicplot01.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comicplot/Comicplot01.jpg" class="bordered" /></a>
<a href="galeries/Comicplot/Comicplot01.jpg.orig" rel="lytebox[galeries/Comicplot]" title="galeries/Comicplot/Comicplot01.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comicplot/Comicplot01.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comicplot/Comicplot01.jpg.orig" class="bordered" /></a>
<a href="galeries/Comicplot/Comicplot02.jpg" rel="lytebox[galeries/Comicplot]" title="galeries/Comicplot/Comicplot02.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comicplot/Comicplot02.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comicplot/Comicplot02.jpg" class="bordered" /></a>
<a href="galeries/Comicplot/Comicplot02.jpg.orig" rel="lytebox[galeries/Comicplot]" title="galeries/Comicplot/Comicplot02.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comicplot/Comicplot02.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comicplot/Comicplot02.jpg.orig" class="bordered" /></a>
<a href="galeries/Comicplot/Comicplot03.jpg" rel="lytebox[galeries/Comicplot]" title="galeries/Comicplot/Comicplot03.jpg" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comicplot/Comicplot03.jpg&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comicplot/Comicplot03.jpg" class="bordered" /></a>
<a href="galeries/Comicplot/Comicplot03.jpg.orig" rel="lytebox[galeries/Comicplot]" title="galeries/Comicplot/Comicplot03.jpg.orig" ><img src="LightNEasy/thumbsup.php?image=../galeries/Comicplot/Comicplot03.jpg.orig&amp;width=100&amp;height=100&amp;cache_dir=../data" alt="galeries/Comicplot/Comicplot03.jpg.orig" class="bordered" /></a>
</div>
</div>
</div>
<p>&nbsp;</p>     </div>
<div id="footer">Eine Website der Albrecht von Haller-Stiftung der Burgergemeinde Bern,<br />des Historischen Instituts der Universität Bern und des Instituts für Medizingeschichte der Universität Bern <br />Konzept und Inhalt: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="theatermusikcomic.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
