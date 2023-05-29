<title>
<?php
session_start();
error_reporting();
?>
</title>

<!DOCTYPE html>
<html lang="en">
<head>  
    <?php
    if ($_SESSION['css'] == '' || !isset($_SESSION['css'])) {
        $_SESSION['css'] = $_SESSION['ABSPATH']. '/DND.css';
    }
    ?>
    <style><?php include $_SESSION['css']?></style>
    <?php
    //if(!isset($_COOKIE["style"]) || empty($_COOKIE["style"] || $_COOKIE["style"] == "")){
    //    echo "<link href='". __DIR__ . "\DND.css' rel = 'stylesheet'/>";

    //}else{
    //    echo '<link href= '. $_COOKIE["style"] . ' rel = "stylesheet"/>';

    //}
    ?>
</head>

<body>
   

    <?php        
        if($_COOKIE['user'] == '' || !isset($_COOKIE['user'])) {
            $menu = array("Account");
            $accMenu = array("Sign Up"=>"/account/signup.php", "Log In"=>"/account/login.php");
            foreach($menu as $title) {
                echo ('<div class="dropdown"><button class="dropbtn">' . $title . '</button>');        
                echo ('<div class="dropdown-content">');
                foreach($accMenu as $title2 => $link) {
                        echo ('<a href=' . $link . '>' . $title2 . '</a>');                            
                }
                echo ("</div>");
            }
            echo ("</div>");
        } else {
            $menu = array("Account", "Characters");
            $accMenu = array("Account Settings"=>"/account/settings.php", "Log Out"=>"/account/logout.php");
            $charMenu = array("Add Character"=>"/characters/addcharacter.php", "View All"=>"/characters/all.php");
            foreach($menu as $title) {
                echo ('<div class="dropdown"><button class="dropbtn">' . $title . '</button>');        
                switch($title) {
                    case "Account":
                        echo ('<div class="dropdown-content">');
                        foreach($accMenu as $title2 => $link) {
                            echo ('<a href=' . $link . '>' . $title2 . '</a>');                            
                        }
                        echo ("</div>");
                        break;
                    case "Characters":
                        echo ('<div class="dropdown-content">');
                        foreach($charMenu as $title2 => $link) {
                            echo ('<a href=' . $link . '>' . $title2 . '</a>');                            
                        }
                        echo ("</div>");
                        break;
                }
                echo ("</div>");
            }            
        }
    ?>
<br/>