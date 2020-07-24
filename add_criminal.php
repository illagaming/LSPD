<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<meta name="description" content="" />
		<meta name="author" content="" />
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
			<![endif]-->
			<title>LSPD</title>
			<!-- BOOTSTRAP CORE STYLE  -->
			<link href="assets/css/bootstrap.css" rel="stylesheet" />
			<!-- FONT AWESOME STYLE  -->
			<link href="assets/css/font-awesome.css" rel="stylesheet" />
			<!-- CUSTOM STYLE  -->
			<link href="assets/css/style.css" rel="stylesheet" />
			<!-- GOOGLE FONT -->
			<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
		</head>
		<?php include( "config.php"); session_start(); if (isset($_SESSION[ 'id'])) { echo '

		<body>
			<div class="navbar navbar-inverse set-radius-zero" >
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.php">
							<img src="https://i.imgur.com/BQoTEoz.png" width=180 height=70/>
						</a>
					</div>
					<div class="right-div">
						<a href="logout.php" class="btn btn-danger pull-right">Deconnectez moi</a>
					</div>
				</div>
			</div>
			<!-- LOGO HEADER END-->
			<section class="menu-section">
				<div class="container">
					<div class="row ">
						<div class="col-md-12">
							<div class="navbar-collapse collapse ">
								<ul id="menu-top" class="nav navbar-nav navbar-right">
									<li>
                                        <a href="index.php" class="menu-top-active"> Menu</a>
                                    </li>
                                    <li>
                                        <a href="add_criminal.php">Ajouter un criminel</a>
                                    </li>
                                    <li>
                                        <a href="rapports.php">Rapports</a>
                                    </li>
                                    <li>
                                        <a href="plaintes.php">Plaintes</a>
                                    </li>
                                    <li>
                                        <a href="amendes.php">Amendes</a>
                                    </li>
                                    <li>
                                        <a href="véhicules.php">Véhicules saisies</a>
                                    </li>
                                    <li>
                                        <a href="ppa.php">PPA</a>
                                    </li>
                                    <li>
                                        <a href="enquete.php">Enquête</a>
                                    </li>
                                    <li>
                                        <a href="licence.php">Retrait de licence</a>
                                    </li>
                                    <li>
                                        <a href="pied.php">Mise à pied</a>
                                    </li>
                                    <li>
                                        <a href="saisie.php">Saisie de biens</a>
                                    </li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- MENU SECTION END-->
			<div class="panel panel-info">
				<div class="panel-heading">
					<p></p>
					<p></p>Ajouter un criminel
					<p></p>
					<p></p>
				</div>
				<div class="panel-body">
					<form action="add_criminal_post.php" method="post">
						<p>
							<div class="form-group">
								<label for="nom">Nom et Prénom</label> :
								<p class="help-block">ex : John Cena</p>
								<input type="text" name="nom" id="nom" class="form-control" required />
								<br />
							</div>
							<div class="form-group">
								<label for="message">Matricules Agents</label> :
								<p class="help-block">ex : CDT-13</p>
								<input type="text" name="telephone" id="telephone" class="form-control" required />
								<br />
							</div>
							<div class="form-group">
								<label for="message">Temps de Prison</label> :
								<p class="help-block">Temps en minutes</p>
								<input type="text" name="steam" id="steam" class="form-control"/>
								<br />
							</div>
							<div class="form-group">
								<label for="message">Crime</label> :
								<p class="help-block">ex : Vol de véhicule</p>
								<input type="text" name="crime" id="crime" class="form-control" required />
								<br />
							</div>
							<div class="form-group">
								<label for="message">Total amendes</label> :
								<p class="help-block">ex : $10000</p>
								<input type="text" name="sanction" id="sanction" class="form-control" required />
								<br />
							</div>
							<input type="submit" value="Envoyer" class="btn btn-info />
						</p>
					</form>
					<p></p>
					<img src="https://image.noelshack.com/fichiers/2015/40/1443969486-lspd-logo-modern-2.png" align="center">
					</div>
				</div>
				<!-- CONTENT-WRAPPER SECTION END-->
				<section class="footer-section">
					<div class="container">
						<div class="row">
						<div class="col-md-12">
							   &copy; 2020 LSPD 
						<a target="_blank"  > </a>
						</div>
						</div>
					</div>
				</section>
				<!-- FOOTER SECTION END-->
				<!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
				<!-- CORE JQUERY  -->
				<script src="assets/js/jquery-1.10.2.js"></script>
				<!-- BOOTSTRAP SCRIPTS  -->
				<script src="assets/js/bootstrap.js"></script>
			</body>'; } else { header( "Location: login.php"); } ?>
		</html>
