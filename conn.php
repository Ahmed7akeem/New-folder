<?php
$dbname="qady";
$sname="localhost";
$uname="root";
$pass="";

$conn=mysqli_connect($sname,$uname,$pass,$dbname);

if(!$conn){
    echo'coonection f';
    exit();
}
?>