<?php
require_once("config.php");
require_once("SERVICES/user_services.php");
if (isset($_POST['connecter'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];
	$user = connexion($email, $password);
	var_dump(connexion($email, $password));
	// var_dump($user);
	if ($user != null) {
		echo "Connexion reussie";
		session_start();
		$_SESSION['id'] = $user['idUser'];
	// 	$_SESSION['nomComplet'] = $user['nomCompletUser'];
	// 	$_SESSION['email'] = $user['emailUser'];
	// 	$_SESSION['role'] = $user['roleUser'];
		header("Location: home.php");
	// } else {
	// 	echo "Email ou mot de passe incorrect";
	}
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://cdn.tailwindcss.com"></script>
	<title><?= $title ?></title>

</head>

<body>
	<!-- component -->
	<div class="min-h-screen flex items-center justify-center w-full ">
		<div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-8 py-6 max-w-md">
			<h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-200"><?= $title ?> - Connexion</h1>
			<form action="" method="POST">
				<div class="mb-4">
					<label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Addresse Email</label>
					<input type="email" name="email" id="email" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Saisir Adresse email" required>
				</div>
				<div class="mb-4">
					<label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Mot de passe</label>
					<input type="password" name="password" id="password" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Saisir votre mot de passe" required>
				</div>
				<div class="flex items-center justify-between mb-4">
					<a href="inscription.php"
						class="text-xs text-indigo-500 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Pas encore inscrit ? créer un compte</a>
				</div>
				<button type="submit" name="connecter" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Se connecter</button>
			</form>
		</div>
	</div>
</body>

</html>