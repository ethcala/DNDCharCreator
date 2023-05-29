<?php
setcookie("user", false, time()-5999, "/");
setcookie("userid", false, time()-5999, "/");
unset($_SESSION);
session_destroy();
session_write_close();
header("Location: /");
die;
?>