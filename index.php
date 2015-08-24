<!DOCTYPE html>
<html>
<head>
		<title>CV LEBRET Damien</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		
        <meta name="description" content="CV LEBRET Damien Developpeur WEB PORTFOLIO ">
        <meta name="Keywords" content="PORTFOLIO CV LEBRET Damien Developpeur WEB">
        <meta name="Content-Language" content="fr">
        <meta name="Author" content="LEBRET Damien">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" type="text/css" href="css/screen.css">      
        <link type="text/css" href="api/js/jquery-ui-1.10.4.custom/css/custom-theme/jquery-ui-1.10.4.custom.css" rel="stylesheet" >
        <link type="text/css" href="api/js/fancyBox/source/jquery.fancybox.css" rel="stylesheet" >
        <link rel="shortcut icon" href="favicon.ico" >
		
			<link href='http://fonts.googleapis.com/css?family=Righteous' rel='stylesheet' type='text/css'>
		
		<!--[if lt IE 9]> // version inférieur a IE 9
		<script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
		<![endif]-->
		
        <script src="api/js/jquery-ui-1.10.4.custom/js/jquery-1.10.2.js" type="text/javascript"></script>
        <script src="api/js/jquery-ui-1.10.4.custom/js/jquery-ui-1.10.4.custom.js" type="text/javascript"></script>
        <script src="api/js/fancyBox/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <script type="text/javascript" src="api/js/docready.js"  ></script> 
</head>
<body>
	<?php	
		if(isset($_GET["p"]))
			$getp = $_GET["p"];
		else
			$getp = "cv";
	?>
	<div id="bd" title="Mentions légales" style="display:none">

		<p>
		<b>Responsable de publication</b><br>
		Damien LEBRET<br>
		<a href="mailto:lebret.damien@gmail.com">lebret.damien@gmail.com</a>
		</p>
		<p>
		<b>Hébergeur</b><br>
		Site hébergé chez <a href="http://www.free.fr/" target="_blank">free</a>.<br>
		FREE SAS RCS Paris B 421 938 861 75371 Paris Cedex 08
		</p>

	</div>
	<div id="abs">
		<p><a href="CV_LEBRET_Damien.pdf" target="_blank"><img class="cv_pdf" src="img/icone_pdf.png" alt="photo"></a></p>
		<p><img src="img/chart.png" class="qrcode" alt="qrcode"></p>
	</div>
	
	<ul id="reseaux_sociaux">
		<li><a href="https://www.facebook.com/damien.lebret.5" target="_blank" class="facebook" title="Mon Facebook">Facebook</a></li>
		<li><a href="mailto:lebret.damien@gmail.com" class="gmail" title="Me contacter par mail">Gmail</a></li>
		<li><a href="https://twitter.com/Mi_dam" target="_blank" class="twitter" title="Twitter">Twitter</a></li>
		<li><a href="http://fr.viadeo.com/fr/profile/damien.lebret4" target="_blank" class="viadeo" title="Mon profil Viadeo">Viadeo</a></li>
		<!--<li><a href="https://www.youtube.com/channel/UC1VVfh-ZmJ-0LZ4y7B6ZVUw" target="_blank" class="youtube" title="Ma chaine Youtube">Youtube</a></li>-->
		<li><a href="https://github.com/junior2386" target="_blank" class="github" title="Mon Github - en cours">Github</a></li>
		<li><a href="http://maselectionduweb.besaba.com/" target="_blank" class="wordpress" title="Mon blog Wordpress">Wordpress</a></li>
	</ul>
	<div id="wrapper">
		<div class="brique brique_tl">
			<div class="content">
				<table style="width:100%">
					<tr>
						<td style="padding-right:10px;"><img src="img/header_8dbcd0.png" alt="" class="img_profil"></td>
						<td style="text-align:right;">
							<h1>Damien LEBRET</h1><h2>DEVELOPPEUR WEB</h2>
							<hr>
							<p style="text-align:right;"><i>
							<img src="img/localisation.png" alt="localisation" class="icone_entete"> 63260 Vensat<br>
							<img src="img/email.png" alt="email" class="icone_entete"><a href="mailto:lebret.damien@gmail.com"> lebret.damien@gmail.com</a><br>
							<img src="img/telephone.png" alt="telephone" class="icone_entete"> 06 59 35 20 41
							</i><p>
						</td>
					</tr>
				</table>
			</div>
			<div style="position:absolute;bottom:0px;width:100%;">
				<table class="pc33">
					<tr>
						<td class="bg_gf"><div class="content">
						<?php 
						$d = strtotime('11/03/1987');
						echo (int) ((time() - $d) / 3600 / 24 / 365.242). " ans";
						?></div>
						</td>
						<td class="bg_gc"><div class="content">Français</div></td>
						<td class="bg_gf"><div class="content">Permis<br>A & B</div></td>
					</tr>
				</table>
			</div>
		</div>
		<div class="brique brique_tr">
			<div class="content_wp">
				<table class="pc50">
					<tr>
						<td class="bg_gf"><a class="content <?php if($getp == "cv") echo "active"; ?>" id='menu_cv' href="?p=cv">MON CV</a></td>
					</tr>
					<tr>
						<td class="bg_gc"><a class="content <?php if($getp == "portfolio") echo "active"; ?>" id='menu_portfolio' href="?p=mon_portfolio">PORTFOLIO</a></td>
					</tr>
				</table>
			</div>
		</div>
		
		<div style="clear:both"></div>		
		
		<div id="page" style="margin:0;padding:0">
			<?php 		
					include(dirname(__FILE__)."/include_".$getp.".php");
			?>
		</div>
		
		<div style="clear:both;margin-bottom:30px;"></div>		
	</div>
	
	<div id="footer"><a href="mailto:lebret.damien@gmail.com">Damien LEBRET</a> - <a id="open_bd" class="pointer">Mentions légales</a></div>
</body>    
</html>