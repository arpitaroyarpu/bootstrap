<?php

$serverName="localhost";
$userName="root";
$password="";
$dbName="php";

$conn = mysqli_connect($serverName,$userName,$password,$dbName);

if(!$conn){
    die("connection failed!".mysqli_connect_error()); //kajta  kore page ta die korte dibe tai die function

}

else{
     echo "<script>alert('DB connected!!')</script>";
}