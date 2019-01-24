<?php
    session_start();
    include "connect.php";
    if ( !isset($_SESSION["username"])) {
        header("location: index.php");
    }
    if($_SESSION["username"] != 'admin'){
        header("location: index.php");
    }
        
    $date = date('Y-m-d');
    function DateThai($date)
	       {
                $strYear = date("Y",strtotime($date))+543;
                $strMonth= date("n",strtotime($date));
                $strDay= date("j",strtotime($date));
                $strMonthCut = Array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม");
                $strMonthThai=$strMonthCut[$strMonth];
                return "$strDay $strMonthThai $strYear";
	       }
    $username = $_GET['username'];
    $stmt = $pdo->prepare("SELECT * FROM member WHERE Username = ?");
    $stmt->bindParam(1, $username);
    $stmt->execute();
    $row = $stmt->fetch();
?>
<!DOCTYPE html>
<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet"> 
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Free Bootstrap Themes by 365Bootstrap dot com - Free Responsive Html5 Templates">
  <meta name="author" content="https://www.365bootstrap.com">
  <title>ชุมชนคนรักสวยรักงาม</title>
  <!-- Bootstrap Core CSS -->
  <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
  <!-- Owl Carousel Assets -->
  <link href="owl-carousel/owl.carousel.css" rel="stylesheet">
  <link href="owl-carousel/owl.theme.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/modal.css">
  <link href="css/bootstrap-datetimepicker.min.css" rel="stylesheet" media="screen">
  <!-- Custom Fonts -->
  <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css" type="text/css">
  <!-- jQuery and Modernizr-->
  <script src="js/jquery-2.1.1.js"></script>
  <!-- Core JavaScript Files -->
  <script src="js/bootstrap.min.js"></script>
  <!-- Google reCaptcha -->
  <script src='https://www.google.com/recaptcha/api.js'></script>

    <style>

*{
	font-family: 'Kanit', sans-serif;
}

     .dropdown-menu {
        min-width: 0px;
        }
        #rightpanel a{
            font-size:24px;
            color: white;
        }
        
          #rightpanel a:hover{
            font-size:24px;
            color: #3a2822;
        }
        .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
}
        
    </style>
    <link rel="icon" href="beauty-logo.png">
    </head>
    

<body>
    <header style="margin:20px;">
   <div class="container">
       <div class="col-md-9">
             <img src="beauty-logo.png" height="100px" width="100px">
            <div class="logo" style="display:inline; color:white;"><span style="font-size:50px;">ชุมชนคนรักสวยรักงาม</span></div>
       </div>
    <div class="col-md-3" id="rightpanel">
       <?php
        if (isset($_SESSION["username"])) {

            echo "<a href='#' style='float:right;'>สวัสดีคุณ ".$_SESSION["username"]."</a><br>";
            echo "<a href='logout.php' style='float:right;'>Sign Out</a>";
        }
            ?>
       </div>
    </div>    
        
  </header>
  <nav id="menu" class="navbar container" style="background-color:#AEE0A4;">
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      <ul class="nav navbar-nav float-left">
        <li>
          <div class="dropdown show">
       <li>
           <a class="btn btn-secondary dropdown-toggle" onclick="location.href='index.php'" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Home
              </a>
          </li>
           <li>
           <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Manage News & Announcement
              </a>
          </li>
           <li>
           <a class="btn btn-secondary dropdown-toggle" onclick="location.href='manageuser.php'" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Manage User
              </a>
          </li>
    
      </ul>
 
    </div>
  </nav>
      <div id="page-content" class="single-page container">
    <div style="background-color:white; height:900px;">
    
    <div class="row">
      <div id="main-content" class="col-md-12">
        <div class="box" style="padding-bottom:50px;">
            <p>ชื่อ : <?php echo $row["Name"]; ?></p><br>
            <p>username : <?php echo $row["Username"]; ?></p><br>
            <p>SSN/Passport ID : <?php echo $row["SSN"]; ?></p><br>
            <p>Birthday : <?php echo DateThai($row["Birthdate"]); ?></p><br>
            <p>E-mail : <?php echo $row["Email"]; ?></p><br>
            <p>คำถาม : </p><br>
            <div style="padding-left:50px; width:900px;">
                <div style="width:50%; float:left;">
                <p>คำถามที่ 1 : <?php echo $row["Question1"]; ?></p><br>
                <p>คำถามที่ 2 : <?php echo $row["Question2"]; ?></p><br>
                <p>คำถามที่ 3 : <?php echo $row["Question3"]; ?></p><br>
                </div>
                <div style="width:50%; float:left;">
                <p>คำตอบคำถามที่ 1 : <?php echo $row["Ans1"]; ?></p><br>
                <p>คำตอบคำถามที่ 2 : <?php echo $row["Ans2"]; ?></p><br>
                <p>คำตอบคำถามที่ 3 : <?php echo $row["Ans3"]; ?></p><br>
                </div>
            </div>
            <div style="clear:both;">
                <!---put img---->
                <img src="<?php echo "SSN_img/".$row["FileSSN"].".jpg"; ?>" width="500px" height="400px" class="center">
            </div>
            <div style="clear:both; margin-top:20px;" class="center">
             <button type="button" onclick="location.href='clickApprove.php?username=<?php echo $row["Username"]."&email=".$row["email"]; ?>';" class="btn btn-default" style="background-color:#AEE0A4; color:white; font-size:18px;">Approve</button>
             <button type="button" onclick="location.href='clickDisapprove.php?username=<?php echo $row["Username"]."&email=".$row["email"]; ?>';" class="btn btn-default" style="background-color:#AEE0A4; color:white; font-size:18px;">Disapprove</button>
            </div>
          
            
            
            
            
          </div>
        </div>
    </div>
        <footer style="background-color:#3a2822">
    <div class="copy-right">
      <p>© Copyright
        <br>Contact : admin@kkumail.com </p>
    </div>
  </footer>
          </div>
      </div>
  <!-- JS -->
  <script src="owl-carousel/owl.carousel.js"></script>
  <script>
    $(document).ready(function() {
      $("#owl-demo-1").owlCarousel({
        autoPlay: 3000,
        items : 1,
        itemsDesktop : [1199,1],
        itemsDesktopSmall : [400,1]
      });
	  $("#owl-demo-2").owlCarousel({
        autoPlay: 3000,
        items : 3,
        
      });
    });
  </script>
  <script type="text/javascript" src="js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
  <script type="text/javascript" src="js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
  <script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
    $(document).ready(function () {
    size_li = $("#myList li").size();
    x=10;
    $('#myList li:lt('+x+')').show();
    $('#loadMore').click(function () {
        x= (x+10 < size_li) ? x+10 : size_li;
        $('#myList li:lt('+x+')').slideDown();
    });
});
  </script>
 
</body>

</html>