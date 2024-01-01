<?php

define('DB_SERVERNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'crudpoo6');


$db = mysqli_connect(DB_SERVERNAME, DB_USERNAME, DB_PASSWORD, DB_NAME);


if (!$db) {
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>
