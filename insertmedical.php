<?php
error_reporting(E_ERROR | E_PARSE);

include("conn.php");

if(isset($_POST['upload']))
{
    $te = $_POST['te'];
    $name = $_POST['name'];
    $department = $_POST['department'];
    $year = $_POST['year'];
    $address = $_POST['address'];
    $details = $_POST['details'];
}

$query = "insert into student(TE_Number, Name, Department, Year, Address, Details) values('$te', '$name','$department', '$year', '$address', '$details')";

$query_run = mysqli_query($con, $query);

header("location: admin.php");


?>