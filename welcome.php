<?php
session_start();
?>
<!DOCTYPE  html>
<html>
<head>
<meta charset="utf-8">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Home | Page</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Font awesome -->
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <!-- Icons -->
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">  
    <!-- Main style sheet -->
    <link href="assets/css/main.css" rel="stylesheet">    
    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,300,300italic,500,700' rel='stylesheet' type='text/css'>
    <style>
        .top-section{
            padding-top: 100px;
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
      <nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top text-success">
                <img class="navbar-brand" src="./assets/img/logo.png" alt="logo">
                <div class="content ml-auto">
                    <ul>
                        <a href="logout.php"><button class="btn btn-info">Log Out <i class="fa fa-lock"></i></button></a>
                    </ul>
                </div>
          </nav>
  </section>
  <!-- End menu -->
<!-- Welcome section -->
    <div class="container text-center mb-4 top-section">
        <button class="btn btn-outline-info btn-lg" onClick="parent.location='form.php'">Post Found Item</button>
        <h2 class="display-5 mt-2 text-success">LIST OF POSTED ITEMS</h2>
    </div>
<!-- End welcome section -->

  <!-- The table section -->
  <div class="container-fluid mb-4">
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
                            require 'conn.php';
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
  <!-- end table section -->

    <!-- Start footer -->
    <footer id="mu-footer" class="bg-dark">
        <!-- start footer top -->
        <div class="mu-footer-top">
        <div class="container">
            <div class="mu-footer-top-area">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-footer-widget">
                    <h4>Information</h4>
                    <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="">Features</a></li>
                    <li><a href="">Course</a></li>
                    <li><a href="">Event</a></li>
                    <li><a href="">Sitemap</a></li>
                    <li><a href="">Term Of Use</a></li>
                    </ul>
                </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-footer-widget">
                    <h4>Student Help</h4>
                    <ul>
                    <li><a href="">Get Started</a></li>
                    <li><a href="#">My Questions</a></li>
                    <li><a href="">Download Files</a></li>
                    <li><a href="">Latest Course</a></li>
                    <li><a href="">Academic News</a></li>                  
                    </ul>
                </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-footer-widget">
                    <h4>Newsletter</h4>
                    <p>Get latest updates, news & academic offers</p>
                    <form class="form-inline my-2 my-lg-0 mu-subscribe-form">
                        <input type="email" class="form-control mr-sm-2 mb-2" placeholder="Type your Email">
                        <button class="btn btn-md btn-info mu-subscribe-btn" type="submit">Subscribe!</button>
                    </form>               
                </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3">
                <div class="mu-footer-widget">
                    <h4>Contact</h4>
                    <address>
                    <p>P.O. Box 320, Nairobi
                    <p>Phone: 0789220330 </p>
                    <p>Website: www.LOSTFOUND.comxa.com</p>
                    <p>Email: info@lostfound.or</p>
                    </address>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
        <!-- end footer top -->
        <!-- start footer bottom -->
        <div class="mu-footer-bottom text-center">
        <div class="container">
            <div class="mu-footer-bottom-area">
            <p>&copy; All Right Reserved. Designed by <a href="#" rel="nofollow">JOHN NDUNGU</a></p>
            </div>
        </div>
        </div>
        <!-- end footer bottom -->
    </footer>
    <!-- End footer -->

  <!-- jQuery library -->
  <script src="./assets/js/jquery.3.4.1.js"></script>  
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="./assets/js/bootstrap.min.js"></script>   
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Counter -->
  <script type="text/javascript" src="assets/js/waypoints.js"></script>
  <script type="text/javascript" src="assets/js/jquery.counterup.js"></script>  
  <!-- Mixit slider -->
  <script type="text/javascript" src="assets/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="assets/js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="assets/js/main.js"></script>
</body>
</html>