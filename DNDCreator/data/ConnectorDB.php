<?php
DEFINE('DB_USER','admin');
DEFINE('DB_PSWD', 'password');
define('DB_SERVER', '127.0.0.1:3306');
define('DB_NAME', 'dnddatabase');

function ConnGet(){
    $dbConn = @mysqli_connect(DB_SERVER,DB_USER,DB_PSWD,DB_NAME)
        or die('failed to connect to the db ' .db_server. "::" . DB_NAME. ' : '.mysqli_connect_error());
    return $dbConn;
}

function getUser($dbConn,$username,$password){
    $query = "select * from `users` where `username` = '" . $username . "' and `password` = '" . $password ."'" ;
    return @mysqli_query($dbConn, $query);
}

function getCharcter($dbConn,$name){
    $query = "select * from `name` where `name` = '" . $name . "'" ;
    return @mysqli_query($dbConn, $query);
}

function addCharacter($dbConn,$name,$gender,$class,$race,$level,$HP,$AC,$str,$dex,$cha,$int,$con,$wis,$flaws){
    $query = "insert into character(name, gender, class, race,level, HP, AC,str, dex,cha,int,con, wis,flaws)values('".$name."','".$gender."','".$class."','".$race."','".$level."','".$HP."','".$AC."','".$str."','".$dex."','".$cha."','".$int."','".$con."','".$wis."'.'".$flaws.")";
    return @mysqli_query($dbConn,$query);
}

function deleteCharacter($dbConn,$name,$id){
    $query = "delete from character where id = '".$id."' and name = '".$name."'";
    return @mysqli_query($dbConn,$query);
}
//we need update but idk how the query should look

function addUsers($dbConn,$username,$password){
    $check = checkUser(ConnGet(), $username);

    if($check->num_rows > 0){
        return "Username already used.";
    }else{
        $query ="insert into users (username, password)values('".$username."','".$password.")";
        return @mysqli_query($dbConn,$query);
    }
}
function checkUser($dbConn, $username){
    $query = "select * from `users` where `username` ='".$username."'";
    return @mysqli_query($dbConn, $query);
}
?>