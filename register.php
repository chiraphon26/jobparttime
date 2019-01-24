<?php 
include "connect.php";
?>

<!doctype html>

<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Soft-Tect Free Landing Page</title>
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
    <script src="js/ajaxCheckMember.js"></script>
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
                    <li class='login'><a href="Detail_member.php">
                            <?php echo "สวัสดี ".$_SESSION['admin_username'];?></a></li>
                    <li class='login'><a href='logout.php'>Logout</a></li>
                    <?php
                    }else{
                            
                            //echo "<li class='login'> <a href='#ModalLogin'  class='trigger-btn' data-toggle='modal'>Login</a></li>";
                            echo "<li class='login'><a href='register.php'>Register</a></li>";
                            
                    }
                    ?>
            </div>

            </ul>

        </div>
        <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <body>
        <section id="business" class="portfolio sections">
            <div class="container">
                <div class="head_title text-center">
                    <h1>Register</h1><br>
                </div>
                <div class="modal-body">
                    <b>ข้อมูลส่วนตัว</b><br><br>
                    <form method="POST" action="InsertRegister.php" novalidate="novalidate">

                        <div class="form-group col-md-6">
                            <label for="username" class="control-label">ชื่อ-นามสกุล</label>
                            <input type="text" class="form-control" id="member_name" name="member_name" value=""
                                required="" title="Please enter you username" placeholder="ex.นายนานะ  ใจดี">
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="username" class="control-label">รหัสบัตรประชาชน</label>
                            <input type="text" class="form-control" id="member_ssn" name="member_ssn" value="" required=""
                                title="Please enter you username" placeholder="">
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="username" class="control-label">เบอร์โทรศัพท์</label>
                            <input type="text" class="form-control" id="member_tel" name="member_tel" value="" required=""
                                title="Please enter you username" placeholder="">
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group col-md-6">
                            <label for="username" class="control-label">อีเมล์</label>
                            <input type="text" class="form-control" id="member_email" name="member_email" value=""
                                required="" title="Please enter you username" placeholder="">
                            <span class="help-block"></span>
                        </div>

                        <div class="form-group col-md-12">
                            <label for="username" class="control-label">ที่อยู่</label>
                            <input type="text" class="form-control" id="member_address" name="member_address" value=""
                                required="" title="Please enter you username" placeholder="">
                            <span class="help-block"></span>
                        </div>


                        <b>ข้อมูลเข้าสู่ระบบ</b><br><br>
                        <div class="form-group col-md-6">
                            <div id="alert1" style="color:red;"></div>
                            <label for="username" class="control-label">Username</label>
                            <input type="text" class="form-control" id="member_username" name="member_username" value=""
                                required="" title="Please enter you username" placeholder="Username or E-mail" onchange="checkUsername()">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" class="form-control" id="member_password" name="member_password"
                                value="" required="" title="Please enter your password" placeholder="Password">
                            <span class="help-block"></span>
                        </div>

                        <center>
                            <input type="submit" value="register" class="btn btn-info">
                            <!-- <button type="button" class="btn btn-info">Register</button>-->
                        </center>

                    </form>
                </div>
            </div>
            </div>
            </div>
        </section>


        <?php
        include "footer.php";
        ?>
    </body>

</html>