<?php
session_start();
include("config.php");
include("firebaseRDB.php");
$db = new firebaseRDB($databaseURL);

$insert = $db ->insert("employee",
[
    "picture" => $_POST['picture'],
    "Lname" => $_POST['Lname'],
    "Fname" => $_POST['Fname'],
    "Mname" => $_POST['Mname'],
    "age" => $_POST['age'],
    "gender" => $_POST['gender'],
    "civilstatus" => $_POST['civilstatus'],
    "email" => $_POST['email'],
    "contactnumber" => $_POST['contactnumber'],
    "sssNo" => $_POST['sssNo'],
    "pagibigNo" => $_POST['pagibigNo']
]);

if($insert){
    $_SESSION['status'] ="Employee Data Added Successfully";
    header('Location: index.php');
}else {
    $_SESSION['status'] ="Some Went Wrong!! Check Backend...";
    header('Location: index.php');
}
?>