<?php
include '../data/ConnectorDB.php';
session_start();
$users = getUser($_POST["username"], $_POST["password"]);
// get user info by username and password

// set cookies based on user information
if ($users->num_rows > 0) {
    // output data of each row
    while($row = $users->fetch_assoc()) {

        $user = $row["username"];
        $userid = $row['id'];
        setcookie("user", $user, time() + (86400 * 30), "/");
        setcookie("userid", $userid, time() + (86400 * 30), "/");

        // redirect to homepage
        header("Location: /");
        exit();

    }
} else {
    echo "No Matches";
}

include_once "login.php";
?>