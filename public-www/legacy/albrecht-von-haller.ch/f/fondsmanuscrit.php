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
<title>Fonds manuscrit - Albrecht von Haller</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='Content-Language' content='de_DE' />
<meta http-equiv='Content-Script-Type' content='text/javascript' />
<meta http-equiv='Content-Style-Type' content='text/css' />
<meta name='keywords' content='' />
<meta name='description' content='' />
<meta name='author' content='Hannes Saxer' />
<meta name='Robots' content='index,follow' />
<meta http-equiv='imagetoolbar' content='no' /><!-- disable IE's image toolbar -->
<link rel='stylesheet' type='text/css' href='templates/nachlass/style.css' />
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
<div id="headerimg"><img src="templates/nachlass/header/head.png" width="960" height="320" /></div>
<div id="logo"><img src="templates/basisdesign/hallerlogo.png" width="200" height="130" /></div>
<div id="contenttitel">Fonds manuscrit</div>
</div>

<div id="meta">	
<div id="sprache"><a href="../d/index.php">D</a> | <a href="../e/index.php">E</a></div>
<div id="metanavigation"><a href="contact.php">Contact</a> | <a href="fondationalbrechtvonhaller.php">Fondation Albrecht von Haller</a> | <a href="liens.php">Liens</a></div>		
</div>

<div id="navigation">
  
<li class="LNE_menu"><a href="index.php">Accueil</a></li>
<li class="LNE_menu"><a href="savieetsonoeuvre.php">Sa vie et son œuvre</a></li>
<li class="LNE_menu"><a class="selected" href="fondsmanuscrit.php">Fonds manuscrit</a></li>
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
    <p>Le fonds manuscrit de Haller est extr&ecirc;mement riche et vari&eacute;. Il comprend environ 150 volumes de manuscrits, 17'000 lettres et deux herbiers. Les lettres ainsi que la majorit&eacute; des manuscrits peuvent &ecirc;tre consult&eacute;s &agrave; la Biblioth&egrave;que de la Bourgeoisie de Berne. D&rsquo;autres manuscrits sont d&eacute;pos&eacute;s &agrave; la Biblioteca Nazionale Braidense &agrave; Milan dans laquelle on trouve &eacute;galement sa vaste biblioth&egrave;que de 23'000 ouvrages. Le grand herbier en 60 volumes est conserv&eacute; au Mus&eacute;um national d&rsquo;Histoire naturelle de Paris, tandis qu&rsquo;un exemplaire plus modeste se trouve &agrave; l&rsquo;Institut f&uuml;r Pflanzenwissenschaften Albrecht von Haller de l&rsquo;Universit&eacute; de Gottingue.</p>
<p>Le fonds manuscrit constitue un excellent champ d&rsquo;investigation aussi bien pour l&rsquo;histoire des sciences que pour l&rsquo;histoire culturelle en tant qu&rsquo;elles s&rsquo;int&eacute;ressent &agrave; la formation et &agrave; la circulation des savoirs ainsi qu&rsquo;aux pratiques qui leurs sont li&eacute;es. En partant de sa vaste biblioth&egrave;que, bien document&eacute;e, ainsi que de ses nombreuses publications, on pourrait retracer de fa&ccedil;on tr&egrave;s pr&eacute;cise et dans toute leur envergure la totalit&eacute; des &eacute;tapes du processus de recherche de Haller: lecture, recension et d&eacute;pouillement de la litt&eacute;rature, suivis du d&eacute;veloppement d&rsquo;une recherche personnelle et de l&rsquo;&eacute;tablissement d&rsquo;&eacute;changes avec ses confr&egrave;res, et pour finir, r&eacute;daction, impression et remaniement des ouvrages publi&eacute;s. La richesse des documents manuscrits et imprim&eacute;s devrait permettre d&rsquo;&eacute;laborer des &eacute;tudes repr&eacute;sentatives consacr&eacute;es aux sp&eacute;cificit&eacute;s de la recherche exp&eacute;rimentale et savante ainsi qu&rsquo;&agrave; leurs interactions. Jusqu&rsquo;&agrave; maintenant, seule la <a href="korrespondenz.php">correspondance</a> a fait l&rsquo;objet d&rsquo;&eacute;tudes exhaustives.</p>
<p>On trouvera un inventaire succinct des manuscrits d&eacute;pos&eacute;s &agrave; Berne et &agrave; Milan <a href="../medien/pdf/Nachlass.pdf">ici</a>, et une liste des correspondants de Haller <a href="../medien/pdf/Korrespondenten.pdf">ici</a>.</p>
<p><strong>Inventaire/descriptions:</strong> Boschung 1974a (court inventaire des manuscrits bernois), Margez/Aupic/Lamy 2005 (herbier parisien), Monti 1983-94 (catalogue de la biblioth&egrave;que de Haller, suppl&eacute;ments &agrave; Pecorello Vergnano 1965), Pecorello Vergnano 1965 (inventaire des manuscrits Milanais), Repertorium 2002 (Inventaire de la correspondance), Braun 2008 (description de l&rsquo;ensemble du fonds manuscrit), Zoller 1958 (herbier).</p>
<p><strong>Commandes:</strong><strong> </strong><br />
Certains documents manuscrits et certaines lettres peuvent &ecirc;tre demand&eacute;s en version num&eacute;rique &agrave; la Biblioth&egrave;que de la Bourgeoisie de Berne. Veuillez prendre connaissance de son <a href="http://www.burgerbib.ch/d/portrait/benutzung.html">r&egrave;glement d&rsquo;utilisation</a>. En cas de questions, pri&egrave;re de vous adresser &agrave; <a href="mailto:thomas.schmid@burgerbib.ch">Thomas Schmid</a>.</p>     </div>
<div id="footer">Un site web de la Fondation Albrecht von Haller de la Bourgeoisie de Berne, <br />de l'Institut d'Histoire et de l'Institut d'Histoire de la Médecine de l'Université de Berne <br />Concept and content: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="fondsmanuscrit.php?do=sitemap">Sitemap</a></div>
</div>
<div id="annex">
 <p class="haller"></p>
</div>
</div>


</div>

</div>
</body>
</html>
