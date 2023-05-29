<?php
require '../data/ConnectorDB.php';
$charId = $_POST['charId'];
$char = getCharacter($charId);

include_once('../Header.php');

while($data = $char->fetch_assoc()) {
    echo '<div class="border-box"><h1>' .$data['name']. '</h1>';
    echo '<p><strong>Level ' .$data['level'] . ' ' . $data['class'] . '</strong></p>';
    echo '<p>'.$data['race'].'</p>';
    echo '<p>Flaws: ' . $data['flaws'] . '</p>';
    echo '<h3>Attributes</h3>';
    echo '<p>Str: ' . $data['strength'] . ' | Dex: ' . $data['dexterity'] . '</p>';
    echo '<p>Int: ' . $data['intelligence'] . ' | Con: ' . $data['constitution'] . '</p>';
    echo '<p>Wis: ' . $data['wisdom'] . ' | Cha: ' . $data['charisma'] . '</p>';
    echo '<p><strong>HP ' . $data['hp'] . '</strong> | AC ' . $data['ac'] . '</p></div>';
}

include_once('../Footer.php');
?>