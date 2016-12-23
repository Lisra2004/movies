<?php

namespace Controller;

use Controller\DefaultController; //pas essentiel, on est dans le même namespace
use Controller\InscriptionUser;

class Dispatcher
{
	//reçoit la liste des routes, et le paramètre p en argument
	public function dispatch($routes, $p)
	{

		//crée une instance du contrôleur
		// $controller = new DefaultController(); A UTILISER SI 1 SEUL CONTROLLER

		//on trouve la route à appeler
		//en fonction de ce qu'il y a dans l'URL
		foreach($routes as $url => $method){

			$parts = explode("#", $method); // explose les routes en 2 morceaux pour extraire et le controllerName, et la method
			$controllerName = "\Controller\\" . $parts[0]; //on ajout "l'adresse" parce qu'en passant par 1 variable le use ne fonctionne plus
			$method = $parts[1];
			//echo $controllerName; pour tester ce qu'on trouve ds le controllerName
			//die();
			$controller = new $controllerName();

			if ($url == $p){
				//appelle la méthode associée (définie dans routes.php)
				return call_user_func([$controller, $method]);
			}
		}

		//si on est arrivé ici... 404. La route n'a pas été trouvée.
		return call_user_func([$controller, "error404"]);
	}

}
