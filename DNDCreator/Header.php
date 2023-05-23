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

    }
    ?>

</head>

<body>

    <?php
    // make this an if statement when session is implemented - show settings instead of login/signup
    //$menu = array("Home"=>"/home.php", "About"=>"/about.php", "Contact"=>"/contact.php");
    if (!isset($_COOKIE["user"])) {
        $menu = array("Account", "Characters");
        foreach ($menu as $title ) {
            echo ('<a class="button">' . $title . '</a>');
        }



    //    $menu = array("About", "Characters", "Account");
    //    $aboutMenu = array("why" => "/about/why.php", "Why" => "/about/why.php");
    //    $accMenuLoggedOut = array("Login" => "/account/login.php", "Sign Up" => "/account/Signup.php");
    //    $characterMenu = array("AddCharacter" => "/characters/AddCharacter.php", "DeleteCharacters" => "/characters/DeleteCharacters.php","UpdateCharacters"=>"/characters/UpdateCharacters.php","View"=>"/characters/ViewCharacter.php");
    //    foreach ($menu as $title) {
    //        echo ('<div class="dropdown"><button class="dropbtn">' . $title . '</button>');
    //        switch ($title) {
    //            case 'About':
    //                echo ('<div class="dropdown-content">');
    //                foreach ($aboutMenu as $title => $link) {
    //                    echo ('<a href=' . $link . '>' . $title . '</a>');
    //                };
    //                echo ('</div>');
    //                break;
    //            case 'Character':
    //                echo ('<div class="dropdown-content">');
    //                foreach ($contactMenu as $title => $link) {
    //                    echo ('<a href=' . $link . '>' . $title . '</a>');
    //                };
    //                echo ('</div>');
    //                break;
    //            case 'Account':
    //                // if not logged in
    //                echo ('<div class="dropdown-content">');
    //                foreach ($accMenuLoggedOut as $title => $link) {
    //                    echo ('<a href=' . $link . '>' . $title . '</a>');
    //                };
    //                echo ('</div>');
    //                break;
    //        };
    //        echo ('</div>');
    //    };
    //} else {
    //    $menu = array("About", "Contact", $_COOKIE["user"]);


    //    $aboutMenu = array("History" => "/about/history.php", "Mission" => "/about/mission.php");
    //    $accMenuLoggedIn = array("Settings" => "/account/settings.php", "Logout" => "/account/logout.php"); // add log out? if admin use add page

    //    if($_COOKIE["admin"] == 1 || $_COOKIE["admin"] == "1"){
    //        $accMenuLoggedIn = array("Admin" => "/admin/addpage.php", "Settings" => "/account/settings.php", "Logout" => "/account/logout.php");
    //    }else{
    //        $accMenuLoggedIn = array("Settings" => "/account/settings.php", "Logout" => "/account/logout.php");
    //    }

    //    $contactMenu = array("Email" => "/contact/email.php", "Location" => "/contact/location.php");

    //    foreach ($menu as $title) {
    //        echo ('<div class="dropdown"><button class="dropbtn">' . $title . '</button>');
    //        switch ($title) {
    //            case 'About':
    //                echo ('<div class="dropdown-content">');
    //                foreach ($aboutMenu as $title => $link) {
    //                    echo ('<a href=' . $link . '>' . $title . '</a>');
    //                }
    //                ;
    //                echo ('</div>');
    //                break;
    //            case 'Contact':
    //                echo ('<div class="dropdown-content">');
    //                foreach ($contactMenu as $title => $link) {
    //                    echo ('<a href=' . $link . '>' . $title . '</a>');
    //                }
    //                ;
    //                echo ('</div>');
    //                break;
    //            case $_COOKIE["user"]:
    //                // if not logged in
    //                echo ('<div class="dropdown-content">');
    //                foreach ($accMenuLoggedIn as $title => $link) {
    //                    echo ('<a href=' . $link . '>' . $title . '</a>');
    //                };
    //                echo ('</div>');
    //                break;
    //        };
    //        echo ('</div>');
            
    //    };
    //    echo ("Hello " . $_COOKIE["user"]);
    }
    ?>
<br/>
</body>
</html>