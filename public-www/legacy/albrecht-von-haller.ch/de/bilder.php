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
<title>Bilder - Albrecht von Haller</title>
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
<div id="contenttitel">Bilder</div>
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
<li class="LNE_menu_intend"><a class="selected" href="bilder.php">Bilder</a></li>
<li class="LNE_menu_intend"><a href="theatermusikcomic.php">Theater, Musik, Comic</a></li>

  <div id="haller"></div>
</div>
<div id="contentbox">
<div id="schrift"><a href="javascript:chooseStyle('none', 60)" style="font-size: 9px">A</a> | <a href="javascript:chooseStyle('pbig', 60)" style="font-size: 12px">A</a> | <a href="javascript:chooseStyle('pbiger', 60)" style="font-size: 14px">A</a></div>
  <div id="content">
    <table class="media">
    <tbody>
        <tr>
            <td>
            <p>&nbsp;</p>
            </td>
            <td>
            <p><strong>Besitzer &copy;</strong></p>
            </td>
            <td>
            <p><strong>Nachweis</strong></p>
            </td>
            <td>
            <p><strong>Legende</strong></p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHBotaniker.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHBotaniker.jpg" height="75" width="52" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich um 1750, K&uuml;nstler unbekannt</p>
            </td>
            <td>
            <p>Der Botaniker mit einem Lauch</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHBuesteCaldelari.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHBuesteCaldelari.jpg" height="75" width="50" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern<br />
            Foto: Hannes Saxer</p>
            </td>
            <td>
            <p>Marmor-B&uuml;ste 1810 von S. Caldelari</p>
            </td>
            <td>
            <p>Das zweihundertj&auml;hrige Denkmal, urspr&uuml;nglich im Botanischen Garten aufgestellt, heute noch ein Bronzeabguss davon im &quot;BOGA&quot;.</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AlliumTabI.jpg" target="_blank"><img alt="" src="../medien/media/img/AlliumTabI.jpg" height="75" width="73" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich 1745 von J.C. Schrader nach Zeichnungen von C. J. Rollin</p>
            </td>
            <td>
            <p>Kugelk&ouml;pfiger und gekielter Lauch in Hallers Abhandlung der Europ&auml;ischen Laucharten</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/BoCypriped.jpg" target="_blank"><img alt="" src="../medien/media/img/BoCypriped.jpg" height="75" width="41" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich 1768 von J. J. Stoercklin</p>
            </td>
            <td>
            <p>Der Frauenschuh, bei Haller noch in den W&auml;ldern um Bern, heute weltweit gef&auml;hrdet.</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/BoInula.jpg" target="_blank"><img alt="" src="../medien/media/img/BoInula.jpg" height="75" width="45" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich 1768, K&uuml;nstler unbekannt</p>
            </td>
            <td>
            <p>Der Schweizer Alant, von Haller im Marzili entdeckt</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/MOEsparsetteReichart.jpg" target="_blank"><img alt="" src="../medien/media/img/MOEsparsetteReichart.jpg" height="75" width="65" /></a></p>
            </td>
            <td>
            <p>Stadtbibliothek Winterthur</p>
            </td>
            <td>
            <p>Esparsette. Kupferstich, K&uuml;nstler unbekannt Aus: Reichart, Christian: Land- und Gartenschatz. 6 B&auml;nde, 1753-1755</p>
            </td>
            <td>
            <p>Zur &Uuml;berwindung der D&uuml;ngerl&uuml;cke experimentierte Haller mit stickstoffbindenden Futterpflanzen.</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHBause.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHBause.jpg" height="75" width="53" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich 1773 von J. F. Bause nach dem Gem&auml;lde von S. Freudenberger</p>
            </td>
            <td>
            <p>Der ber&uuml;hmte Haller in gr&ouml;sserer Auflage</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHBuesteFunk1.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHBuesteFunk1.jpg" height="75" width="52" /></a><a href="../medien/media/img-highres/AvHBuesteFunk2.jpg" target="_blank"><br />
            <img alt="" src="../medien/media/img/AvHBuesteFunk2.jpg" height="75" width="57" /><br />
            </a><a href="../medien/media/img-highres/AvHBuesteFunk3.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHBuesteFunk3.jpg" height="75" width="57" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern <br />
            Foto: Gerhard Howald</p>
            </td>
            <td>
            <p>Bronzierter Gipsabguss der verschollenen B&uuml;ste (1777) von J. F. Funk</p>
            </td>
            <td>
            <p>B&uuml;ste mit Nordsternorden</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHBuesteSonnenschein.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHBuesteSonnenschein.jpg" height="75" width="55" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Terracotta-B&uuml;ste um 1810 von V. Sonnenschein</p>
            </td>
            <td>
            <p>Haller mit Toga</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHDenkmal1.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHDenkmal1.jpg" height="75" width="54" /></a><a href="../medien/media/img-highres/AvHDenkmal2.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHDenkmal2.jpg" height="49" width="75" /></a></p>
            </td>
            <td>
            <p>Universit&auml;t Bern <br />
            Foto: Hannes Saxer</p>
            </td>
            <td>
            <p>Denkmal 1908 von H. Siegwart, vor der Universit&auml;t Bern</p>
            </td>
            <td>
            <p>Das hundertj&auml;hrige Denkmal</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHDenkmSiegwart.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHDenkmSiegwart.jpg" height="75" width="56" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Foto um 1907, Bildhauer (H. Siegwart?) bei der Arbeit am Haller-Denkmal</p>
            </td>
            <td>
            <p>Ein Denkmal entsteht</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHDunkerTusche.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHDunkerTusche.jpg" height="75" width="65" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Tuschezeichnung mit R&ouml;tel um 1770 von B. A. Dunker</p>
            </td>
            <td>
            <p>Haller gezeichnet</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHFreudenbergerfarb.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHFreudenbergerfarb.jpg" height="75" width="64" /></a></p>
            </td>
            <td>
            <p>Privatbesitz Haller300</p>
            </td>
            <td>
            <p>&Ouml;lgem&auml;lde 1773 von S. Freudenberger</p>
            </td>
            <td>
            <p>Der ber&uuml;hmte Haller gemalt. Der Nordsternorden &ndash; von der Bedeutung her vergleichbar mit dem Nobelpreis &ndash;wurde nachtr&auml;glich erg&auml;nzt</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHHandmann.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHHandmann.jpg" height="75" width="60" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>&Ouml;lgem&auml;lde 1757 von E. Handmann</p>
            </td>
            <td>
            <p>Haller wieder zur&uuml;ck in Bern, zu seiner Zeit als Rathausammann</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHHuber.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHHuber.jpg" height="75" width="58" /></a></p>
            </td>
            <td>
            <p>Privatbesitz</p>
            <p>Haller300</p>
            </td>
            <td>
            <p>&Ouml;lgem&auml;lde 1730 von J. R. Huber</p>
            </td>
            <td>
            <p>Der junge Alpendichter</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHMedMoerik.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHMedMoerik.jpg" height="42" width="75" /></a></p>
            </td>
            <td>
            <p>Bernisches Historisches Museum</p>
            </td>
            <td>
            <p>Medaille, Stempel graviert 1754 von H. M. M&ouml;rikofer</p>
            </td>
            <td>
            <p>Hallermedaille, welche noch heute an verdiente Berner Wissenschaftler verliehen wird</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHPastell.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHPastell.jpg" height="75" width="57" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Pastellbild um 1800, K&uuml;nstler unbekannt, nach einem Portr&auml;t von A. Fischer um 1760</p>
            </td>
            <td>
            <p>Haller in Pastell</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHPfenninger.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHPfenninger.jpg" height="75" width="63" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Radierung 1776 von H. Pfenninger</p>
            </td>
            <td>
            <p>Der alte Mann ohne Per&uuml;cke mit M&uuml;tze</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHSchattenriss.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHSchattenriss.jpg" height="75" width="60" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Tusch-Silhouette, K&uuml;nstler unbekannt</p>
            </td>
            <td>
            <p>Haller wirft Schatten</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHStatueKBDorer.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHStatueKBDorer.jpg" height="75" width="43" /></a></p>
            </td>
            <td>
            <p>Stadt Bern<br />
            Foto: Hannes Saxer</p>
            </td>
            <td>
            <p>Statue in Sandstein 1870 nach einem Entwurf von R. Dorer. S&uuml;dost-Ecke der Kantonalbank Bern am Bundesplatz</p>
            </td>
            <td>
            <p>Haller am Bundesplatz</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHStatuetteDorer.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHStatuetteDorer.jpg" height="75" width="52" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern Foto: J&uuml;rg Bernhardt</p>
            </td>
            <td>
            <p>Statuette (Gipsmaquette) um 1870 von R. Dorer</p>
            </td>
            <td>
            <p>Entwurf zu Haller am Bundesplatz</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHStuder.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHStuder.jpg" height="75" width="59" /></a></p>
            </td>
            <td>
            <p>Privatbesitz</p>
            <p>Haller300</p>
            </td>
            <td>
            <p>&Ouml;lgem&auml;lde 1745 von J. R. Studer</p>
            </td>
            <td>
            <p>Der junge Professor in G&ouml;ttingen, gemalt</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHStuderHaid.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHStuderHaid.jpg" height="75" width="53" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Schabkunstblatt 1745 von J. J. Haid nach dem Gem&auml;lde von J. R. Studer</p>
            </td>
            <td>
            <p>Der junge Professor in G&ouml;ttingen, abgekupfert</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHTabakdose.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHTabakdose.jpg" height="75" width="50" /></a></p>
            </td>
            <td>
            <p>Bernisches Historisches Museum</p>
            </td>
            <td>
            <p>Miniaturmalerei um 1780 auf Kupfer mit Porzellan, K&uuml;nstler unbekannt (franz&ouml;sische Schule) auf Tabakdose aus Horn</p>
            </td>
            <td>
            <p>Portr&auml;t des Vaters auf der Tabakdose des mittleren Sohnes, Banquier in Paris</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/AvHWachsmed.jpg" target="_blank"><img alt="" src="../medien/media/img/AvHWachsmed.jpg" height="74" width="75" /></a></p>
            </td>
            <td>
            <p>Privatbesitz</p>
            </td>
            <td>
            <p>Wachsmedaillon um 1880, K&uuml;nstler unbekannt nach Vorlage von H. Pfenninger</p>
            </td>
            <td>
            <p>Alter Mann in Wachs</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/BoCirsium.jpg" target="_blank"><img alt="" src="../medien/media/img/BoCirsium.jpg" height="75" width="45" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich 1742 von C. F. Fritsch nach Zeichnung von C. J. Rollin</p>
            </td>
            <td>
            <p>Alpen Kratzdistel in Hallers Florenwerk</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/BoLaser.jpg" target="_blank"><img alt="" src="../medien/media/img/BoLaser.jpg" height="75" width="48" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich 1742 von C. F. Fritsch nach Zeichnung von C. J. Rollin</p>
            </td>
            <td>
            <p>Hallers Laserkraut, von Haller entdeckt und abgebildet</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/BoOphrys.jpg" target="_blank"><img alt="" src="../medien/media/img/BoOphrys.jpg" height="75" width="51" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich 1768 von J. J. Stoercklin</p>
            </td>
            <td>
            <p>Ragwurz-Arten, spektakul&auml;re einheimische Orchideen, von Haller in Bern als sehr h&auml;ufig erw&auml;hnt</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/BoOxytrItHelv.jpg" target="_blank"><img alt="" src="../medien/media/img/BoOxytrItHelv.jpg" height="65" width="75" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich 1740 von C. F. Fritsch nach Zeichnungen von C. J. Rollin.</p>
            <p>Aus: Tafel 2 aus Hallers Iter helveticum anni MDCCXXXVIIII. G&ouml;ttingen 1740</p>
            </td>
            <td>
            <p>Der von Haller auf seiner Alpenreise von 1739 im Gantrischgebiet entdeckte &quot;Astragalus&quot; (heute Hallers-Spitzkiel, Oxytropis halleri).. Links ein Steinbrech (Saxifraga androsace) und rechts ein Koboldmoos (Diphyscium foliosum).</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/Me Augen.jpg" target="_blank"><img alt="" src="../medien/media/img/Me Augen.jpg" height="54" width="75" /></a></p>
            </td>
            <td>
            <p>Institut f&uuml;r Medizingeschichte Universit&auml;t Bern</p>
            </td>
            <td>
            <p>Kupferstich von C. F. Fritsch nach Zeichnung von J. Kaltenhofer</p>
            <p>Aus: Haller, Albrecht von: Icones anatomicae, 8 Teile 1743-1756</p>
            </td>
            <td>
            <p>Anatomie des Auges</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/MeBrust.jpg" target="_blank"><img alt="" src="../medien/media/img/MeBrust.jpg" height="75" width="51" /></a></p>
            </td>
            <td>
            <p>Institut f&uuml;r Medizingeschichte Universit&auml;t Bern</p>
            </td>
            <td>
            <p>Kupferstich von J. Kaltenhofer nach eigener Zeichnung</p>
            <p>Aus: Haller, Albrecht von: Icones anatomicae, 8 Teile 1743-1756</p>
            </td>
            <td>
            <p>Abbildung des ge&ouml;ffneten Brustkorbes mit den Blutgef&auml;ssen</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/MeKopf.jpg" target="_blank"><img alt="" src="../medien/media/img/MeKopf.jpg" height="75" width="51" /></a></p>
            </td>
            <td>
            <p>Institut f&uuml;r Medizingeschichte Universit&auml;t Bern</p>
            </td>
            <td>
            <p>Kupferstich von G. D. Heumann nach zeichnung von C. J. Rollin. Aus: Haller, Albrecht von: Icones anatomicae, 8 Teile 1743-1756</p>
            </td>
            <td>
            <p>Kopfarterien</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/MeSeziersaal.jpg" target="_blank"><img alt="" src="../medien/media/img/MeSeziersaal.jpg" height="75" width="73" /></a></p>
            </td>
            <td>
            <p>Institut f&uuml;r Medizingeschichte Universit&auml;t Bern</p>
            </td>
            <td>
            <p>Kupferstich von</p>
            <p>Aus: Haller, Albrecht von: M&eacute;moires sur les parties sensibles et irritables du corps animal 1756-1760</p>
            </td>
            <td>
            <p>Junge Mediziner bei ihren Tierversuchen in einem Seziersaal</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/MeSiamFoto.jpg" target="_blank"><img alt="" src="../medien/media/img/MeSiamFoto.jpg" height="75" width="35" /></a><a href="../medien/media/img-highres/MeSiamFoto2.jpg"><img alt="" src="../medien/media/img/MeSiamFoto2.jpg" height="75" width="49" /></a></p>
            </td>
            <td>
            <p>Institut f&uuml;r Medizingeschichte Universit&auml;t Bern Foto: Oliver Menge</p>
            </td>
            <td>
            <p>Von Haller pr&auml;parierte Doppelmissbildung (Siamesische Zwillinge) zweier M&auml;dchen aus dem Waadtland</p>
            </td>
            <td>
            <p>Hallers Siamesische Zwillinge im Original</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/MeSiamOpminorXVIII.jpg" target="_blank"><img alt="" src="../medien/media/img/MeSiamOpminorXVIII.jpg" height="75" width="38" /></a></p>
            </td>
            <td>
            <p>Institut f&uuml;r Medizingeschichte Universit&auml;t Bern</p>
            </td>
            <td>
            <p>Kupferstich von G. B. Trautner nach Zeichnung von J. S. D&uuml;r</p>
            <p>Aus: Haller, Albrecht von: Opera minora, 3 Bde. 1763-1768</p>
            </td>
            <td>
            <p>Hallers Siamesische Zwillinge gedruckt</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/MOAlpwGedichte.jpg" target="_blank"><img alt="" src="../medien/media/img/MOAlpwGedichte.jpg" height="56" width="75" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich von D. Herrliberger . Aus: Albrecht von Haller: Die Alpen (zweisprachig) 1773</p>
            </td>
            <td>
            <p>Haller idealisierte in seinem Alpengedicht auch die &Ouml;konomie der Alpenbewohner</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/MOGetreide1.jpg" target="_blank"><img alt="" src="../medien/media/img/MOGetreide1.jpg" height="54" width="75" /></a><a href="../medien/media/img-highres/MOGetreide2.jpg" target="_blank"><img alt="" src="../medien/media/img/MOGetreide2.jpg" height="75" width="24" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich von M. Wocher. Aus: Haller, Albrecht von: Beschreibung des Getreydes. In: Neue Sammlung der &ouml;konomischen Gesellschaft in Bern 1782</p>
            </td>
            <td>
            <p>Mit dem Ziel h&ouml;herer Ertr&auml;ge experimentierte Haller mit fremdl&auml;ndischen Getreidesorten</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/MOHeuenGed.jpg" target="_blank"><img alt="" src="../medien/media/img/MOHeuenGed.jpg" height="53" width="75" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich von D. Herrliberger. Aus: Albrecht von Haller: Die Alpen (zweisprachig) 1773</p>
            </td>
            <td>
            <p>Haller idealisierte in seinem Alpengedicht auch die l&auml;ndliche &Ouml;konomie</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/MOKornhaus.jpg" target="_blank"><img alt="" src="../medien/media/img/MOKornhaus.jpg" height="57" width="75" /></a></p>
            </td>
            <td>
            <p>Bernisches Historisches Museum</p>
            </td>
            <td>
            <p>Bernisches Kornhaus, &Ouml;lgem&auml;lde 1740 von J. Grimm</p>
            </td>
            <td>
            <p>Bei der Hungerkrise 1770/1771 setzte sich Haller getreu seiner paternalistischen Gesinnung f&uuml;r eine verbilligte Abgabe von Getreide aus den staatlichen Vorr&auml;ten ein</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/MOOeGAbh.jpg" target="_blank"><img alt="" src="../medien/media/img/MOOeGAbh.jpg" height="75" width="46" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Titelblatt 1770 der Abhandlungen der Oekonomischen Gesellschaft Bern</p>
            </td>
            <td>
            <p>Als Pr&auml;sident der Oekonomischen Gesellschaft Bern setzte sich Haller f&uuml;r die Anwendung der Wissenschaften in Land- und Forstwirtschaft ein</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/MOSalineBevieux.jpg" target="_blank"><img alt="" src="../medien/media/img/MOSalineBevieux.jpg" height="44" width="75" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich 1780 von J.-C. Maillet</p>
            </td>
            <td>
            <p>Haller amtierte 1758 bis 1764 in Roche als Direktor der Salinen</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/MOSalineGang.jpg" target="_blank"><img alt="" src="../medien/media/img/MOSalineGang.jpg" height="49" width="75" /></a></p>
            </td>
            <td>
            <p>Saline de Bex</p>
            </td>
            <td>
            <p>Foto eines alten Ganges im Salzbergwerk Bex</p>
            </td>
            <td>
            <p>In Hallers Salzbergwerk</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/MOSalzrechnung.jpg" target="_blank"><img alt="" src="../medien/media/img/MOSalzrechnung.jpg" height="49" width="75" /></a></p>
            </td>
            <td>
            <p>Staatsarchiv des Kantons Bern</p>
            <p>BV 811 f</p>
            </td>
            <td>
            <p>Jahresrechnung 1761 und 1762 der Salzwerke Roche und Bevieux</p>
            </td>
            <td>
            <p>Hallers Abrechnung der Salzausbeutung</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/OrBernKaiserbes.jpg" target="_blank"><img alt="" src="../medien/media/img/OrBernKaiserbes.jpg" height="75" width="63" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Lithographie um 1850 von G. Balder</p>
            </td>
            <td>
            <p>Der Kaiser Joseph II. besuchte 1777 auf seiner Durchreise den frommen Haller und nicht den Freigeist Voltaire.</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/OrBernRathaus1.jpg" target="_blank"><img alt="" src="../medien/media/img/OrBernRathaus1.jpg" height="51" width="75" /></a><a href="../medien/media/img-highres/OrBernRathaus2.jpg" target="_blank"><img alt="" src="../medien/media/img/OrBernRathaus2.jpg" height="34" width="75" /></a></p>
            </td>
            <td>
            <p>Bernisches Historisches Museum</p>
            </td>
            <td>
            <p>&quot;L' H&ocirc;tel de Ville de Berne&quot;, Lithographie um 1850. nach einer Zeichnung vom Ende des 18. Jh. Das Rathaus wie es zwischen den Renovationen von 1755 und 1865 aussah.</p>
            </td>
            <td>
            <p>Unter den R&auml;ten vor dem Berner Rathaus k&ouml;nnte sich auch Haller befinden: Er amtierte 171753 bis 1758 als Rathausammann.</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/OrGoettingen1.jpg"><img alt="" src="../medien/media/img/OrGoettingen1.jpg" height="44" width="75" /></a><a href="../medien/media/img-highres/OrGoettingen2.jpg" target="_blank"><img alt="" src="../medien/media/img/OrGoettingen2.jpg" height="37" width="75" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich 1747 von G. D. Heumann</p>
            </td>
            <td>
            <p>G&ouml;ttingen, der von Haller aufgebaute Botanische Garten, in der Mitte die Anatomie und dahinter Hallers Wohnhaus</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/OrKarte Hallerkorrespondenz.jpg" target="_blank"><img alt="" src="../medien/media/img/OrKarte Hallerkorrespondenz.jpg" height="75" width="57" /></a></p>
            </td>
            <td>
            <p>Haller300</p>
            </td>
            <td>
            <p>Forschungsprojekt Albrecht von Haller, Kartographie Richard Stuber</p>
            </td>
            <td>
            <p>Hallers europaweites Korrespondenznetz: &Uuml;berliefert sind rund 17'000 Briefe von 1200 Korrespondenten</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/OrSchreibtisch.jpg" target="_blank"><img alt="" src="../medien/media/img/OrSchreibtisch.jpg" height="75" width="50" /></a></p>
            </td>
            <td>
            <p>Privatbesitz <br />
            Foto: Gerhard Howald Haller300</p>
            </td>
            <td>
            <p>Aufsatzschreibkommode um 1760 von M. Funk. Nach Familientradition ehemals im Besitz Albrecht von Hallers</p>
            </td>
            <td>
            <p>Hallers Schreibkommode</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/SRAlpenGed77.jpg" target="_blank"><img alt="" src="../medien/media/img/SRAlpenGed77.jpg" height="75" width="45" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Erste Seite des Gedichtes &quot;die Alpen&quot; in der 11. Auflage von 1777 mit einer Vignette von B. A. Dunker</p>
            </td>
            <td>
            <p>Das ber&uuml;hmte Gedicht illustriert</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/SRAlpGed.jpg" target="_blank"><img alt="" src="../medien/media/img/SRAlpGed.jpg" height="75" width="50" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich von D. Herrliberger . Aus: Albrecht von Haller: Die Alpen (zweisprachig) 1773</p>
            </td>
            <td>
            <p>Idealisiertes Liebesleben in &quot;Die Alpen&quot;</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/SRBranAvH1747.jpg" target="_blank"><img alt="" src="../medien/media/img/SRBranAvH1747.jpg" height="63" width="75" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Brief an Haller von Abraham Gagnebin 17. April 1747</p>
            </td>
            <td>
            <p>Adresse Hallers auf einem Brief von Abraham Gagnebin, Arzt und Naturforscher im Berner Jura</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/SRBrv AvH1729.jpg" target="_blank"><img alt="" src="../medien/media/img/SRBrv AvH1729.jpg" height="75" width="58" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Brief von Haller an Johannes Gessner 17. November 1729</p>
            </td>
            <td>
            <p>Brief des jungen Hallers an seinen besten Freund</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/SRBrvAvH1773.jpg" target="_blank"><img alt="" src="../medien/media/img/SRBrvAvH1773.jpg" height="75" width="66" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Brief von Haller an Anna Vandenhoeck-Parry 2. Oktober 1773</p>
            </td>
            <td>
            <p>Brief des alten Haller an die Verlegerin in G&ouml;ttingen</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/SRChirur1755.jpg" target="_blank"><img alt="" src="../medien/media/img/SRChirur1755.jpg" height="50" width="75" /></a></p>
            </td>
            <td>
            <p>Institut f&uuml;r Medizingeschichte Universit&auml;t Bern</p>
            </td>
            <td>
            <p>Haller, Albrecht von: Disputationes chirurgicae selectae, 5 Bde. 1755-1756</p>
            </td>
            <td>
            <p>Arbeiten der Doktoranden gedruckt</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/SRElementa.jpg" target="_blank"><img alt="" src="../medien/media/img/SRElementa.jpg" height="47" width="75" /></a></p>
            </td>
            <td>
            <p>Institut f&uuml;r Medizingeschichte Universit&auml;t Bern</p>
            </td>
            <td>
            <p>Haller, Albrecht von: Elementa physiologiae corporis humani, 8 Bde. 1757-1766.</p>
            </td>
            <td>
            <p>Hallers Grundlagenwerk zur Menschlichen Physiologie</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/SREnum.jpg" target="_blank"><img alt="" src="../medien/media/img/SREnum.jpg" height="75" width="49" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Haller, Albrecht: Enumeratio methodica stirpium Helvetiae indigenarum, 2 Bde. 1742</p>
            </td>
            <td>
            <p>Das erste umfassende Florenwerk der Schweiz erschien 1742 in G&ouml;ttingen, die zweite Auflage 1768 in Bern.</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/SRGedichte1748.jpg" target="_blank"><img alt="" src="../medien/media/img/SRGedichte1748.jpg" height="75" width="44" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Haller, Albrecht: Versuch Schweizerischer Gedichte 1748</p>
            </td>
            <td>
            <p>Hallers Gedichte in vierter Auflage</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/SRGedichte1758.jpg" target="_blank"><img alt="" src="../medien/media/img/SRGedichte1758.jpg" height="75" width="42" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Haller, Albrecht von: Gedichte des Herrn von haller 1758</p>
            </td>
            <td>
            <p>Hallers Gedichte in siebter Auflage</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/SRSchedulaesw2.jpg" target="_blank"><img alt="" src="../medien/media/img/SRSchedulaesw2.jpg" height="54" width="75" /></a><a href="../medien/media/img-highres/SRSchedulaesw.jpg" target="_blank"><img alt="" src="../medien/media/img/SRSchedulaesw.jpg" height="75" width="64" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Notizzettel &quot;Schedulae&quot;. N. A v. Haller</p>
            </td>
            <td>
            <p>Hallers Arbeitsweise</p>
            </td>
        </tr>
        <tr>
            <td>
            <p><a href="../medien/media/img-highres/SRUsong.jpg" target="_blank"><img alt="" src="../medien/media/img/SRUsong.jpg" height="75" width="45" /></a></p>
            </td>
            <td>
            <p>Burgerbibliothek Bern</p>
            </td>
            <td>
            <p>Kupferstich von J. Lacroix 1775 nach Zeichnung von T. Wocher</p>
            </td>
            <td>
            <p>Vignette in Hallers Staatsroman &quot;Usong - eine morgenl&auml;ndische Geschichte&quot; erstmals 1772 erschienen. Hallers drei Staatsromane stellen die Ideale und Regierungsformen der Monarchie, der institutionellen Monarchie sowie der aristokratischen Republik dar</p>
            </td>
        </tr>
    </tbody>
</table>
<p>&nbsp;</p>
<p>Bei einer Publikation einer Abbildung bitte die Erlaubnis des Besitzers (Spalte: Besitzer &copy;) einholen.</p>     </div>
<div id="footer">Eine Website der Albrecht von Haller-Stiftung der Burgergemeinde Bern,<br />des Historischen Instituts der Universität Bern und des Instituts für Medizingeschichte der Universität Bern <br />Konzept und Inhalt: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="bilder.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
