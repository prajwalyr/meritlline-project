<?php
include 'conn.php';

if(isset($_POST['confBook'])){

    // declaration of variable;

    $name=mysqli_real_escape_string($conn, $_POST['std_name']);
    $email=mysqli_real_escape_string($conn, $_POST['email']);
    $ph_num=mysqli_real_escape_string($conn, $_POST['phone_num']);
    $curr_study=mysqli_real_escape_string($conn, $_POST['curr_study']);
    $location=mysqli_real_escape_string($conn, $_POST['location']);
    $stream=mysqli_real_escape_string($conn, $_POST['stream']);
    $couns_for=mysqli_real_escape_string($conn, $_POST['couns_for']);
    $couns_date=mysqli_real_escape_string($conn, $_POST['couns_date']);

    //date inserting into counselling table

    $sql="INSERT INTO `counselling`(`std_name`, `email`, `phone_num`, `curr_study`, `location`, `stream`, `couns_for`, `couns_date`) VALUES ('$name','$email','$ph_num','$curr_study','$location','$$stream','$couns_for','$couns_date')";
    $res=mysqli_query($conn,$sql) or die(mysqli_error($conn));
    $lastId=mysqli_insert_id($conn);

    if($res){
        $sqlS = "SELECT * FROM `counselling` WHERE id=$lastId";
        $result=mysqli_query($conn,$sqlS) or (die());
        while ($row=mysqli_fetch_array($result)) {
            $to="info@meritline.in";
            $subject="Booked counselling";
            $msg='Name:'.$row['std_name'].', Email:'.$row['email'].', Phone number:'.$row['phone_num'].', Currently studying:'.$row['curr_study'].', Location:'.$row['location'].', Stream:'.$row['stream'].', Counselling for:'.$row['couns_for'].', Counselling date:'.$row['couns_date'];  
            $header = "From:".$row['email']." \r\n";            
            $header .= "MIME-Version: 1.0\r\n";
            $header .= "Content-type: text/html\r\n";

            $mailHandle=mail($to,$subject,$msg,$header);

            if($mailHandle == true){

            } else{
                
            }
        }
    ?>
    <script>window.location.href="index.php"; alert('Your counselling has been booked ');</script>
    <?php
    }else{
        echo 'no';
    }
}
?>