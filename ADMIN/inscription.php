<?php
    require_once("../config.php");
	require_once("../SERVICES/admin_services.php");
	if (isset($_POST['inscrire'])) {
		$nomComplet = $_POST['nomComplet'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		addAdmin($nomComplet, $email, $password);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title><?= $title ?></title>
</head>
<body>
    <!-- component -->
<div class="min-h-screen flex items-center justify-center w-full">
	<div class="bg-white dark:bg-gray-900 shadow-md rounded-lg px-8 py-6 max-w-md">
		<h1 class="text-2xl font-bold text-center mb-4 dark:text-gray-200"><?= $title ?> - Inscription</h1>
		<form action="" method="POST">
			<div class="mb-4">
				<label for="nom" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">NOM COMPLET</label>
				<input type="text" name="nomComplet" id="" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Saisir votre nom complet" required>
			</div>
			<div class="mb-4">
				<label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Adresse Email</label>
				<input type="email" name="email" id="email" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="your@email.com" required>
			</div>
			<div class="mb-4">
				<label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">Mot de passe</label>
				<input type="password" name="password" id="password" class="shadow-sm rounded-md w-full px-3 py-2 border border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500" placeholder="Enter your password" required>
				<a href="#"
					class="text-xs text-gray-600 hover:text-indigo-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"></a>
			</div>
			<div class="flex items-center justify-between mb-4">
				<!-- <div class="flex items-center">
					<input type="checkbox" id="remember" class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500 focus:outline-none" checked>
					<label for="remember" class="ml-2 block text-sm text-gray-700 dark:text-gray-300">Remember me</label>
				</div> -->
				<a href="index.php"
					class="text-xs text-indigo-500 hover:text-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Déjà inscrit, connectez-vous</a>
			</div>
			<button type="submit" name="inscrire" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">S'INSCRIRE</button>
		</form>
	</div>
</div>
</body>
</html>