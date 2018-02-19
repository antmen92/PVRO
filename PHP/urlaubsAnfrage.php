<?php
session_start();
$benutzername = "ablindpenguin"; //ToDo Benutzername aus der Session auslesen
$typ = $_GET['typ'];
$von = $_GET['von'];
$bis = $_GET['bis'];
$grund = $_GET['grund'];
$befugt = $_GET['befugt'];


$db = dbVerbindungHerstellen();
$pdo = new PDO('mysql:host=localhost;dbname=verwaltungsystem', 'root', '');

$statement = $pdo->prepare("INSERT INTO  ab_abwesenheit (
      ab_person,
      ab_von,
      ab_bis,
      ab_typ,
      ab_grund
      ab_befugt
      
    ) VALUES (?,?,?,?,?,?)");

$statement->execute(array($benutzername, $von, $bis, $typ, $grund, $befugt));


function dbVerbindungHerstellen()
{
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "verwaltungsystem";

    $db = new mysqli($servername, $username, $password, $dbname);

    if ($db->connect_error) {
        die("Connection failed: " . $db->connect_error);
    }/*else
    {

        echo "Connected successfully";
    }*/

    return $db;
}
