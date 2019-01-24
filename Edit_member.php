<?php 
    include "connect.php";
    include "header.php";

    $member_id = $_GET['member_id'];
    $sql = $pdo->query("SELECT * FROM tb_member WHERE member_id = $member_id ");
    $row = $sql->fetch();

?>

<html>

<body>

    <section id="business" class="portfolio sections">
        <div class="container">
            <div class="head_title text-center">
                <h1>Register</h1><br>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <b>ข้อมูลส่วนตัว</b><br><br>

                <form method="POST" action="SaveEdit_member.php" novalidate="novalidate">

                    <div class="form-group col-md-6">
                        <label for="username" class="control-label">ชื่อ-นามสกุล</label>
                        <input type="text" class="form-control" id="member_name" name="member_name" value="<?php echo $row["
                            member_name"];?>"
                        placeholder="ex.นายนานะ ใจดี">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="username" class="control-label">รหัสบัตรประชาชน</label>
                        <input type="text" class="form-control" id="member_ssn" name="member_ssn" value="<?php echo $row["
                            member_ssn"];?>" disabled>

                        <span class="help-block"></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="username" class="control-label">เบอร์โทรศัพท์</label>
                        <input type="text" class="form-control" id="member_tel" name="member_tel" value="<?php echo $row["
                            member_tel"];?>"
                        placeholder="">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="username" class="control-label">อีเมล์</label>
                        <input type="text" class="form-control" id="member_email" name="member_email" value="<?php echo $row["
                            member_email"];?>"
                        placeholder="">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group col-md-12">
                        <label for="username" class="control-label">ที่อยู่</label>
                        <input type="text" class="form-control" id="member_address" name="member_address" value="<?php echo $row["
                            member_address"];?>"
                        placeholder="">
                        <span class="help-block"></span>
                    </div>


                    <b>ข้อมูลเข้าสู่ระบบ</b><br><br>
                    <div class="form-group col-md-6">
                        <label for="username" class="control-label">Username</label>
                        <input type="text" class="form-control" id="member_username" name="member_username" value="<?php echo $row["
                            member_username"];?>"
                        placeholder="Username or E-mail">
                        <span class="help-block"></span>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="password" class="control-label">Password</label>
                        <input type="text" class="form-control" id="member_password" name="member_password" value="<?php echo $row["
                            member_password"];?>"
                        placeholder="Password">
                        <span class="help-block"></span>
                    </div>

                    <center>
                        <input type="submit" value="Save" class="btn btn-info">
                        <!-- <button type="button" class="btn btn-info">Register</button>-->
                    </center>

                </form>
            </div>
        </div>
        </div>
    </section>


    <?php
include "footer.php";
?>
</body>

</html>