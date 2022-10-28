<?php 
session_start();
require 'koneksi.php';
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
?>

    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Pengelolaan Kas</title>

        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </head>

    <body>
        <div id="wrapper"> 
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php"><small>Pengelolaan Kas</small></a>
                </div>
                <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">
                <!-- <li class="text-center">
                            <img src="assets/img/find_user2.png" class="user-image img-responsive" />
                        </li> -->
                    Date : <a style="margin-right:10px; color : #FFFFFF" id="time">
                        &nbsp; &nbsp;
                    <!-- <a href="logout.php" class="btn btn-danger square-btn-adjust" title="Logout">Log Out</a> -->
                    <a href="logout.php" style=" color : #FFFFFF" ><i class="glyphicon glyphicon-log-out"></i></a>
                </div>
            </nav>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">
                    <ul class="nav" id="main-menu">
                        <!-- <li class="text-center">
                            <img src="assets/img/find_user2.png" class="user-image img-responsive" />
                        </li> -->
                        <li>
                            <a href="home.php"><i class="glyphicon glyphicon-home"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="?page=masuk"><i class="glyphicon glyphicon-floppy-save"></i> Kas Masuk</a>
                        </li>
                        <li>
                            <a href="?page=keluar"><i class="glyphicon glyphicon-floppy-open"></i> Kas Keluar</a>
                        </li>
                        <li>
                            <a href="?page=rekap"><i class="glyphicon glyphicon-tasks"></i> Rekapitulasi Kas</a>
                        </li>
                        <?php if ($_SESSION['level'] == 1){?>
                            <li>
                                <a href="?page=admin"><i class="glyphicon glyphicon-user"></i>Daftar Admin</a>
                            </li>
                        <?php }?>
                        <!-- <li>
                            <a href="?page=user"><i class="glyphicon glyphicon-user"></i> Support</a>
                        </li> -->
                    </ul>
                </div>
            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">

                            <?php

                        $page = $_GET['page'];
                        $aksi = $_GET['aksi'];

                        if($page == "masuk") {
                            if($aksi =="") {
                                include 'page/kas_masuk/masuk.php';
                            } if($aksi =="hapus") {
                                include 'page/kas_masuk/hapus.php';
                            }
                        } elseif ($page == "keluar") {
                            if($aksi =="") {
                                include 'page/kas_keluar/keluar.php';
                            } if($aksi =="hapus") {
                               include 'page/kas_keluar/hapus.php';
                            }
                        } elseif ($page == "rekap") {
                            if($aksi =="") {
                                include 'page/rekap/rekap.php';
                            }
                        } elseif ($page == "admin") {
                            include 'page/admin/admin.php';
                        } elseif ($page == "user") {
                            if($aksi =="") {
                                include 'page/user/user.php';
                            }
                        } elseif ($page == "") {                           
                            include 'dashboard.php';
                        }                     
                     ?>

                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <hr />

                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="copyright">
                    Copyright © 2018 All rights reserved. Template by <a href="http://binarycart.com/">Binary Admin</a>
                    <br> Developed By <a href="https://web.facebook.com/Ions.Revolutionz" target="_blank"><b>Ion's</b></a>
                </div>
            </div>
        </div>

        <!-- /. WRAPPER  -->
        <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
        <!-- JQUERY SCRIPTS -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- BOOTSTRAP SCRIPTS -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- METISMENU SCRIPTS -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>
        <script src="assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function() {
                $('#dataTables-example').dataTable();
            });
        </script>
        <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>
        <script>
            var timeDisplay = document.getElementById("time");
            var timeDisplayBig = document.getElementById("timeBig");

            function refreshTime() {
                // // original date format
                //var dateString = new Date().toLocaleString();
                //var formattedString = dateString.replaceAll(".", "-");

                var today = new Date();
                var yyyy = today.getFullYear();
                var mm = String(today.getMonth() + 1).padStart(2, '0');
                var dd = String(today.getDate()).padStart(2, '0');
                var hh = String(today.getHours())
                var mnt = String(today.getMinutes())
                var ss = String(today.getSeconds())

                today = yyyy + '-' + mm + '-' + dd + ' : ' + hh + '.' + mnt + '.' + ss;
                
                timeDisplay.innerHTML = today;
                timeDisplayBig.innerHTML = today
            }
            setInterval(refreshTime, 1000);
        </script>
    </body>

    </html>