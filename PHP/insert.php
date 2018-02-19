<?php
/**
 * Created by PhpStorm.
 * User: Antonio Méndez
 * Date: 08.02.2018
 * Time: 15:08
 */
$benutzername = $_GET['benutzername'];
$vorname = $_GET['vname'];
$nachname = $_GET['nname'];
$geschlecht = $_GET['gesch'];
$geburtsdat = $_GET['geb'];
$ort = $_GET['ort'];
$str = $_GET['str'];
$hnr = $_GET['hnr'];
$plz = $_GET['plz'];
$pw = $_GET['pw'];
$pw2 = $_GET['pw2'];
$tel = $_GET['tel'];
$email = $_GET['email'];
$recht = $_GET['rechte'];

$db = dbVerbindungHerstellen();
$werteabfrage = $db->query("SELECT * FROM a_angestellte");
while ($row = $werteabfrage->fetch_array()) {
    $benutzer = $row['a_benutzername'];
    if($benutzer == $bn)
    {
        header('Location: http://localhost/Vigilanz_DBSchnittstelle/DoppelterName.html');
    }
}

if($pw == $pw2) {
    $db->close();

    $pdo = new PDO('mysql:host=localhost;dbname=verwaltungsystem', 'root', '');

  //  if ($_GET["mph"] == "gda") {
        $statement = $pdo->prepare("INSERT INTO gda_gesundheitsdiensteanbieterindex (
      gda_name,
      gda_ort,
      gda_strasse,
      gda_hnr,
      gda_plz,
      gda_bez,
      gda_passwort,
      gda_benutzername
      ) VALUES (?,?,?,?,?,?,?,?)");
    //}
    $statement->execute(array($name, $ort, $strasse, $hnr, $plz, $bez, $pw, $bn));

    header('Location: http://localhost/Vigilanz_DBSchnittstelle/index.html');
}
else
{
    header('Location: http://localhost/Vigilanz_DBSchnittstelle/PasswortFalsch.html');
}