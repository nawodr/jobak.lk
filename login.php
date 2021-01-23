<?php
include ('./database/config.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>

    <link href="./vender/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome icons (free version)-->


    <link rel="stylesheet" href="./css/login.css">
    <link rel="stylesheet" href="./css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <!-- <link href="./vender/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet"> -->

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

    <?php


if(isset($_POST['but_submit'])){

    $username = mysqli_real_escape_string($con,$_POST['email']);
    $password = mysqli_real_escape_string($con,$_POST['password']);

    if ($username != "" && $password != ""){

        $sql_query = "select count(*) as cntUser from users where username='".$username."' and password='".$password."'";
        $result = mysqli_query($con,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['username'] = $username;
            header('Location: homepage.php');
        }else{
            echo "Invalid username and password";
        }

    }

}
?>
</head>

<body>

    <!-- start navigation bar      -->
    <section id= "header">
        <div class= "menu-bar">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="homepage.php">jobak.lk</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Find A Job</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Categories</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="signup.php">Sign Up</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="freeadd" href="#">Submit your cv</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        </section>
  <!-- end of navigation -->    

    <div class="header">
    </div>
    <br><br><br>

    <!-- login -->
    <br><br>
    <div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
                    <img src="img/profilepic/login.png" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form action="login.php" method="POST">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input class="form-control input_user" type="text" name="email" id="email" placeholder="email">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input class="form-control input_pass" type="password" name="password" id = "password" placeholder="password">
						</div>
						<div class="form-group">
							<div class="custom-control custom-checkbox">
								<input type="checkbox" class="custom-control-input" id="customControlInline">
								<label class="custom-control-label" for="customControlInline">Remember me</label>
							</div>
						</div>
							<div class="d-flex justify-content-center mt-3 login_container">
				 	<input type="submit" value="login" id="but_submit" name="but_submit" class="btn login_btn"></input>
				   </div>
					</form>
				</div>
		
				<div class="mt-4">
					<div class="d-flex justify-content-center links">
						Don't have an account? <a href="#" class="ml-2">Sign Up</a>
					</div>
					<div class="d-flex justify-content-center links">
						<a href="#">Forgot your password?</a>
					</div>
				</div>
			</div>
		</div>
	</div>

    <br><br><br><br>
        <!-- end of login -->

   <!--Start Footer Section -->
   <footer class="container-fluid-footer page-footer font-small pt-4">
        <!-- Footer Links -->
        <div class="container text-center text-md-left">
            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 ">
                    <h6 class="text-uppercase mb-4 font-weight-bold">jobak.lk</h6>
                    <p>
                        Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit.
                    </p>
                </div>
                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">
                <!-- Grid column -->
                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold ">Useful links</h6>
                    <p>
                        <a class="text-decoration-none" href="homepage.html">Home</a>
                    </p>
                    <p>
                        <a class="text-decoration-none" href="addpost.html">Post A Free Vacancy</a>
                    </p>
                    <p>
                        <a class="text-decoration-none" href="contactus.html">Contact us</a>
                    </p>
                    <p>
                        <a class="text-decoration-none" href="#!">Contribute</a>
                    </p>
                </div>
                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">
                <!-- Grid column -->
                <div id="contact" class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 id="contacus" class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p>
                        <i class="fa fa-home mr-3"></i> No :- 15/1, Awissawella
                    </p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> infogmail@gmail.com
                    </p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 01 234 567 88
                    </p>
                    <p>
                        <i class="fa fa-print mr-3"></i> + 01 234 567 89
                    </p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Footer links -->
            <hr>
            <!-- Grid row -->
            <div class="row d-flex align-items-center">
                <!-- Grid column -->
                <div class="col-md-4">
                    <div>
                        <div class="">
                            <p>Copyright ..&copy; <span id="year">2021</span></p>
                        </div>
                    </div>
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-4 col-lg-4 ml-lg-0">
                    <!-- Social buttons -->
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-lg rgba-white-slight mx-1">
                                    <i class="fa fa-facebook"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-lg rgba-white-slight mx-1">
                                    <i class="fa fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-lg rgba-white-slight mx-1">
                                    <i class="fa fa-linkedin"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-lg rgba-white-slight mx-1">
                                    <i class="fa fa-google-plus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
    </footer>
    <!--End Footer Section -->

    <!--Start back to up button-->
    <a href="#" class="scrollUpButton">&#9650</a>
    <!--End back to up button-->


</body>

</html>