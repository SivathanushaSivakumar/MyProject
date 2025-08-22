<?php
    error_reporting(E_ERROR | E_PARSE);

    include("conn.php");

    if(isset($_POST['done']))
    {
        $te = $_POST['te'];
        $name = $_POST['name'];
        $department = $_POST['dep'];
        $year = $_POST['year'];
        $res = $_POST['res'];
    }

    $query = "insert into daily(TE_Number, Name, Department, Year, Reason) values('$te', '$name','$department', '$year', '$res')";

    $query_run = mysqli_query($con, $query);

    header("location: addstudent.php");

    
?>
