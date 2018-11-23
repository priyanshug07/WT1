<?php
    session_start();
    $_SESSION["logged"] = false;
    header('location:myProject.php');
?>