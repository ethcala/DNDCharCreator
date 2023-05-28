<?php
require '../data/ConnectorDB.php';
$characters = array(""=>"");
$characters = getCharacters($_COOKIE['userid']);
$charSelected = 0;
include_once('../Header.php');

echo '<br/><h1>Characters</h1>';

echo '<div class="flex">';
function mapThruArray($chars) {
    foreach ($chars as $char) {
        echo '<div class="border-box"><h1>' . $char['name'] . '</h1>';
        echo '<p>Id: '.$char['id'].'</p>';
        echo '<p>Level: ' . $char['level'] . '</p>';
        echo '<p>Gender: ' .$char['gender'].'</p>';
        echo '<p>Class: '.$char['class'].'</p>';
        echo '<button onclick="editChar(' .$char['id']. ')" >Edit</button>';
        echo '<button onclick="deleteChar(' .$char['id']. ')" >Delete</button>';
        echo '<button onclick="viewChar(' .$char['id']. ')" >View</button>';
        echo '</div><br/> <br/>';
    }
}

if($characters->num_rows <= 0) {
    echo '<p>No characters found.</p>';
} else {
    echo mapThruArray($characters);
};
?>
</div>
<div class="modal" id="modal">
    <h3>Confirm delete</h3>
    <p>Enter character name here to delete:</p>
    <form action="del_char.php" method="post">
        <input type="hidden" name="charId" id="charId" />
        <input type="text" name="charName" id="charName" />
        <button type="submit">Delete</button>

    </form>
</div>
<div class="specify" id="specify">
    <h3>Here is your character</h3>
    <?php
        echo '<div class="border-box"><h1>' . $char['name'] . '</h1>';
        echo '<p>Id: '.$char['id'].'</p>';
        echo '<p>Level: ' . $char['level'] . '</p>';
        echo '<p>Gender: ' .$char['gender'].'</p>';
        echo '<p>Class: '.$char['class'].'</p>';
        echo '</div><br/> <br/>';
    
    ?>
</div>
<div class="edit" id="edit">
    <h3>Editing Character</h3>
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
            <input name="update" type='submit' value="Update Character"  class="btn"/>
        </div>
</div>
</div>

<script>
    function deleteChar(id) {
        document.getElementById('charId').value = id;
        document.getElementById("modal").style.display = "block";
    }
    function viewChar(id) {
        document.getElementById('charId').value = id;
        document.getElementById('specify').style.display = "block";

    }
    function editChar(id) {
        document.getElementById('charId').value = id;
        document.getElementById('charId').style.display = "block";
    }
</script>

<?php
include_once('../Footer.php');
?>