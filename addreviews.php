<?php
include ('conn.php');
 // Adding Reviews
 if(isset($_POST['Add'])){
    $frs=mysqli_real_escape_string($conn, $_POST['freviews']);
    $frg=mysqli_real_escape_string($conn,$_POST['frating']);
    $grs=mysqli_real_escape_string($conn,$_POST['greviews']);
    $grg=mysqli_real_escape_string($conn,$_POST['grating']);
    // $img=mysqli_real_escape_string($conn,$_POST['img']);
    $jrs=mysqli_real_escape_string($conn,$_POST['jreviws']);
    $jrg=mysqli_real_escape_string($conn,$_POST['jrating']);

    $sqlAdd="INSERT INTO `reviews`(`freviews`, `frating`, `greviews`, `grating`, `jreviws`, `jrating`) VALUES ('$frs','$frg','$grs','$grg','$jrs','$jrg')";
    $resAdd=mysqli_query($conn,$sqlAdd) or die(mysqli_error($conn));

    if($resAdd){?>
      <script> alert("Added Successfully");window.location.href="uploadForm.php";</script>
   <?php }
  }