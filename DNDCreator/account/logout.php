<?php
    if (isset($_COOKIE["user"])) {
    setcookie("user", "", time() - 100000, "/");
    setcookie("password", "", time() - 100000, "/");
    header("Location: http://localhost:5435/");
    exit();
}
?>