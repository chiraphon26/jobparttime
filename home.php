<?php session_start();
include "connect.php";
?>

<!doctype html>

<html class="no-js" lang="">

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

<body onload="getData()">
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
                            
                            echo "<li class='login'> <a href='#ModalLogin'  class='trigger-btn' data-toggle='modal'>Login</a></li>";
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


    <!--Home page style-->
    <header id="home" class="home">
        <div class="overlay-fluid-block">
            <div class="container text-center">
                <div class="row">
                    <div class="home-wrapper">
                        <div class="col-md-10 col-md-offset-1">
                            <div class="home-content">

                                <h1>Search Part-time Jobs & Post Jobs</h1>

                                <div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                        <div class="home-contact">
                                            <form>
                                                <div class="input-group">
                                                    <input type="text" class="form-control" onkeyup="showdata" placeholder="Search"  name="keyword">
                                                    <option value=""></option>
                                                    <input type="submit" class="form-control" value="Search" onclick="myFunction()">
                                                </div>                                                
                                            </form>
                                            
                                            <div style="display:flex">

                                            <script>
                                                functiom getData(){

                                                }
                                                function showData(){

                                                }                                                    
                                            </script>    

                                            <?php 
                                            $stmt = $pdo->prepare("select job_store_name from tb_job"); 
                                            $result = $stmt->fetch();
                                            ?>

                                                <!--<div class="row">
                                    <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
                                        <div class="home-contact">

                                            <div class="form-group col-md-6">
                                                <b>Store Name:</b>
                                                <input type="text" class="form-control" name="career" placeholder="Career" required="">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <b>location:</b>
                                                 <input type="email" class="form-control" name="place" placeholder="Place" required="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <b>Rate:</b>
                                                <input type="email" class="form-control" name="rank" placeholder="Rank" required="">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <b>Position:</b>
                                                <input type="email" class="form-control" name="province" placeholder="Province" required="">
                                            </div>
                                            <button class="btn btn-default pull-right">
                                                Search
                                            </button>
                                            <input-group>-->


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

    <!-- Sections 
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
        </container>
    </section>-->

    <?php 
        $stmt = $pdo->prepare("SELECT * FROM tb_job JOIN tb_image ON tb_job.job_id = tb_image.job_id WHERE tb_job.job_store_name  LIKE ?");
        if (!empty($_GET)) 
        $value = '%'.$_GET["keyword"].'%'; 
        $stmt->bindParam(1, $value); 
        $stmt->execute();
    ?>
    <?php while ($row = $stmt->fetch()) : ?>
    <div id="myShow">
    <div style="padding: 30px; text-align: left">
    <i class="fa fa-search"> งานทั้งหมดจาก "คำค้นหา"</i>
        <div style="padding: 20px; text-align: left">
            <a href="Detail_job.php?job_id=<?php echo $row["job_id"]; ?>">
                <img src="images/upload/<?php echo $row["image_name"]; ?>.jpg" width="200" height="150">
                <div id="main-content" class="col-md-12">
                    <div class="box" style="padding-bottom:50px;">
                        <p>
                            <?php echo $row["job_store_name"]; ?>
                        </p><br>
                    </div>
                </div>
                <?php endwhile; ?>
        </div>

        <script>
            function myFunction() {
                var show_store = document.getElementById("myShow");
                if (show_store.style.display = "none") {
                    xshow_store.style.display = "block";
                }
            }
        </script>


        <div class="scrollup">
            <a href="#">
                <i class="fa fa-chevron-up"></i>
            </a>
        </div>


        <!-- Modal -->
        <?php
            if(!isset($_SESSION['member_username'])){
        ?>
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
                        <form action="insertquestion.php" method="post">
                            <div class="step1">
                                <div class="form-group">
                                    <b>1.เคยทำงาน Part-time มาก่อนหรือไม่</b>
                                    <BR>
                                    <INPUT TYPE="radio" NAME="question_1" VALUE="yes"> เคย
                                    <BR>
                                    <INPUT TYPE="radio" NAME="question_1" VALUE="no"> ไม่เคย
                                </div>
                                <div class="form-group">
                                    <b>2.บริเวณหอพักที่พักอาศัย</b>
                                    <BR>
                                    <INPUT TYPE="radio" NAME="question_2" VALUE="ฝั่งหลังมอ"> ฝั่งหลังมอ &nbsp;
                                    <INPUT TYPE="radio" NAME="question_2" VALUE="ฝั่งกังสดาล"> ฝั่งกังสดาล &nbsp;
                                    <INPUT TYPE="radio" NAME="question_2" VALUE="ฝั่งโนนม่วง"> ฝั่งโนนม่วง
                                    <BR>
                                    <INPUT TYPE="radio" NAME="question_2" VALUE="ฝั่งโคลัมโบ"> ฝั่งโคลัมโบ &nbsp;
                                    <INPUT TYPE="radio" NAME="question_2" VALUE="หอพักภายใน"> หอพักภายใน มข. &nbsp;
                                    <INPUT TYPE="radio" NAME="question_2" VALUE="ภายในตัวเมืองขอนแก่น">
                                    ภายในตัวเมืองขอนแก่น
                                    <BR>
                                    <INPUT TYPE="radio" NAME="question_2"> อื่นๆ 

                                    <BR>
                                </div>
                                <div class="form-group">
                                    <b>3.บริเวณพื้นที่ที่อยากทำงาน</b>
                                    <BR>
                                    <INPUT TYPE="radio" NAME="question_3" VALUE="ฝั่งหลังมอ"> ฝั่งหลังมอ &nbsp;
                                    <INPUT TYPE="radio" NAME="question_3" VALUE="ฝั่งกังสดาล"> ฝั่งกังสดาล &nbsp;
                                    <INPUT TYPE="radio" NAME="question_3" VALUE="ฝั่งโนนม่วง"> ฝั่งโนนม่วง
                                    <BR>
                                    <INPUT TYPE="radio" NAME="question_3" VALUE="ฝั่งโคลัมโบ"> ฝั่งโคลัมโบ &nbsp;
                                    <INPUT TYPE="radio" NAME="question_3" VALUE="บริเวณโลตัส"> บริเวณโลตัส เอ็กซ์ตร้า
                                    &nbsp;
                                    <INPUT TYPE="radio" NAME="question_3" VALUE="ภายในมหาวิทยาลัยขอนแก่น">
                                    ภายในมหาวิทยาลัยขอนแก่น
                                    <BR>
                                    <INPUT TYPE="radio" NAME="question_3"> อื่นๆ 

                                    <BR>
                                </div>
                                <div class="form-group">
                                    <b>4.ช่วงเวลาที่สะดวกแก่การทำงาน</b>
                                    <BR>
                                    <INPUT TYPE="radio" NAME="question_4" VALUE="9.00-15.00"> 9.00-15.00 น. &nbsp;
                                    <INPUT TYPE="radio" NAME="question_4" VALUE="10.00-16.00"> 10.00-16.00 น.
                                    <BR>
                                    <INPUT TYPE="radio" NAME="question_4" VALUE="16.00-21.00"> 16.00-21.00 น. &nbsp;
                                    <INPUT TYPE="radio" NAME="question_4" VALUE="18.00-00.00"> 18.00-00.00 น.
                                    <BR>
                                    <INPUT TYPE="radio" NAME="question_4"> อื่นๆ 

                                    <BR>
                                </div>
                            </div>
                            <div class="step2">
                                <div class="form-group">
                                <b>5.ระดับความพึงพอใจต่อลักษณะของงานที่สนใจ</b>
                                <div style="text-align: center">
                                    <table id="question" border="1">
                                        <thead>
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th width="230"><div style="text-align: center">ลักษณะของงาน</th>
                                                <th width="80"><div style="text-align: center">ไม่สนใจ</th>
                                                <th width="80"><div style="text-align: center">น้อยที่สุด</th>
                                                <th width="80"><div style="text-align: center">น้อย</th>
                                                <th width="80"><div style="text-align: center">ปานกลาง</th>
                                                <th width="80"><div style="text-align: center">มาก</th>
                                                <th width="80"><div style="text-align: center">มากที่สุด</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><div style="text-align: center">1</td>
                                                <td>พนักงานเสริฟ</td>
                                                <td><input type="radio" name="question_5_1" VALUE="0" /></td>
                                                <td><input type="radio" name="question_5_1" VALUE="1" /></td>
                                                <td><input type="radio" name="question_5_1" VALUE="2" /></td>
                                                <td><input type="radio" name="question_5_1" VALUE="3" /></td>
                                                <td><input type="radio" name="question_5_1" VALUE="4" /></td>
                                                <td><input type="radio" name="question_5_1" VALUE="5" /></td>
                                            </tr>
                                            <tr>
                                                <td><div style="text-align: center">2</td>
                                                <td>พนักงานทำอาหาร,เตรียมอาหาร</td>
                                                <td><input type="radio" name="question_5_2" VALUE="0" /></td>
                                                <td><input type="radio" name="question_5_2" VALUE="1" /></td>
                                                <td><input type="radio" name="question_5_2" VALUE="2" /></td>
                                                <td><input type="radio" name="question_5_2" VALUE="3" /></td>
                                                <td><input type="radio" name="question_5_2" VALUE="4" /></td>
                                                <td><input type="radio" name="question_5_2" VALUE="5" /></td>
                                            </tr>
                                            <tr>
                                                <td><div style="text-align: center">3</td>
                                                <td>ทำเครื่องดื่ม</td>
                                                <td><input type="radio" name="question_5_3" VALUE="0" /></td>
                                                <td><input type="radio" name="question_5_3" VALUE="1" /></td>
                                                <td><input type="radio" name="question_5_3" VALUE="2" /></td>
                                                <td><input type="radio" name="question_5_3" VALUE="3" /></td>
                                                <td><input type="radio" name="question_5_3" VALUE="4" /></td>
                                                <td><input type="radio" name="question_5_3" VALUE="5" /></td>
                                            </tr>
                                            <tr>
                                                <td><div style="text-align: center">4</td>
                                                <td>ทำความสะอาด</td>
                                                <td><input type="radio" name="question_5_4" VALUE="0" /></td>
                                                <td><input type="radio" name="question_5_4" VALUE="1" /></td>
                                                <td><input type="radio" name="question_5_4" VALUE="2" /></td>
                                                <td><input type="radio" name="question_5_4" VALUE="3" /></td>
                                                <td><input type="radio" name="question_5_4" VALUE="4" /></td>
                                                <td><input type="radio" name="question_5_4" VALUE="5" /></td>
                                            </tr>
                                            <tr>
                                                <td><div style="text-align: center">5</td>
                                                <td>พนักงานต้อนรับ</td>
                                                <td><input type="radio" name="question_5_5" VALUE="0" /></td>
                                                <td><input type="radio" name="question_5_5" VALUE="1" /></td>
                                                <td><input type="radio" name="question_5_5" VALUE="2" /></td>
                                                <td><input type="radio" name="question_5_5" VALUE="3" /></td>
                                                <td><input type="radio" name="question_5_5" VALUE="4" /></td>
                                                <td><input type="radio" name="question_5_5" VALUE="5" /></td>
                                            </tr>
                                            <tr>
                                                <td><div style="text-align: center">6</td>
                                                <td>แคชเชียร์</td>
                                                <td><input type="radio" name="question_5_6" VALUE="0" /></td>
                                                <td><input type="radio" name="question_5_6" VALUE="1" /></td>
                                                <td><input type="radio" name="question_5_6" VALUE="2" /></td>
                                                <td><input type="radio" name="question_5_6" VALUE="3" /></td>
                                                <td><input type="radio" name="question_5_6" VALUE="4" /></td>
                                                <td><input type="radio" name="question_5_6" VALUE="5" /></td>
                                            </tr>
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                            <div class="step3">
                                <div class="form-group">
                                    <b>6.ระดับความพึงพอใจต่อประเภทของร้านที่สนใจ</b>
                                    <div style="text-align: center">
                                    <table id="question" border="1">
                                        <thead>
                                            <tr>
                                                <th>ลำดับ</th>
                                                <th width="270"><div style="text-align: center">ประเภทของร้าน</th>
                                                <th width="60"><div style="text-align: center">ไม่สนใจ</th>
                                                <th width="60"><div style="text-align: center">น้อยที่สุด</th>
                                                <th width="60"><div style="text-align: center">น้อย</th>
                                                <th width="60"><div style="text-align: center">ปานกลาง</th>
                                                <th width="60"><div style="text-align: center">มาก</th>
                                                <th width="60"><div style="text-align: center">มากที่สุด</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td><div style="text-align: left">ร้านกาแฟ, นมสด</td>
                                                <td><input type="radio" name="question_6_1" VALUE="0" /></td>
                                                <td><input type="radio" name="question_6_1" VALUE="1" /></td>
                                                <td><input type="radio" name="question_6_1" VALUE="2" /></td>
                                                <td><input type="radio" name="question_6_1" VALUE="3" /></td>
                                                <td><input type="radio" name="question_6_1" VALUE="4" /></td>
                                                <td><input type="radio" name="question_6_1" VALUE="5" /></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td><div style="text-align: left">ร้านอาหาร</td>
                                                <td><input type="radio" name="question_6_2" VALUE="0" /></td>
                                                <td><input type="radio" name="question_6_2" VALUE="1" /></td>
                                                <td><input type="radio" name="question_6_2" VALUE="2" /></td>
                                                <td><input type="radio" name="question_6_2" VALUE="3" /></td>
                                                <td><input type="radio" name="question_6_2" VALUE="4" /></td>
                                                <td><input type="radio" name="question_6_2" VALUE="5" /></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td><div style="text-align: left">ร้านหมูกะทะ</td>
                                                <td><input type="radio" name="question_6_3" VALUE="0" /></td>
                                                <td><input type="radio" name="question_6_3" VALUE="1" /></td>
                                                <td><input type="radio" name="question_6_3" VALUE="2" /></td>
                                                <td><input type="radio" name="question_6_3" VALUE="3" /></td>
                                                <td><input type="radio" name="question_6_3" VALUE="4" /></td>
                                                <td><input type="radio" name="question_6_3" VALUE="5" /></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td><div style="text-align: left">ร้านชาบู</td>
                                                <td><input type="radio" name="question_6_4" VALUE="0" /></td>
                                                <td><input type="radio" name="question_6_4" VALUE="1" /></td>
                                                <td><input type="radio" name="question_6_4" VALUE="2" /></td>
                                                <td><input type="radio" name="question_6_4" VALUE="3" /></td>
                                                <td><input type="radio" name="question_6_4" VALUE="4" /></td>
                                                <td><input type="radio" name="question_6_4" VALUE="5" /></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td><div style="text-align: left">สถานบันเทิง</td>
                                                <td><input type="radio" name="question_6_5" VALUE="0" /></td>
                                                <td><input type="radio" name="question_6_5" VALUE="1" /></td>
                                                <td><input type="radio" name="question_6_5" VALUE="2" /></td>
                                                <td><input type="radio" name="question_6_5" VALUE="3" /></td>
                                                <td><input type="radio" name="question_6_5" VALUE="4" /></td>
                                                <td><input type="radio" name="question_6_5" VALUE="5" /></td>
                                            </tr>
                                            
                                            
                                        </tbody>
                                    </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <div class="step1">
                            <button type="button" class="btn btn-info" id="n1">next</button>
                        </div>

                        <div class="step2">
                                <button type="button" class="btn btn-info" style="align: left" id="p1">previous</button>
                                <button type="button" class="btn btn-info" style="align: right" id="n2">next</button>
                        </div>

                        <div class="step3">
                                <button type="button" class="btn btn-info" style="align: left" id="p2">previous</button>                      
                                <button type="submit" class="btn btn-info" style="align: right">submit</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- End modal-->
        <?php }
