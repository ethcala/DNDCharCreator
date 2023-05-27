<?php
setcookie("user", false);
$_SESSION['user'] = '';
header("Location: http://localhost:39482");
exit();
?>