<?php
require '../data/ConnectorDB.php';
$characters = getCharacters();
include_once('../Header.php');

echo '<br/><h1>Characters</h1>';

echo '<div class="flex">';
function mapThruArray($chars) {
    foreach ($chars as $char) {
        echo '<div class="border-box"><h1>' . $char['name'] . '</h1>';
        echo '<p>Level: ' . $char['level'] . '</p>';
        echo '<p>Race: ' .$char['race'].'</p>';
        echo '<p>Class: '.$char['class'].'</p>';
        echo '<form method="post" action="updatecharacter.php"><input type="hidden" id="charId" name="charId" value='.$char['id'].'/><button type="submit">Edit Character</button></form>';
        echo '<button onclick="deleteChar(' .$char['id']. ')" >Delete</button>';
        echo '<form method="post" action="viewcharacter.php"><input type="hidden" id="charId" name="charId" value='.$char['id'].'/><button type="submit">View Character</button></form>';
        echo '</div>';
    }
}

if($characters->num_rows <= 0) {
    echo '<p>No characters found.</p>';
} else {
    echo mapThruArray($characters);
};
echo '</div>';
?>
<br/>
<div class="modal border-box" id="modal">
    <h3>Confirm delete</h3>
    <p>Enter character name here to delete:</p>
    <form action="del_char.php" method="post">
        <input type="hidden" name="charId" id="charIdforpost" />
        <input type="text" name="charName" id="charName" />
        <button type="submit">Delete</button>
    </form>
</div>
<?php
include_once('../Footer.php');
?>
<br/>

<script>
    function deleteChar(id) {
        document.getElementById('charIdforpost').value = id;
        document.getElementById("modal").style.display = "block";
    }
</script>
