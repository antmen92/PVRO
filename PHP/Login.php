<?php
session_start();
unset($_SESSION['a_benutzername']);
$_SESSION['username'] = $username;


$username = $_GET['username'];
$password = $_GET['password'];

//$data = array();

$db = dbVerbindungHerstellen();
if ($db->connect_errno != 0) echo "Verbindungsfehler zur Datenbank" . $db->connect_error;
else {
$werteabfrage1 = $db->query("SELECT * FROM a_angestellte WHERE a_benutzername = '$username' AND a_PW = '$password'");
   /* function getRights()
    {
        $rights = array();
        // .. indem die Rechte eines User aus der Datenbank ausgewählt werden..
        if(isset($_SESSION['a_ID'])){
            $sql = "SELECT 
                            Recht 
                    FROM 
                            User_Rechte 
                    WHERE 
                            UserID = '".$_SESSION['a_ID']."' 
                   ";
            $result = mysql_query($sql) OR die ("<pre>\n".$sql."</pre>\n".mysql_error());
            $rights = array();
            // .. und als array zurückgegeben werden
            while($row = mysql_fetch_assoc($result))
                $rights[] = $row['Recht'];
        }
        return $rights;
    }*/
while ($row = $werteabfrage1->fetch_array()) {

$_SESSION['a_benutzername'] = $row['a_benutzername'];
//header('Location: index.php');


}


    if (isset($_SESSION["a_benutzername"])){
        header('Location: index.php');
}
header('Location: index.php');
$db->close();
    //header('Location: index.php');
}
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

function neueseite(){
    if (isset($_SESSION["a_benutzername"])) {
//  ^ redirect to login if the variable is NOT set
        header("Location: index.php");
    }
}
?>