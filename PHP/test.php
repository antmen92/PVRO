<?php
/**
 * Created by PhpStorm.
 * User: Antonio Méndez
 * Date: 08.02.2018
 * Time: 15:55
 */
echo "test";
$db = new MySQLi('localhost', 'root', '', 'verwaltungsystem');
$angestellte = $_GET['a_benutzername'];
echo'$angestellte';
include 'Algorithmus.php';

$algorithmus = new Algorithmus();
echo $algorithmus ->zuweisung();