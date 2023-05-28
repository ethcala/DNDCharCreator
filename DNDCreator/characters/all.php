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
        echo '<p>Level ' . $char['level'] . '</p>';
        echo '<button onclick="editChar(' .$char['id']. ')" >Edit</button>';
        echo '<button onclick="deleteChar(' .$char['id']. ')" >Delete</button>';
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

<script>
    function deleteChar(id) {
        document.getElementById('charId').value = id;
        document.getElementById("modal").style.display = "block";
    }
</script>

<?php
include_once('../Footer.php');
?>