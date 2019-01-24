<?php
    include "connect.php";
    include "header.php";
    
$username = $_SESSION['admin_username'];
$stmt = $pdo->prepare("SELECT * FROM tb_job 
                                JOIN tb_image ON tb_job.job_id = tb_image.job_id
                                where tb_job.job_status LIKE 'disapprove%'");
$stmt->bindParam(1, $username);
$stmt->execute();
$row = $stmt->fetch();
        
?>

<div id="page-content" class="single-page container">
    <div style="background-color:white; height:900px;">

        <div class="head_title text-center">
            <h1>Job Request</h1>
        </div>

        <div class="row">
            <?php
    while ($row = $stmt->fetch()) {
    ?>
            <a href="Detail_job_admin.php?job_id=<?php echo $row["job_id"]; ?>">
                <div class="portfolio-wrapper text-center">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="community-edition">
                            <img src="images/upload/<?php echo $row["image_name"]; ?>.jpg" width="200" height="150">

                            <div id="main-content" class="col-md-12">
                                <div class="box" style="padding-bottom:50px;">
                                    <p>ชื่อร้าน :
                                        <?php echo $row["job_store_name"]; ?>
                                    </p><br>
                                </div>
                            </div>
                        </div>
                    </div>
            </a>
            <?php 
    }
    ?>
        </div>

 <?php include "footer.php"; ?>

        </body>

        </html>