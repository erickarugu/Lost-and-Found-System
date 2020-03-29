<?php
ob_start(); // needs to be added here
?>
<html lang="eng">
    <meta charset="utf-8">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>Register | Home</title>
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
    <style>
        #mu-page-breadcrumb .mu-page-breadcrumb-area .breadcrumb{
            background: #748698;
            margin-top: 50px;
            color: white;
        }
        #mu-page-breadcrumb .mu-page-breadcrumb-area .breadcrumb a{
            text-decoration: none;
            transition: .3s ease-in-out;
            color: blue;
        }
        #mu-page-breadcrumb .mu-page-breadcrumb-area .breadcrumb a:hover{
            text-decoration: none;
            color: ;
        }
        .form-section .control-group input{
            background: transparent;
            border: none;
            border-bottom: 2px solid blue;
        }
        .form-section .col-md-6{
            padding: 1rem;
            
        }
        .form-section .col-md-6 img{
            width 80%;
            width: 80%;
            margin-top: 5rem;
        }
    </style>
</head>
<body >

  <!-- Start Navigation header  -->
    <header class="header-top fixed-top">
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <i class="fa fa-envelope mr-2"></i>
                <span>info@Zetech University.ac.ke</span>
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
        
  <!-- End header  -->
  <!-- Start menu -->
  <section id="main-menu">
      <nav class="navbar navbar-expand-lg navbar-light bg-dark text-success fixed-top">
                <img class="navbar-brand" src="./assets/img/logo.png" alt="logo">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Login
                      </a>
                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="superlogin.php">Student</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="admin/admin.php">Admin</a>
                      </div>
                    </li>
                  </ul>
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-success my-2 my-sm-0 p-2" type="submit"><i class="fa fa-search"></i></button>  
                  </form>
                </div>
          </nav>
  </section>
  <!-- End menu -->

 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
   <div class="container">
     <div class="row text-center">
       <div class="col-md-12">
         <div class="mu-page-breadcrumb-area">
           <h2>SIGN UP</h2>
           <ol class="breadcrumb">
            <li>Already have an account? <a href="superlogin.php" class="login-link">Log in</a></li>             
          </ol>
         </div>
       </div>
     </div>
   </div>
 </section>
    <section class="form-section">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-6">
                    <div class="form-container">
                        <form method="POST" action="register.php" name="one" class="">
                        <?php
                            //Process
                            if(isset($_POST['submit']))
                            {
                                $errors = array();
                                $name = $_POST['name']; //prevents types of SQL injection
                                $age= $_POST['age'];
                                $location = $_POST['location'];
                                $idnumber = $_POST['no'];
                                $username = $_POST['username'];
                                $password = $_POST['password'];
                                //echo $name, $age, $location, $idnumber, $username, $password;
                                if(!$name)
                                  {
                                      $errors['name'] = 'Name required';
                                  }
                                if(!$age)
                                  {
                                      $errors['age'] = 'Age required';
                                  }
                                if(!$location)
                                  {
                                      $errors['location'] = 'Location required';
                                  }
                                if(!$idnumber)
                                  {
                                      $errors['idnumber'] = 'School Registration Number required';
                                  }
                                if(!$username)
                                  {
                                      $errors['username'] = 'Username required';
                                  }
                                if(!$password)
                                  {
                                      $errors['password'] = 'Password required';
                                  }

                                if(count($errors) == 0)
                                {
                                  require('conn.php');
                                  if (!$con)
                                  {
                                      die('Could not connect: ' . mysqli_error());
                                  }else{
                                      $insert = "INSERT INTO applications(name, age, location, idnumber, username, password) VALUES('$name', '$age', '$location', '$idnumber', '$username', '$password')";
                                      if(mysqli_query($con, $insert))
                                      {
                                          header("location:superlogin.php");  
                                      }
                                      else
                                      {
                                          echo '<p class= "text-danger">That username is taken. Choose a different one!</p>' ;  
                                      }
                                  }
                                }
                            }
                            ?>
                            <div class="control-group">
                                <label class="control-label"  for="name">YOUR NAME</label>
                                <div class="controls">
                                    <input type="text" name="name" class="form-control" required="required"/>
                                    <?php
                                        if(isset($errors['name']))
                                        {
                                          echo '<p class ="text-danger"> ' . $errors['name'] .' </p>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <!-- <div class="control-group">
                                <label for="sex">SEX</label>
                                <div class="controls gender">
                                    <input type="radio" name="sex" value="male" class="form-control" required="required"/>M
                                    <input type="radio"  name="sex" value="female"class="form-control" required="required"/>F
                                </div>
                            </div> -->
                            <div class="control-group">
                                <label class="control-label" for="location">LOCATION</label>
                                <div class="controls">
                                    <input type="text" name="location" class="form-control" required="required"/>
                                    <?php
                                        if(isset($errors['location']))
                                        {
                                          echo '<p class ="text-danger"> ' . $errors['location'] .' </p>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="age">AGE</label>
                                <div class="controls">
                                    <input type="number" name="age" class="form-control" required="required"/></div>
                                    <?php
                                        if(isset($errors['age']))
                                        {
                                          echo '<p class ="text-danger"> ' . $errors['age'] .' </p>';
                                        }
                                    ?>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="model">SHOOL ID NUMBER</label>
                                <div class="controls">
                                    <input type="text" class="form-control" name="no" required="required"/>
                                    <?php
                                        if(isset($errors['idnumber']))
                                        {
                                          echo '<p class ="text-danger"> ' . $errors['idnumber'] .' </p>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="model">USERNAME</label>
                                <div class="controls">
                                  <input type="text" class="form-control" name="username" required="required"/>
                                  <?php
                                        if(isset($errors['username']))
                                        {
                                          echo '<p class ="text-danger"> ' . $errors['username'] .' </p>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="model">PASSWORD</label>
                                <div class="controls">
                                    <input type="password" class="form-control" name="password" required="required"/>
                                    <?php
                                        if(isset($errors['password']))
                                        {
                                          echo '<p class ="text-danger"> ' . $errors['password'] .' </p>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-lg btn-primary m-2" value="Submit your details" name="submit">
                            <input type="reset" class="btn btn-outline-warning m-2" value="Reset"/>
                        <form>
                    </div>
                </div>
                <div class="col-md-6">
                    <img src="./assets/img/about-us.png" alt="about us" class="img-responsive">
                </div>
            </div>
        </div>
    </section>

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