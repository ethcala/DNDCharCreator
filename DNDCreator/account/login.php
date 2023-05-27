<?php
include_once('../Header.php');
?>

<form action="loginScript.php" method="post">
    Username: <input type="text" name="username" /><br />
    Password: <input type="text" name="password" /><br />
    <input type="submit" />
</form>

<?php
include_once('../Footer.php');
?>