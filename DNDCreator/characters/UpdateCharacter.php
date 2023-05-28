<?php
require '../data/ConnectorDB.php';
$chars = getCharacter($_POST['charId']);
include_once('../Header.php');
?>

<div class="edit" id="edit">
    <h3>Editing Character</h3>
     <div class="form-container">
        <div class="border-box">
            <h3>Basics</h3>
            <form action="update_char.php" method="post">
                <label for="name">Name</label>
                <?php
                while($char = $chars->fetch_assoc()) {
                    echo '<input type="hidden" name="charId" id="charId" value="'.$char['id'].'"/>';
                    echo '<input type="text" name="name" id="name" value="'.$char['name'].'"/>';
                    echo '<label for="gender">Gender</label>';
                    echo '<input type="text" name="gender" id="gender" value="'.$char['gender'].'"/>';
                    echo '<label for="class">Class</label>';
                    echo '<input type="text" name="class" id="class" value="'.$char['class'].'"/>';
                    echo '<label for="race">Race</label>';
                    echo '<input type="text" name="race" id="race" value="'.$char['race'].'"/>';
                    echo '<label for="flaws">Flaws</label>';
                    echo '<input type="text" name="flaws" id="flaws" value="'.$char['flaws'].'"/>';
                    echo '<label for="flaws">Level</label>';
                    echo '<input type="number" name="level" id="level" value="'.$char['level'].'"/>';
                    echo '<label for="hp">HP</label>';
                    echo '<input type="text" name="hp" id="hp" value="'.$char['hp'].'"/>';
                    echo '<label for="ac">AC</label>';
                    echo '<input type="text" name="ac" id="ac" value="'.$char['ac'].'"/>';
                    echo '</div><br /><div class="border-box"><h3>Attributes</h3>';
                    echo '<label for="strength">Strength</label>';
                    echo '<input type="number" name="strength" id="strength" value="'.$char['strength'].'"/>';
                    echo '<label for="constitution">Constitution</label>';
                    echo '<input type="number" name="constitution" id="constitution" value="'.$char['constitution'].'"/>';
                    echo '<label for="dexterity">Dexterity</label>';
                    echo '<input type="number" name="dexterity" id="dexterity" value="'.$char['dexterity'].'"/>';
                    echo '<label for="charisma">Charisma</label>';
                    echo '<input type="number" name="charisma" id="charisma" value="'.$char['charisma'].'"/>';
                    echo '<label for="intelligence">Intelligence</label>';
                    echo '<input type="number" name="intelligence" id="intelligence" value="'.$char['intelligence'].'"/>';
                    echo '<label for="wisdom">Wisdom</label>';
                    echo '<input type="number" name="wisdom" id="wisdom" value="'.$char['wisdom'].'"/>';
                }
                ?>
                <button type="submit">Update</button>
            </form>
        </div>
    </div>
</div>