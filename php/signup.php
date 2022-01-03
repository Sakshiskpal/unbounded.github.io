<?php
include_once 'connect.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $number = $_POST['contact'];
    $city = $_POST['city'];
    $password = $_POST['password'];
        $sql = "SELECT * FROM signup WHERE `number` = '$number'";
        $query = mysqli_query($conn,$sql);
        if($query){
            $row = mysqli_num_rows($query);
            if($row>0){
                echo "Number already exists";
            }else{
                $sql = "INSERT INTO `signup` (`name`, `number`, `city`, `password`) values('$name', '$number', '$city', '$password')";
                $query = mysqli_query($conn,$sql);
                if($query){
                    echo "data inserted";
                }
            }
        }
}
