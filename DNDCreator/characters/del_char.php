<?php
require '../data/ConnectorDB.php';
$charName = $_POST['charName'];
$charId = $_POST['charId'];

deleteCharacter($charName, $charId);
header('Location: /characters/all.php');
?>