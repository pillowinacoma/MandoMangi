<?php
function connexion() {
    include "../localConnect.php";
    $strConnex="host=$dbHost dbname=$dbName user=$dbUser port=$dbport password=$dbPassword";
    $ptrDB = pg_connect($strConnex);
    return $ptrDB;
}
 ?>
