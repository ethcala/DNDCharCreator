<?php
require '../data/ConnectorDB.php';
// get character name and id from posted data
$charName = $_POST['charName'];
$charId = $_POST['charId'];

// delete character by name and id
deleteCharacter($charName, $charId);
header('Location: /characters/all.php');
?>