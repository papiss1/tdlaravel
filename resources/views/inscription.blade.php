<!DOCTYPE HTML>
<!--
	Verti by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Verti by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body class="homepage">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					<header id="header" class="container">

						<!-- Logo -->
							<div id="logo">
								<h1><a href="index.html">Loumaa bii</a></h1>
								<span> </span>
							</div>

						<!-- Nav -->
							<nav id="nav">
								<ul>
									<li class="current"><a href="#">Acceuil</a></li>

									<li><a href="{{ url('left-sidebar') }}">Left Sidebar</a></li>
									<li><a href="{{ url('right-sidebar') }}">Galery</a>

										<ul>
											<li><a href="{{ url('image') }}">Image</a></li>
											<li><a href="{{ url('video') }}">Video</a></li>
										</ul>

									</li>
									<li><a href="{{ url('no-sidebar') }}">No Sidebar</a></li>
									<li><a href="#">Compte</a>
										<ul>
											<li><a href="{{ url('connexion') }}">Connexion</a></li>
											<li><a href="{{ url('inscription') }}">Inscription</a></li>
										</ul>
									</li>
								</ul>
							</nav>

					</header>
				</div>


				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="7u 12u(medium)">
								
								<p>La page d'inscription </p>
							</div>

						</div>
					</div>
				</div><p></p>
				<div id="banner-wrapper">
					<div id="banner" class="box container">
						<div class="row">
							<div class="7u 12u(medium)">
				<form method="post" action="action">

				  <div class="form-group">
				    <label for="prenom">Prenom:</label>
				    <input type="text" class="form-control" id="prenom">
				  </div>

				  <div class="form-group">
				    <label for="nom">Nom:</label>
				    <input type="text" class="form-control" id="nom">
				  </div>

				  <div class="form-group">
				    <label for="email">Addresse Email:</label>
				    <input type="text" class="form-control" id="email">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Mot de passe:</label>
				    <input type="password" class="form-control" id="pwd">
				  </div>
				  <div class="form-group">
				    <label for="pwd">Confirmation:</label>
				    <input type="password" class="form-control" id="pwd">
				  </div><br>
				  <button type="submit" class="btn btn-default">Envoyer</button>
				</form>
						</div>

						</div>
					</div>
				</div>

		<!-- Scripts -->

			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.dropotron.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>