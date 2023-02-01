<?php
session_start();
include "db_connect.php";

if($_POST['medicine_category'] == 'Medicine'){
    $category = "Medicine";
}
if($_POST['medicine_category'] == 'Personal_Care'){
    $category = "Personal Care";
}
if($_POST['medicine_category'] == 'Medical_Devices'){
    $category = "Medical Devices";
}
$name = $_POST['medicine_name'];
$generic_name =$_POST['generic_name'];
$D_O_E =$_POST['D_O_E'];
$quantity =$_POST['quantity'];
$quantity_measurement =$_POST['quantity_measurement'];
$price =$_POST['price'];

$sql = "INSERT INTO medicine (name, quantity, medicine_type1, medicine_type2, price, quantity_measurement, expiry_date)
VALUES ('$name', '$quantity', '$category', '$generic_name', '$price', '$quantity_measurement', '$D_O_E')";
$result = mysqli_query($conn, $sql);
if($result){
    $_SESSION['msg'] = "Sucess";
    header('Location:home.php');
}
 ?>