<?php
require '../data/ConnectorDB.php';
addCharacter($_POST['name'],$_POST['gender'],$_POST['class'],$_POST['race'],$_POST['level'],$_POST['hp'],$_POST['ac'],$_POST['strength'],$_POST['dexterity'],$_POST['charisma'],$_POST['intelligence'],$_POST['constitution'],$_POST['wisdom'],$_POST['flaws']);
header ("Location: /characters/all.php");
?>