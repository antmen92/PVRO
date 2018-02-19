<?php

/**
 * Created by PhpStorm.
 * User: Antonio Méndez
 * Date: 12.02.2018
 * Time: 10:29
 */
$db = new MySQLi('localhost', 'root', '', 'verwaltungsystem');
$abwesend = $_GET['abwesend'];
$zahlzuweisung = $_Get['zahlzuweisung'];
$werteabfrage = $db->query("SELECT * FROM ab_abwesenheit WHERE ab_person = '$abwesend' ");
for ($abwesend; $abwesend <= 10; $abwesend++){
    echo "test: $abwesend";
}
echo $abwesend;
$db->close();
class Algorithmus
{

    private $anwesend;
    private $abteilung;

    public function zuweisung(){
       // for($x=0; $x <= 1000; $x++){
         //   echo "test: $x";
        //}
    }

}