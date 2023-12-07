<?php
session_start();

if (!isset($_SESSION['username'])) {
    // user is not logged inn
    header('location: login_form.php');
    die();
}
?>