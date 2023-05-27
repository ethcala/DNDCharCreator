<?php
setcookie("user", false);
$_SESSION['user'] = '';
session_destroy();
header("Location: http://localhost:39482");
exit();
?>