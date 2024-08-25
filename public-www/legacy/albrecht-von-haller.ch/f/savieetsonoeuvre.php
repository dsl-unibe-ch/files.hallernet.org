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
<title>Sa vie et son œuvre - Albrecht von Haller</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='Content-Language' content='de_DE' />
<meta http-equiv='Content-Script-Type' content='text/javascript' />
<meta http-equiv='Content-Style-Type' content='text/css' />
<meta name='keywords' content='' />
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
<div id="contenttitel">Sa vie et son œuvre</div>
</div>

<div id="meta">	
<div id="sprache"><a href="../d/index.php">D</a> | <a href="../e/index.php">E</a></div>
<div id="metanavigation"><a href="contact.php">Contact</a> | <a href="fondationalbrechtvonhaller.php">Fondation Albrecht von Haller</a> | <a href="liens.php">Liens</a></div>		
</div>

<div id="navigation">
  
<li class="LNE_menu"><a href="index.php">Accueil</a></li>
<li class="LNE_menu"><a class="selected" href="savieetsonoeuvre.php">Sa vie et son œuvre</a></li>
<li class="LNE_menu_intend"><a href="biographie.php">Biographie</a></li>
<li class="LNE_menu_intend"><a href="poesiephilosophiepolitique.php">Poésie, philosophie politique et théologie</a></li>
<li class="LNE_menu_intend"><a href="medecine.php">Médecine</a></li>
<li class="LNE_menu_intend"><a href="botanique.php">Botanique</a></li>
<li class="LNE_menu_intend"><a href="magistratetpatrioteeconomique.php">Magistrat et patriote économique</a></li>
<li class="LNE_menu_intend"><a href="chercheuretsavant.php">Chercheur et savant</a></li>
<li class="LNE_menu_intend"><a href="bibliothequeetrecensions.php">Bibliothèque et recensions</a></li>
<li class="LNE_menu_intend"><a href="correspondance.php">Correspondance</a></li>
<li class="LNE_menu"><a href="fondsmanuscrit.php">Fonds manuscrit</a></li>
<li class="LNE_menu"><a href="recherche.php">Recherche</a></li>
<li class="LNE_menu"><a href="hallerstexteimnetz.php">Haller sur le net</a></li>
<li class="LNE_menu"><a href="litteraturesecondaire.php">Littérature secondaire</a></li>
<li class="LNE_menu"><a href="alalibrairie.php">À la librairie</a></li>
<li class="LNE_menu"><a href="multimedia.php">Multimedia</a></li>

  <div id="haller"></div>
</div>
<div id="contentbox">
<div id="schrift"><a href="javascript:chooseStyle('none', 60)" style="font-size: 9px">A</a> | <a href="javascript:chooseStyle('pbig', 60)" style="font-size: 12px">A</a> | <a href="javascript:chooseStyle('pbiger', 60)" style="font-size: 14px">A</a></div>
  <div id="content">
    <p>La vie et l&rsquo;&oelig;uvre de Haller t&eacute;moignent d&rsquo;une impressionnante activit&eacute;. Le savant bernois r&eacute;digea 24 monographies en 50 tomes. Outre un petit volume de po&eacute;sie, on d&eacute;nombre trois romans politiques, quatre volumes consacr&eacute;s &agrave; la religion, dix volumes de botanique et 32 volumes d&rsquo;&eacute;crits m&eacute;dicaux.&nbsp;&Agrave; cela viennent encore s&rsquo;ajouter 52 courts articles (de moins de dix pages) et 84 trait&eacute;s plus longs, 10 th&egrave;ses inaugurales (d&eacute;fendues par ses &eacute;l&egrave;ves), 200 articles encyclop&eacute;diques de m&eacute;decine, 25 pr&eacute;faces et 80 recensions de livres sous forme d&rsquo;essais. Au total, il remplit de sa plume environ 25'000 pages, sans compter les versions revues et corrig&eacute;es de ses &oelig;uvres qu&rsquo;il publia en 25 volumes suppl&eacute;mentaires. Ces chiffres ne prennent pas non plus en compte les quelques 9'000 recensions des &laquo;&nbsp;G&ouml;ttingischen Gelehrten Anzeigen&nbsp;&raquo; ainsi que les &eacute;ditions de 10 autres &oelig;uvres en 52 volumes dont il organisa la publication.</p>
<p>Haller a su, plus qu&rsquo;aucun autre sans doute, mesurer l&rsquo;ampleur du savoir et de la pens&eacute;e de son &eacute;poque, s&rsquo;en faisant le commentateur dans ses critiques litt&eacute;raires mais d&eacute;veloppant aussi une r&eacute;flexion propre, allant m&ecirc;me jusqu&rsquo;&agrave; leur donner une unit&eacute; coh&eacute;rente &ndash; du moins &agrave; son sens. Pr&eacute;cisons toutefois que la grande vari&eacute;t&eacute; de ses productions de chercheur et de savant ne fut pas inhabituelle pour son si&egrave;cle. Ses contributions les plus importantes sont consacr&eacute;es aux domaines de la po&eacute;sie, de la critique litt&eacute;raire (recensions), des sciences m&eacute;dicales (et plus particuli&egrave;rement &agrave; l&rsquo;anatomie, la physiologie et l&rsquo;embryologie), de la botanique, ainsi qu&rsquo;&agrave; quelques branches de l&rsquo;histoire naturelle, de l&rsquo;agriculture et des technologies. Par ailleurs, il fut magistrat, comme nombre de ses contemporains lettr&eacute;s, et entretint une vaste correspondance.</p>
<p>Les diff&eacute;rentes rubriques renferment des renseignements d&rsquo;ordre g&eacute;n&eacute;ral sur les contributions de Haller dans chaque domaine. Pour une vue d&rsquo;ensemble plus d&eacute;taill&eacute;e de la vie et de l&rsquo;&oelig;uvre de Haller, on consultera <a href="ab2005.php#SteinkeBoschungPross2008">Steinke/Boschung Pross 2008</a>. La &laquo;&nbsp;Bibliographia Halleriana&nbsp;&raquo; (<a href="ab2005.php#SteinkeProfos2004">Steinke/Profos 2004</a>), quant &agrave; elle, recense la totalit&eacute; des travaux de et sur Haller.</p>     </div>
<div id="footer">Un site web de la Fondation Albrecht von Haller de la Bourgeoisie de Berne, <br />de l'Institut d'Histoire et de l'Institut d'Histoire de la Médecine de l'Université de Berne <br />Concept and content: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="savieetsonoeuvre.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
