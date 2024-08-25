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
<title>Accueil - Albrecht von Haller</title>
<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
<meta http-equiv='Content-Language' content='de_DE' />
<meta http-equiv='Content-Script-Type' content='text/javascript' />
<meta http-equiv='Content-Style-Type' content='text/css' />
<meta name='keywords' content='' />
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
	font-size: 1.5em;
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
    <p>Toutes les informations actuelles peuvent être trouvées sur la nouvelle plateforme d'édition et de recherche <strong style="color: white;">https://hallernet.org</strong>, qui n'est toutefois réalisée pour l'instant que dans sa version en langue allemande.</p>
	<p>Pour l'instant, les textes français et anglais sur Haller ne peuvent être trouvés que sur ce site web.</p>
  </a>
</div>

<a href="#top" id="top-link">Top</a>
<div id="wrapper">

<div id="header">
<div id="headerimg"><img src="templates/home/header/head.png" width="960" height="320" /></div>
<div id="logo"><img src="templates/basisdesign/hallerlogo.png" width="200" height="130" /></div>
<div id="contenttitel">Accueil</div>
</div>

<div id="meta">	
<div id="sprache"><a href="../d/index.php">D</a> | <a href="../e/index.php">E</a></div>
<div id="metanavigation"><a href="contact.php">Contact</a> | <a href="fondationalbrechtvonhaller.php">Fondation Albrecht von Haller</a> | <a href="liens.php">Liens</a></div>		
</div>

<div id="navigation">
  
<li class="LNE_menu"><a class="selected" href="index.php">Accueil</a></li>
<li class="LNE_menu"><a href="savieetsonoeuvre.php">Sa vie et son œuvre</a></li>
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
    <p>Le savant universel Albrecht von Haller (1708-1777) est une figure centrale du si&egrave;cle des Lumi&egrave;res. &Agrave; la fois po&egrave;te et homme de sciences, m&eacute;decin et botaniste, collectionneur et encyclop&eacute;diste, professeur d&rsquo;universit&eacute; et exp&eacute;rimentateur, pr&eacute;sident de Soci&eacute;t&eacute; et correspondant, auteur renomm&eacute; et critique redout&eacute;, magistrat et protestant orthodoxe, il incarne plusieurs courants de pens&eacute;e et est le t&eacute;moin de nombreux &eacute;v&egrave;nements et d&eacute;veloppements de son &eacute;poque.</p>
<p>L&rsquo;int&eacute;r&ecirc;t port&eacute; &agrave; Haller en tant que figure paradigmatique du XVIII&egrave;me si&egrave;cle s&rsquo;est fortement accru au cours de ces derni&egrave;res ann&eacute;es. De plus en plus consciente du caract&egrave;re pluriel des Lumi&egrave;res, la recherche actuelle s&rsquo;int&eacute;resse toujours davantage au fonctionnement de la R&eacute;publique des lettres ainsi qu&rsquo;&agrave; ses interactions avec l&rsquo;&eacute;conomie, le politique et le social. Le foisonnement propre &agrave; l&rsquo;activit&eacute; et &agrave; la vie de Albrecht von Haller, l&rsquo;immensit&eacute; et la vari&eacute;t&eacute; de son &oelig;uvre et l&rsquo;extr&ecirc;me richesse de ses archives manuscrites font de lui un point de d&eacute;part id&eacute;al pour comprendre et explorer son si&egrave;cle.</p>
<p>Ce site propose une plateforme s&rsquo;adressant &agrave; tous ceux qui s&rsquo;int&eacute;ressent &agrave; Haller et &agrave; son temps. Il offre un aper&ccedil;u richement illustr&eacute; de sa vie et de son &eacute;poque, d&eacute;crit ses principaux domaines d&rsquo;activit&eacute;, donne des renseignements sur les recherches pass&eacute;es et actuelles qui lui sont consacr&eacute;es et r&eacute;pertorie la grande quantit&eacute; de textes originaux de Haller disponibles en ligne.</p>     </div>
<div id="footer">Un site web de la Fondation Albrecht von Haller de la Bourgeoisie de Berne, <br />de l'Institut d'Histoire et de l'Institut d'Histoire de la Médecine de l'Université de Berne <br />Concept and content: Hubert Steinke, Martin Stuber | Webdesign: <a href="http://www.hannessaxer.ch/website/index.php">Hannes Saxer</a> | <a href="./LightNEasy.php?do=login">Login</a> | <a href="index.php?do=sitemap">Sitemap</a></div>
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
