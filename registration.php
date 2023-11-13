
<html lang="en">
    <head>
        <link rel="stylesheet" href="css/style.css">
        <meta charset="utf-8">
        <title>PHP registrering</title>
    </head>
    <body>
    <?php session_start(); ?>
        <p>Opprett ny bruker:</p>
        <form method="post">
            <label for="email">e-mail:</label>
            <input type="text" name="email"/>  <br/>
            <label for="brukernavn">Brukernavn:</label>
            <input type="text" name="brukernavn"/>  <br/>
            <label for="passord">Passord:</label>
            <input type="password" name="passord" /><br/>

            <input type="submit" value="Opprett ny bruker" name="submit" />
        </form>    
    </body>
    <?php
        if(isset($_POST['submit'])){
            //Gjøre om POST-data til variabler
            $email = $_POST['email'];
            $brukernavn = $_POST['brukernavn'];
            $passord = $_POST['passord'];

            //Koble til databasen
            $dbc = mysqli_connect('localhost', 'root', 'Admin', 'terminoppgave_vg2')
              or die('Error connecting to MySQL server.');

            //Gjøre klar SQL-strengen
            $query = "INSERT INTO users (email, username, password) VALUES ('$email','$brukernavn' ,'$passord')";

           echo "den er klar";

            //Utføre spørringen
            $result = mysqli_query($dbc, $query)
              or die('Error querying database.');

            echo "im dead" ;
            
            //Koble fra databasen
            mysqli_close($dbc);

            //Sjekke om spørringen gir resultater
            if($result){
                //Gyldig login
                header('location: login_form.php');
            }else{
                //Ugyldig login
                echo "Noe gikk galt, prøv igjen!";
            }
        }
    ?>
</html>