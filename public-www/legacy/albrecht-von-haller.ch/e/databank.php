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
<title>Databank - Albrecht von Haller</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='Content-Language' content='de_DE' />
<meta http-equiv='Content-Script-Type' content='text/javascript' />
<meta http-equiv='Content-Style-Type' content='text/css' />
<meta name='keywords' content='Albrecht von Haller' />
<meta name='description' content='' />
<meta name='author' content='Hannes Saxer' />
<meta name='Robots' content='index,follow' />
<meta http-equiv='imagetoolbar' content='no' /><!-- disable IE's image toolbar -->
<link rel='stylesheet' type='text/css' href='templates/forschung/style.css' />
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
<div id="headerimg"><img src="templates/forschung/header/head.png" width="960" height="320" /></div>
<div id="logo"><img src="templates/basisdesign/hallerlogo.png" width="200" height="130" /></div>
<div id="contenttitel">Databank</div>
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
<li class="LNE_menu_intend"><a href="historyofresearch.php">History of research</a></li>
<li class="LNE_menu_intend"><a href="thehallerproject1991–2003.php">The Haller Project, 1991–2003</a></li>
<li class="LNE_menu_intend"><a href="currentprojects.php">Current projects</a></li>
<li class="LNE_menu_intend"><a class="selected" href="databank.php">Databank</a></li>
<li class="LNE_menu"><a href="hallerstextsonline.php">Haller’s texts online</a></li>
<li class="LNE_menu"><a href="researchliterature.php">Research literature</a></li>
<li class="LNE_menu"><a href="atthebookshop.php">At the bookshop</a></li>
<li class="LNE_menu"><a href="multimedia.php">Multimedia</a></li>

  <div id="haller"></div>
</div>
<div id="contentbox">
<div id="schrift"><a href="javascript:chooseStyle('none', 60)" style="font-size: 9px">A</a> | <a href="javascript:chooseStyle('pbig', 60)" style="font-size: 12px">A</a> | <a href="javascript:chooseStyle('pbiger', 60)" style="font-size: 14px">A</a></div>
  <div id="content">
    <p>The research databank on Albrecht von Haller contains basic information on approximately 1200 of Haller&rsquo;s correspondents, 17,000 letters by and to Haller, 23,000 publications from Haller&rsquo;s library, and about 4000 publications by and about Haller. With the integration of the research databank on the Economic Society of Bern (Oekonomische Gesellschaft Bern, OeG), which is closely linked with Haller&rsquo;s network in terms of both people and subject matter, the Haller databank was transformed into a combined databank known under the name of &ldquo;Haller-/OeG-DB&rdquo;. This databank is continually being expanded, for example by integrating the correspondence of the polymath Johann Jakob Scheuchzer of Z&uuml;rich. The &ldquo;Haller-/OeG-DB&rdquo; is located on the server of the Burgerbibliothek Bern. The Albrecht von Haller Foundation, which is the license holder of the FAUST databank software, has mandated Martin Stuber with conceptual responsibility for the databank. The &ldquo;Haller-/OeG-DB&rdquo; can be consulted by appointment in the Burgerbibliothek Bern (<a href="mailto:thomas.schmid@burgerbib.ch">Thomas Schmid</a>) and at the Institute of History at the University of Bern (<a href="mailto:%20martin.stuber@hist.unibe.ch">Martin Stuber</a>). The databank will likely be made accessible online in the medium term.</p>
<p><strong>Research literature:</strong><br />
<a href="bis2004.php#Steinke2003a">Steinke 2003a</a>, <a href="bis2004.php#stuber">Stuber 1999</a>.</p>     </div>
<div id="footer">A website of the Albrecht von Haller Foundation of the Burgergemeinde Bern,<br />the Institute of History and the Institute of History of Medicine of the University of Bern<br /> Concept and content: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="databank.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
