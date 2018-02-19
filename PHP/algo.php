<?php
/**
 * Created by PhpStorm.
 * User: Antonio Méndez
 * Date: 19.02.2018
 * Time: 10:06
 */
session_start();
session_name('test');
$db = new MySQLi('localhost', 'root', '', 'verwaltungsystem');
$username = 'abc';
//$werteabfrage1 = $db->query("SELECT * FROM a_angestellte WHERE a_benutzername = '$username'");
$id = $_GET['id'];
$person = $_GET['person'];
$datum = $_GET['datum'];
$von = $_GET['von'];
$bis =$_GET['bis'];
$abperson = 'abc';
$werteabfrage = mysql_query("SELECT * FROM s_schichten WHERE s_person = '$username'");
$werteabfrage1 = $db->query("SELECT * FROM ab_abwesenheit WHERE ab_person ='$abperson'");
$werteabfrage0 = mysql_query("SELECT COUNT(*) FROM s_schichten WHERE s_id = '0'");
$einzeln = mysql_fetch_row($werteabfrage0);
if($einzeln[0]==1) echo "ja";
else echo "nein";

for($x = 0; $x <=10; $x++){
   $test= $x%4;
    echo "$test";
    $abteilung = $test;

}
/*$pdo = new PDO('mysql:host=localhost;dbname=verwaltungsystem', 'root', '');
$statement = $pdo->prepare("INSERT INTO  s_schichten (
      s_abteilung,
      
    ) VALUES (?)");

$statement->execute(array($abteilung));*/
$röngten = 0;
$ultraschall = 1;
$mamografie = 2;
$Knochendichte = 3;

