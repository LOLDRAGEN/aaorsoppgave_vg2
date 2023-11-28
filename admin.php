<?php


$servername = "localhost";
$username = "root";
$password = "Admin";
$dbname = "terminoppgave_vg2";

session_start();

if (!isset($_SESSION["admin"])) {
    header("location: index.php");
    die('Not admin lmao'); // this should never happen
}

?>



