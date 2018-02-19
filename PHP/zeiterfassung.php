<?php
/**
 * Created by PhpStorm.
 * User: Antonio Méndez
 * Date: 24.01.2018
 * Time: 09:39
 */
include 'funk.php';
session_name('sessionTest');
session_start();
$conn= dbVerbindungHerstellen();

$Von = $_POST['s_Von'];
$Bis = $_POST['s_Bis'];
//$sql = "INSERT INTO s_schichten(s_ID, s_Person, s_Abteilung, s_Datum, s_Von, s_Bis) VALUES ('3786140299',1514880000,1514908800,'krankheit','Grippe')";

var_dump($_POST);
var_dump($_REQUEST);
var_dump($_GET);

if(isset($_POST['click']))
{
    $dt = new DateTime();
    echo $dt->format('Y-m-d H:i:s');
    $date_clicked = date('Y-m-d H:i:s');;
    echo "Time the button was clicked: " . $date_clicked . "<br>";
}

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
<!--<form action="">
    <label for="Von">Von</label>
    <input type="text" name="Von" value=''><br>
    <label for="Bis">Bis</label>
    <input type="text" name="Bis" value=''><br>
    <input type="submit" name="bestaetigen" value="Submit">q
</form>-->
<form action="zeiterfassung.php" method="POST">
   <!-- <button name="click" class="click">Click me!</button>-->
    <input type="submit" value="dsa" name="click">
    <input type="text" name="zeit" value=<?php echo $date_clicked?>>
</form>

<form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">

    <p>First name: <input type="text" name="firstname" id="firstname" /></p>

    <p>Last name: <input type="text" name="firstname" /></p>

    <input type="submit" name="submit" value="Submit" />

</form>


</body>
</html>
