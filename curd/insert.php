<?php

include 'config.php';
$input_name = $_POST['name'];
$input_price = $_POST['price'];
$input_image = $_FILES['image'];

//echo "<pre>";
print_r($input_image);
//echo "</pre>";

//$imageLocation = $_FILES['image']['type'];
$imageLocation = $_FILES['image']['tmp_name'];
$imageName = $_FILES['image']['name'];
$image_des = "image/".$imageName;

//echo "<br>".'$imageLocation;

move_uploaded_file($imageLocation,$image_des);

$insertQuery = "