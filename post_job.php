<?php include("header.php");?>

<!-- Sections -->
<section id="business" class="portfolio sections">
    <div class="container">
        <div class="head_title text-center">
            <h1>Post Job</h1>

        </div>
        <form action="InsertJob.php" method="post" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group col-md-6">
                    ชื่อร้านค้า :
                    <input class="form-control" id="job_store_name" name="job_store_name" type="text">

                </div>
                <div class="form-group col-md-6">
                    เลขที่ทะเบียนพาณิชย์:
                    <input class="form-control" id="job_commercial_registration" name="job_commercial_registration"
                        type="text">

                </div>
                <div class="form-group col-md-6">
                    ตำแหน่งที่ต้องการ :
                    <input class="form-control" id="job_position" name="job_position" type="text">

                </div>
                <div class="form-group col-md-6">
                    จำนวน :
                    <input class="form-control" id="job_amount" name="job_amount" type="text">

                </div>
                <div class="form-group col-md-6">
                    ช่วงเวลาทำงาน :
                    <input class="form-control" id="job_working_hours" name="job_working_hours" type="text">
                </div>
                <div class="form-group col-md-6">
                    ค่าแรง :
                    <input class="form-control" id="job_wage_rate" name="job_wage_rate" type="text">
                </div>
                <div class="form-group col-md-6">
                    โซนสถานที่ทำงาน :
                    <select class="form-control" id="job_location" name="job_location">
                        <option>ฝั่งหลังมอ</option>
                        <option>ฝั่งโนนม่วง</option>
                        <option>ฝั่งกังสดาล</option>
                        <option>ฝั่งโลตัสเอ็กซ์ตร้า</option>
                        <option>ฝั่งโคลัมโบ</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    ทักษะที่ต้องการ :
                    <input class="form-control" id="job_skills" name="job_skills" type="text">

                </div>
                <div class="form-group col-md-6">
                    ข้อมูลการติดต่อกลับ :
                    <input class="form-control" id="job_contact" name="job_contact" type="text">

                </div>
                <div class="form-group col-md-6">
                    ระยะเวลาการทำงาน :
                    <input class="form-control" id="job_work_period" name="job_work_period" type="text">
                </div>

                <div class="form-group col-md-6">
                    รายละเอียดเพิ่มเติม :
                    <input class="form-control" id="job_detail" name="job_detail" type="text">

                </div>

                <div class="form-group col-md-6">
                    ประเภทของร้าน :
                    <select class="form-control" id="job_type" name="job_type">
                        <option value="1">Restaurant</option>
                        <option value="2">Bakery and milk</option>
                        <option value="3">Bar</option>
                        <option value="4">Musician</option>
                        <option value="5">Computer Programmer</option>
                        <option value="6">Documents</option>
                        <option value="7">Chef</option>
                        <option value="8">Tutor</option>
                    </select>
                </div>
                <div class="form-group col-md-6">
                    รูปภาพ :
                    <input id="image" name="image" type="file">

                </div>
            </div>
            <button class="btn btn-default pull-right" id="insert" name="submit" type="submit">
                POST
            </button>
        </form>


    </div>
    <!-- /container -->
</section>

<?php include("footer.php");?>
</body>

</html>