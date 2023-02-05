<?php
session_start();

if (isset($_POST["submit"])) {
    if ($_POST["username"] == "root" && $_POST["password"] == "password") {
        $_SESSION["connected"] = true;
        header('Location: index.php');
    } else {
        echo "Incorrect username or password";
    }
}
?>