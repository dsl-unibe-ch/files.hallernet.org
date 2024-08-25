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
<title>Home - Albrecht von Haller</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='Content-Language' content='de_DE' />
<meta http-equiv='Content-Script-Type' content='text/javascript' />
<meta http-equiv='Content-Style-Type' content='text/css' />
<meta name='keywords' content='Albrecht von Haller' />
<meta name='description' content='' />
<meta name='author' content='Hannes Saxer' />
<meta name='Robots' content='index,follow' />
<meta http-equiv='imagetoolbar' content='no' /><!-- disable IE's image toolbar -->
<link rel='stylesheet' type='text/css' href='templates/home/style.css' />
<link rel='stylesheet' type='text/css' href='css/lightneasy.css' />
<link rel="alternate" type="application/rss+xml" title="Albrecht von Haller RSS Feed" href="LightNEasy/rss.php" />
<link rel="alternate" type="application/atom+xml" title="Albrecht von Haller Atom Feed" href="LightNEasy/atom.php" />


<!--[if IE 6]>
<meta http-equiv="refresh" content="0;URL=http://www.hannessaxer.com/alert/ie6.html" 
<![endif]-->

<link rel="alternate stylesheet" type="text/css" media="screen" title="pbig" href="templates/css/pbig.css" />
<link rel="alternate stylesheet" type="text/css" media="screen" title="pbiger" href="templates/css/pbiger.css" />

<style>
.alert-wrapper {
	position: fixed;
	top: 0;
	width: 100%;
	height: 50px;
	background-color: #7F8C8D;
	font-size: 2em;
	font-family: Georgia, "Times New Roman", Times, serif;
	color: white;
	padding: 15px;
	text-align: center; 
	z-index: 10001;
}

.alert-wrapper a {
	display:block;
	height:100%;
	text-decoration: none;
}

#wrapper {
	width: 960px;
	margin: 0px auto;
	margin-top: 80px;
	position: relative;
	}

</style>

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

<div class="alert-wrapper">
  <a href="https://hallernet.org" rel="nofollow noreferrer noopener" target="_blank" style="color: white;">
	<!--<p>Diese Website wird in absehbarer Zeit deaktiviert.</p>
    <p/>
    <p>Besuchen Sie die aktuelle Plattform zur Haller-Forschung unter <strong style="color: white;">https://hallernet.org</strong>.</p>-->
    <p>Sämtliche aktuellen Informationen finden sich auf der neuen Editions- und Forschungsplattform <strong style="color: white;">https://hallernet.org</strong>,
	die zur Zeit aber erst in der deutschsprachigen Version realisiert ist.</p>
  </a>
</div>

<a href="#top" id="top-link">Top</a>
<div id="wrapper">

<div id="header">
<div id="headerimg"><img src="templates/home/header/head.png" width="960" height="320" /></div>
<div id="logo"><img src="templates/basisdesign/hallerlogo.png" width="200" height="130" /></div>
<div id="contenttitel">Home</div>
</div>

<div id="meta">	


<div id="sprache"><a href="../f/index.php">F</a> | <a href="../e/index.php">E</a></div>
<div id="metanavigation"><a href="kontakt.php">Kontakt</a> | <a href="hallerstiftung.php">Hallerstiftung</a> | <a href="link.php">Links</a></div>		
</div>

<div id="navigation">
  
<li class="LNE_menu"><a class="selected" href="index.php">Home</a></li>
<li class="LNE_menu"><a href="lebenundwerk.php">Leben und Werk</a></li>
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
    <p>Der Schweizer Universalgelehrte Albrecht von Haller (1708-1777) ist eine der zentralen Gestalten des Jahrhunderts der Aufkl&auml;rung. Als Dichter und Gelehrter, Arzt und Botaniker, Sammler und Enzyklop&auml;dist, Universit&auml;tsprofessor und Experimentalforscher, Gesellschaftspr&auml;sident und Korrespondent, profilierter Autor und m&auml;chtiger Rezensent, Magistrat und orthodoxer Christ spiegelt er zahlreiche Str&ouml;mungen, Ereignisse und Verh&auml;ltnisse seiner Zeit.</p>
<p>Das Interesse an Haller als paradigmatischem Vertreter des 18. Jahrhunderts hat in letzter Zeit stark zugenommen. Die neuere Forschung wird sich vermehrt der Vielschichtigkeit der Aufkl&auml;rungs-Zeit bewusst und interessiert sich zunehmend f&uuml;r die Funktionsweise der Gelehrtenrepublik und deren Wechselwirkungen mit Wirtschaft, Politik und Gesellschaft. Haller bietet sich mit seinem reichen Leben und Wirken, riesigen und vielf&auml;ltigen Oeuvre und dem ausserordentlichen reichhaltigen handschriftlichen Nachlass als idealer Ausgangspunkt an, um sein Jahrhundert zu verstehen und zu erforschen.</p>
<p>Die Website dient als Plattform f&uuml;r alle, die sich f&uuml;r Haller und seine Zeit interessieren. Sie liefert einen bilderreichen Einblick in Hallers Leben und Zeit, informiert &uuml;ber die zentralen Gebiete seines Wirkens, gibt Auskunft &uuml;ber vergangene und aktuelle Forschung und verzeichnet die grosse Menge der online greifbaren originalen Haller-Texte.</p>     </div>
<div id="footer">Eine Website der Albrecht von Haller-Stiftung der Burgergemeinde Bern,<br />des Historischen Instituts der Universität Bern und des Instituts für Medizingeschichte der Universität Bern <br />Konzept und Inhalt: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="index.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>

</div>

</div>
<!-- *** JavaScript einschalten *** -->
<noscript><div id="bg-modal">
		<div id="horizon-modal">
			<div id="content-modal">
				<div class="bodytext-modal">
					<span class="headline-modal">JAVASCRIPT</span><br>
					Um die erweiterten Funktionen dieser Seite zu nutzen ist JavaScript erforderlich. <br>Aktivieren Sie bitte JavaScript.
</div>
			</div>
		</div>
     </div></noscript>
</body>
</html>
