<?php
/**
 * Created by PhpStorm.
 * User: Antonio Méndez
 * Date: 04.12.2017
 * Time: 16:58
 */
session_name('sessionTest');
session_start();
session_destroy();

echo "Logout erfolgreich";
?>