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
<?php
include 'Calendar.php';
 
$calendar = new Calendar();
 
echo $calendar->show();
?>
</body>
</html>       