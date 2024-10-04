<?php
require_once("database.php");

function addUser($nomComplet, $email, $password) {
    global $db;
    $sql = "INSERT INTO users (idUser,nomCompletUser, emailUser, motDePasseUser, roleUser) 
            VALUES (NULL,'$nomComplet', '$email', '$password',0)";
    $db->query($sql);

    header("Location: index.php");
}

function connexion($email, $password) {
    global $db;

    $sql = "SELECT * FROM users WHERE emailUser = '$email' AND motDePasseUser = '$password'";
    $result = $db->query($sql)->fetch_assoc();
    return $result;
}