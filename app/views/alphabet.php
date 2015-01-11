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
							<a class="navbar-brand" href="/"><img src="img/pellicule.jpg" class="img-rounded"></a>
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
							<a href="/alphabet"><h4 class="panel-title"><strong>Tous nos Films</strong></h4>
						</div>
					</div>
				</nav>
				
<!-- ---------------------------------------------- (Jusque ici) STRUCTURE DE LA PAGE IDENTIQUE ------------------------------------------------------------------------ -->								
				
				<section class="col-md-7"> <!-- section centrale / contenu de la page -->
					<div class="row">
						<div class="col-xs-4 col-sm-3 col-md-3 ">
							<a href="/alphabet/film1"><img src="img/min_hungerGame.jpg" alt="Hunger Games" class="img-rounded">
						</div>
						<div class="col-xs-4 col-sm-3 col-md-3 ">
							<a href="/alphabet/film2"><img src="img/min_seigneurA.jpg" alt="Seigneur des Anneaux" class="img-rounded">
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
							<a href="/film1" title="Redirection sur la page du film"><h6>Hunger Game - Révolution</h6>
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
							<a href="http://www.esiea.fr/"><img src="img/logoEsiea.jpg" alt="ESIEA" title="ESIEA" target="_blank"></a>
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
								<img src="img/facebook.png"><a href="https://www.facebook.com/lamarque.renault"> Renaud Lamarque</br></a>
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