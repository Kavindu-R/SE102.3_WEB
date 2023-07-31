<?php

$conn = mysqli_connect("localhost","root","","university2");

if (!$conn){
    die("Connection Failed: ".mysqli_connect_error());
}

$id = $_REQUEST['id'];
$name = $_REQUEST['name'];
$emai = $_REQUEST['email'];
$password = $_REQUEST['password'];

$sql = "INSERT INTO STUDENTS (id,name,email,password)
VALUES ('" . $id . "','" . $name . "','" . $emai . "','" . $password . "')";

if($conn -> query($sql) === TRUE){
    echo "New User Created Succesfully";
}
else{
    echo "Error" .$sql . "<br>" . $conn->error;
}
?>


