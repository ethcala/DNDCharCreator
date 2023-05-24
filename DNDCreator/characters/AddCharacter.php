<?php

?>
<br />
<form action="addCharacter">
    <label for="name">Name</label>
    <input type="text" name="name" id="name" />
    <label for="gender">Gender</label>
    <input type="text" name="gender" id="gender" />
    <label for="class">Class</label>
    <input type="text" name="class" id="class" />
    <label for="race">Race</label>
    <input type="text" name="race" id="race" />
    <label for="flaws">Flaws</label>
    <input type="text" name="flaws" id="flaws" />
    <label for="level">Level</label>
    <input type="number" name="level" id="level" />
    <label for="hp">HP</label>
    <input type="number" name="hp" id="hp"/>
    <label for="ac">AC</label>
    <input type="number" name="ac" id="ac" />
    <label for="strength">Strength</label>
    <input type="number" name="strength" id="strength" />
    <label for="constitution">Constitution</label>
    <input type="number" name="constitution" id="constitution" />
    <label for="dexterity">Dexterity</label>
    <input type="number" name="dexterity" id="dexterity" />
    <label for="charisma">Charisma</label>
    <input type="number" name="charisma" id="charisma" />
    <label for="intelligence">Intelligence</label>
    <input type="number" name="intelligence" id="intelligence" />
    <label for="wisdom">Wisdom</label>
    <input type="number" name="wisdom" id="wisdom" />
    <input name="create" type='submit' value="Create Character" />
</form>
<p id="error"></p>

<script>
    function addCharacter() {
        <?php
        if (!$_GET['name'] || !$_GET['gender'] || !$_GET['class'] || !$_GET['race'] || !$_GET['flaws'] || !$_GET['level']) {
            document.getElementById('error').innerHTML('All fields must be filled.');
        } else {
            addCharacter($_GET['name'], $_GET['gender'], $_GET['class'], $_GET['race'], $_GET['level'], $_GET['hp'], $_GET['ac'], $_GET['strength'], $_GET['dexterity'], $_GET['charisma'], $_GET['intelligence'], $_GET['constitution'], $_GET['wisdom'], $_GET['flaws']);
        }
        ?>
    }

</script>