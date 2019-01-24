<?php 
include "connect.php";
include "header.php";
?>

<section id="features" class="features sections">
    <div class="container">
        <div id="job1" class="row">
            <div class="main_features_content2">
                <?php
                        $job_id = $_GET["job_id"];
                        $result = $pdo->query("SELECT job_store_name, job_commercial_registration, job_position, job_amount, job_working_hours, job_wage_rate, job_location, job_skills, job_contact, job_work_period, job_detail, image_name FROM tb_job LEFT JOIN tb_image ON tb_job.job_id=tb_image.job_id WHERE tb_job.Job_id=$job_id");
                        $tb_job = $result->fetch();
                        
                     ?>
                <div class="col-sm-6">
                    <div class="single_features_left ">
                        <?php
                                    if($tb_job['image_name'] != null){
                                    echo "<img  src='images/upload/".$tb_job['image_name'].".jpg' >";
                                    }
                                ?>
                    </div>
                </div>

                <div class="col-sm-6 margin-top-60">
                    <div class="single_features_right ">
                        <?php
                                    
                                    echo "<h2>".$tb_job['job_store_name']."</h2>";
                                    echo "<p>"."ตำแหน่งที่ต้องการ :"." &nbsp; ".$tb_job['job_position']."<br>";
                                    echo "จำนวน :"." &nbsp; ".$tb_job['job_amount']." &nbsp; "."ตำแหน่ง"."<br>";
                                    echo "ช่วงเวลาทำงาน :"." &nbsp; ".$tb_job['job_working_hours']."<br>";
                                    echo "ค่าแรง :"." &nbsp; ".$tb_job['job_wage_rate']."<br>";
                                    echo "โซนสถานที่ทำงาน :"." &nbsp; " .$tb_job['job_location']."<br>";
                                    echo "ทักษะที่ต้องการ :" ." &nbsp; ".$tb_job['job_skills']."<br>";
                                    echo "ข้อมูลการติดต่อกลับ :"." &nbsp; ".$tb_job['job_contact']."<br>";
                                    echo "ระยะเวลาการทำงาน :"." &nbsp; ".$tb_job['job_work_period']."<br>";
                                    echo "รายละเอียดเพิ่มเติม :"." &nbsp; ".$tb_job['job_detail']."<br>"."</p>";
                                    echo "<a href ='ClickApprove.php?job_id=".$job_id."'class='btn btn-default pull-right'>Approve</a>";
                                    echo "<a href ='ClickDisapprove.php?&job_id=".$job_id."'class='btn btn-default pull-left'>Disapprove</a>";
                                ?>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!--job detail-->


<?php include "footer.php"?>
</body>

</html>