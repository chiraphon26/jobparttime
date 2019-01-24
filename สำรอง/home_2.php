<?php 
include "connect.php";
session_start();
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
    <title>Soft-Tect Free Landing Page</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">-->

    <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
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
                <a class="navbar-brand" href="#">
                    <img src="assets/images/parttime1.png" alt="Logo" />
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <ul class="nav navbar-nav navbar-right">
                    <li class="active">
                        <a href="home.html">Home</a>
                    </li>
                    <li>
                        <a href="category.html">Category</a>
                    </li>
                    <li>
                        <a href="post_job.html">Post Jobs</a>
                    </li>
                    <li>
                        <a href="#service">News</a>
                    </li>
                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                    <li class="login">
                        <a href="#" data-toggle="modal" data-target="#example">Register</a>
                    </li>
                    <li class="login">
                        <a href="#" data-toggle="modal" data-target="#exampleModal">Sign In</a>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <b>SIGN IN</b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="loginForm" method="POST" action="#" novalidate="novalidate">
                        <div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username"
                                placeholder="Username or E-mail">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password"
                                placeholder="Password">
                            <span class="help-block"></span>
                        </div>
                        <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                        <a href="">forget password</a>
                        <br>
                        <br>
                        <center>
                            <button type="button" class="btn btn-info">Sign in</button>
                        </center>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal-->


    <!-- Modal -->
    <div class="modal fade" id="example" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" hidden>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <b>Registration</b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="loginForm" method="POST" action="#" novalidate="novalidate">
                        <div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username"
                                placeholder="Username or E-mail">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password"
                                placeholder="Password">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="username" class="control-label">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="" required="" title="Please enter you numberphone"
                                placeholder="Phone">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="username" class="control-label">E-mail</label>
                            <input type="text" class="form-control" id="email" name="email" value="" required="" title="Please enter you E-mail" placeholder="E-mail">
                            <span class="help-block"></span>
                        </div>
                        <center>
                            <button type="button" class="btn btn-info">Register</button>
                        </center>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal-->



    <!--Home page style-->
    <header id="home" class="home">
        <div class="overlay-fluid-block">
            <div class="container text-center">
                <div class="row">
                    <div class="home-wrapper">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="home-content">

                                <h1>Search Part-time Jobs & Post Jobs</h1>
                                <p>Blue Lance transforms your company's data into rich visuals for you to collect and organize
                                    so you can focus on what matters to you. Stay in the know, spot trends as they happen,
                                    and push your business further.</p>

                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                        <div class="home-contact">
                                            <div class="input-group">
                                                <input type="text" class="form-control" placeholder="Enter your jobs">
                                                <input type="submit" class="form-control" value="Search">

                                            </div>
                                            <!-- /input-group -->


                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Sections -->
    <section id="business" class="portfolio sections">
        <div class="container">
            <form>
                <div class="form-group col-md-6">
                    <b>Career:</b>
                    <input type="text" class="form-control" name="career" placeholder="Career" required="">
                </div>

                <div class="form-group col-md-6">
                    <b>Place:</b>
                    <input type="email" class="form-control" name="place" placeholder="Place" required="">
                </div>
                <div class="form-group col-md-6">
                    <b>Rank:</b>
                    <input type="email" class="form-control" name="rank" placeholder="Rank" required="">
                </div>
                <div class="form-group col-md-6">
                    <b>Province:</b>
                    <input type="email" class="form-control" name="province" placeholder="Province" required="">
                </div>
                <button class="btn btn-default pull-right">
                    Search
                </button>
            </form>
        </div>
        <!-- /container -->
    </section>


    <!--Footer-->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="row">
                <div class="footer-wrapper">

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="footer-brand">
                            <img src="assets/images/parttime1.png" alt="logo" />
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="copyright">
                            <p>Made with
                                <i class="fa fa-heart"></i> by
                                <a target="_blank" href="http://bootstrapthemes.co"> Bootstrap Themes </a>2016. All rights reserved.</p>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </footer>


    <div class="scrollup">
        <a href="#">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <b>SIGN IN</b>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="loginForm" method="POST" action="#" novalidate="novalidate">
                        <div class="form-group">
                            <label for="username" class="control-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="" required="" title="Please enter you username"
                                placeholder="Username or E-mail">
                            <span class="help-block"></span>
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" value="" required="" title="Please enter your password"
                                placeholder="Password">
                            <span class="help-block"></span>
                        </div>
                        <div id="loginErrorMsg" class="alert alert-error hide">Wrong username og password</div>
                        <a href="">forget password</a>
                        <br>
                        <br>
                        <center>
                            <button type="button" class="btn btn-info">Sign in</button>
                        </center>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal-->


    <!-- Modal -->
    <div class="modal fade" id="surway" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" hidden>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>
                        <b>Questionnaire</b>
                    </h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="loginForm" method="POST" action="#" novalidate="novalidate">
                        <div class="form-group">
                            <b>5.ระดับความพึงพอใจต่อลักษณะของงานที่สนใจ</b>
                            <table id="question" border="1">
                                <thead>
                                 <tr>
                                  <th>ลำดับ</th>
                                  <th width="230">ลักษณะของงาน</th>
                                  <th width="80">น้อยที่สุด</th>
                                  <th width="80">น้อย</th>
                                  <th width="80">ปานกลาง</th>
                                  <th width="80">มาก</th>
                                  <th width="80">มากที่สุด</th>
                                 </tr>
                                </thead>
                                <tbody>
                                 <tr>
                                  <td>1</td>
                                  <td>พนักงานเสริฟ</td>
                                  <td><input type="radio" name="choice1" $check1/></td>
                                  <td><input type="radio" name="choice1" $check2 /></td>
                                  <td><input type="radio" name="choice1" $check3 /></td>
                                  <td><input type="radio" name="choice1" $check4 /></td>
                                  <td><input type="radio" name="choice1" $check5 /></td>
                                 </tr>
                                 <tr>
                                  <td>2</td>
                                  <td>พนักงานต้อนรับ</td>
                                  <td><input type="radio" name="choice2" /></td>
                                  <td><input type="radio" name="choice2" /></td>
                                  <td><input type="radio" name="choice2" /></td>
                                  <td><input type="radio" name="choice2" /></td>
                                  <td><input type="radio" name="choice2" /></td>
                                 </tr>
                                 <tr>
                                  <td>3</td>
                                  <td>ทำอาหาร,เตรียมอาหาร</td>
                                  <td><input type="radio" name="choice3"  /></td>
                                  <td><input type="radio" name="choice3"  /></td>
                                  <td><input type="radio" name="choice3"  /></td>
                                  <td><input type="radio" name="choice3"  /></td>
                                  <td><input type="radio" name="choice3"  /></td>
                                 </tr>
                                 <tr>
                                  <td>4</td>
                                  <td>ทำเครื่องดื่ม</td>
                                  <td><input type="radio" name="choice4"  /></td>
                                  <td><input type="radio" name="choice4"  /></td>
                                  <td><input type="radio" name="choice4"  /></td>
                                  <td><input type="radio" name="choice4"  /></td>
                                  <td><input type="radio" name="choice4"  /></td>
                                 </tr>
                                 <tr>
                                  <td>5</td>
                                  <td>พนักงานทำความสะอาด</td>
                                  <td><input type="radio"  name="choice5" /></td>
                                  <td><input type="radio"  name="choice5" /></td>
                                  <td><input type="radio"  name="choice5" /></td>
                                  <td><input type="radio"  name="choice5" /></td>
                                  <td><input type="radio"  name="choice5" /></td>
                                 </tr>
                                 <tr>
                                    <td>6</td>
                                    <td>สตาฟดูแลงาน,ดูแลค่าย</td>
                                    <td><input type="radio"  name="choice6" /></td>
                                    <td><input type="radio"  name="choice6" /></td>
                                    <td><input type="radio"  name="choice6" /></td>
                                    <td><input type="radio"  name="choice6" /></td>
                                    <td><input type="radio"  name="choice6" /></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>ติวเตอร์</td>
                                    <td><input type="radio"  name="choice7" /></td>
                                    <td><input type="radio"  name="choice7" /></td>
                                    <td><input type="radio"  name="choice7" /></td>
                                    <td><input type="radio"  name="choice7" /></td>
                                    <td><input type="radio"  name="choice7" /></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>แคชเชียร์</td>
                                    <td><input type="radio"  name="choice8" /></td>
                                    <td><input type="radio"  name="choice8" /></td>
                                    <td><input type="radio"  name="choice8" /></td>
                                    <td><input type="radio"  name="choice8" /></td>
                                    <td><input type="radio"  name="choice8" /></td>
                                </tr>
                                    <td>9</td>
                                    <td>ล่ามแปลภาษา</td>
                                    <td><input type="radio"  name="choice9" /></td>
                                    <td><input type="radio"  name="choice9" /></td>
                                    <td><input type="radio"  name="choice9" /></td>
                                    <td><input type="radio"  name="choice9" /></td>
                                    <td><input type="radio"  name="choice9" /></td>
                                </tr>
                                    <td>10</td>
                                    <td>งานเอกสาร</td>
                                    <td><input type="radio"  name="choice10" /></td>
                                    <td><input type="radio"  name="choice10" /></td>
                                    <td><input type="radio"  name="choice10" /></td>
                                    <td><input type="radio"  name="choice10" /></td>
                                    <td><input type="radio"  name="choice10" /></td>
                                </tr>
                                </tbody>
                               </table>
                        
                        </div>
                        <a href="home.php">ก่อนหน้า</a>
                        <a href="home_3.php">ถัดไป</a><br>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End modal-->


    <script>
        $(function () {
            $('#surway').modal();
        });
    </script>


    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>