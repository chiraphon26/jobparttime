<?php
include "connect.php";
include "header.php";

$status = 'disapprove';
$type_id = $_GET["type_id"];

$stmt = $pdo->prepare("SELECT type_name FROM tb_type 
                                WHERE job_type = ?");
$stmt->bindParam(1, $type_id);
$stmt->execute();
?>

<!-- Sections -->
<section id="business" class="portfolio sections">
    <div class="container">
        <?php
            $row1 = $stmt->fetch() 
            ?>
        <div class="head_title text-center">
            <h1>
                <?php echo $row1["type_name"]?>
            </h1>
        </div>


        <div class="row">
            <?php
$stmt = $pdo->prepare("SELECT * FROM tb_job JOIN tb_type ON tb_job.job_type=tb_type.job_type 
JOIN tb_image ON tb_job.job_id = tb_image.job_id WHERE tb_job.job_status <> ? AND tb_type.job_type = ?");
$stmt->bindParam(1, $status);
$stmt->bindParam(2, $type_id);

$stmt->execute();
            while ($row = $stmt->fetch()) {
            ?>

            <a href="Detail_job.php?job_id=<?php echo $row["job_id"]; ?>">
                <div class="portfolio-wrapper text-center">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="community-edition">
                            <img src="images/upload/<?php echo $row["image_name"]; ?>.jpg" width="400" height="250">
                            <div class="separator"></div>
                            <h4>
                                <?php echo $row["job_store_name"]; ?>
                            </h4>
                        </div>
                    </div></a>

            <?php 
            }
            ?>
        </div>

        <!-- /container -->
</section>
<?php include("footer.php");?>
</body>

</html>