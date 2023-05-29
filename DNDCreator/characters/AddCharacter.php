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
    function generateNames() {
        const HumanName = ["James", "Ashely", "John"];
        const DragonbornName = ["Anastasia", "Uraka", "Miirym"];
        const DwarfName = ["Torekdroun", "Hekhoki", "Nutgrumi"];
        const ElfName = ["Haemir", "Travaran", "Galan"];
        const GnomeName = ["Ramdap", "Lybbrock", "Gnovyc"];
        const HalfElfName = ["Cryslion", "Aalzaren", "Reynamar"];
        const HalflingName = ["Gachi", "Nogoro", "Eimasu"];
        const HalfOrcName = ["Tillsot", "Moulen", "Ake"];
        const TieflingName = ["Umi", "Toshiyuki", "Haru"];
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
            <select name="class" id="class" >
                <option value="Wizard">Wizard</option>
                <option value="Cleric">Cleric</option>
                <option value="Ranger">Ranger</option>
                <option value="Warlock">Warlock</option>
                <option value="Bard">Bard</option>
                <option value="Rogue">Rogue</option>
                <option value="Monk">Monk</option>
                <option value="Paladin">Paladin</option>
                <option value="Sorcerer">Sorcerer</option>
                <option value="Fighter">Fighter</option>
                <option value="Druid">Druid</option>
                <option value="Barbarian">Barbarian</option>
                <option value="Artificer">Artificer</option>
            </select>
            <label for="race">Race</label>
            <select name="race" id="race" >
                <option value="Dragonborn">Dragonborn</option>
                <option value="Dwarf">Dwarf</option>
                <option value="Elf">Elf</option>
                <option value="Gnome">Gnome</option>
                <option value="Half-Elf">Half-Elf</option>
                <option value="Halfling">Halfling</option>
                <option value="Half-Orc">Half-Orc<option>
                <option value="Human">Human<option>
                <option value="Tiefling">Tiefling<option>
            </select>
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
<br/>
<p>foot</p>

