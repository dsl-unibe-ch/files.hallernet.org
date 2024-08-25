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
<title>Botanique - Albrecht von Haller</title>
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
<div id="contenttitel">Botanique</div>
</div>

<div id="meta">	
<div id="sprache"><a href="../d/index.php">D</a> | <a href="../e/index.php">E</a></div>
<div id="metanavigation"><a href="contact.php">Contact</a> | <a href="fondationalbrechtvonhaller.php">Fondation Albrecht von Haller</a> | <a href="liens.php">Liens</a></div>		
</div>

<div id="navigation">
  
<li class="LNE_menu"><a href="index.php">Accueil</a></li>
<li class="LNE_menu"><a href="savieetsonoeuvre.php">Sa vie et son œuvre</a></li>
<li class="LNE_menu_intend"><a href="biographie.php">Biographie</a></li>
<li class="LNE_menu_intend"><a href="poesiephilosophiepolitique.php">Poésie, philosophie politique et théologie</a></li>
<li class="LNE_menu_intend"><a href="medecine.php">Médecine</a></li>
<li class="LNE_menu_intend"><a class="selected" href="botanique.php">Botanique</a></li>
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
    <p>L&rsquo;&oelig;uvre botanique de Haller comprend un volumineux inventaire de la flore de grands espaces g&eacute;ographiques tel que la Suisse ou de r&eacute;gions telles que Jena et Gottingue, des monographies traitant de certains genres ou familles de plantes (les alliac&eacute;es europ&eacute;ennes et les orchid&eacute;es, par exemple), des rapports d&rsquo;exp&eacute;ditions botaniques ainsi qu&rsquo;une bibliographie critique et comment&eacute;e de l&rsquo;ensemble de l&rsquo;&oelig;uvre botanique de son temps (*<a href="hallerstexteimnetz.php#Biblbot1771-72">Bibl. bot. 1771-72</a> [1215]).</p>
