<?php
$style = $_POST["style"];

// set css style to chosen style using absolute path
    switch($style){
        case("default"):
            $_SESSION['css'] = $_SESSION['ABSPATH'] . "/DND.css";
            break;
        case("green"):
            $_SESSION['css'] = $_SESSION['ABSPATH'] . "/Booger.css";
            break;
        case("dark"):
            $_SESSION['css'] = $_SESSION['ABSPATH'] . "/darkMode.css";
            break;
    };

     // redirect to settings
    header("Location: /account/settings.php");

    include_once('settings.php');
?>