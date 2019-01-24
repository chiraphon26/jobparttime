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
                        <a href="#">Sign In</a>
                    </li>
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



<!-- Sections -->
<section id="features" class="features sections">
        <div class="container">
            <div class="row">
                <div class="main_features_content2">

                    <!--<div class="col-sm-6">
                        <div class="single_features_left text-center">
                            <img src="assets/images/plawan.jpg" width="600" height="400" alt="" />
                        </div>
                    </div>-->

                    <div style="display:flex"> 
                        <?php 
                            $stmt = $pdo->prepare("SELECT * FROM tb_job"); 
                            $stmt->execute(); 
                        ?> 
                        <?php while ($row = $stmt->fetch()) : ?> 
                            <div class="single_features_left text-center">  
                                <img src='images/upload<?=$row["job_id"]?>.jpg' width="600" height="400"><br>
                            </div>    
                            <div class="single_features_right "> 
                                ชื่อร้าน :<?=$row ["job_store_name"]?><br>
                                ตำแหน่งที่ต้องการ :<?=$row ["job_position"]?><br>
                                จำนวน :<?=$row ["job_amount"]?><br>
                                ช่วงเวลาทำงาน :<?=$row ["job_working_hours"]?><br>
                                ค่าแรง :<?=$row ["job_wage_rate"]?><br>
                                โซนสถานที่ทำงาน :<?=$row ["job_location"]?><br>
                                ทักษะที่ต้องการ :<?=$row ["job_skills"]?><br>
                                <?=$row ["job_contact"]?><br>
                                <?=$row ["job_work_period"]?><br>
                                <?=$row ["job_detail"]?>
                             </div> 
                                <?php endwhile; ?> 
                    </div> 

                </div>
            </div>
        </div>
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


    <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>

    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/modernizr.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>