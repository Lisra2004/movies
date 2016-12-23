<?php

	namespace Controller;

class InscriptionUser
{

	public function inscription()
	{
		$create = new \Model\Entity\Demo();

		if (!empty($_POST)){

		//attention aux XSS ici
			$username = strip_tags($_POST['username']);
			$email = $_POST['email'];
			$plainPassword = $_POST['pwd'];
			$passwordBis = $_POST['pwd_bis'];

		//s'assurer que tous les champs sont remplis
		//...

		//s'assurer que les 2 mdp concordent
			if ($plainPassword != $passwordBis){
				$error = "les mdps ne concordent pas";
			}

		//email avec filter_var($email, FILTER_VALIDATE_EMAIL);

		//hache le mdp
			$passwordHash = password_hash($plainPassword, PASSWORD_DEFAULT);

			if (empty($_POST['role'])) {
				$role = "0"; // role a 0 pour user et a 1 pour admin
			}

		//génère une chaîne réellement aléatoire
			$factory = new \RandomLib\Factory; // installer avec composer 1 soft en plus
			$generator = $factory->getGenerator(new \SecurityLib\Strength(\SecurityLib\Strength::MEDIUM));
			$token = $generator->generateString(32, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

		// echo $token;
		//stocker ce token avec le user...

			$create->setUsername( $_POST['username'] );
			$create->setEmail( $_POST['email'] );
			$create->setPwd( $passwordHash() );
			$create->setToken($token());
			$create->setRole($role());
		}
	}
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Inscription</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<ul class="nav nav-tabs">
			<li role="presentation" class="home"><a href="<?= BASE_URL ?>">Accueil</a></li>		<!-- A REVOIR -->
		</ul>
		<form method="POST">
			<div>
				<label for="username">Pseudo</label>
				<input type="text" name="username" id="username" value="" placeholder="Username">
			</div>
			<div>
				<label for="email">Email</label>
				<input type="email" name="email" id="email" value="" placeholder="xyz@gmail.com">
			</div>
			<div>
				<label for="pwd">Mot de passe</label>
				<input type="password" name="pwd" id="pwd" value="">
			</div>
			<div>
				<label for="pwd_bis">Mot de passe encore</label>
				<input type="pwd" name="pwd_bis" id="pwd_bis" value="">
			</div>
			<div>
				<button type="submit">M'inscrire !</button>
			</div>

		</form>

	</div>
</body>
</html>