<p>Haller publia la premi&egrave;re &eacute;tude d&eacute;taill&eacute;e de la flore suisse alors qu&rsquo;il &eacute;tait encore professeur &agrave; Gottingue (*<a href="hallerstexteimnetz.php#Enumstirphelv1742">Enum. stirp. helv. 1742</a> [1189]). Cette parution reposa sur plusieurs exp&eacute;ditions et collectes de plantes entreprises principalement dans les Alpes avec le soutien de ses amis. Devenue un &eacute;crit de r&eacute;f&eacute;rence en botanique, Haller la r&eacute;&eacute;dita en 1768 en une version amplement augment&eacute;e (*<a href="hallerstexteimnetz.php#Histstirphelv1768">Hist. stirp. helv. 1768</a> [1202]). &Agrave; Gottingue, il fonda le jardin botanique de l&rsquo;universit&eacute; et l&rsquo;enrichit d&rsquo;une vaste collection de plantes qu&rsquo;il entreprit de d&eacute;crire (*<a href="hallerstexteimnetz.php#EnumhortGott1753">Enum. hort. Gott. 1753</a> [1241]).</p>
<p>V&eacute;ritable pr&eacute;curseur dans de nombreux domaines de la botanique, Haller reconnut la variabilit&eacute; des plantes et rejeta la constance des esp&egrave;ces (fixisme). Il se laissa par ailleurs guider par un v&eacute;ritable souci d&rsquo;exactitude dans ses descriptions morphologiques d&rsquo;esp&egrave;ces, n&rsquo;h&eacute;sitant pas &agrave; r&eacute;p&eacute;ter ses observations sur plusieurs exemplaires et &agrave; diff&eacute;rents stades de leurs d&eacute;veloppements, et n&rsquo;oubliant pas de consigner les lieux de collecte ainsi que les facteurs stationnaires. Ses recherches sur la g&eacute;ographie des plantes et les &eacute;tages de v&eacute;g&eacute;tation sont reconnues jusqu&rsquo;aujourd&rsquo;hui. Sa synonymie d&eacute;taill&eacute;e des anciens noms de plantes (pr&eacute;linn&eacute;ens) ainsi que sa tentative d&rsquo;&eacute;tablir une syst&eacute;matique naturelle bas&eacute;e sur la parent&eacute; des v&eacute;g&eacute;taux fondent la particularit&eacute; de son &oelig;uvre botanique. Il r&eacute;unit et publia plusieurs de ses &eacute;crits mineurs dans un recueil (*<a href="hallerstexteimnetz.php#Opusculabot1749">Opuscula bot. 1749 </a>[1254]).</p>
<p>Pour des raisons tant historiques que scientifiques, Haller refusa le syst&egrave;me sexuel des plantes, trop artificiel &agrave; son go&ucirc;t, tout comme il rejeta la nomenclature binominale instaur&eacute;s tous deux avec succ&egrave;s par son contemporain Carl von Linn&eacute;. De ce fait, les noms qu&rsquo;il a donn&eacute;s &agrave; environ 300 plantes &agrave; fleurs qu&rsquo;il fut le premier &agrave; d&eacute;crire ont &eacute;t&eacute; invalid&eacute;s par la suite. Ceci explique pourquoi son &oelig;uvre botanique n&rsquo;a pas eu un plus grand impact.</p>
<p>Haller a constitu&eacute; de volumineux herbiers qui, pour la plupart, sont conserv&eacute;s aujourd&rsquo;hui encore. L&rsquo;herbier principal, en 60 volumes, est propri&eacute;t&eacute; du Mus&eacute;um national d&rsquo;Histoire naturelle de Paris, tandis qu&rsquo;un plus petit se trouve &agrave; l&rsquo;Institut f&uuml;r Pflanzenwissenschaften Albrecht von Haller de l&rsquo;Universit&eacute; de Gottingue. Quelques pi&egrave;ces suppl&eacute;mentaires sont int&eacute;gr&eacute;es &agrave; l&rsquo;herbier de son fils, Albrecht von Haller filius (1758-1823), et peuvent &ecirc;tre consult&eacute;es au Conservatoire et Jardin botaniques de Gen&egrave;ve.</p>
<p><br />
<a href="http://www.albrecht-von-haller.ch/haller_im_museum/index_f.htm">Haller dans le mus&eacute;e</a></p>
<p>&nbsp;</p>
<p><strong>Litt&eacute;rature secondaire</strong><br />
<a href="bis2004.php#Beer1953">Beer 1953</a>, <a href="bis2004.php#Boschung2000">Boschung 2000</a>, <a href="ab2005.php#DrouinLienhard2008">Drouin/Lienhard 2008</a>, <a href="bis2004.php#Fischer1909">Fischer 1909</a>, <a href="bis2004.php#Frey1964">Frey 1964</a>, <a href="ab2005.php#GradsteinSchwerdtfeger2009">Gradstein/Schwerdtfeger 2009</a>,&nbsp;<a href="bis2004.php#Lienhard2000">Lienhard 2000</a>, <a href="ab2005.php#Lienhard2005">Lienhard 2005</a>, <a href="ab2005.php#Lienhard2007">Lienhard 2007</a>, <a href="bis2004.php#Shteir1977">Shteir 1977</a>, <a href="bis2004.php#Toellner2002">Toellner 2002</a>, <a href="bis2005.php#Wagenitz2003a">Wagenitz 2003a</a>,&nbsp;&nbsp;<a href="ab2005.php#Wagenitz2009">Wagenitz 2009</a>,&nbsp;<a href="bis2004.php#Zoller1958">Zoller 1958</a>, <a href="bis2004.php#Zoller1977">Zoller 1977</a>.</p>     </div>
<div id="footer">Un site web de la Fondation Albrecht von Haller de la Bourgeoisie de Berne, <br />de l'Institut d'Histoire et de l'Institut d'Histoire de la Médecine de l'Université de Berne <br />Concept and content: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="botanique.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
