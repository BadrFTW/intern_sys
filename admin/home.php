<!DOCTYPE html>
<?php
	require_once 'session.php';
?>
<html lang = "fr">
	<head>
		<title>MoStage</title>
		<meta charset = "UTF-8" />
		<meta name = "viewport" content = "width=device-width, initial-scale=1" />
		<link rel = "stylesheet" type = "text/css" href = "../css/bootstrap.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/style.css" />
		<link rel = "stylesheet" type = "text/css" href = "../css/jquery-ui.css" />
		<link rel="icon" href="../images/12.png">
	</head>
<body>
<!--------------------HEAD---------------------->
<?php include'head.php'?>
<!--------------------HEAD---------------------->
<!-------------------SIDEBAR------------------>
<?php include 'sidebar.php'?>
<!-------------------SIDEBAR------------------>

		<div id = "sidecontent" class = "well pull-right">
			<div class = "alert alert-info">Home</div>
			<div class = "alert alert-success"><center><h3>VISION</h3></center></div>
			<h4 style = "text-indent:50px;">Excellence dans la formation de étudiants hautement compétents et bien qualifiés pour l'industrie du travail</h4>
			<br />
			<div class = "alert alert-success"><center><h3>MISSION</h3></center></div>
			<h4 style = "text-indent:50px;">Engagé à fournir des travailleurs abordables et de haute qualité.</h4>
			<br />
			<div class = "alert alert-success"><center><h3>OBJECTIVE</h3></center></div>
			<ol>
				<li><h4>Dotés de connaissances et de compétences qui prépareraient les étudiants à améliorer leurs compétences professionnelles grâce à l'apprentissage lié au travail</h4></li>
				<li><h4>Préparer les étudiants à être bien équipés dans l'industrie du travail.</h4></li>
				<li><h4>Être compétent dans la conception et le développement de solutions informatiques.</h4></li>

			</ol>
		<br /><br /><br />
		</div>
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<br />
	<nav class = "navbar-default" id = "footer">
		<label class = "navbar-brand pull-right">&copy;Système de gestion des offres des stages<?php echo date('Y', strtotime('+8 HOURS'))?></label>
		<label class = "navbar-brand ">Klila Bader </label>
	</nav>
</body>	
<script src = "../js/jquery-3.1.1.js"></script>
<script src = "../js/sidebar.js"></script>
</html>