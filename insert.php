<?php
// error_reporting(E_ERROR | E_PARSE);

include("conn.php");

if(isset($_POST['done']))
{
 $te = $_POST['te'];
 $name = $_POST['name'];
 $department = $_POST['dep'];
 $date = $_POST['date'];
 $time = $_POST['time'];
}

$query = "insert into apoinment(TE_Number, Name, Department, Date, Time) values('$te', '$name','$department', '$date', '$time')";

$query_run = mysqli_query($con, $query);

header("location: appointment.php");
?>
