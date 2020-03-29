<html>
    <head>
        <meta charset="utf-8">
        <!-- Favicon -->
        <link rel="shortcut icon" href="../assets/img/favicon.ico" type="image/x-icon">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    
        <title>Admin Login </title>
        <!-- Icons -->
        <link rel="stylesheet" href="../assets/css/all.min.css">
        <!-- Bootstrap -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet"> 
        <!-- Main Stylesheet -->
        <link href="../assets/css/main.css" rel="stylesheet">
        <!-- embedded css -->
        <style>
            body{
                background: url('../assets/img/img-2.jpg');
            }
            #mu-page-breadcrumb{
                margin-top: 10px;
            }
            #mu-page-breadcrumb .mu-page-breadcrumb-area .breadcrumb{
                background: #748698;
            }
            #mu-page-breadcrumb .mu-page-breadcrumb-area .breadcrumb ol li{
                align-text: center;
            }
            #form-section .row .control-group input{
                background: transparent;
                border: none;
                border-bottom: 2px solid blue;
                color: #ffff00;
            }
            #form-section .col-md-6{
                padding: 1rem;   
            }
            #form-section{
                margin-top: 20px;
            }
            #form-section .container .row .col-md-6{
                border: 1px solid green;
                border-radius: 10px;
                background: linear-gradient(45deg, #060c06, #636262);
            }
        </style>
  </head>

  <body>
    <main>
      <!-- Breadcrumb section -->
      <section id="mu-page-breadcrumb">
            <div class="container">
                <div class="row text-center text-white">
                  <div class="col-md-12">
                      <div class="mu-page-breadcrumb-area"> 
                          <ol class="breadcrumb">
                              <li><a href="../index.php"><i class="fa fa-arrow-left mr-5"></i></a> Admin LOG IN Panel</li>              
                          </ol>
                      </div>
                  </div>
                </div>
            </div>
        </section>
        <!-- end breadcrumb secton -->
        <!-- Main page section -->
        <section id="form-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-2">
                        <div class="page-title p-2">
                            <h2 class="text-white display-5">Welcome Administrator</h1>
                            <hr class="bg-success">
                        </div>
                        <form action="admin.php" class="form-group" method="POST">
                            <?php
                              if(isset($_POST['submit']))
                              {
                                  $errors = array();
                                  $username=$_POST['username'];
                                  $password=$_POST['password'];
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
                                        require_once('../conn.php');
                                        $select = "SELECT * FROM admin WHERE username = '$username' and password = '$password' ";
                                        $run_select = mysqli_query($con, $select);
                                          if(mysqli_num_rows($run_select) > 0)
                                          {
                                          $_SESSION['username']=$username;
                                            header("location:adpanel.php"); 
                                            exit(); 
                                          }
                                          else
                                          {
                                            echo '<p class= "text-danger">Invalid ID no or Password</p>' ;  
                                          }
                                  }
                              }
                            ?>
                            <div class="control-group text-white">
                                <label class="control-label" for="model">USERNAME</label>
                                <div class="controls">
                                    <input type="text" class="form-control" name="username" required="required"/>
                                    <?php
                                        if(isset($errors['user']))
                                        {
                                          echo '<p class ="text-danger"> ' . $errors['user'] .' </p>';
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="control-group text-white">
                                <label class="control-label" for="model">PASSWORD</label>
                                <div class="controls">
                                    <input type="password" class="form-control" name="password" required="required"/>
                                    <?php
                                        if(isset($errors['pass']))
                                        {
                                        echo '<p class ="text-danger"> ' . $errors['pass'] .' </p>';
                                        }
                                        ?>
                                </div>
                            </div>
                            <button type="submit" name="submit" class="btn btn-lg btn-outline-success m-2">Log In <i class="fa fa-unlock"></i></button>
                            <button type="button" name="home" class="btn btn-lg btn-outline-primary" onClick="parent.location='../index.php'">Home <i class="fa fa-home"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- end main page section -->
      </main>
    </body>
</html>