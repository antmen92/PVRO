<?php
/**
 * Created by PhpStorm.
 * User: Antonio Méndez
 * Date: 04.12.2017
 * Time: 16:58
 */

session_name('sessionTest');
session_start();
if(!isset($_SESSION['userid'])) {
    die('Bitte zuerst <a href="login.php">einloggen</a>');
}

//Abfrage der Nutzer ID vom Login
$userid = $_SESSION['userid'];

echo "Hallo User: ".$userid;
?>