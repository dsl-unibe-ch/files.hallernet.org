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
<title>Médecine - Albrecht von Haller</title>
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
<div id="contenttitel">Médecine</div>
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
<li class="LNE_menu_intend"><a class="selected" href="medecine.php">Médecine</a></li>
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
    <p>Les recherches syst&eacute;matiques qu&rsquo;il entreprit sur les corps vivants et morts valurent &agrave; Haller une place pr&eacute;dominante dans la m&eacute;decine du XVIII&egrave;me si&egrave;cle. En anatomie, il souligna la n&eacute;cessit&eacute; d&rsquo;une dissection r&eacute;p&eacute;t&eacute;e qui seule permet de diff&eacute;rencier les structures communes des variantes rares. Il r&eacute;ussit &agrave; d&eacute;crire avec une perfection in&eacute;gal&eacute;e jusqu&rsquo;alors la disposition des art&egrave;res dans le corps humain en pr&eacute;parant pr&egrave;s de 400 cadavres (*<a href="hallerstexteimnetz.php#Iconesanat1743-56">Icones anat. 1743-56</a>). D&rsquo;autres de ses travaux sont d&eacute;di&eacute;s aux malformations et &agrave; leurs lois. Le nom de Haller a, pendant des ann&eacute;es, &eacute;t&eacute; associ&eacute; aux structures anatomiques du diaphragme (arcus lumbocostales Halleri), des testicules (rete Halleri) et au syst&egrave;me art&eacute;riel (tripus Halleri).</p>
