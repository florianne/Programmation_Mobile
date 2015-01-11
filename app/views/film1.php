<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="/css/bootstrap.min.css" rel="stylesheet">
		<link href="/css/style.css" rel="stylesheet">
		<title>Blog Films</title>
	</head>
	
	<body>
		<div class="container">
		
			<!-- ------------------------------- Navbar top fixe -------------------------------- -->
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="col-md-3">		<!-- Espace logo du site -->
						<div class="navbar-header">
							<a class="navbar-brand" href="/"><img src="/img/pellicule.jpg" class="img-rounded"></a>
						</div>
					</div>
					
					<div class="col-md-3 col-md-offset-1"><h1>BLOG FILMS</h1></div> 	<!-- Espace titre du site -->
					
					<div class="col-md-3">		<!-- Espace onglet + barre de recherche -->
						<br>
						<ul class="nav navbar-nav">
							<li class="active"> <a href="/">Accueil</a> </li>
						</ul>
						<form class="navbar-form  inline-form">
							<div class="form-group">
								<input type="search" class="input-sm form-control" placeholder="Recherche">
								<button type="submit" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-search"></span></button>
							</div>
						</form>
					</div>
					
					<div class="col-md-2">		<!-- Espace User -->
						<div class="row">
							<br>
							<div class="container">
								<div id="html">
									<a class="btn btn-default" href="inscription"><span class="glyphicon glyphicon-plus-sign"></span> S'inscrire</a>
									<button data-toggle="modal" data-backdrop="false" href="#connect" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> Se connecter</button>
								</div>
								<div class="modal" id="connect">	<!-- fenêtre modale pour connection user -->
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-body">
												<form action="test.php">
													<button type="button" class="close" data-dismiss="modal">x</button>
													<input type="email" name="email" id="email" placeholder="Votre email">
													<input type="mdp"  name="mdp" id="mdp" placeholder="******" >
													<button type="submit" class="btn btn-default">Ok</button>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<!-- JQuery pour la fenêtr modale user -->
							<script src="/js/jquery.js"></script>
							<script src="/js/bootstrap.min.js"></script>
							<script>
								$(function(){
									$("form").submit(function(e) {
										e.preventDefault();
										var $form = $(this);
										$.post($form.attr("action"), $form.serialize())
										.done(function(data) {
											$("#html").html(data);
											$("#connect").modal("hide"); 
										})
										.fail(function() {
											alert("ça marche pas...");
										});
									});
								});
							</script>
							
						</div>
					</div>
				</div>
			</nav>
			<!-- ------------------------------- FIN Navbar top fixe -------------------------------- -->
			
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			</br>
			
			<!-- ------------------------------- Contenu page -------------------------------- -->
			<div class="row">
				<nav class="col-md-2 col-md-pull-2"> <!-- Espace Menu gauche -> tout nos films -->
					<div class="panel1 panel-default">
						<div class="panel-heading">
							<a href="/alphabet"><h4 class="panel-title"><strong>Tous nos Films</strong></h4></a>
						</div>
					</div>
				</nav>
				
<!-- ---------------------------------------------- (Jusque ici) STRUCTURE DE LA PAGE IDENTIQUE ------------------------------------------------------------------------ -->								
				
				<section class="col-md-7">		<!-- section centrale / contenu de la page -->
				
					<h4>Hunger Games</h4>		<!-- Titre du film -->
					</br>
					<img src="/img/separateur.png" class="img-rounded center-block">
					</br>
					<ul>		<!-- Information sur le film rempli avec la bdd -->
						<li><h6><strong>Réalisateur :</strong> Francis Lawrence</h6></li>
						<li><h6><strong>Acteurs :</strong> Jennifer Lawrence, Josh Hutcherson, Liam hemsworth</h6></li>
						<li><h6><strong>Durée :</strong> 2h30</h6></li>
						<li><h6><strong>Date de sortie :</strong> 19 Novembre 2014</h6></li>
						<li><h6><strong>Genre :</strong> Action, Drame, Science Fiction</h6></li>
						<li><h6><strong>Résumé :</strong> </h6><h5>Katniss Everdeen s’est réfugiée dans le District 13 après avoir détruit à jamais l’arène et les Jeux. Sous le commandement de la Présidente Coin, chef du district, et suivant les conseils de ses amis en qui elle a toute confiance, Katniss déploie ses ailes pour devenir le symbole de la rébellion. Elle va se battre pour sauver Peeta et libérer le pays tout entier, à qui son courage a redonné espoir. </h5></li>
					</ul>
					</br>
					<img src="/img/separateur.png" class="img-rounded center-block">
					</br>
					</br>
					
					<div class="col-lg-4 col-lg-offset-2">	<!-- Espace bouton Commentaire -->
						<!-- ------------- Bouton Commenter ----------------- -->
						<div class="container">		
							<div id="html">
								<button data-toggle="modal" data-backdrop="false" href="#commenter" class="btn btn-primary">Commenter</button>
							</div>
							<div class="modal" id="commenter">	<!-- fenêtre modale pour commentaire -->
								<div class="modal-dialog modal-sm">
									<div class="modal-content">
										<div class="modal-body">
											<form action="test.php">
												<button type="button" class="close" data-dismiss="modal">x</button>
												<textarea id="textarea" rows="2" placeholder="Votre commentaire"></textarea>
												<button type="submit" class="pull-right btn btn-default">Ok</button>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- JQuery pour la fenêtr modale -->
						<script src="/js/jquery.js"></script>
						<script src="/js/bootstrap.min.js"></script>
						<script>
							$(function(){
								$("form").submit(function(e) {
									e.preventDefault();
									var $form = $(this);
									$.post($form.attr("action"), $form.serialize())
									.done(function(data) {
										$("#html").html(data);
										$("#connect").modal("hide"); 
									})
									.fail(function() {
										alert("ça marche pas...");
									});
								});
							});
						</script>
						<!-- ------------- FIN Bouton Commenter ----------------- -->
						
					</div>
					<div class="col-lg-4">
						<button class="btn btn-primary">Tous les commantaires</button>
					</div>
					
					</br>
					</br>
					
					<div class="media col-lg-12"> <!-- Bande annonce du film -->
						<div class="center">
							<iframe src="https://www.youtube.com/embed/zdMIft77FEY" width="630" height="520"></iframe>
						</div> 
					</div>
				</section>
				
