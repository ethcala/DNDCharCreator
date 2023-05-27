<?php
require '../data/ConnectorDB.php';
$characters = array(""=>"");
$characters = getCharacters($_SESSION['user']);
include_once('../Header.php');

function mapThruArray($chars) {
    foreach ($chars as $char) {
        echo '<h1>' . $char['name'] . '</h1>';
    }
}

if($characters->num_rows <= 0) {
    echo '<h1>No characters found.<h1>';
} else {
    echo mapThruArray($characters);
};
?>

<?php
include_once('../Footer.php');
?>