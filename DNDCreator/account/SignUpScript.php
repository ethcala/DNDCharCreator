<?php
$name = $_POST['username'];
$pass = $_POST['password'];

require '../data/ConnectorDB.php';

// check for blanks
if(empty($name)|| empty($pass)){
    echo "No blanks allowed";
}else{
    // add user with name and password and then log in
    $addUser = "";
    $addUser = addUsers($name, $pass);

        if($addUser == 1 || $addUser =="1"){
            login($name, $pass);
        }else{
            echo $addUser;
        }
    }

// login function similar to loginscript.php
   function login($username, $password){
    $getUser = getUser($username, $password);
    if ($getUser->num_rows > 0) {
        // output data of each row
        while($row = $getUser->fetch_assoc()) {
            // set cookies w user info
            $user = $row["username"];
            setcookie("user", $user, time() + (86400 * 30), "/");
            setcookie("userid", $row["id"], time() + (86400 * 30), "/");
            header("Location: /");
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