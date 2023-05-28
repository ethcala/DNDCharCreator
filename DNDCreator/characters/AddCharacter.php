<?php
include_once('../Header.php');
?>
<script>
    function generateRand(){
         document.getElementById('strength').value = Math.floor(Math.random() * 20) + 1;
         document.getElementById('constitution').value = Math.floor(Math.random() * 20) + 1;
         document.getElementById('dexterity').value = Math.floor(Math.random() * 20) + 1;
         document.getElementById('charisma').value = Math.floor(Math.random() * 20) + 1;
         document.getElementById('intelligence').value = Math.floor(Math.random() * 20) + 1;
         document.getElementById('wisdom').value = Math.floor(Math.random() * 20) + 1;
        
    }
</script>
<br />

<form action="add_character.php" method="post">
    <div class="form-container">
        <div class="border-box">
            <h3>Basics</h3>
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
            <input type="number" name="hp" id="hp" />
            <label for="ac">AC</label>
            <input type="number" name="ac" id="ac" />
        </div>
        <br />
        <div class="border-box">
            <h3>Attributes</h3>
            <div onclick="generateRand()" class="btn">Randomize!</div>
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
            <input name="create" type='submit' value="Create Character"  class="btn"/>
        </div>
    </div>
    
    
</form>
<button name="rando" value="randomize" onclick="generateRand()">Randomize Attributes</button>

<p id="error"></p>

<?php
include_once('../Footer.php');
?>