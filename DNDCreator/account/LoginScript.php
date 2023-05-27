<?php
require '../data/ConnectorDB.php';

$users = getUser($_POST["username"], $_POST["password"]);

if ($users->num_rows > 0) { // if user is logged in
    // output data of each row
    while($row = $users->fetch_assoc()) {

        $user = $row["username"];
        $pas = $row["password"];
        $_SESSION['user'] = $user;
        setcookie("user", $user, time() + (86400 * 30), "/");
        header("Location: http://localhost:39482");
        exit();

    }
} else {
    echo "No Matches";
}

include_once "login.php";
?>