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
<title>Haller 300 - Albrecht von Haller</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='Content-Language' content='de_DE' />
<meta http-equiv='Content-Script-Type' content='text/javascript' />
<meta http-equiv='Content-Style-Type' content='text/css' />
<meta name='keywords' content='' />
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
<div id="contenttitel">Haller 300</div>
</div>

<div id="meta">	
<div id="sprache"><a href="../d/index.php">D</a> | <a href="../e/index.php">E</a></div>
<div id="metanavigation"><a href="contact.php">Contact</a> | <a href="fondationalbrechtvonhaller.php">Fondation Albrecht von Haller</a> | <a href="liens.php">Liens</a></div>		
</div>

<div id="navigation">
  
<li class="LNE_menu"><a href="index.php">Accueil</a></li>
<li class="LNE_menu"><a href="savieetsonoeuvre.php">Sa vie et son œuvre</a></li>
<li class="LNE_menu"><a href="fondsmanuscrit.php">Fonds manuscrit</a></li>
<li class="LNE_menu"><a href="recherche.php">Recherche</a></li>
<li class="LNE_menu"><a href="hallerstexteimnetz.php">Haller sur le net</a></li>
<li class="LNE_menu"><a href="litteraturesecondaire.php">Littérature secondaire</a></li>
<li class="LNE_menu"><a href="alalibrairie.php">À la librairie</a></li>
<li class="LNE_menu"><a href="multimedia.php">Multimedia</a></li>
<li class="LNE_menu_intend"><a href="hallerdanslemusee.php">Haller dans le musée</a></li>
<li class="LNE_menu_intend"><a href="jardinsdehaller.php">Jardins de Haller</a></li>
<li class="LNE_menu_intend"><a class="selected" href="haller300.php">Haller 300</a></li>
<li class="LNE_menu_doubleintend"><a href="programme.php">Programme</a></li>
<li class="LNE_menu_doubleintend"><a href="equipedeprojet.php">Equipe de projet</a></li>
<li class="LNE_menu_doubleintend"><a href="patronage.php">Patronage</a></li>
<li class="LNE_menu_doubleintend"><a href="revuedepresse.php">Revue de presse</a></li>
<li class="LNE_menu_doubleintend"><a href="radioettelevision.php">Radio et télévision</a></li>
<li class="LNE_menu_intend"><a href="images.php">Images</a></li>
<li class="LNE_menu_intend"><a href="theatremusiquebandedessinee.php">Théâtre, musique, bande dessinée (en Allemand)</a></li>

  <div id="haller"></div>
</div>
<div id="contentbox">
<div id="schrift"><a href="javascript:chooseStyle('none', 60)" style="font-size: 9px">A</a> | <a href="javascript:chooseStyle('pbig', 60)" style="font-size: 12px">A</a> | <a href="javascript:chooseStyle('pbiger', 60)" style="font-size: 14px">A</a></div>
  <div id="content">
    <p>&Agrave; l&rsquo;occasion du tricentenaire de la naissance de Haller en 2008, la Fondation Albrecht von Haller de la Commune Bourgeoise de Berne, s&rsquo;est associ&eacute;e avec l&rsquo;Universit&eacute; de Berne et d&rsquo;autres partenaires pour organiser une s&eacute;rie de plus de 100 &eacute;v&egrave;nements r&eacute;unis sous le nom de Haller300. Il s&rsquo;agissait de pr&eacute;senter Haller &agrave; un public large en tant que figure paradigmatique &agrave; la crois&eacute;e de l&rsquo;Ancien r&eacute;gime et des sciences modernes, et ce &agrave; travers diff&eacute;rentes manifestations :</p>
<ul class="einzug">
    <li>une c&eacute;r&eacute;monie d&rsquo;anniversaire</li>
    <li>deux expositions</li>
    <li>une nouvelle production th&eacute;&acirc;trale</li>
    <li>Haller, invit&eacute; de la Nuit des mus&eacute;es de Berne 2008</li>
    <li>deux congr&egrave;s scientifiques</li>
    <li>de nombreuses publications</li>
    <li>d&rsquo;autres &eacute;v&egrave;nements partenaires, tels des tours guid&eacute;s dans la ville de Berne, des randonn&eacute;es dans les Alpes, des lectures, etc.</li>
</ul>
<p>Vous pouvez passer en revue l&rsquo;ann&eacute;e Haller en vous r&eacute;f&eacute;rant &agrave; son programme ainsi qu&rsquo;aux revues de presse, t&eacute;l&eacute;reportages et &eacute;missions radiophoniques qui lui ont &eacute;t&eacute; consacr&eacute;s.</p>
<p>&nbsp;</p>     </div>
<div id="footer">Un site web de la Fondation Albrecht von Haller de la Bourgeoisie de Berne, <br />de l'Institut d'Histoire et de l'Institut d'Histoire de la Médecine de l'Université de Berne <br />Concept and content: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="haller300.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
