<html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf-8">
        <title>PHP Innlogging</title>



    </head>
    <body>
    <?php
    session_start();
    $dbc = mysqli_connect('localhost', 'root', 'Admin', 'terminoppgave_vg2')
    or die('Error connecting to MySQL server.');
    ?>
        <p>Vennligst logg inn:</p>
        <form method="post" action="login.php">
            <label for="email">e-mail:</label>
            <input type="text" name="email"/>  <br/>
            <label for="brukernavn">Brukernavn:</label>
            <input type="text" name="brukernavn"/>  <br/>
            <label for="passord">Passord:</label>
            <input type="password" name="passord" /><br/>


            <input type="submit" value="Logg inn" name="submit" />



        </form>
        <?php
        if ($_GET["error"] === "ugyldiglogin") {
            echo "<h3 class='errormsg'>Ugyldig login</h3>";
        }
        ?>
        <p>Eller klikk <a href="registration.php">her</a> for å registrere ny bruker
    </body>
</html>