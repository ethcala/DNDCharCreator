<?php
session_start();
unset($_SESSION);
session_destroy();
session_write_close();
setcookie("user", false, time() -59999, "/");
setcookie("userid", false, time() -5999, "/");
header("Location: /");
die;
?>