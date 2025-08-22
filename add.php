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

 
?>


<!DOCTYPE html>
<html>
    <body>
 
                    
            
                        <form method = "post">
                            
                                    <select class="form-select bg-light border-0" name = "dep" style="height: 55px;">
                                        <option selected>Choose Department</option>
                                        <option value="EGT">EGT</option>
                                        <option value="BST">BST</option>
                                        <option value="ICT">ICT</option>
                                    </select>
                                
                                
                              
                                    <input type="text" class="form-control" name="name" placeholder="Your Name" style="height: 55px;">
                                
                              
                                    <input type="text" class="form-control " name="te" placeholder="TE number" style="height: 55px;">
                               
                              
                                  
                                        <input type="date" name = "date"
                                            class="form-control"
                                            placeholder="Date" style="height: 55px;">
                                  
                             
                             
                                   
                                        <input type="time" name = "time"
                                            class="form-control"
                                            placeholder="Time" style="height: 55px;">
                               
                                    <button class="btn btn-primary w-100 py-3" type="submit" name = "done"> Done </button>
                              
                        </form>
      
    </body>>
</html>>