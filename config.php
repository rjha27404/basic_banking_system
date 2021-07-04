<?php

$server="localhost";
$user="root";
$pass="";
$db="banking";
$conn= mysqli_connect($server,$user,$pass,$db);

if(!$conn){
    die("failed".mysqli_connect_error());
}
else{
    echo "";
}
?>