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
<title>Haller’s texts online - Albrecht von Haller</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='Content-Language' content='de_DE' />
<meta http-equiv='Content-Script-Type' content='text/javascript' />
<meta http-equiv='Content-Style-Type' content='text/css' />
<meta name='keywords' content='Albrecht von Haller' />
<meta name='description' content='' />
<meta name='author' content='Hannes Saxer' />
<meta name='Robots' content='index,follow' />
<meta http-equiv='imagetoolbar' content='no' /><!-- disable IE's image toolbar -->
<link rel='stylesheet' type='text/css' href='templates/netz/style.css' />
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
<div id="headerimg"><img src="templates/netz/header/head.png" width="960" height="320" /></div>
<div id="logo"><img src="templates/basisdesign/hallerlogo.png" width="200" height="130" /></div>
<div id="contenttitel">Haller’s texts online</div>
</div>

<div id="annex">
 <p class="haller"></p>
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
<li class="LNE_menu"><a class="selected" href="hallerstextsonline.php">Haller’s texts online</a></li>
<li class="LNE_menu"><a href="researchliterature.php">Research literature</a></li>
<li class="LNE_menu"><a href="atthebookshop.php">At the bookshop</a></li>
<li class="LNE_menu"><a href="multimedia.php">Multimedia</a></li>

  <div id="haller"></div>
</div>
<div id="contentbox">
<div id="schrift"><a href="javascript:chooseStyle('none', 60)" style="font-size: 9px">A</a> | <a href="javascript:chooseStyle('pbig', 60)" style="font-size: 12px">A</a> | <a href="javascript:chooseStyle('pbiger', 60)" style="font-size: 14px">A</a></div>
  <div id="content">
    <p>This page contains an index of texts by Haller that are available online. Most of Haller&rsquo;s writings are available in eighteenth-century editions. Listed here as well are individual works that are mentioned on the website but cannot be viewed online.Some of Haller&rsquo;s writings are in the Kl. Schriften 1772 [BH 7], and individual anatomical and physiological works are contained in the *Opera minora 1763&ndash;68 [BH 336]. These works are not listed individually here. <br />
The writings are presented in the order found in the printed edition of the Bibliographia Halleriana (<a href="ab2005.php#SteinkeProfos2004">Steinke/Profos 2004</a>). BH refers to the corresponding entry number.<br />
Last updated: 25 September 2009<br />
Please direct comments about texts newly available online to <a href="mailto:%20martin.stuber@hist.unibe.ch">Martin Stuber</a>.</p>
<p>&nbsp;</p>
<ul id="mytabs">
    <li><a href="#panel1">Edited<br />
    volumes<br />
    </a></li>
    <li><a href="#panel2">Autobiogr.<br />
    material<br />
    </a></li>
    <li><a href="#panel3">Poetry</a></li>
    <li><a href="#panel4">Utopian<br />
    novels<br />
    </a></li>
    <li><a href="#panel5">Religiouse<br />
    writing<br />
    </a></li>
    <li><a href="#panel6">Medicine</a></li>
    <li><a href="#panel7">Botany</a></li>
    <li><a href="#panel8">Reviews</a></li>
    <li><a href="#panel9">Other</a></li>
    <li><a href="#panel10">Letters</a></li>
</ul>
<div id="panel1">
<p>&nbsp;</p>
<h2><a name="panel1">Edited volumes</a></h2>
<div id="allesprachen1">&nbsp;<img width="32" height="32" alt="" src="/avh/f/images/loader.gif" class="loader" /></div>
<p>
<script>
$('#allesprachen1').load('../d/hallerstexteimnetz.php #allesprachen1> *', function() {

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
<h2><a name="panel2">Autobiographical material</a></h2>
<div id="allesprachen2">&nbsp;<img width="32" height="32" alt="" src="/avh/f/images/loader.gif" class="loader" /></div>
<p>
<script>
$('#allesprachen2').load('../d/hallerstexteimnetz.php #allesprachen2> *', function() {

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
<h2><a name="panel3">Poetry</a></h2>
<div id="allesprachen3">&nbsp;<img width="32" height="32" alt="" src="/avh/f/images/loader.gif" class="loader" /></div>
<p>
<script>
$('#allesprachen3').load('../d/hallerstexteimnetz.php #allesprachen3> *', function() {

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
<h2><a name="panel4">Utopian novels</a></h2>
<div id="allesprachen4">&nbsp;<img width="32" height="32" alt="" src="/avh/f/images/loader.gif" class="loader" /></div>
<p>
<script>
$('#allesprachen4').load('../d/hallerstexteimnetz.php #allesprachen4> *', function() {

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
<div id="panel5">
<h2><a name="panel5">Religious writings</a></h2>
<div id="allesprachen5">&nbsp;<img width="32" height="32" alt="" src="/avh/f/images/loader.gif" class="loader" /></div>
<p>
<script>
$('#allesprachen5').load('../d/hallerstexteimnetz.php #allesprachen5> *', function() {

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
<div id="panel6">
<h2><a name="panel6">Medicine</a></h2>
<div id="allesprachen6">&nbsp;<img width="32" height="32" alt="" src="/avh/f/images/loader.gif" class="loader" /></div>
<p>
<script>
$('#allesprachen6').load('../d/hallerstexteimnetz.php #allesprachen6> *', function() {

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
<div id="panel7">
<h2><a name="panel7">Botany</a></h2>
<div id="allesprachen7">&nbsp;<img width="32" height="32" alt="" src="/avh/f/images/loader.gif" class="loader" /></div>
<p>
<script>
$('#allesprachen7').load('../d/hallerstexteimnetz.php #allesprachen7> *', function() {

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
<div id="panel8">
<h2><a name="panel8">Reviews</a></h2>
<div id="allesprachen8">&nbsp;<img width="32" height="32" alt="" src="/avh/f/images/loader.gif" class="loader" /></div>
<p>
<script>
$('#allesprachen8').load('../d/hallerstexteimnetz.php #allesprachen8> *', function() {

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
<div id="panel9">
<h2><a name="panel9">Other</a></h2>
<div id="allesprachen9">&nbsp;<img width="32" height="32" alt="" src="/avh/f/images/loader.gif" class="loader" /></div>
<p>
<script>
$('#allesprachen9').load('../d/hallerstexteimnetz.php #allesprachen9> *', function() {

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
<div name="panel10" id="panel10">
<h2><a name="panel10">Letters</a></h2>
<div id="allesprachen10">&nbsp;<img width="32" height="32" alt="" src="/avh/f/images/loader.gif" class="loader" /></div>
<p>
<script>
$('#allesprachen10').load('../d/hallerstexteimnetz.php #allesprachen10> *', function() {

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
      
<div id="footer">A website of the Albrecht von Haller Foundation of the Burgergemeinde Bern,<br />the Institute of History and the Institute of History of Medicine of the University of Bern<br /> Concept and content: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.com/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="hallerstextsonline.php?do=sitemap">Sitemap</a></div>
</div>

</div>


</div>

</div>
</body>
</html>
