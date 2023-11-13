<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sjekk pålogging</title>
</head>
<body>
<?php session_start(); ?>
<?php
if (!isset($_POST['submit'])) {
    die();
}
//Gjøre om POST-data til variabler
$email = $_POST['email'];
$brukernavn = $_POST['brukernavn'];
$passord = $_POST['passord'];

//Koble til databasen
$dbc = mysqli_connect('localhost', 'root', 'Admin', 'terminoppgave_vg2')
or die('Error connecting to MySQL server.');

//Gjøre klar SQL-strengen
$query = "SELECT email, username, password from users where email = '$email'and username='$brukernavn' and password='$passord'";


//Utføre spørringen
$result = mysqli_query($dbc, $query)
or die('Error querying database.');


if (isset($_POST['brukernavn'])) {
    $_SESSION['username'] = $_POST['brukernavn'];

    //check admin
    $quary = "SELECT admin FROM users WHERE username = '" . $_POST['brukernavn'] . "'";
    $result = mysqli_query($dbc, $quary);
    $row = mysqli_fetch_assoc($result);
    $_SESSION['admin'] = $row['admin'];
}


//Koble fra databasen
mysqli_close($dbc);

//Sjekke om spørringen gir resultater
if ($result->num_rows > 0) {
    //Gyldig login
    header('location: index.php');
} else {
    //Ugyldig login
    header('location: login_form.php?error=ugyldiglogin');

}
?>
</body>
</html>