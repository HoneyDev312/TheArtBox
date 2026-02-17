<?php

require_once(__DIR__ . '/config/mysql.php');

try {
    // On se connecte à MySQL
    $mysqlClient = new PDO(
        sprintf('mysql:host=%s;dbname=%s;port=%s;charset=utf8', MYSQL_HOST, MYSQL_NAME, MYSQL_PORT),
        MYSQL_USER,
        MYSQL_PASSWORD,
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );
} catch (Exception $exception) {
    // En cas d'erreur, on affiche un message et on arrête tout
    die('Erreur : ' . $exception->getMessage());
}
