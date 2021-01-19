<?php
require_once('./database/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jobak | Home</title>

    <link href="./vender/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome icons (free version)-->


    <link rel="stylesheet" href="./css/Signup.css">
    <link rel="stylesheet" href="./css/style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">

    <link href="./vender/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
  <!-- end of navigation -->

    <div>
        <?php
        if (!empty($_POST['gender'])) {
            if (isset($_POST['create'])) {

                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                $confirmpassword = $_POST['confirmpassword'];
                $gender = $_POST['gender'];
                $hometown = $_POST['hometown'];

                // echo $firstname . "" . $lastname. "" . $email . "" . $password . "" . $confirmpassword . "" . $gender;
                $sql = "INSERT INTO user (firstname , lastname , email , password , confirmpassword , gender , hometown) VALUES(?,?,?,?,?,?,?)";
                $stmtinsert = $db->prepare($sql);
                $result = $stmtinsert->execute([$firstname, $lastname, $email, $password, $confirmpassword , $gender , $hometown]);
                if ($result) {
                    echo 'successfully saved';
                } else {
                    echo 'there were errors';
                }
            }
    }
        ?>
    </div>

    <div class="header">
    </div>

    <!-- sign up -->
    <div class="signup container">
        <h2>Create an account</h2>
        <br><br>
        <form action="signup.php" method="POST">
            <table>
                <tr>
                    <td><label>First Name:</td>
                    <td> <input class="form-control mr-sm-2" id="firstname" name="firstname" type="text">
                    </td>
                </tr>

                <tr>
                    <td><label>Last Name:</td>
                    <td> <input class="form-control mr-sm-2" id="lastname" name="lastname" type="text">
                    </td>
                </tr>

                <tr>
                    <td><label>E-mail: </label>
                    </td>
                    <td><input class="form-control mr-sm-2" id="email" name="email" type="text"></td>
                </tr>

                <tr>
                    <td><label>Password: </label>
                    </td>
                    <td><input class="form-control mr-sm-2" id="password" name="password" type="password"></td>

                </tr>
                <tr>
                    <td><label>Confirm Password: </label>
                    </td>
                    <td><input class="form-control mr-sm-2" id="confirmpassword" name="confirmpassword" type="password"></td>

                </tr>

                <tr>
                    <td><label>Gender: </label>
                    <td><form method="POST">
                        <input type="radio" id="gender" name="gender" value="male"> Male 
                        <input type="radio" id="gender" name="gender" value="female"> Female<br>
                        </form>
                    </td>
                    </td>

                </tr>

                <tr>
                    <td><label>Home Town: </td>
                    <td> <input class="form-control mr-sm-2" id="hometown" name="hometown" type="text">
                    </td>
                </tr>
            </table>
            <div class="btn float-right" id="register">
                <input type="submit" onclick="popUp()" class="btn btn-success mt-1 float-right mr-5 mb-5 mr-sm-5" name="create" value="Create account"></input>
            </div>
        </form>

    </div>


    </form>
    </div>



    <br><br><br><br><br><br><br><br><br>


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

    <!-- validation -->

    <script type="text/javascript">
        function popUp() {
            var firstname = $('#firstname').val();
            var lastname = $('#lastname').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var confirmpassword = $('#confirmpassword').val();
            var gender = $('#gender').val();
            var hometown = $('#hometown').val();
            

            // var firstname = document.getElementById('firstname').value;
            // var lastname = document.getElementById('lastname').value;
            // var email = document.getElementById('email').value;
            // var password = document.getElementById('password').value;

            if (firstname == "" ||
            lastname == "" ||
            email == "" ||
            password == "" ||
            confirmpassword == "" ||
            gender == "" ||
            hometown == ""){
                sweetAlert("Oops...", "Some details are missing, Please fill!", "error");
            } else {
                swal("Successfully!", "password changed!", "success");
            }
        }
    </script>


</body>

</html>