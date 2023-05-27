<?php
DEFINE('DB_USER','admin');
DEFINE('DB_PSWD', 'password');
define('DB_SERVER', 'dnddatabase.cdohwcfgju62.us-west-1.rds.amazonaws.com:3306');
define('DB_NAME', 'DNDDatabase');

function ConnGet(){
    $dbConn = @mysqli_connect(DB_SERVER,DB_USER,DB_PSWD,DB_NAME)
        or die('failed to connect to the db ' .db_server. "::" . DB_NAME. ' : '.mysqli_connect_error());
    return $dbConn;
}

function getUser($username,$password){
    $dbConn = ConnGet();
    $query = "select * from `users` where `username` = '" . $username . "' and `password` = '" . $password ."'" ;
    return @mysqli_query($dbConn, $query);
}

function getCharacter($name){
    $dbConn = ConnGet();
    $query = "select * from `name` where `name` = '" . $name . "'" ;
    return @mysqli_query($dbConn, $query);
}

function getCharacters($user) {
    $query = "select * from `characters` where `userid` = '" . $user . "'";
    return @mysqli_query(ConnGet(), $query);
}

function addCharacter($name,$gender,$class,$race,$level,$HP,$AC,$str,$dex,$cha,$int,$con,$wis,$flaws){
    $dbConn = ConnGet();
    $query = "insert into characters(userid, name, gender, class, race,level, HP, AC,str, dex,cha,int,con, wis,flaws)values('".$_SESSION['userid']."','".$name."','".$gender."','".$class."','".$race."','".$level."','".$HP."','".$AC."','".$str."','".$dex."','".$cha."','".$int."','".$con."','".$wis."'.'".$flaws.")";
    return @mysqli_query($dbConn,$query);
}

function deleteCharacter($name,$id){
    $dbConn = ConnGet();
    $query = "delete from characters where id = '".$id."' and name = '".$name."'";
    return @mysqli_query($dbConn,$query);
}
//we need update but idk how the query should look

function addUsers($username,$password){
    $dbConn = ConnGet();
    $check = checkUser($dbConn, $username);

    if($check->num_rows > 0){
        return "Username already used.";
    }else{
        $query ="insert into users (username, password)values('".$username."','".$password.")";
        return @mysqli_query($dbConn,$query);
    }
}
function checkUser($username){
    $dbConn = ConnGet();
    $query = "select * from `users` where `username` ='".$username."'";
    return @mysqli_query($dbConn, $query);
}
?>