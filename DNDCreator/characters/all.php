<?php
require '../data/ConnectorDB.php';
$characters = array(""=>"");
$characters = getCharacters($_COOKIE['userid']);
include_once('../Header.php');

echo '<br/><h1>Characters</h1>';

function mapThruArray($chars) {
    foreach ($chars as $char) {
        echo '<h1>' . $char['name'] . '</h1>';
        echo '<p>Level ' . $char['level'] . '</p>';
        echo '<br/> <br/>';
    }
}

if($characters->num_rows <= 0) {
    echo '<p>No characters found.</p>';
} else {
    echo mapThruArray($characters);
};
?>

<?php
include_once('../Footer.php');
?>