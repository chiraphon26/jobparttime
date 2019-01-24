<?php session_start();
include "connect.php";
?>
<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>JOB PART-TIME</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>
    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/plugins.css" />
    <link rel="stylesheet" href="assets/css/roboto-webfont.css" />

    <!--Theme custom css -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!--Theme Responsive css-->
    <link rel="stylesheet" href="assets/css/responsive.css" />

    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                    aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">
                    <img src="assets/images/parttime1.png" alt="Logo" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <!--ส่วนแท็ปต่างๆ-->
                    <li class="active">
                        <a href="home.php">Home</a>
                    </li>
                    <li>
                        <a href="category.php">Category</a>
                    </li>

                    <?php
                        if(isset($_SESSION['member_username'])){
                        echo "<li>";
                        echo "<a href='post_job.php'>Post Jobs</a>";
                        echo "</li>";
                        }
                        if(isset($_SESSION['admin_username'])){
                            echo "<li>";
                            echo "<a href='post_job.php'>Post Jobs</a>";
                            echo "</li>";
                            }
                    ?>

                    <?php
                        if(isset($_SESSION['admin_username'])){
                            echo "<li>";
                            echo "<a href='home_admin.php'>Admin</a>";
                            echo "</li>";
                            }
                    ?>


                    <?php
                        if(isset($_SESSION['admin_username'])){
                            echo "<li>";
                            echo "<a href='manageuser.php'>Manege</a>";
                            echo "</li>";
                            }
                    ?>

                    <li>
                        <a href="#">Contact</a>
                    </li>

                    <!--<div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">-->

                    <?php
                        if(isset($_SESSION['member_username'])){
                    ?>
                    <li class='login'><a href="Detail_member.php">
                            <?php echo "สวัสดี ".$_SESSION['member_username'];?></a></li>
                    <li class='login'><a href='logout.php'>Logout</a></li>
                    <?php
                    } elseif(isset($_SESSION['admin_username'])){
                    ?>
                    <li class='login'><a href="#">
                            <?php echo "สวัสดี ".$_SESSION['admin_username'];?></a></li>
                    <li class='login'><a href='logout.php'>Logout</a></li>
                    <?php
                    }else{
                            
                            echo "<li class='login'> <a href='#ModalLogin'  class='trigger-btn' data-toggle='modal'>Login</a></li>";
                            echo "<li class='login'><a href='register.php'>Register</a></li>";
                            
                    }
                    ?>



            </div>
            <!--<li class="login">
                        <a href="#" data-toggle="modal" data-target="#example">Register</a>
                    </li>
                    <li class="login">
                        <a href="#" data-toggle="modal" data-target="#exampleModal">Sign In</a>
                    </li> -->
            </ul>

        </div>
        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>


    <!-- Modal Sign in or login -->
    <div id="ModalLogin" class="modal fade">
        <div class="modal-dialog modal-login">
            <div class="modal-content" style="width:402px;">
                <div class="modal-header">
                    <h4 class="modal-title">Log in</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="Login" role="form" action="Login.php" method="POST" onSubmit="return checkFormLogin()">
                        <div class="form-group">
                            <div id="formLogin" style="color:red"></div>
                            <input type="hidden" id="keyLogin" value="0">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input type="text" class="form-control" id="member_username" name="member_username"
                                    placeholder="Username" required="required">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input type="password" class="form-control" id="member_password" name="member_password"
                                    placeholder="Password" required="required">
                            </div>
                        </div>
                        <p class="hint-text"><a href="#">Forget Password?</a></p>
                        <div class="form-group">
                            <div style="text-align: center">
                                <input type="submit" class="btn btn-info" value="Sign in">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!--/#Modal Sign in or login-->