?>

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
                                <div class="social-contact">
                                    <i class="fa fa-phone"></i> 085-4512369 &nbsp; &nbsp;
                                    <i class="fa fa-envelope"></i> Part_time@kkumail.com
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>


        <script>
            $(function () {
                $('#surway').modal();
            });

            $(document).ready(function () {
                $(".step2").hide();
                $(".step3").hide();

                $("#n1").click(function () {
                    $(".step2").fadeIn("slow");
                    $(".step1").hide();
                    $(".step3").hide();
                });

                $("#n2").click(function () {
                    $(".step3").fadeIn("slow");
                    $(".step1").hide();
                    $(".step2").hide();
                });

                $("#p1").click(function () {
                    $(".step1").fadeIn("slow");
                    $(".step2").hide();
                    $(".step3").hide();
                });

                $("#p2").click(function () {
                    $(".step2").fadeIn("slow");
                    $(".step1").hide();
                    $(".step3").hide();
                });
            });
        </script>

        <!--Footer-->
        <script src="assets/js/vendor/jquery-1.11.2.min.js"></script>
        <script src="assets/js/vendor/bootstrap.min.js"></script>

        <script src="assets/js/plugins.js"></script>
        <script src="assets/js/modernizr.js"></script>
        <script src="assets/js/main.js"></script>
</body>

</html>