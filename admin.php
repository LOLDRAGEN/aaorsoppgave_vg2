<?php


$servername = "localhost";
$username = "root";
$password = "Admin";
$dbname = "terminoppgave_vg2";

session_start();

if ($_SESSION[]) {
    header("location: index.php");
    die('Not admin lmao'); // this should never happen
}

?>



