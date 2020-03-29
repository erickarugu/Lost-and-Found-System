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
		<title>Zetech University | Post</title>
		<!-- Icons -->
		<link rel="stylesheet" href="./assets/css/all.min.css">
		<!-- Bootstrap -->
		<link rel="stylesheet" href="./assets/css/bootstrap.min.css" rel="stylesheet">             
		<!-- Main style sheet -->
		<link href="./assets/css/main.css" rel="stylesheet">
		<style>
			#mu-page-breadcrumb .mu-page-breadcrumb-area .breadcrumb{
				background: #748698;
				margin-top: 50px;
				color: white;
			}
			.form-section .container .row .col-md-6 img{
				width 80%;
				width: 80%;
				padding-left: 10px;
        	}
		</style>
	</head>

	<body>
		<main>
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
			<!-- Breadcrumb section -->
			<section id="mu-page-breadcrumb">
				<div class="container">
					<div class="row text-center text-white">
					<div class="col-md-12">
						<div class="mu-page-breadcrumb-area"> 
							<ol class="breadcrumb">
								<li><a href="welcome.php"><i class="fa fa-arrow-left mr-5"></i></a>POST ITEM</li>              
							</ol>
						</div>
					</div>
					</div>
				</div>
			</section>
			<!-- end breadcrumb secton -->

			<!-- start form section -->
			<section class="form-section">
				<div class="container">
					<div class="row text-center">
						<div class="col-md-6">
							<div class="form-container">
								<form method="post" action="form.php" name="one" class="">
								<?php
									if(isset($_POST['submit']))
									{
										$errors = array();
										$name=$_POST['name'];
										$description=$_POST['description'];
										$location=$_POST['location'];
										$date=$_POST['date'];
										if(!$name)
										{
											$errors['name'] = 'UseItem Name required';
										}
										if(!$description)
										{
											$errors['description'] = 'Descrption required';
										}
										if(!$location){
											$errors['location'] = 'Location required';
										}
										if(!$date){
											$errors['date'] = 'Date required';
										}
										
										if(count($errors) == 0)
										{
												require_once('conn.php');
												$insert = "INSERT INTO lostitems(name, description, location, date) VALUES('$name', '$description', '$location', '$date')";
												$run_select = mysqli_query($con, $insert);
												if($run_select)
												{
													$_SESSION['user']=$user;
													header("location:welcome.php");
													exit();
												}
												else
												{
													echo '<p class= "text-danger">Unable to post items. Try again.</p>' ;  
												}
										}
									}
									?>
									<div class="control-group">
										<label class="control-label" for="name">NAME</label>
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
									<div class="control-group mt-4">
										<label class="control-label" for="description">DESCRIPTION</label>
										<div class="controls">
											<textarea name="description" class="form-control" required="required"></textarea>
											<?php
												if(isset($errors['description']))
												{
												echo '<p class ="text-danger"> ' . $errors['description'] .' </p>';
												}
											?>
										</div>
									</div>
									<div class="control-group mt-4">
										<label class="control-label" for="location">LOCATION</label>
										<div class="controls">
											<input type="text" class="form-control" name="location" required="required"/>
											<?php
												if(isset($errors['location']))
												{
												echo '<p class ="text-danger"> ' . $errors['location'] .' </p>';
												}
											?>
										</div>
										
									</div>
									<div class="control-group mt-4">
										<label class="control-label" for="date">DATE</label>
										<div class="controls">
										<input type="text" class="form-control" name="date" placeholder="Date format(yyy-mm-dd)">
										<?php
											if(isset($errors['date']))
											{
												echo '<p class ="text-danger"> ' . $errors['date'] .' </p>';
											}
										?>
										</div>
									</div>
									<input type="submit" class="btn btn btn-success m-2" value="Post Item" name='submit'>
									<input type="reset" class="btn btn-outline-warning m-2" value="Reset">
								<form>
							</div>
						</div>
						<div class="col-md-6">
							<img src="./assets/img/about-us.png" alt="about us" class="img-responsive">
						</div>
					</div>
				</div>
			</section>
			<!-- end form section -->

		</main>
	</body>
</html>