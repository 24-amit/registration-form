<?php

$conn = mysqli_connect("localhost", "root", "", "registration_db");

$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$gender = $_POST['gender'];
$address = $_POST['address'];

$sql = "INSERT INTO users(fullname,email,phone,gender,address)
VALUES('$fullname','$email','$phone','$gender','$address')";

if(mysqli_query($conn, $sql)){
    echo "Data Saved Successfully";
} else {
    echo "Error";
}

?>
