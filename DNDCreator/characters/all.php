<?php
require '../data/ConnectorDB.php';
$characters = getCharacters($_COOKIE['userid']);
include_once('../Header.php');

echo '<br/><h1>Characters</h1>';

echo '<div class="flex">';
function mapThruArray($chars) {
    foreach ($chars as $char) {
        echo '<div class="border-box"><h1>' . $char['name'] . '</h1>';
        echo '<p>Level: ' . $char['level'] . '</p>';
        echo '<p>Race: ' .$char['race'].'</p>';
        echo '<p>Class: '.$char['class'].'</p>';
        echo '<div class="row">';
        echo '<form method="post" action="updatecharacter.php"><input type="hidden" id="charId" name="charId" value='.$char['id'].'/><button type="submit">Edit Character</button></form>';
        echo '<button onclick="deleteChar(' .$char['id']. ')" >Delete</button>';
        echo '<form method="post" action="viewcharacter.php"><input type="hidden" id="charId" value='.$char['id'].'/><button type="submit">View Character</button></form>';
        echo '</div>';
        echo '</div><br/> <br/>';
    }
}

if($characters->num_rows <= 0) {
    echo '<p>No characters found.</p>';
} else {
    echo mapThruArray($characters);
};
?>

<div class="modal border-box" id="modal">
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
<br/>

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
        document.getElementById('edit').style.display = "block";
    }
</script>

<?php
include_once('../Footer.php');
?>