<p>Selon Haller, l&rsquo;anatomie constitue le fondement des recherches sur les processus vitaux et la physiologie doit &ecirc;tre comprise en terme d&rsquo;&laquo;&nbsp;anatomie anim&eacute;e&nbsp;&raquo; (anatomia animata). D&rsquo;un point de vue m&eacute;thodologique, ses exp&eacute;riences sur les corps vivants constituent le point d&rsquo;orgue de ce programme de recherche. Haller a ainsi r&eacute;alis&eacute; de nombreuses exp&eacute;riences &ndash; souvent cruelles &ndash; sur des animaux afin de d&eacute;terminer la sensibilit&eacute; et l&rsquo;irritabilit&eacute; de parties du corps isol&eacute;es. En cela, il peut &ecirc;tre consid&eacute;r&eacute; comme le fondateur de la physiologie exp&eacute;rimentale. Dans le r&eacute;sultat de ses recherches (*<a href="hallerstexteimnetz.php#Departirrit1753">De part. irrit. 1753</a>), il associa des propri&eacute;t&eacute;s sp&eacute;cifiques &agrave; chaque structure organique (muscles &ndash; irritabilit&eacute;&nbsp;; nerfs &ndash; sensibilit&eacute;) et distingua les domaines du mouvement de celui des sensations, op&eacute;rant une s&eacute;paration nette entre deux &eacute;l&eacute;ments mal d&eacute;partag&eacute;s jusqu&rsquo;alors. Il engendra ainsi une controverse d&rsquo;envergure europ&eacute;enne qui influen&ccedil;a grandement l&rsquo;&eacute;laboration de nouveaux concepts m&eacute;dicaux dans la seconde moiti&eacute; du XVIII&egrave;me si&egrave;cle.</p>
<p>Haller relisait sans cesse ses travaux, publiant souvent plusieurs versions retravaill&eacute;es. En combinant ses propres recherches &agrave; la lecture critique des &eacute;crits d&rsquo;autres auteurs, Haller composa finalement ses grandes synth&egrave;ses critiques de la physiologie ((*<a href="hallerstexteimnetz.php#Boerhaaveprael1739-44">Boerhaave prael. 1739-44</a> [373], *<a href="hallerstexteimnetz.php#Primlinphysiol1747">Prim. lin. physiol. 1747</a> [390], *<a href="hallerstexteimnetz.php#Elphysiol1757-66">El. physiol. 1757-66</a> [423]). Le dernier ouvrage mentionn&eacute;, ses &laquo;&nbsp;Elementa physiologiae&nbsp;&raquo; en huit volumes, devait devenir le point de r&eacute;f&eacute;rence du d&eacute;veloppement de la physiologie au XIX&egrave;me si&egrave;cle.</p>
<p>Haller consacra d&rsquo;autres &eacute;tudes &agrave; la circulation du sang, &agrave; la structure osseuse et &agrave; la formation de l&rsquo;embryon (*<a href="hallerstexteimnetz.php#Deformationecordis1767">De formatione cordis 1767</a> [903]). S&rsquo;appuyant sur ses importantes recherches sur l&rsquo;&oelig;uf de poule et guid&eacute; par des convictions id&eacute;ologiques, Haller soutint la th&eacute;orie selon laquelle l&rsquo;embryon existe d&eacute;j&agrave; en miniature avant l&rsquo;acte de procr&eacute;ation et qu&rsquo;il ne fait ensuite que grandir et devenir visible (th&egrave;se de la pr&eacute;formation). Afin de documenter le savoir de son &eacute;poque et le rendre accessible au monde savant, Haller commenta et catalogua l&rsquo;ensemble des &eacute;crits m&eacute;dicaux en trois bibliographies (*<a href="hallerstexteimnetz.php#Biblanat1774-77">Bibl. anat. 1774-77</a> [329], *<a href="hallerstexteimnetz.php#Biblchir1774-75">Bibl. chir. 1774-75</a> [1089], *<a href="hallerstexteimnetz.php#Biblmedpract1776-88">Bibl. med. pract. 1776-88</a> [1091]).</p>
<p>L&rsquo;activit&eacute; de Haller en tant que m&eacute;decin praticien a longtemps &eacute;t&eacute; sous-estim&eacute;e. Sa correspondance t&eacute;moigne du fait qu&rsquo;il pratiqua non seulement entre 1729 et 1736 &agrave; Berne, mais qu&rsquo;il joua aussi un r&ocirc;le de m&eacute;decin consultant (surtout pour des maladies graves) sa vie durant, en plus de ses autres occupations. On associe son nom &agrave; l&rsquo;&laquo;&nbsp;elixir acidum Halleri&nbsp;&raquo;, compos&eacute; d&rsquo;une part d&rsquo;acide sulfurique pour trois parts d&rsquo;esprit-de-vin et mentionn&eacute; jusqu&rsquo;aujourd&rsquo;hui dans la &laquo;&nbsp;Pharmacopoea Helvetica Quarta&nbsp;&raquo; (1907, ouvrage de r&eacute;f&eacute;rence jusqu&rsquo;en 1933).</p>
<p><strong>Litt&eacute;rature secondaire</strong><br />
Anatomie et Physiologie: <a href="bis2004.php#Duchesneau1982">Duchesneau 1982</a>, <a href="bis2004.php#Monti1990">Monti 1990</a>, <a href="bis2004.php#Roe1984">Roe 1984</a>, <a href="bis2004.php#Schaer1958">Sch&auml;r 1958</a>, <a href="ab2005.php#Steinke2005">Steinke 2005</a>, <a href="ab2005.php#Steinke2007">Steinke 2007</a>, <a href="ab2005.php#Steinke2008">Steinke 2008</a>. <br />
Embryologie: *De formatione cordis 2000, <a href="bis2004.php#Cherni1998">Cherni 1998</a>, <a href="ab2005.php#Detlefsen2006">Detlefsen 2006</a>, <a href="bis2004.php#Duchesneau1982">Duchesneau 1982</a>, <a href="bis2004.php#Mazzolini1977">Mazzolini 1977</a>, <a href="bis2004.php#Monti1990">Monti 1990</a>, <a href="ab2005.php#Monti2008">Monti 2008</a>, <a href="bis2004.php#Roe1981">Roe 1981</a>.<br />
M&eacute;decine pratique: <a href="bis2004.php#Boschung1977">Boschung 1977</a>, <a href="bis2004.php#Boschung1985a">Boschung 1985a</a>, <a href="bis2004.php#Boschung1996">Boschung 1996</a>, <a href="ab2005.php#Boschung2008a">Boschung 2008a</a>, <a href="ab2005.php#SteinkeBoschung2007">Steinke/Boschung 2007</a>.</p>     </div>
<div id="footer">Un site web de la Fondation Albrecht von Haller de la Bourgeoisie de Berne, <br />de l'Institut d'Histoire et de l'Institut d'Histoire de la Médecine de l'Université de Berne <br />Concept and content: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="medecine.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
