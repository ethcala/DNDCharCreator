<?php
DEFINE('DB_USER','admin');
DEFINE('DB_PSWD', 'password');
define('DB_SERVER', 'dnddatabase.cdohwcfgju62.us-west-1.rds.amazonaws.com:3306');
define('DB_NAME', 'DNDDatabase');
session_start();

function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) .
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}

function ConnGet(){
    $dbConn = @mysqli_connect(DB_SERVER,DB_USER,DB_PSWD,DB_NAME)
        or die('failed to connect to the db ' .db_server. "::" . DB_NAME. ' : '.mysqli_connect_error());
    return $dbConn;
}

// get user by username and password
function getUser($username,$password){
    $dbConn = ConnGet();
    $query = "select * from `users` where `username` = '" . $username . "' and `password` = '" . $password ."'" ;
    return @mysqli_query($dbConn, $query);
}

// get character by id
function getCharacter($id){
    $dbConn = ConnGet();
    $query = "select * from `characters` where id = '" . $id . "'" ;
    return @mysqli_query($dbConn, $query);
}

// get character by id
function GetSingle($id){
    $dbConn = ConnGet();
    $query = "select * from characters where id=".$id."";
    return @mysqli_query($dbConn,$query);
}

// get character by user id
function getCharacters() {
    $userid = $_SESSION['userid'];
    $query = "select * from `characters` where userid=" . $_COOKIE['userid'];
    return @mysqli_query(ConnGet(), $query);
}

// add character with user id and info
function addCharacter($name,$gender,$class,$race,$level,$HP,$AC,$str,$dex,$cha,$int,$con,$wis,$flaws){
    $dbConn = ConnGet();
    $query = "insert into characters(userid, `name`, gender, class, race, `level`, HP, AC, strength, dexterity, charisma,intelligence,constitution, wisdom,flaws)values(".$_COOKIE['userid'].",'".$name."','".$gender."','".$class."','".$race."',".$level.",".$HP.",".$AC.",".$str.",".$dex.",".$cha.",".$int.",".$con.",".$wis.",'".$flaws."')";
    return @mysqli_query($dbConn,$query);
}

// update character by id with info
function updateCharacter($charId, $name,$gender,$class,$race,$level,$HP,$AC,$str,$dex,$cha,$int,$con,$wis,$flaws){
    $dbConn = ConnGet();
    $query = "update characters set name='" .$name. "', gender='" .$gender. "', class='" .$class. "', race='" .$race. "', `level`=" .$level. ", hp=" .$HP. ", ac=" .$AC. ", strength=" .$str. ", dexterity=" .$dex. ", charisma=" .$cha. ", intelligence=" .$int. ", constitution=" .$con. ", wisdom=" .$wis. ", flaws='" .$flaws. "' where id=" .$charId;
    return @mysqli_query($dbConn, $query);
}

// delete character by name and id
function deleteCharacter($name,$id){
    $dbConn = ConnGet();
    $query = "delete from characters where id = '".$id."' and name = '".$name."'";
    return @mysqli_query($dbConn,$query);
}

// add user by username and password
function addUsers($username,$password){
    $dbConn = ConnGet();
    $check = checkUser($username);

    if($check->num_rows > 0){
        return "Username already used.";
    }else{
        $query ="insert into users (username, password) values('".$username."','".$password."')";
        return @mysqli_query($dbConn,$query);
    }
}

// get user by username
function checkUser($username){
    $dbConn = ConnGet();
    $query = "select * from `users` where `username` ='".$username."'";
    return @mysqli_query($dbConn, $query);
}
?>