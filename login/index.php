<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h3>Sign Up</h3>

<form action="includes/formhandler.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="email" name="email" placeholder="Email">
    <button>Sign Up</button>
</form>

<h3>Login</h3>

<form action="includes/login.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button>Login</button>
</form>


<h3>Change Account</h3>

<form action="includes/userupdate.inc.php" method="post">
    <input type="text" name "username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="email" name="email" placeholder="Email">
    <button>Update</button>
</form>

<h3>Delete Account</h3>

<form action="includes/userdelete.inc.php" method="post">
    <input type="text" name="username" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <button>Delete</button>
</form>

<h3>Search for user</h3>

<form action="search.php" method="post">
    <label for="search">Search for user</label>
    <input type="text" name="usersearch" placeholder="usersearch">
    <button>Sertch</button>
</form>
</body>
</html>
