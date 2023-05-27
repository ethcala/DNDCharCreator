<?php
$name = "";
$pass = "";

if(empty($_POST["name"])|| empty($_POST["pass"])){
    echo "No blanks allowed";
}else{

    $addUser = "";
    $connec = ConnGet();
    if(empty($_POST["user"])){

        $addUser = addUsers($connec, $_POST["name"], $_POST["pass"]);

        if($addUser == 1 || $addUser =="1"){
            login($_POST["name"], $_POST["pass"], $connec);
        }else{
            echo $addUser;
        }
    }
}


   function login($username, $password, $connec){
    $getUser = getUser($connec, $username, $password);
    if ($getUser->num_rows > 0) {
        // output data of each row
        while($row = $getUser->fetch_assoc()) {

            $user = $row["username"];
            $pas = $row["password"];
            setcookie("user", $user, time() + (86400 * 30), "/");
            setcookie("password", $pas, time() + (86400 * 30), "/");
            setcookie("style", "../default.css", time() + (86400 * 30), "/");
            header("Location: http://localhost:5435/");
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