<?php

//PDO Connection
$servername = "localhost";
$username = "gianni";
$passworddb = "pass";
$dbname = "login-db";

try {
    $dbh = new PDO("mysql:=$servername;dbname=$dbname", $username, $passworddb);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
