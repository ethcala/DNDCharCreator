<?php
include '../data/ConnectorDB.php';
session_start();
$users = getUser($_POST["username"], $_POST["password"]);

if ($users->num_rows > 0) {
    // output data of each row
    while($row = $users->fetch_assoc()) {

        $user = $row["username"];
        $userid = $row['userid'];
        $pas = $row["password"];
        setcookie("user", $user, time() + (86400 * 30), "/");
        setcookie("userid", $userid, time() + (86400 * 30), "/");
        $_SESSION['userid'] = $row['userid'];
        header("Location: /");
        exit();

    }
} else {
    echo "No Matches";
}

include_once "login.php";
?>