<?php

	//notre table de correspondance entre les urls et les fonctions
	//de contrôleur à appeler

	//la clef (à gauche) est l'URL qui sera comparée avec l'URL de la requête.
	//si l'URL correspond, la méthode de contrôleur (la valeur, à droite), sera appelée par le Dispatcher

	//les routes peuvent ressemble à ce que vous voulez, mais commencent toutes par / :
	/*
		"/articles/" 		=> "showPost",
		"/articles/detail/" => "showPostDetail",
		"/admin/"			=> "adminHome",
		"/admin/users/add/" => "addUser",
	*/

	$routes = [
		"/" => "DefaultController#home",
		"/search" => "DefaultController#search",
		"/movie" => "DefaultController#movie",
		"/watchlist" => "DefaultController#watchlist",
		"/inscription" => "InscriptionUser#inscription", // fichier controller different des autres
		"/admin/accueil" => "DefaultController#admin/accueil",
		"/admin/movie" =>"DefaultController#admin/movie",
		"/admin/update" => "DefaultController#admin/update",
		"/admin/addmovie" => "DefaultController#admin/addmovie",
		"/admin/addgender" => "DefaultController#admin/addgender",

	];
