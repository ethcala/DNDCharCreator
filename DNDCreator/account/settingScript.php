<?php
$style = $_POST["style"];


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

    header("Location: /account/settings.php");

    include_once('settings.php');
?>