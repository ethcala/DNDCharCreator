<?php
session_start();
// set absolute path variable
$_SESSION['ABSPATH'] = __DIR__;
include_once('Header.php');
?>
<br/>

<?php
include_once('Footer.php');
?>