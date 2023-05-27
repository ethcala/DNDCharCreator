<?php
require '../data/ConnectorDB.php';

if (!$_POST['name'] || !$_POST['gender'] || !$_POST['class'] || !$_POST['race'] || !$_POST['flaws'] || !$_POST['level']) {
    echo ('<p>All fields must be filled.</p>');
} else {
    addCharacter($_POST['name'], $_POST['gender'], $_POST['class'], $_POST['race'], $_POST['level'], $_POST['hp'], $_POST['ac'], $_POST['strength'], $_POST['dexterity'], $_POST['charisma'], $_POST['intelligence'], $_POST['constitution'], $_POST['wisdom'], $_POST['flaws']);
}
header("Location: http://localhost:39482/characters/all.php");
include_once 'AddCharacter.php';
?>