<!-- -------------------------------- (Depuis ici) STRUCTURE DE LA PAGE IDENTIQUE /exception navbar static au lieu de fixe/ -------------------------------- -->
				<section class="col-md-3 col-md-push-2"> 	<!-- Espace section droite -> film de la semaine -->
					<div class="panel panel-default">
						<div class="panel-heading">
							<h4 class="panel-title"><strong>Film de la semaine</strong></h4></div>
						<div class="panel-body">
							<a href="/film1"><img src="/img/min_hungerGame.jpg" class="img-rounded center-block"></br></a>
							<a href="/film1" title="Redirection sur la page du film"><h6>Hunger Game - Révolution</h6></a>
						</div>
					</div>
				</section>
			</div>
			<!-- ------------------------------- FIN Contenu page -------------------------------- -->
			
			</br>
			</br>
			</br>
			
			<!-- ------------------------------- Navbar bottom -------------------------------- -->
			<nav class="navbar navbar-inverse navbar-static-bottom">
				<div class="container-fluid">
				
					<div class="col-md-8">		<!-- Espace gauche -> a propos de nous -->
						<h2><span class="glyphicon glyphicon-info-sign"></span> A propos de nous :</h2>
						<div class="col-md-3">
							<br>
							<a href="http://www.esiea.fr/"><img src="/img/logoEsiea.jpg" alt="ESIEA" title="ESIEA" target="_blank"></a>
						</div>
						<div class="col-md-9">
							<h3>Nous sommes deux étudiants actuellement en 4ème année à l'<abbr title="Ecole d'Ingénieurs du Monde Numérique">ESIEA</abbr> en option Système d'Information. Nous avons réalisé ce site dans le cadre d'un projet scolaire en programmation web avancée dirigé par M. Castellane, que nous tenons à remercier pour ses conseils pratiques.</h3>
						</div>
					</div>
					
					<div class="col-md-4">		<!-- Espace droite -> nous contacter -->
						<h2><span class="glyphicon glyphicon-envelope"></span> Nous contacter :</h2>
						
						<div class="col-md-6">	<!-- Espace gauche -> florianne -->
							<address>
								</br>
								<img src="img/facebook.png"><a href="https://www.facebook.com/florianne.derouet"> Florianne Derouet</br></a>
								<span class="glyphicon glyphicon-hdd"></span> derouet-pulin@et.esiea.fr<br>
								<span class="glyphicon glyphicon-earphone"></span> 06.77.94.17.82</br>
								</br>
							</address>
						</div>
						
						<div class="col-md-6">	<!-- Espace droite -> renaud -->
							<address>
								</br>
								<img src="/img/facebook.png"><a href="https://www.facebook.com/lamarque.renault"> Renaud Lamarque</br></a>
								<span class="glyphicon glyphicon-hdd"></span> lamarque@et.esiea.fr<br>
								<span class="glyphicon glyphicon-earphone"></span> 06.33.29.39.26
							</address>
						</div>
					</div>
				</div>
			</nav>	
			<!-- ------------------------------- FIN Navbar bottom -------------------------------- -->
			
		</div> <!-- fin class="container"-->
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		
	</body>
</html>