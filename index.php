<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>Zetech University | Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <!-- Icons -->
    <link rel="stylesheet" href="./assets/css/all.min.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css" rel="stylesheet">   
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">          
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="assets/css/jquery.fancybox.css" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="assets/css/theme-color/default-theme.css" rel="stylesheet">          
    <!-- Main style sheet -->
    <link href="./assets/css/main.css" rel="stylesheet">
    <style>
        .carousel-item {
            height: 70vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
        .carousel-item h2{
            margin-bottom: 100px;
            
        }
        #mu-service{
          margin: 20px 0;
          text-align: center;
        }
        #mu-service .mu-service-single .fa{
          color: #c372c3;
          font-size: 25px;
          padding: 10px 0;
        }
        #mu-service h3, #mu-about-us .mu-title{
          text-transform: uppercase;
          font-weight: 400;
          letter-spacing: 2px;
        }
        #mu-service p{
          text-transform: lowercase;
        }
        #mu-about-us{
          margin: 20px 0;
          padding: 10px;
          background: url('./assets/img/subscribe-bg.png');
          background-position:center;
          color: #fff;
        }
        #mu-about-us .container-fluid img{
          width 80%;
          width: 80%;
          padding-left: 10px;
        }
        #mu-about-us .container-fluid .mu-about-us-right p{
          line-height: 5vh;
        }
        #mu-testimonial .card {
          margin: 50px auto;
        }
        #mu-testimonial .card .carousel-item {
          height: 30vh;
          min-height: 150px;
        }
        #mu-testimonial .card .carousel-caption {
          padding-bottom: 20px;
          right: 0;
          left: 0;
          color: #3d3d3d;
        }
        #mu-testimonial .card .carousel-caption h3 {
          color: #3d3d3d;
        }
        #mu-testimonial .card .carousel-caption p {
          line-height: 30px;
        }
        #mu-testimonial .card .carousel-caption .col-sm-3 {
          display: flex;
          align-items: center;
        }
        #mu-testimonial .card .carousel-caption .col-sm-9 {
          text-align: left;
        }
        
    </style>
  </head>
  <body> 
  <!-- Start Navigation header  -->
    <header class="header-top fixed-top">
      <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 email-phone">
                <i class="fa fa-envelope mr-2"></i>
                <span>info@zetechniversity.ac.ke</span>
                <i class="fa fa-phone mr-1 ml-2"></i>
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
                      <button class="btn btn-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                    </form>
                  </div>
            </nav>
    </section>
    <!-- End menu -->

    <!-- Slider section -->
    <section>
                  <div id="carouselExampleIndicators" class="carousel slide mt-5" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                      <!-- Slide One - Set the background image for this slide in the line below -->
                      <div class="carousel-item active" style="background-image: url('./assets/img/img-1.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                        <!-- <h4 class="display-4 mb-2">Welcome To ZETECH UNIVERSITY lost and found system</h4>
                        
                        <h2>We will help you recover your lost item</h2> -->
                        </div>
                      </div>
                      <!-- Slide Two - Set the background image for this slide in the line below -->
                      <div class="carousel-item" style="background-image: url('./assets/img/img-2.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                        <!-- <h4 class="display-4 mb-2">Join Us</h4>
                          
                        <h2>Post lost item</h2> -->
                        </div>
                      </div>
                      <!-- Slide Three - Set the background image for this slide in the line below -->
                      <div class="carousel-item" style="background-image: url('./assets/img/img-3.jpg')">
                        <div class="carousel-caption d-none d-md-block">
                        <!-- <h4 class="display-4 mb-2">Exclusively For lost item</h4>
                        <h2>Learn the system</h2> -->
                        </div>
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                  </div>
              
      </section>
    <!-- end slider section -->
    
    <!-- Start service  -->
      <section id="mu-service">
        <div class="container">
          <div class="row">
                <!-- Start single service -->
                <div class="col-md-4 mu-service-single">
                <span class="fa fa-users"></span>
                  <h3>Expert Teachers</h3>
                  <p>ZETECH UNIVERSITY HAS BEST LECTURERS WHO ARE VERY EQUIPPED <BR> <BR></p>
                </div>
                <!-- End single service -->
                <!-- Start single service -->
                <div class="col-md-4 mu-service-single">
                <span class="fa fa-table"></span>
                  <h3>Best facilities</h3>
                  <p>ZETECH UNIVERSITY WITH ITS LABS AND LIBRARY , ENABLES STUDENTS TO DO RESEARCH WORK</p>
                </div>
                <!-- End single service -->
                <!-- Start single service -->
                <div class="col-md-4 mu-service-single">
                <span class="fa fa-book"></span>
                  <h3>Learn Online</h3>
                  <p>ZETECH UNIVERSITY HAS ALSO SCHOOL OF DISTANCE LEARNING, YOU CAN LEARN FROM ANY SPOT!</p>
                </div>
          </div>
        </div>
      </section>
  <!-- End service  -->

  <!-- Start about us -->
    <section id="mu-about-us">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="mu-about-us-area">           
              <div class="row">
                <div class="col-lg-6 col-md-6">
                  <img src="./assets/img/about-us.png" alt="about us" class="img-responsive">
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="mu-about-us-right">
                    <!-- Start Title -->
                    <div class="mu-title mb-5">
                      <h2>About Us</h2>              
                    </div>
                    <!-- End Title -->
                    <p>Most campuses, Zetech University not an exception have issues when comrades loose their items. The students need to write on posters sticking them on the notice board, in order to create awareness of their lost items . This is not the best way to find the lost items, because not all students will read the notice board .Someone can remove the posters. It also involves a lot of paperwork and is a tiresome way because you manually need to stick posters in every noticeboard. The online application system seeks to address the above issues. With this system in place, the student can search for their lost items in an easier way and also post the lost items. The system will contain a guide page to enhance the users to easily operate the system. With this system in place the students can search the lost items at the comfort of their homes, hostels, or even as they do their day to day activities. With the use of this system in reporting lost items, will increase the technology power in the Kenyans education hence achievement of VISION 2030.
                  </div>
                </div>
                <div class="col-lg-6 col-md-6">
                  <div class="mu-about-us-right">
                  </a>                
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  <!-- End about us -->
  <!-- Start about us counter -->
  <!-- End features section -->
  <!-- Start latest course section -->
  <!-- End latest course section -->
  <!-- Start our teacher -->
  <!-- End our teacher -->

  <!-- Start testimonial -->
    <section id="mu-testimonial">
      <div class="card col-md-6 mt-2">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="100000">
              <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
            <div class="w-100 carousel-inner" role="listbox">
              <div class="carousel-item active">
                <div class="bg"></div>
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-sm-3">
                      <img src="https://gravatar.com/avatar/b35505a8799ee6ec3cba72ac4c5185be?s=80&d=https://codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png" alt="" class="rounded-circle">
                    </div>
                    <div class="col-sm-9">
                      <h3>Gives me hope</h3>
                      <small>Well incremented. Comes with recommended workout. I'm using it to help with bladder leakage issues that I've been experiencing since a recent vasectomy.</small>
                      <small class="smallest mute">- willi</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="bg"></div>
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-sm-3">
                      <img src="https://gravatar.com/avatar/b35505a8799ee6ec3cba72ac4c5185be?s=80&d=https://codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png" alt="" class="rounded-circle">
                    </div>
                    <div class="col-sm-9">
                      <h3>You will love it.</h3>
                      <small>Great product. It came in the mail packaged very well. The package the product comes in is very nice. Product itself, has worked very well.</small>
                      <small class="smallest mute">- Amazon Customer</small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div class="bg"></div>
                <div class="carousel-caption">
                  <div class="row">
                    <div class="col-sm-3">
                      <img src="https://gravatar.com/avatar/b35505a8799ee6ec3cba72ac4c5185be?s=80&d=https://codepen.io/assets/avatars/user-avatar-80x80-bdcd44a3bfb9a5fd01eb8b86f9e033fa1a9897c3a15b33adfc2649a002dab1b6.png" alt="" class="rounded-circle">
                    </div>
                    <div class="col-sm-9">
                      <h3>Velvet pouch!</h3>
                      <small>Just as describe, different weights gives you several ways to exercise. I especially like the velvet pouch so I can place in my drawer.</small>
                      <small class="smallest mute">- Amazon Customer</small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
            
          </div>
      </div>
    </section>
  <!-- End testimonial -->

  <!-- Start from blog -->
  <!-- End from blog -->
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
                  <p>www.LOSTFOUND.comxa.com</p>
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