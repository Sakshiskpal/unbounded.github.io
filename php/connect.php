<?php
$server="localhost";
$username="root";
$password="";
$database="unbounded";

$conn=mysqli_connect($server,$username,$password,$database);
if($conn){
    // echo("connection established");
}else{
    echo("connection failed");
}
?>