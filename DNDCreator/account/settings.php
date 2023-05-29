<?php
include_once('../Header.php');
include_once('settingScript.php');
echo ('<br/><h1>Hello, ' . $_COOKIE['user'] . '</h1>');
?>

<body>
    <form action="settingScript.php" method="post">
        <input type="submit" name="stly" value="darkMode" />
        <input type="submit" name="stly" value="Booger" />
        <input type="submit" name="stly" value="DND" />
    </form>
</body>
<br />

<?php
include_once('../Footer.php');
?>