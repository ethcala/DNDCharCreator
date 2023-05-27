<?php
$name = $_POST['username'];
$pass = $_POST['password'];

require '../data/ConnectorDB.php';

if(empty($name)|| empty($pass)){
    echo "No blanks allowed";
}else{

    $addUser = "";
    $addUser = addUsers($name, $pass);

        if($addUser == 1 || $addUser =="1"){
            login($name, $pass);
        }else{
            echo $addUser;
        }
    }


   function login($username, $password){
    $getUser = getUser($username, $password);
    if ($getUser->num_rows > 0) {
        // output data of each row
        while($row = $getUser->fetch_assoc()) {

            $user = $row["username"];
            $pas = $row["password"];
            setcookie("user", $user, time() + (86400 * 30), "/");
            setcookie("userid", $row["userid"], time() + (86400 * 30), "/");
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