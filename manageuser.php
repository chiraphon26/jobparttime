<?php
    include "connect.php";
    include "header.php";      
?>

<body>

    <div id="page-content" class="single-page container">
        <div style="background-color:white; height:900px;">
            <div class="row">
                <div id="main-content" class="col-md-12">
                    <div class="box">
                        <h3>Manage user</h3><br>
                        <div style="padding-left:60px;">

                            <?php
                $result = $pdo->query("SELECT * FROM tb_member"); ?>
                            <table align="center" border="1">
                                <thead>
                                    <tr>
                                        <th width="180">ชื่อ-นามสกุล</th>
                                        <th width="100">Username</th>
                                        <th width="150">รหัสบัตรประชาชน</th>
                                        <th width="120">เบอร์โทรศัพท์</th>
                                        <th width="150">E-mail</th>
                                        <th width="150">ที่อยู่</th>
                                        <th width="80">edit</th>
                                    </tr>
                                </thead>


                                <?php   
               while($row = $result->fetch()){
                   echo "<tr>";
                   echo "<th >".$row["member_name"]."</th>";
                   echo "<th >".$row["member_username"]."</th>";
                   echo "<th >".$row["member_ssn"]."</th>";
                   echo "<th >".$row["member_tel"]."</th>";
                   echo "<th >".$row["member_email"]."</th>";
                   echo "<th >".$row["member_address"]."</th>";
                   //echo "<a href='Delete_member.php?username=".$row["member_Username"]."Delete"."</a>";
                   echo "<th>
                        <a href ='Delete_member.php?&member_id=".$row["member_id"]."'>Delete</a>"."</th>";
                   echo "</tr>";
               }
            ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
    <?php include "footer.php";?>
</body>

</html>