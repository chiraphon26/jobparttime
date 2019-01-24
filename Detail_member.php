<?php 
include "connect.php";
include "header.php";
$username = $_SESSION['member_username'];
$stmt = $pdo->prepare("Select * FROM tb_member where member_username = ?");
$stmt->bindParam(1, $username);
$stmt->execute();
$row = $stmt->fetch();

  if(empty($_SESSION['member_username'])){
    header("Location: home.php");
  }
?>


<div class="register_container" style="margin-bottom: 3rem;">
    <h3 style="text-align: center; margin-top: 5rem;">Your Profile</h3>
    <hr>
    <form id="register_form" class="font-Tri" method="post" enctype="multipart/form-data">

        <form role="form">
            <div style="margin-left: 38%; margin-right: 35%;">


                <?php
                    $LengthSSN = strlen($row['member_ssn'])-2;
                    $ShowSSN = str_repeat("x", $LengthSSN);
                    $LengthPassword = strlen($row['member_password']);
                    $showPassword = str_repeat("x", $LengthPassword);
            
                    echo "<table>";
                    echo "<tr><td>ชื่อ-นามสกุล : </td><td>".$row['member_name']."</td></tr>";
                    echo "<tr><td>เลขประจำตัวประชาชน : </td><td>".$row['member_ssn']."</td></tr>";
                    echo "<tr><td>เบอร์โทรศัพท์ : </td><td>".$row['member_tel']."</td></tr>";
                    echo "<tr><td>อีเมล์ : </td><td>".$row['member_email']."</td></tr>";
                    echo "<tr><td>ที่อยู่ : </td><td>".$row['member_address']."</td></tr>";  
                    echo '<tr><td>Username : </td><td>'.$row['member_username'].'</td></tr>';
                    echo "<tr><td>Password : </td><td>".$showPassword."</td></tr>";
                    echo "</table><br>";
                    echo "<a href ='Edit_member.php?&member_id=".$row["member_id"]."'>Edit</a>";
                  
                ?>
                <!--<input  type="submit" value = "register" class="btn btn-info">-->
                <!--<input type="text" id="test" name="test" class="form-control " value="<?php //echo $_SESSION['member_name'] ?> " disabled> -->
            </div>


        </form>
    </form>
</div>

<?php include "footer.php"?>
</body>

</html>