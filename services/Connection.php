<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iotpobros";

try {
    $pdo = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);

    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
        $pdo = null;
    }
?>