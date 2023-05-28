<title>
<?php
session_start();
error_reporting();
$_SESSION['css'] = __DIR__ . '\DND.css';
?>
</title>

<!DOCTYPE html>
<html lang="en">
<head>  
    
</head>

<body>
    <style><?php include $_SESSION['css']?></style>

    <?php        
        if($_COOKIE['user'] == '') {
            $menu = array("Account");
            $accMenu = array("Sign Up"=>__DIR__."/account/signup.php", "Log In"=>__DIR__."/account/login.php");
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
            $accMenu = array("Account Settings"=>__DIR__."/account/settings.php", "Log Out"=>__DIR__."/account/logout.php");
            $charMenu = array("Add Character"=>__DIR__."/characters/addcharacter.php", "View All"=>__DIR__."/characters/all.php");
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