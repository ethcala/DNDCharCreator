<?php
include '../data/ConnectorDB.php';

$conn = ConnGet();
$users = getUser($connec, $_POST["name"], $_POST["pass"]);

if ($users->num_rows > 0) {
    // output data of each row
    while($row = $users->fetch_assoc()) {

        $user = $row["username"];
        $pas = $row["password"];
        $userid = $row['id'];
        setcookie("user", $user, time() + (86400 * 30), "/");
        setcookie("userid", $userid, time() + (86400 * 30), "/");
        setcookie("password", $pas, time() + (86400 * 30), "/");
        header("Location: http://localhost:5435/");
        exit();

    }
} else {
    echo "No Matches";
}

include_once "login.php";
?>