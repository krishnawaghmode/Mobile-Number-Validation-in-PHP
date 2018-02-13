  <!-- PHP Code -->

<?php
if(isset($_POST['register'])){

    $mobile=$_POST['mobile'];


  if(empty($mobile)){
      echo '<script>alert("Mobile Number field Empty...!!!!!!");</script>';


    }elseif(!preg_match("/^\d{10}+$/", $mobile)){
  
      echo '<script>alert("Only Numbers with 10 Digits required");</script>';
    }else{

                      echo "<center><h2>Mobile Number:-$mobile</h2></center>";
            }

            }
 ?>