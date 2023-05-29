<?php
include_once('../Header.php');
echo ('<br/><h1>Hello, ' . $_COOKIE['user'] . '</h1>');
?>


<form>
    <div class="row">
        <input type="radio" name="style" id="dark" value="dark" />
        <label for="dark">Dark</label>
    </div>
    <div class="row">
        <input type="radio" name="style" id="default" value="default" />
        <label for="default">Default</label>
    </div>
    <div class="row">
        <input type="radio" name="style" id="green" value="green" />
        <label for="green">Green</label>
    </div>
    <button onclick="update()">Change</button>
</form>
<br />

<?php
include_once('../Footer.php');
?>

<script>
    function update() {
        <?php
        if ($_GET['style'] == 'dark') {
            $_SESSION['css'] = $_SESSION['ABSPATH'] . '/darkmode.css'; 
        } else if ($_GET['style'] == 'green') {
            $_SESSION['css'] = $_SESSION['ABSPATH'] . '/booger.css'; 
        } else {
            $_SESSION['css'] = $_SESSION['ABSPATH'] . '/dnd.css'; 
        }
        ?>
    }
</script>
