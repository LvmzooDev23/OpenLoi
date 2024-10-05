<?php
require_once("database.php");

function addAdmin($nomComplet, $email, $password) {
    global $db;
    $sql = "INSERT INTO users (idUser,nomCompletUser, emailUser, motDePasseUser, roleUser) 
            VALUES (NULL,'$nomComplet', '$email', '$password',1)";
    $db->query($sql);

    header("Location: index.php");
}

function connexionAdmin($email, $password) {
    global $db;

    $sql = "SELECT * FROM users WHERE emailUser = '$email' AND motDePasseUser = '$password'";
    $result = $db->query($sql)->fetch_assoc();
    return $result;
}

function addTexte($title, $desc, $contenu, $datePub) {
    global $db;
    $sql = "INSERT INTO textes_de_loi (idTDL, titreTDL, descTDL, contenuTDL, datePubTDL)
            VALUES (NULL, '$title', '$desc', '$contenu', '$datePub')";
    $db->query($sql);
    
}

function getAllTDL() {
    global $db;
    $sql = "SELECT * FROM textes_de_loi";
    $result = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
    return $result;
}