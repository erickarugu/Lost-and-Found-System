<?php
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <!-- Favicon -->
        <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title>Admin Panel </title>
        <!-- Icons -->
        <link rel="stylesheet" href="../assets/css/all.min.css">
        <!-- Bootstrap -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet"> 
        <!-- Main Stylesheet -->
        <link href="../assets/css/main.css" rel="stylesheet">
        <style>
            #users-section, #items-section{
                margin-top: 100px;
            }
            hr{
                border: 2px solid #c372c3;
            }
        </style>
    </head>
    <body>
            <!-- The header section -->
            <header class="header-top fixed-top">
                <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <i class="fa fa-envelope mr-2"></i>
                            <span>info@zetechuniversity.ac.ke</span>
                            <i class="fa fa-phone mr-2 ml-3"></i>
                            <span>078949483</span>
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12 social-links ml-auto">
                            <ul>
                                <li class=""><a class="" href="#"><span class="fab fa-twitter"></span></a></li>
                                <li class=""><a class="" href="#"><span class="fab fa-google-plus"></span></a></li>
                                <li class=""><a class="" href="#"><span class="fab fa-linkedin"></span></a></li>
                                <li class=""><a class="" href="#"><span class="fab fa-youtube"></span></a></li>
                            </ul>
                        </div>
                </div>
            </header>
            <!-- End header section -->

            <!-- Navigation menu -->
            <section id="main-menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-dark text-success fixed-top">
                        <img class="navbar-brand" src="../assets/img/logo.png" alt="logo">
                        <div class="content ml-auto">
                            <ul>

                                <a href="../logout.php"><button class="btn btn-info">Log Out <i class="fa fa-lock"></i></button></a>
                            </ul>
                        </div>
                </nav>
            </section>
            <!-- End menu -->

            <!-- The user table section -->
            <section id="users-section">
                <div class="container text-center">
                    <div class="">
                        <h3 class="text-success">REGISTERED USERS</h3>  
                    </div>
                    <div><hr class=""></div>
                </div>
                <div class="container-fluid mt-4">
                    <div class="row">
                            <div class="col-12 mx-auto rounded shadow">

                                <!-- Fixed header table-->
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col" class=""><i class="fa fa-user-shield"> Name</th>
                                                <th scope="col" class=""><i class="fa fa-calculator"> Age</th>
                                                <th scope="col" class=""><i class="fa fa-map-marker"> Location</th>
                                                <th scope="col" class=""><i class="fa fa-address-book"> Username</th>
                                                <th scope="col" class=""><i class="fa fa-key"> Password</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            require '../conn.php';
                                            $qeury = "SELECT * FROM applications";
                                            $run=mysqli_query($con, $qeury);
                                            while($row=mysqli_fetch_array($run))
                                            {
                                            $name=$row['name'];
                                            $age=$row['age'];
                                            $location=$row['location'];
                                            $username=$row['username'];
                                            $password=$row['password'];
                                        ?>  <tr>
                                                <td scope="col" class=""><?php echo $name;?> </td>
                                                <td scope="col" class=""><?php echo $age;?> </td>
                                                <td scope="col" class=""><?php echo $location;?> </td>
                                                <td scope="col" class=""><?php echo $username;?> </td>
                                                <td scope="col" class=""><?php echo $password;?> </td>
                                                <td scope="col" class=""><a href="#"><i class="fa fa-pen text-danger"></i></a></td>
                                                
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <thead>
                                            <tr>
                                                <th scope="col" class=""><i class="fa fa-user-shield"> Name</th>
                                                <th scope="col" class=""><i class="fa fa-calculator"> age</th>
                                                <th scope="col" class=""><i class="fa fa-map-marker"> Location</th>
                                                <th scope="col" class=""><i class="fa fa-address-book"> Username</th>
                                                <th scope="col" class=""><i class="fa fa-key"> Password</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- end table section -->

            <!-- The user table section -->
            <section id="items-section">
                <div class="container text-center">
                    <div class="">
                        <h3 class="text-success">POSTED ITEMS</h3>  
                    </div>
                    <div><hr class=""></div>
                </div>
                <div class="container-fluid mt-4">
                    <div class="row">
                            <div class="col-12 mx-auto rounded shadow">

                                <!-- Fixed header table-->
                                <div class="table-responsive">
                                    <table class="table table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col" class=""><i class="fa fa-address-book"> Name</th>
                                                <th scope="col" class=""><i class="fa fa-comments"> Description</th>
                                                <th scope="col" class=""><i class="fa fa-map-marker"> Location</th>
                                                <th scope="col" class=""><i class="fa fa-calendar"> date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                            require '../conn.php';
                                            $qeury = "SELECT * FROM lostitems";
                                            $run=mysqli_query($con, $qeury);
                                            while($row=mysqli_fetch_array($run))
                                            {
                                            $name=$row['name'];
                                            $description=$row['description'];
                                            $location=$row['location'];
                                            $date=$row['date'];
                                        ?>  <tr>
                                                <td scope="col" class=""><?php echo $name;?> </td>
                                                <td scope="col" class=""><?php echo $description;?> </td>
                                                <td scope="col" class=""><?php echo $location;?> </td>
                                                <td scope="col" class=""><?php echo $date;?> </td>
                                                <td scope="col" class=""><a href="#"><i class="fa fa-pen text-danger"></i></a></td>
                                                
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                        <thead>
                                            <tr>
                                                <th scope="col" class=""><i class="fa fa-address-book"> Name</th>
                                                <th scope="col" class=""><i class="fa fa-comments"> Description</th>
                                                <th scope="col" class=""><i class="fa fa-map-marker"> Location</th>
                                                <th scope="col" class=""><i class="fa fa-calendar"> date</th>
                                            </tr>
                                        </thead>
                                        </table>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- end table section -->
    </body>
</html>