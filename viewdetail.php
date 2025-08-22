<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>FOTMEDI - faculty of technology medical center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&family=Roboto:wght@400;700&display=swap" rel="stylesheet">  

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    
    <!-- Navbar Start -->
    <div class="container-fluid sticky-top bg-white shadow-sm">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0">
                <a href="index.php" class="navbar-brand">
                    <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-clinic-medical me-2"></i>FOTMEDI</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                    <a href="checkapoinment.php" class="nav-item nav-link">Check apoinment</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">View</a>
                            <div class="dropdown-menu m-0">
                                <ul>
                                    <li><a href="viewdetail.php" class="dropdown-item"> View Student Medical Details</a></li>
                                    <li><a href="dailymedical.php" class="dropdown-item"> View Daily Medical Details</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">Add</a>
                            <div class="dropdown-menu m-0">
                                <a href="#update" class="dropdown-item">Student Details</a>
                                <a href="addstudent.php" class="dropdown-item">Daily Medical Details</a>
                            </div>
                        </div>
                        <a href="adminLogin.php" class="nav-item nav-link">Logout</a>

                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- view medical report -->
    <div class="container-fluid bg-primary my-5 py-5">
        <div class="container py-5" >
            <div class="row gx-5">
                <div class="col-lg-6">
                    <div class="bg-white text-center rounded p-5">
                        <h1 class="mb-4">View Student Medical Details</h1>
                        <form method="post">
                            <div class="row g-3">
                                
                                <div class="col-12 col-sm-12">
                                    <input type="text" name = "TENO" class="form-control bg-light border-0" placeholder="TE number" style="height: 55px;">
                                </div>
                                
                                <div class="col-3">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name = "search"> Search </button>
                                </div>
                            </div>
                        </form>

                        </div>
                </div>
            </div>
        </div>

                        <form action="" method="post">
			

                            <table width="100%" border="1" cellpadding="5" cellspacing="5">
                                <thead>
                                    
                                    <tr>
                                        
                                        <th>TE Number</th>
                                        <th>Name</th>
                                        <th>Department</th>
                                        <th>Year</th>
                                        <th>Address</th>
                                        <th>Medical Details</th>
                                        <th>Date</th>
                                        <th>Sick of after come to University</th>
                                        <th>Date get medicine</th>

                                    </tr>

                                </thead>



                                <?php


                                    include("conn.php");

                                    if(isset($_POST['search'])){

                                    $no = $_POST['TENO'];

                        
                                    $sql = "select student.TE_Number, student.Name, student.Department, student.Year, student.Address, 
                                    student.Details, student.Date, daily.Reason, daily.Date from student INNER JOIN daily ON student.TE_Number = '$no' = daily.TE_Number='$no' ";

                                    $query = mysqli_query($con,$sql);


                                    while($row = mysqli_fetch_array($query))
                                    {
                                        ?>

                                        <tr>
                                            
                                            <td> <?php echo $row['TE_Number']; ?></td>

                                            <td> <?php echo $row['Name']; ?></td>

                                            <td> <?php echo $row['Department']; ?></td>

                                            <td> <?php echo $row['Year']; ?></td>

                                            <td> <?php echo $row['Address']; ?></td>

                                            <td> <?php echo $row['Details']; ?></td>

                                            <td> <?php echo $row['Date']; ?></td>

                                            <td> <?php echo $row['Reason']; ?></td>

                                            <td> <?php echo $row['Date']; ?></td>

                                           

                                            

                                            



                                        </tr>
                                        <?php
                                            }
                                        }

                                       
                                        ?>

                                    </table>
                                    </form>
        <!-- Footer Start -->
 <div class="container-fluid bg-dark text-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6" style = "margin-left: 150px;">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Get In Touch</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Dampe-pitipana Road,Homagama,Srilanka.</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>mc@fot.sjp.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>0112548960</p>
                </div>
                <div class="col-lg-3 col-md-6" style = "margin-left: 200px;">
                    <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">Quick Links</h4>
                    <div class="d-flex flex-column justify-content-start">
                        <a class="text-light mb-2" href="index.php"><i class="fa fa-angle-right me-2"></i>Home</a>
                        <a class="text-light mb-2" href="about.php"><i class="fa fa-angle-right me-2"></i>About Us</a>
                        <a class="text-light mb-2" href="service.php"><i class="fa fa-angle-right me-2"></i>Our Services</a>
                        <a class="text-light mb-2" href="team.php"><i class="fa fa-angle-right me-2"></i>Meet The Team</a>
                        <a class="text-light" href="contact.php"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <div class="container-fluid bg-dark text-light border-top border-secondary py-4">
        <div class="container">
            <div class="row g-5">
                <div class="col-md-6 text-center text-md-start">
                    <p class="mb-md-0">&copy; <a class="text-primary" href="#">FOTMEDI</a>. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="mb-0">Designed by <a class="text-primary" href="https://htmlcodex.com">Group14</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
           

                                    </body>
                                    </html>
