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
<title>Links - Albrecht von Haller</title>
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
<div id="headerimg"><img src="templates/home/header/head.png" width="960" height="320" /></div>
<div id="logo"><img src="templates/basisdesign/hallerlogo.png" width="200" height="130" /></div>
<div id="contenttitel">Links</div>
</div>

<div id="meta">	
<div id="sprache"><a href="../d/index.php">D</a> | <a href="../f/index.php">F</a></div>
<div id="metanavigation"><a href="contact.php">Contact</a> | <a href="albrechtvonhallerfoundation.php">Albrecht von Haller Foundation</a> | <a href="links.php">Links</a></div>	
</div>

<div id="navigation">
  
<li class="LNE_menu"><a href="index.php">Home</a></li>
<li class="LNE_menu"><a href="lifeandwork.php">Life and work</a></li>
<li class="LNE_menu"><a href="unpublishedwritings.php">Unpublished writings</a></li>
<li class="LNE_menu"><a href="research.php">Research</a></li>
<li class="LNE_menu"><a href="hallerstextsonline.php">Haller’s texts online</a></li>
<li class="LNE_menu"><a href="researchliterature.php">Research literature</a></li>
<li class="LNE_menu"><a href="atthebookshop.php">At the bookshop</a></li>
<li class="LNE_menu"><a href="multimedia.php">Multimedia</a></li>

  <div id="haller"></div>
</div>
<div id="contentbox">
<div id="schrift"><a href="javascript:chooseStyle('none', 60)" style="font-size: 9px">A</a> | <a href="javascript:chooseStyle('pbig', 60)" style="font-size: 12px">A</a> | <a href="javascript:chooseStyle('pbiger', 60)" style="font-size: 14px">A</a></div>
  <div id="content">
    <ul id="tabs">
    <li><a href="#panel1">18th century / Enlightenment</a></li>
    <li><a href="#panel2">History of medicine and science</a></li>
    <li><a href="#panel3">Single figures<br />
    </a></li>
    <li><a href="#panel4">Other links</a></li>
</ul>
<div id="panel1">
<h2>18th century / Enlightenment</h2>
<div id="allesprachen1">&nbsp;<img width="32" height="32" class="loader" src="/avh/e/images/loader.gif" alt="" /></div>
<p>
<script>
$('#allesprachen1').load('../d/link.php #allesprachen1> *', function() {

if($(location).attr("hash")) {
mein_anker = $(location).attr("hash").substring(1);
elem = $('a[name="'+mein_anker+'"]');
if(elem) {
meine_position = $(elem).offset();
$(window).scrollTop(meine_position.top);
}
}//eof hash vorhanden
});
</script>
</p>
</div>
<div id="panel2">
<h2>History of medicine and science</h2>
<div id="allesprachen2">&nbsp;<img width="32" height="32" class="loader" src="/avh/e/images/loader.gif" alt="" /></div>
<p>
<script>
$('#allesprachen2').load('../d/link.php #allesprachen2> *', function() {

if($(location).attr("hash")) {
mein_anker = $(location).attr("hash").substring(1);
elem = $('a[name="'+mein_anker+'"]');
if(elem) {
meine_position = $(elem).offset();
$(window).scrollTop(meine_position.top);
}
}//eof hash vorhanden
});
</script>
</p>
</div>
<div id="panel3">
<h2>Single figures</h2>
<div id="allesprachen3">&nbsp;<img width="32" height="32" class="loader" src="/avh/e/images/loader.gif" alt="" /></div>
<p>
<script>
$('#allesprachen3').load('../d/link.php #allesprachen3> *', function() {

if($(location).attr("hash")) {
mein_anker = $(location).attr("hash").substring(1);
elem = $('a[name="'+mein_anker+'"]');
if(elem) {
meine_position = $(elem).offset();
$(window).scrollTop(meine_position.top);
}
}//eof hash vorhanden
});
</script>
</p>
</div>
<div id="panel4">
<h2>Other links</h2>
<div id="allesprachen4">&nbsp;<img width="32" height="32" class="loader" src="/avh/e/images/loader.gif" alt="" /></div>
<p>
<script>
$('#allesprachen4').load('../d/link.php #allesprachen4> *', function() {

if($(location).attr("hash")) {
mein_anker = $(location).attr("hash").substring(1);
elem = $('a[name="'+mein_anker+'"]');
if(elem) {
meine_position = $(elem).offset();
$(window).scrollTop(meine_position.top);
}
}//eof hash vorhanden
});
</script>
</p>
</div>     </div>
<div id="footer">A website of the Albrecht von Haller Foundation of the Burgergemeinde Bern,<br />the Institute of History and the Institute of History of Medicine of the University of Bern<br /> Concept and content: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="links.php?do=sitemap">Sitemap</a></div>
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
