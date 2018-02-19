<?php

include 'funk.php';
//session_name('sessionTest');
session_start();
$conn= dbVerbindungHerstellen();

$Vname = $_POST['a_Vorname'];
$Nname = $_POST['a_Nachname'];
$SVNR = $_POST['a_SVNR'];

if(!isset($_SESSION['Rechte']) OR !in_array('Adminbereich', $_SESSION['Rechte']))
    die("Sie haben keine Berechtigung, diese Seite zu betreten!\n");
$page = array();
$page['user'] = "Mitarbeiterverwaltung.php";
if(isset($_GET['page']) AND isset($page[$_GET['page']]))
    include $page[$_GET['page']];
// Ansonsten wird das Menu angezeigt
else
    echo ">User administrieren</a>\n";
?>
<html>
<head>
    <link href="calender.css" type="text/css" rel="stylesheet" />
</head>
<body>
<ul>
    <li><a href="index.php">Dienstkalender</a></li>
    <li><a href="zeiterfassung.php">Zeiterfassung</a></li>
    <li><a href="index.php">Kalender</a></li>
    <li><a href="Mitarbeiterverwaltung.php">Mitarbeiterverwaltung</a></li>
    <li><a href="Mitarbeiterverwaltung.php">Neuen Mitarbeiter anlegen</a></li>
    <li><a href="Main.html">Krankmeldung/Urlaubsanfrage</a></li>
    <li style="float:right"><a href="Logout.php">Abmelden</a></li>
</ul>
<form>
    <label for="fname">Vorname</label>
    <input type="text" name="fname" value='<?php echo $Vname; ?>'><br>
    <label for="lname">Nachname</label>
    <input type="text" name="lname" value='<?php echo $Nname?>'><br>
    <label for="SVNR">Sozialversicherungsnummer</label>
    <input type="text" name="SVNR" value="<?php echo $SVNR?>"><br>
    <label for="geb">Geburtsdatum</label>
    <input type="text" name="geb" value="aSD"><br>
    <label for="tele">Telefonnummer</label>
    <input type="text" name="tele" value="aSD"><br>
    <label for="PLZ">Postleitzahl</label>
    <input type="text" name="PLZ" value="aSD"><br>
    <label for="Ort">Ort</label>
    <input type="text" name="Ort" value="aSD"><br>
    <input type="submit" name="bestaetigen" value="Submit">
</form>

</body>
</html>