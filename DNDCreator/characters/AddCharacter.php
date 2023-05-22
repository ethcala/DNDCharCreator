<?php

?>
<br />
<table>
    <tr>
        <td>
            <input type="text" name="Hero Name" />
        </td>
        <td>
            <input type="text" name="Gender" />
        </td>
        <td>
            <input type="text" name="Class" />
        </td>
        <td>
            <input type="text" name="Race" />
        </td>
        <td>
            <input type="text" name="Flaws" />
        </td>
        <td>
            <input type="text" name="Level" />
        </td>
        <td>
            <input type="text" name="HP" />
        </td>
        <td>
            <input type="text" name="AC" />
        </td>
        <td>
            <input type="text" name="strength" />
        </td>
        <td>
            <input type="text" name="dexterity" />
        </td>
        <td>
            <input type="text" name="charisma" />
        </td>
        <td>
            <input type="text" name="constitution" />
        </td>
        <td>
            <input type="text" name="wisdom" />
        </td>
    </tr>
    <tr>
        <td>
            <button name="create" onclick="addElement()">Create Character</button>
        </td>
    </tr>
</table>
<script>
    function setelem(tag) {
        document.getElementById("sel").value = tag;
    }

    function addElement() {
        let selection = document.getElementById("sel").value;
        let content = document.getElementById("content").value;
        if (selection == null || selection == '' || content == null || content == '') {
            document.getElementById('error').innerHTML = "Could not create new element, fill in all fields.";
        }

        let element = "<" + selection + ">" + content + "</" + selection + ">";
        document.getElementById('preview').innerHTML += element;
    }

</script>