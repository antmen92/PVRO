<?php



$conn=dbVerbindungHerstellen();
#TODO Dateneingabee durch HTML
/*$sql = "INSERT INTO ab_abwesenheit(ab_Person, ab_Von, ab_Bis, ab_Typ, ab_Grund) VALUES ('3786140299',1514880000,1514908800,'krankheit','Grippe')";

if ($conn->query($sql) === TRUE) {
    echo "Yes";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();*/

$sql = "INSERT INTO 
                        User_Rechte 
                        (UserID, 
                         Recht 
                        ) 
            VALUES 
                        ('".$ID."', 
                         'Adminbereich' 
                        ) 
           ";
mysql_query($sql);

$sql = "INSERT INTO 
                        User_Rechte 
                        (UserID, 
                         Recht 
                        ) 
            VALUES 
                        ('".$ID."', 
                         'User administrieren' 
                        ) 
           ";
mysql_query($sql);
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

function urlaubListe () {
    $conn=dbVerbindungHerstellen();
    $sql = "SELECT * FROM ab_abwesenheit WHERE ab_Befugt=0";
    $result = $conn->query($sql);
    $conn->colosed();

    #TODO ausgabe in HTML
}

function zeiterfassungeintragen(){

    $sqlzeiterfassung = "INSERT INTO s_schichten(s_Von, s_Bis) VALUES ()";
    $result = $conn->query($sql);


}
?>