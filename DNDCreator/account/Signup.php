<?php

?>
<p class="error">* required field</p>

<form action="signupscript.php" method="post">
    Username: <input type="text" name="username" value="<?php echo $name;?>"/><br />
    <span class="error">*</span>
<br>
    Password: <input type="text" name="password" value="<?php echo $pass;?>"/><br />
    <span class="error">*</span>
    <br/>
    <input type="submit"/>
    </form>
<br/>


