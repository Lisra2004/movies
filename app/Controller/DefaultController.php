<?php

namespace Controller;

use View\View; //on peut donc utiliser cette classe comme View au lieu de \View\View
use Model\Manager\DemoManager;

class DefaultController
{
	/**
	 * Affiche la page d'accueil
	 */
	public function home()
	{
		$currentpage = (empty($_GET['page'])) ? 1 : $_GET['page'];

		$movieManager = new DemoManager();
		$movies = $movieManager->findHomeMovie($currentpage);

		// compte le nbr total de films
		$count = $movieManager->countAll();

		$data = [
			"movies"=> $movies,
			"moviesCount"=> $count,
			"currentpage" => $currentpage,
		];
		View::show("home", "Accueil !", $data);
	}

	public function movie()
	{
		$movieManager = new DemoManager();
		$id = $_GET['id'];
		$movie = $movieManager->findMovieSelect($id);
		$gender = new DemoManager();
		$genre = $gender->findGenderManager($id);
		View::show("movie", "Fiche film", ["movie"=> $movie, "genre"=> $genre] );
	}

	public function yearMenu()
	{
		$yearManager = new \Model\Manager\DemoManager();
		$year =$yearManager->findAllYear();
		include("app/templates/yearMenu.php");

	}

	public static function genderMenu()
	{
		$genderManager = new \Model\Manager\DemoManager();
    $genres = $genderManager->findAllGender();
    include("app/templates/genderMenu.php");

	}

	

	/**
	 * Affiche la page d'erreur 404
	 */
	public function error404()
	{
		//envoie une entête 404 (pour notifier les clients que ça a foiré)
		header("HTTP/1.0 404 Not Found");
		View::show("errors/404.php", "Oups ! Perdu ?");
	}
}
