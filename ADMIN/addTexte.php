<?php
require_once("../config.php");
require_once("../SERVICES/admin_services.php");

global $db;

if (isset($_POST['ajouter'])) {
    $titreTDL = mysqli_real_escape_string($db, $_POST['titreTDL']);
    $descTDL = mysqli_real_escape_string($db, $_POST['descTDL']);
    $contenuTDL = mysqli_real_escape_string($db, $_POST['contenuTDL']);
    $datePubTDL = date('Y-m-d');
    addTexte($titreTDL, $descTDL, $contenuTDL, $datePubTDL);
    header("Location: homeAdmin.php");
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <!DOCTYPE html>
    <html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tailwind Contact Form</title>
        <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
        <style>
            body {
                background-color: #1a202c;
                color: #e2e8f0;
            }

            .form-container {
                animation: fadeIn 0.5s ease forwards;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translateY(-20px);
                }

                to {
                    opacity: 1;
                    transform: translateY(0);
                }
            }
        </style>
    </head>

    <body>
        <div class="mx-auto p-8 bg-gray-800 rounded-md shadow-md form-container">
            <h2 class="text-center text-2xl font-semibold text-white mb-6"><u>Soumettre un Texte De Loi</u></h2>
            <form action="" method="POST">
                <div class="mb-4">
                    <label for="titre" class="block text-gray-300 text-sm font-bold mb-2">TITRE</label>
                    <input type="text" id="name" name="titreTDL" placeholder="Ajouter le titre" required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-300 text-sm font-bold mb-2">DESCRIPTION</label>
                    <textarea name="descTDL" placeholder="Description du texte de loi" class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white"></textarea>
                </div>
                <div class="mb-6">
                    <label for="message" class="block text-gray-300 text-sm font-bold mb-2">Your Message</label>
                    <textarea id="message" name="contenuTDL" rows="4" placeholder="Contenu du texte de loi" required
                        class="w-full px-3 py-2 border rounded-md focus:outline-none focus:border-blue-500 bg-gray-700 text-white"></textarea>
                </div>
                <button type="submit" name="ajouter"
                    class="bg-blue-500 text-white px-4 py-4 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue">
                    SOUMETTRE
                </button>
            </form>
        </div>
    </body>

    </html>
</body>

</html>