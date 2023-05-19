<?php
include_once "ConnectorDB.php";
header('Content-Type: application/json');

$myJson = "";
$row = null;
$myGet;

if(array_key_exists("userId",$_Get)==true){
    $myDbConn = ConnGet();
    $myGet = $_GET["userId"];

    if($myGet){
        $row = mysqli_fetch_array($dataSet);
        $myJson = '[{"username":"'.$row['username'].'","password":"'.$row['password'].'"}]';
    }
    mysqli_close($myDbConn);
}
?>