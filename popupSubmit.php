<?php

    include 'conn.php';
    session_start();

    if(isset($_POST["popup-submit"])){
        $name = $_POST["popup-name"];
        $phone = $_POST["popup-phone"];
        $email = $_POST["popup-email"];
        $query = "INSERT INTO `enquiry`(`name`,`phone`,`email`) VALUES ('$name','$phone','$email')";
        $res=mysqli_query($conn,$query) or die(mysqli_error($conn));
        $lastId=mysqli_insert_id($conn);

        if($res){
            $sqlS = "SELECT * FROM `enquiry` WHERE id=$lastId";
            $result=mysqli_query($conn,$sqlS) or (die());
            while ($row=mysqli_fetch_array($result)) {
                $to="info@meritline.in";
                $subject="Call back request";
                $msg='Name:'.$row['name'].', Email:'.$row['email'].', Phone number:'.$row['phone'];  
                if($row['email'] == ""){
                    $header = "From: meritline.in \r\n";
                } else{
                    $header = "From:".$row['email']." \r\n";
                }            
                $header .= "MIME-Version: 1.0\r\n";
                $header .= "Content-type: text/html\r\n";
    
                $mailHandle=mail($to,$subject,$msg,$header);

                if($mailHandle == true){

                } else{
                
            }
        }
?>
        <script>window.location.href="index.php"; </script>
<?php
    }else{
        echo 'no';
    }
}
?>