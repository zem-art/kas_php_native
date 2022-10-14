<?php
session_start();
// if(isset($_SESSION['username'])) {
//     header("Location: home.php");
//     die();
// }
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <!-- Required meta tags-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="au theme template">
        <meta name="author" content="Hau Nguyen">
        <meta name="keywords" content="au theme template">

        <!-- Title Page-->
        <title>Sign Up</title>

        <link rel="stylesheet" href="alert/css/sweetalert.css">

        <!-- Fontfaces CSS-->
        <link href="css/font-face.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
        <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
        <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

        <!-- Bootstrap CSS-->
        <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

        <!-- Vendor CSS-->
        <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
        <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
        <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
        <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
        <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
        <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
        <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

        <!-- Main CSS -->
        <link href="css/theme.css" rel="stylesheet" media="all">

    </head>

    <body class="animsition">
        <div class="page-wrapper">
            <div class="page-content--bge5">
                <div class="container">
                    <div class="login-wrap">
                        <div class="register-content">
                            <div class="login-logo">
                                <h1>Sign Up</h1>
                            </div>
                            <div class="register-link">
                                <marquee behavior="" direction="">Sistem Informasi Pengelolaan Kas </marquee>
                                <br>
                            </div>
                            <?php if(isset($_SESSION['null'])) { ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong><?php echo $_SESSION['null']?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                            <?php if(isset($_SESSION['message'])) { ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong><?php echo $_SESSION['message']?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                            <?php if(isset($_SESSION['data'])) { ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong><?php echo $_SESSION['data']?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                            <?php if(isset($_SESSION['error'])) { ?>
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong><?php echo $_SESSION['error']?></strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php } ?>
                            <div class="login-form">
                                <form action="process-register.php" method="post">
                                    <div class="form-group-register">
                                        <label><b>Name</b></label>
                                        <input class="au-input au-input--full" type="text" name="nama" placeholder="Your Name">
                                    </div>
                                    <div class="form-group-register">
                                        <label><b>Username</b></label>
                                        <input class="au-input au-input--full" type="text" name="username" placeholder="Username">
                                    </div>
                                    <div class="form-group-register">
                                        <label><b>Password</b></label>
                                        <input class="au-input au-input--full" type="password" name="password" placeholder="Your Password">
                                    </div>
                                    <div class="form-group-register">
                                        <label><b>Confirm Password</b></label>
                                        <input class="au-input au-input--full" type="password" name="password_confirmation" placeholder="Confirm Your Password">
                                    </div>
                                    <br>
                                    <div class="btn-path">
                                        <span>
                                            <center>
                                            <button class="btn btn-md btn-outline-danger"  id="btn-login" type="reset">Reset &nbsp;&nbsp;</button>
                                        </span> &nbsp; &nbsp;
                                        <span>
                                            <button class="btn btn-md btn-outline-primary" id="btn-login" type="submit">Sign Up &nbsp;</button>
                                            </center>
                                        </span>
                                    </div>
                                    <div class="register-link">
                                        <br>
                                        <p>do you already have an account <a href="login.php"> sign in</a></p>
                                    </div>
                                </form>
                                <div class="register-link">
                                    <br>
                                    <p>Designed by <a target="_blank" href="https://zem.netlify.app/">zem_art</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Jquery JS-->
        <script src="vendor/jquery-3.2.1.min.js"></script>
        <!-- Bootstrap JS-->
        <script src="vendor/bootstrap-4.1/popper.min.js"></script>
        <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
        <!-- Vendor JS       -->
        <script src="vendor/slick/slick.min.js">
        </script>
        <script src="vendor/wow/wow.min.js"></script>
        <script src="vendor/animsition/animsition.min.js"></script>
        <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
        </script>
        <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
        <script src="vendor/counter-up/jquery.counterup.min.js">
        </script>
        <script src="vendor/circle-progress/circle-progress.min.js"></script>
        <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="vendor/chartjs/Chart.bundle.min.js"></script>
        <script src="vendor/select2/select2.min.js">
        </script>

        <!-- Main JS-->
        <script src="js/main.js"></script>

        <script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
        <script src="alert/js/sweetalert.min.js"></script>
        <script src="alert/js/qunit-1.18.0.js"></script>

    </body>

    </html>
    <!-- end document-->
<?php
session_destroy();
?>