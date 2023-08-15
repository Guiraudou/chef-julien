<?php ini_set('default_charset', "utf-8"); define('ACCESS_TOKEN', strtotime('2022-06-22 18:13:00')); ?>
<!DOCTYPE html>
<html lang="fr-FR">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<!-- title / desc / keywords-->
	<title>Chef Julien</title>
	<meta name="description" content="" />
	<meta name="keywords" content="chef domicile julien guiraudou" />

	<!-- robots -->
	<meta name="robots" content="all" />
	<meta name="revisit-after" content="7 days" />

	<!-- affichage -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, user-scalable=no">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<!--[if lt IE 9]><meta http-equiv="X-UA-Compatible" content="IE=edge" /><![endif]-->

	<!-- preconnect -->
	<link rel="preconnect" href="https://fonts.googleapis.com">

	<!-- style -->

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<link href="fullpage.js.3.1.2/fullpage.min.css" rel="stylesheet">
	<!--<link href="magnific-popup/magnific-popup.css" rel="stylesheet">-->
	<link href="fancybox/fancybox.css" rel="stylesheet">

	<link href="style.css?<?php echo ACCESS_TOKEN; ?>" rel="stylesheet">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-D6RQNF6PDS"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-D6RQNF6PDS');
	</script>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-md navbar-light">
			<a class="navbar-brand" href="#"></a>
			<button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse bg-black" id="navbarSupportedContent">
				<!--<ul class="navbar-nav mr-auto">-->
				<ul id="menu">
					<li class="nav-item" data-menuanchor="home"><a href="#home">Accueil</a></li>
					<li class="nav-item" data-menuanchor="presentation"><a href="#presentation">Présentation</a></li>
					<li class="nav-item" data-menuanchor="prestations"><a href="#prestations">Prestations</a></li>
					<li class="nav-item" data-menuanchor="exemples-menu"><a href="#exemples-menu">Exemples de menu</a></li>
					<li class="nav-item" data-menuanchor="galerie"><a href="#galerie">Galerie</a></li>
					<li class="nav-item" data-menuanchor="contact"><a href="#contact">Contact</a></li>
				</ul>
			</div>
		</nav>
	</header>
	<div id="fullpage">
		<div class="section home_section background-image">
			<div class="container">
				<div class="content">
					<div class="presentation">
						<h1 class="text-center">Bienvenue dans ma cuisine !</h1>
					</div>
				</div>
				<div class="bottom">
					<h2 class="text-center">Julien Guiraudou</h2>
					<h3 class="text-center">Chef privé</h3>
				</div>
			</div>
		</div>

		<div class="section presentation_section background-image">
			<div class="container-fluid">
				<div class="content">
					<div class="row">
						<?php /* <div class="col-4"></div> */ ?>
						<div class="col-12 col-lg-12 col-xl-1"></div>
						<div class="col-12 col-lg-6 col-xl-4">
							<div class="card text text_white">
								<div class="card-body">
									<p>
										Dès mon plus jeune âge, je choisis l’école Grégoire Ferrandi Paris en alternance dans l’idée d’évoluer dans la gastronomie de l’excellence. Grâce à mon engouement et ma rigueur, je deviens Meilleurs Apprentis de France.
									</p>
									<p>
										Dès la sortie de l’école, j’intègre la brigade du Mandarin Oriental auprès de Thierry Marx. Puis ma curiosité me mène à Londres au Greenhouse (2 étoiles Michelin), aux États-Unis, ou encore au Japon au restaurant Kichisen (3 étoiles Michelin). Ces expériences marquent aujourd’hui un tournant dans ma vie et mes inspirations culinaires.
									</p>
									<p>
										De retour en France, je les mets en exergue en tant que sous-chef en Relais & Château au Jiva Hill et au Domaine des Hauts de Loire (2 étoiles Michelin).
										Ces expériences renforcent ma passion pour le produit, la culture du détail et me permet de m’essayer à de nombreux concours tels que le Prosper Montagné (3ème place), la Sélection des Bocuse d’Or,...
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section prestation_section background-image">
			<div class="container-fluid">
				<div class="content">
					<div class="row">
						<div class="col-12 col-lg-5 col-xl-6"></div>
						<div class="col-12 col-lg-6 col-xl-4">
							<div class="card text text_white">
								<div class="card-body">
									<p>
										Je vous propose mes services pour vos <strong>séjours de vacances</strong> à la semaine (demi-pension ou pension complète) mais aussi pour des <strong>repas entre amis</strong>, <strong>en famille</strong>...
									</p>
									<p>
										Je propose des formules <strong>sur mesure</strong> pour m’adapter au mieux à vos envies : menu gastronomique en 3, 4 ou 6 temps, menu bistronomique ou une cuisine simple et variée pour tous les jours. Je propose également des cocktails dinatoires, brunchs, barbecue, buffet...
									</p>
									<p>
										Je fonctionne avec un forfait « chef privé ». Le prix varie selon le nombre de personnes, en plus de ce prix il faut rajouter le forfait « matière première » qui varie selon le menu ou le type de repas que vous aurez choisi.
									</p>
									<div class="alert alert-info text-center mb-0">
										<div>Forfait chef privé :</div>
										<div>À partir de 250 €</div>
										<div>Me contacter pour établir un tarif précis selon vos désirs.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section menu_section background-image">
			<div class="container-fluid">
				<div class="content">
					<div class="row">
						<!-- VERSION 4 MENUS -->
						<div class="col-12 col-sm-6 col-xl-4 offset-xl-1">
							<div class="card menu">
								<div class="card-body menu_1"></div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-xl-3 offset-xl-3 d-none d-sm-block">
							<div class="card menu">
								<div class="card-body menu_2"></div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-xl-1"></div>
						
						<!-- VERSION 4 MENUS -->
						<!-- <div class="col-12 col-sm-6 col-xl-4 offset-xl-1">
							<div class="card menu mb-3">
								<div class="card-body menu_1"></div>
							</div>

							<div class="card menu">
								<div class="card-body menu_2"></div>
							</div>
						</div>
						<div class="col-12 col-sm-6 col-xl-3 offset-xl-3 d-none d-sm-block">
							<div class="card menu mb-3">
								<div class="card-body menu_3"></div>
							</div>
							<div class="card menu hide">
								<div class="card-body menu_4"></div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-xl-1"></div> -->

						<!--<div class="clearfix"></div>
						<div class="col-12">&nbsp;</div>

						<div class="col-md-1"></div>
						<div class="col-md-4">
						</div>
						<div class="col-md-2"></div>
						<div class="col-md-4">
						</div>
						<div class="col-md-1"></div>-->

					</div>
				</div>
			</div>
		</div>

		<!--
		<div class="section yellow" id="home2">
			<div class="container">
				<div class="div_of_4_square">
					<div class="row">
						<div class="col col-6">
							<div class="main_presentation">
								<p>Bienvenue...</p>

								<h1 class="text-center">Julien Guiraudou</h1>
								<h2 class="text-center">Chef privé</h2>

								<p class="text-right">... dans ma cuisine</p>
							</div>
						</div>
						<div class="col col-6">
							<img src="images/julien.jpg" alt="">
						</div>
					</div>
					<div class="divider"></div>
					<div class="row">
						<div class="col col-6">
							<img src="images/chalet.jpg" alt="">
						</div>
						<div class="col col-6">
							Mon parcours
						</div>
					</div>
				</div>
			</div>
		</div>
		-->

		<div class="section galerie_section background-image">
			<div class="container-fluid">
				<div class="content">
					<div class="row photos"></div>
				</div>
			</div>
		</div>

		<div class="section contact_section background-image">
				<!--<div class="head">
					<div class="container">
					<h2>N'hésitez pas à me contacter pour obtenir plus de précisions ou pour un devis précis selons votre besoin.</h2>
				</div>
				</div>-->
			<div class="container">
				<div class="content text-center">
					<div class="card text_white">
						<div class="card-body">
							<p>N'hésitez pas à me contacter pour obtenir plus de précisions ou pour un devis précis selons votre besoin.</p>
							<!--<div class="text-right">
								<a href="plaquette_julien.pdf" title="">Télécharger ma plaquette</a>
							</div>-->
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6 mb-2">
							<div class="card text_white contact_item">
								<div class="card-body">
									<img src="images/phone.png" alt="">
									<div>
										<a href="tel:+33617575245">06 17 57 52 45</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card text_white contact_item">
								<div class="card-body">
									<img src="images/email.png" alt="">
									<div>
										<a href="mailto:julien.guiraudou@gmail.com">julien.guiraudou@gmail.com</a>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-2"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		var locale = 'fr-FR';
		var timeZone = 'Europe/Paris';
		var currency = 'EUR';
	</script>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
	<script src="fullpage.js.3.1.2/fullpage.min.js"></script>
	<!--<script src="magnific-popup/jquery.magnific-popup.min.js"></script>-->
	<script src="fancybox/fancybox.umd.js"></script>

	<script src="app.js"></script>

</body>
</html>