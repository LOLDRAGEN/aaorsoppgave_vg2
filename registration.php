
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf-8">
        <title>PHP registrering</title>
    </head>
    <body>
    <?php session_start(); ?>
        <p>Opprett ny bruker:</p>
    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="email" name="email" placeholder="Email">
        <button>Sign Up</button>
    </form>
    </body>
</html>