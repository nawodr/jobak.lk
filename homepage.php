<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jobak | Home</title>

    <link href="./vender/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Font Awesome icons (free version)-->
    
    <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>
   
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <!--Start Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="homepage.html">jobak.lk</a>
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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

    <!--Script file-->
    <script src="http://cdnjs.cloudflare.com/ajaxlibs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajaxlibs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./vender/jquery/jquery.min.js "></script>
    <script src="./vender/bootstrap/js/bootstrap.js "></script>
    <script src="./vender/bootstrap/js/bootstrap.bundle.min.js "></script>
    <script src="./vender/jquery/aos.js"></script>
    <script src="./vender/jquery/textanimate.js"></script>

    <!--Bak to up-->
    <script src="./vender/jquery/backtoup.js"></script>

    <script>
        document.querySelector(".openChatBtn").addEventListener("click", openForm);
        document.querySelector(".close").addEventListener("click", closeForm);

        function openForm() {
            document.querySelector(".openChat").style.display = "block";
        }

        function closeForm() {
            document.querySelector(".openChat").style.display = "none";
        }
    </script>

    <!--aos animate-->
    <script>
        AOS.init({
            duration: 2000,
        });
    </script>

    <!--Copy Right Date-->
    <script>
        $('#year').text(new Date().getFullYear());

        $('.carousel').carousel({
            interval: 2500,
            pus: 'hover'
        });
    </script>

</body>

</html>