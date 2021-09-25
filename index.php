<?php ini_set('default_charset', "utf-8"); ?>
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

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="fullpage.js.3.1.2/fullpage.min.css" rel="stylesheet">

	<link href="style.css" rel="stylesheet">
</head>
<body>
	<header>
		<ul id="menu">
			<li data-menuanchor="home"><a href="#home">Accueil</a></li>
			<li data-menuanchor="prestations"><a href="#prestations">Prestations</a></li>
			<li data-menuanchor="exemples-menu"><a href="#exemples-menu">Exemples de menu</a></li>
			<li data-menuanchor="contact"><a href="#contact">Contact</a></li>
		</ul>
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

		<div class="section prestation_section background-image">
			<div class="container">
				<div class="content">
					<div class="row">
						<div class="col-2"></div>
						<div class="col-8">

							<div class="card">
								<div class="card-body">
									<p>
										Je vous propose mes services pour vos <strong>séjours de vacances</strong> à la semaine (demi-pension ou pension complète) mais aussi pour des <strong>repas entre amis</strong>, <strong>en famille</strong>...
									</p>
									<p>
										Je propose des formules <strong>sur mesure</strong> pour m’adapter au mieux à vos envies : menu gastronomique en 3, 4 ou 6 temps, menu bistronomique ou une cuisine simple et variée pour tous les jours. Je propose également des cocktails dinatoires, brunchs, barbecue, buffet...
									</p>
									<p>
										Je fonctionne avec un forfait « chef privée ». Le prix varie selon le nombre de personnes, en plus de ce prix il faut rajouter le forfait « matière première » qui varie selon le menu ou le type de repas que vous aurez choisi.
									</p>
									<div class="alert alert-info text-center mb-0">
										<div>Forfait chef privé :</div>
										<div>A partir de 250 €</div>
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
			<div class="container">
				<div class="content">
					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="card-body">
									<h2>Gastronomique <!--en 4 temps--></h2>
									<p>Amuse bouche</p>
									<p>Foie gras confit au cacao, poires</p>
									<p>St jacques</p>
									<p>Pigeon rôti aux gomasio, tatin de navet, jus corsé</p>
									<p>Entremet pignon de pin aux myrtilles</p>
								</div>
							</div>
						</div>
						<div class="col-md-8">
							<div class="card">
								<div class="card-body">
									<h2>Bistronomique</h2>
									<p>
										Velouté de chataigne, chantilly chartreuse et magret fumé
										<br>Ou<br>
										Truite de Savoie en gravelax à la betterave, crème legere au wasabi
									</p>
									<p>
										Suprême de volaille des Dombes rôti sur le coffre, grémolata au citron, écrasé de pomme de terre et sauce poulette
										<br>Ou<br>
										Dos de cabillaud en croute de noisette, crozet comme un risotto, écume marinière
									</p>
									<p>
										Pomme de Savoie façon tatin
										<br>Ou<br>
										Paris-Brest
									</p>
								</div>
							</div>
						</div>
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

<!--		<div class="section contact_section grey">-->
		<div class="section contact_section background-image">
				<!--<div class="head">
					<div class="container">
					<h2>N'hésitez pas à me contacter pour obtenir plus de précisions ou pour un devis précis selons votre besoin.</h2>
				</div>
				</div>-->
			<div class="container">
				<div class="content text-center">
					<div class="card">
						<div class="card-body">
							N'hésitez pas à me contacter pour obtenir plus de précisions ou pour un devis précis selons votre besoin.
						</div>
					</div>
					<br>
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="dot2 icon">
										<img src="images/phone.png" alt="">
									</div>
									<div class="contact_info">
										06 17 57 52 45
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<div class="card-body">
									<div class="dot2 icon">
										<img src="images/email.png" alt="">
									</div>
									<div class="contact_info">
										julien.guiraudou@gmail.com
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
	<script src="fullpage.js.3.1.2/fullpage.min.js"></script>

	<script src="app.js"></script>

</body>
</html>