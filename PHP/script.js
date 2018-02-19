/**
 * Created by Antonio Méndez on 08.02.2018.
 */
function einloggen()
{
    document.getElementById("h").innerHTML = 'Einloggen';
    document.getElementById("registrieren").style.display = 'none';
}

function registrieren()
{
    document.getElementById("h").innerHTML = 'Registrieren';
    document.getElementById("registrieren").style.display = 'block';
}

function message() {
    confirm('Die Daten werden bearbeitet');
    //window.alert('hallo');
}
function senden() {
    confirm('Die Meldung wurde verschickt');
}
function error() {
    confirm('Dieses Produkt wird bereits verwendet oder existiert nicht');
}