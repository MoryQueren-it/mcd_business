<?php

$sName = "localhost";
$uName = "root";
$password = "";
$db_name = "mcdonald";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", $uName,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "connexion echouee : ".$e->getMessage();
}