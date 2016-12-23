<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<!-- Vive Bootstrap ^^ -->
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<header>
		<h1>Bienvenue sur XYZ</h1>
					<blockquote>
					  <p>le 1er site de notation de films</p>
						<a href="<?= BASE_URL ?>inscription">Inscription</a>
					</blockquote>
			<ul class="nav nav-tabs">
			  <li role="presentation" class="home"><a href="<?= BASE_URL ?>">Accueil</a></li>		<!-- A REVOIR -->
			</ul>
	</header>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
      </button>
      <a class="navbar-brand" href="#">Search bar</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gender <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php include("app/templates/genderMenu.php") ?>"><?php include("app/templates/genderMenu.php") ?></a></li> <!-- ajout resultats ds url-->

          </ul>
        </li>
      </ul>
			<ul class="nav navbar-nav">
          <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Year <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php include("app/templates/yearMenu.php") ?>"><?php include("app/templates/yearMenu.php") ?></a></li> <!-- ajout resultats ds url-->

          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search"> <!-- METTRE 1 REQUETE SQL POUR LA RECHERCHE-->
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<section>

	<div class="container">

		<?php //include le fichier spécifié à la fin des méthodes de contrôleurs ?>
		<?php include("app/templates/$page.php") ?>

	</div>
</section>
</body>
</html>
