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
    <form action="includes/login.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>
    </form>



        </form>
        <?php
        if ($_GET["error"] === "ugyldiglogin") {
            echo "<h3 class='errormsg'>Ugyldig login</h3>";
        }
        ?>
        <p>Eller klikk <a href="registration.php">her</a> for å registrere ny bruker
    </body>
</html>