<title>
<?php
session_start();
error_reporting();
?>
</title>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="<?php echo $pgDesc?>" />
    <meta name="keywords" content="<?php echo $keyWords?>" />   
</head>

<body>

    <?php
    // make this an if statement when session is implemented - show settings instead of login/signup
    //$menu = array("Home"=>"/home.php", "About"=>"/about.php", "Contact"=>"/contact.php");
    if (!isset($_COOKIE["user"])) {
        $menu = array("Account"=>"/account/login", "Characters"=>"/characters");
        foreach ($menu as $title => $link) {
            echo ('<a class="button" href=' . $link . '>' . $title . '</a>');
        }

     } else {   
         $menu = array("Sign In"=>"/Signup");
         foreach ($menu as $title => $link) {
             echo ('<a class="button" href=' . $link . '>' . $title . '</a>');
         }
    }
    ?>
<br/>