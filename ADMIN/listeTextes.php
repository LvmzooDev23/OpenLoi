<?php
session_start();
require_once("../config.php");
require_once("../SERVICES/admin_services.php");
require_once("menuAdmin.php");
if (!isset($_SESSION['idAdmin'])) {
    header("Location: index.php");
}

$TDLs = getAllTDL();

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="homeAdmin.css">
</head>

<body>
    <div class='grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-3 text-center px-2'>
        <?php foreach ($TDLs as $TDL) { ?>
            <div class="rounded-xl border mx-4 shadow-md bg-white p-6 mb-6">
                <div class="flex w-full items-center justify-between border-b pb-3">
                    <div class="flex items-center space-x-3">
                        <div class="text-lg font-bold text-slate-700"><?= $title ?></div>
                    </div>
                    <div class="flex items-center space-x-4">
                        <?php if (isset($_SESSION['idAdmin'])) { ?>
                            <button class="rounded-xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">Modifier</button>
                            <button class="rounded-xl border bg-neutral-100 px-3 py-1 text-xs font-semibold">Supprimer</button>
                        <?php } ?>
                    </div>
                </div>

                <div class="mt-4 mb-6">
                    <div class="mb-3 text-xl font-bold"><?= $TDL['titreTDL'] ?></div>
                    <div class="text-sm text-neutral-600"><?= $TDL['descTDL'] ?></div>
                </div>

                <div>
                    <div class="flex space-x-4 items-center justify-space-between text-slate-500">
                        <div class="flex space-x-4 md:space-x-60 w-full">
                            <div class="flex cursor-pointer items-center transition hover:text-slate-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="mr-1.5 h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                                <span><?= $TDL['nbrCommTDL'] ?></span>
                            </div>
                            <div id="more" class="flex cursor-pointer items-center transition hover:text-slate-600">
                                <a href="" id="lirePlus">Plus&nbsp;</a>
                                <span><img width="20" height="20" src="https://img.icons8.com/?size=100&id=26138&format=png&color=000000" alt=""></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php }  ?>
    </div>
</body>

</html>