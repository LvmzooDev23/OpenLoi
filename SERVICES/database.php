<?php
define('DB_NAME', 'OpenLoi');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');


try {
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
