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


    <link rel="stylesheet" href="./css/signup.css">

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script> -->

</head>

<body>

    <!--Start Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="homepage.html">jobak.lk</a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="contactus.html">Help & support</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Sign up</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="freeadd" href="addpost.html">Post FREE Vehicle AD</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--End Navbar -->

    <div>
        <?php
        if (isset($_POST['create'])) {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // echo $firstname . "" . $lastname. "" . $email . "" . $password;
            $sql = "INSERT INTO users (firstname , lastname , email , password) VALUES(?,?,?,?)";
            $stmtinsert = $db->prepare($sql);
            $result = $stmtinsert->execute([$firstname, $lastname, $email, $password]);
            if ($result) {
                echo 'successfully saved';
            } else {
                echo 'there were errors';
            }
        }
        ?>
    </div>

    <div class="header">
    </div>

    <!-- sign up -->
    <div class="signup container">
        <h2>Creat an account</h2>
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
            </table>
            <div class="btn float-right" id="register">
                <nput type="submit" onclick="popUp()" class="btn btn-success mt-1 float-right mr-5 mb-5 mr-sm-5" name="create">Create account</nputtype="submit">
            </div>
        </form>

    </div>


    </form>
    </div>



    <br><br><br><br><br><br><br><br><br>


    <!--Start Footer Section -->
    <footer class="container-fluid page-footer font-small pt-4 bg-dark text-light">
        <!-- Footer Links -->
        <div class="container text-center text-md-left">
            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3 ">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Riyasewana Srilanka</h6>
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
                        <a class="text-decoration-none" href="addpost.html">Post FREE Vehicle AD </a>
                    </p>
                    <p>
                        <a class="text-decoration-none" href="contactus.html">Contact us</a>
                    </p>
                    <p>
                        <a class="text-decoration-none" href="contribute.html">Contribute</a>
                    </p>
                </div>
                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">
                <!-- Grid column -->
                <div id="contact" class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 id="contacus" class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p>
                        <i class="fas fa-home mr-3"></i> No :- 15/1, Awissawella
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> infogmail@gmail.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88
                    </p>
                    <p>
                        <i class="fas fa-print mr-3"></i> + 01 234 567 89
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
                            <p>Copyright ..&copy; <span id="year"></span></p>
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
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <i class="fab fa-linkedin-in"></i>
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

            // var firstname = document.getElementById('firstname').value;
            // var lastname = document.getElementById('lastname').value;
            // var email = document.getElementById('email').value;
            // var password = document.getElementById('password').value;

            if (firstname == "" ||
            lastname == "" ||
            email == "" ||
            password == "" ){
                sweetAlert("Oops...", "Some details are missing, Please fill!", "error");
            } else {
                swal("Successfully!", "password changed!", "success");
            }
        }
    </script>


</body>

</html>