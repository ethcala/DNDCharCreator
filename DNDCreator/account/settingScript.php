<?php
$style = $_POST["stly"];


    switch($style){
        case("DND"):

            setcookie("style", "../DND.css", time() + (86400 * 30), "/");
            header("Location: http://localhost:5435/");
            break;
        case("Booger"):

            setcookie("style", "../Booger.css", time() + (86400 * 30), "/");
            header("Location: http://localhost:5435/");
            break;
        case("darkMode"):

            setcookie("style", "../darkMode.css", time() + (86400 * 30), "/");
            header("Location: http://localhost:5435/");
            break;
    };
?>