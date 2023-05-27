<?php
$name = "";
$pass = "";
require "../data/ConnectorDB.php";

if(empty($_POST["username"])|| empty($_POST["password"])){
    echo "No blanks allowed";
}else{
    $res = addUsers($_POST['username'], $_POST['password']);
    login($_POST['username'], $_POST['password']);
    echo $res;
}


   function login($username, $password){
    $getUser = getUser($username, $password);
    if ($getUser->num_rows > 0) {
        // output data of each row
        while($row = $getUser->fetch_assoc()) {

            $user = $row["username"];
            $pas = $row["password"];
            setcookie("user", $user, time() + (86400 * 30), "/");
            $_SESSION['user'] = $user;
            header("Location: http://localhost:39482");
            exit();
        }

    }
}
   function inputcheck($data) {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
   }

   include_once "Signup.php";

?>