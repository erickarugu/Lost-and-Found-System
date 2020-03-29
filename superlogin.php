<?php
ob_start(); // needs to be added here
?>
<html>
    <head>
    <meta charset="utf-8">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
    <title>SuperLogin | Home</title>
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
            margin-top:10px;
        }
        #mu-page-breadcrumb .mu-page-breadcrumb-area .breadcrumb .register-link{
            text-decoration: none;
        }
        #mu-page-breadcrumb .mu-page-breadcrumb-area .breadcrumb ol li{
            align-text: center;
        }
        .form-section .control-group input{
            background: transparent;
            border: none;
            border-bottom: 2px solid blue;
            
        }
        .form-section .col-md-6{
            padding: 1rem;
            
        }
        .form-section{
            margin-top: 20px;
        }
        .page-content .col-md-6 img{
            width 70%;
            width: 70%;
            padding-left: 10px;
        }
    </style>
    </head>
    <body>
        <!-- Start Navigation header  -->
        <header class="header-top">
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
        <!-- Breadcrumb section -->
        <section id="mu-page-breadcrumb">
            <div class="container">
                <div class="row text-center">
                <div class="col-md-12">
                    <div class="mu-page-breadcrumb-area"> 
                        <ol class="breadcrumb">
                            <li class="text-white"><a href="index.php"><i class="fa fa-arrow-left mr-5"></i></a>Don't have an account? <a href="register.php" class="register-link">Register</a></li>              
                        </ol>
                    </div>
                </div>
                </div>
            </div>
        </section>
        <!-- end breadcrumb secton -->
        <!-- Page content section -->
        <section class="page-content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form action="superlogin.php" class="form-group form-section" method="POST">     
                            <?php
                              if(isset($_POST['submit']))
                              {
                                  $errors = array();
                                  $user=$_POST['user'];
                                  $pass=$_POST['pass'];
                                  if(!$user)
                                  {
                                      $errors['user'] = 'Username required';
                                  }
                                  if(!$pass)
                                  {
                                      $errors['pass'] = 'Password required';
                                  }
                                  if(count($errors) == 0)
                                  {
                                        require_once('conn.php');
                                        $select = "SELECT * FROM applications WHERE username = '$user' AND password = '$pass'";
                                        $run_select = mysqli_query($con, $select);
                                          if(mysqli_num_rows($run_select) > 0)
                                          {
                                            $_SESSION['user']=$user;
                                            header("location:welcome.php");
                                            exit();
                                          }
                                          else
                                          {
                                            echo '<p class= "text-danger">Invalid Username or Password</p>' ;  
                                          }
                                  }
                              }
                            ?>
                            <div class="control-group">
                                <label class="control-label" for="model">Username</label>
                                <div class="controls">
                                    <input type="text" class="form-control" name="user" required="required"/>
                                    <?php
                                    if(isset($errors['user'])){
                                        echo '<p class ="text-danger"> ' . $errors['user'] .' </p>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label" for="model">Password</label>
                                <div class="controls">
                                    <input type="password" class="form-control" name="pass" required="required"/>
                                    <?php
                                    if(isset($errors['pass'])){
                                        echo '<p class ="text-danger"> ' . $errors['pass'] .' </p>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-lg btn-outline-success m-2">Log In <i class="fa fa-unlock"></i></button>
                            <button type="button" name="home" class="btn btn-lg btn-outline-primary" onClick="parent.location='index.php'">Home <i class="fa fa-home"></i></button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="./assets/img/banner/banner-image.png" alt="about us" class="img-responsive">
                    </div>
                </div>
            </div>
        </section>
        <!-- End page content section -->
    </body>
</html>