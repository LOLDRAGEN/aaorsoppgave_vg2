<?php


$servername = "localhost";
$username = "root";
$password = "Admin";
$dbname = "terminoppgave_vg2";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
<?php
$admin = $conn->query ("SELECT admin FROM users")
?>
<?php
if ($admin == 0) {
    header('location: index.php');
    exit();
}
?>
