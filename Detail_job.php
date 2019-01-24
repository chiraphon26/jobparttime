<?php 
include "connect.php";
include "header.php";
    $idJob = $_GET["job_id"];
    $array[]=0;
    $round=0;
    $i=0;
    $stmt = $pdo->query("SELECT job_id FROM tb_job");
    while($row=$stmt->fetch()){  
        $array[$i]=$row["job_id"];
        //echo $row["id_news"]."<br>";
        $i=$i+1;
    }
    for($r=0;$r< sizeof($array);$r++){
        if($array[$r]==$idJob){
            //echo "show arR : ".$array[$r]."=".$id."<br>";
            $round=$r;
            //echo "show round : ".$round."<br>";       
        } 
    }
    for($j=$round; $j< sizeof($array);$j++){
        if($array[$j]=$idJob){
            $nextj=$j+1;
            $peviousj=$j-1;
            //echo "show round : ".$nextj;
            if($nextj != sizeof($array)){
                $next = $array[$nextj];
            }
            else{
                $next = null;
            }
            //echo $peviousj;
            if($peviousj > -1){
                $pevious = $array[$peviousj];
            }
            else{
                $pevious = null;
            }
           //echo "show next : ".$next;
            break;
        }      
    }
?>

<section id="features" class="features sections">
    <div class="container">
        <div id="job1" class="row">
            <div class="main_features_content2">
                <?php
                        $result = $pdo->query("SELECT job_store_name, job_commercial_registration, job_position, job_amount, job_working_hours, job_wage_rate, job_location, job_skills, job_contact, job_work_period, job_detail, image_name FROM tb_job LEFT JOIN tb_image ON tb_job.job_id=tb_image.job_id WHERE tb_job.Job_id=$idJob");
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
                            ?>
                    </div>
                </div><br>

            </div>
        </div>
    </div>
</section>
<!--job detail-->

<!--<section id="PrevNext" class="emerald">
            <div class="row container">
                <div >
                     <?php
                        if($pevious != null){
                            echo "<a id='Pevious' href='job_detail2.php?id=".$pevious."' class='btn btn-warning btn-lg prev navbar-left'>&laquo; Previous</a>";
                        }
                   
                        if($next != null){
                            echo "<a id='Next' href='job_detail2.php?id=".$next."' class='btn btn-warning btn-lg next navbar-right'>Next &raquo;</a>";
                        }
                    ?>
                    
                </div>
         </div>
    </section>-->
<?php include "footer.php"?>
</body>

</html>