<?php
include 'conn.php';
error_reporting(E_ERROR | E_WARNING | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    MERITLINE No #1 Education Consultants in India | Secured Admission
    Consultants in Bangalore | MERITLINE Educational Services
  </title>
  <!-- fontawesome -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous" />
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&family=Oxygen:wght@300&display=swap"
    rel="stylesheet" />
  <!-- custom styles -->
  <link rel="stylesheet" href="css/styles.css" />
  <!-- bootstrap styles -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css" />
    <style>
        .float{
	position:fixed;
	z-index: 10;
	margin-top: 30px;
    
	width:60px;
	height:60px;
	bottom:30px;
	padding-bottom: 40px;
	left:35px;
	background-color:#0C9;
	color:#FFF;
	border-radius:50px;
	text-align:center;
	overflow: hidden;
	
}

.my-float{
	margin-top:22px;
}

    </style>
  </head>

  <body>
    <!-- navbar start -->
    
<a href="tel:+919741941372" class="float">
<i class="fa fa-phone my-float"></i>
</a>
  <!-- navbar start -->
  <section id="navigation">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="index.php"
          >&nbsp;<img src="img/my-edit.png" alt="meritline-logo" height="60px" width="150px" 
        /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About Us</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="collegeCourse.php">Colleges & Courses</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              What we do
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="careerCounselling.php">Career Counselling</a>
                <a class="dropdown-item" href="admissionGuidance.php">Admission Guidance</a>
                <a class="dropdown-item" href="securedAdmission.php">Secured Admission</a>
                <a class="dropdown-item" href="applyAndDocument.php">Application & Documentation</a>
                <a class="dropdown-item" href="institutionalPromotion.php">Institutional Promotion</a>
                <a class="dropdown-item" href="psychometricTest.php">Psychometric Test</a>
            </div>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="awards.php">Awards</a>
          </li>
           <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                id="navbarDropdownMenuLink"
                role="button"
                data-toggle="dropdown"
                aria-haspopup="true"
                aria-expanded="false"
              >
                Downloads
              </a>
              <div
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
                <a class="dropdown-item" download="franchise.pdf" href="franchise.pdf">Franchise</a>
                  <a class="dropdown-item" download="franchise.pdf" href="franchise.pdf">Student</a>
              </div>
            </li>
          <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact Us</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>
  <!-- navbar end -->
 <div style="background-image: url('img/cover-img2.jpg'); 
    width: 100%;   height: 100%;">
  <!-- top banner start -->
  <section class="topBanner">
    <form action="" class="searchForm" id="searchForm">
      <div class="form-group">
        <select class="selectpicker" data-live-search="true" title="College or Course" data-width="fit" name="clg" id="clg">
        <?php
          $sql="SELECT * FROM `clg_details`";
          $res=mysqli_query($conn,$sql);
          
          While($row=mysqli_fetch_array($res)){
           $csr[]=$row['course']; 
           $cln[]=$row['clg_name']; 
          } 
        ?>
          
          <?php 
          $clg=array_unique( $cln);
          foreach ($clg as $key => $value) {
          
            ?>
                <option data-tokens="<?php echo $row['clg_name'];?>"><?php echo $_SESSION['clg_name']= $value;?></option>    
        
          <?php
          } 
                            $popPro= array_unique($csr);
                            //  print_r($popPro);
                            //   echo "</br></br>";
                            $impro= implode(",",$popPro);
                            $exPro=explode(' , ',$impro);
                            $popExPro= array_unique($exPro);
                            
                            $improPro=implode(" , ",$popExPro); 
                                                 
                            $proPreg=preg_split( "/[,]+/",$improPro) ; 
                            $course=array_unique($proPreg); 

                            // $course= array_unique($st);
                            print_r($course);
          foreach ($course as $key => $value) {
          ?>
            <option data-tokens="<?php echo $row['course'];?>"><?php echo $_SESSION['course']= $value;?></option>
          <?php
          }
          ?>
          <!-- <option data-tokens="mustard">Burger, Shake and a Smile</option>
          <option data-tokens="frosting">Sugar, Spice and all things nice</option> -->
          <?php  ?>
        </select>
        <select class="selectpicker" data-live-search="true" title="City" data-width="fit" name="city" id="city">
        <?php 
          $sql1="SELECT * FROM `clg_details`";
          $res1=mysqli_query($conn,$sql1);
          $row1=mysqli_fetch_array($res1);
          // print_r($row1);
          
          foreach ($row1 as $key => $value) {
              // echo $value;
          }

         
          While($row1=mysqli_fetch_assoc($res1)){  
                       $array[]=$row1['city'];
                      //  print_r($array);
          }
        ?><?php
        $remove= array_unique($array);
            // print_r($remove);
            foreach ($remove as $key => $value) {
              # code...
           
        ?>
          <option data-tokens="<?php echo $row1['city'];?>"><?php echo $_SESSION['city'] = $value; ?></option>
          <!-- <option data-tokens="mustard">Burger, Shake and a Smile</option>
          <option data-tokens="frosting">Sugar, Spice and all things nice</option> -->
          <?php 
          }
             
            
          ?>
        </select>

        <button type="button" class="btn btn-dark" id="submit" name="search"><i class="fa fa-search"></i></button>
      </div>
    </form>
  </section>
  <!-- top banner end -->
</div>
  <!-- college list start-->
  <section id="collegeList">
    <div class="pageHeading">
      <h1>Colleges & Courses</h1>
    </div>
    <div class="collegeContainer px-md-5 px-2">
      <div class="row" id="output">
      <?php
        $clg_type=$_GET['type'];
        if ($clg_type == "" ) {
        
        $sql = "SELECT * FROM `clg_details`";
        $res=mysqli_query($conn,$sql);
        
        while ($a=mysqli_fetch_array($res)) {?>
      
    
        <div class="col-12 col-md-6 col-lg-3 mt-2 mb-2 mt-md-3 mb-md-2" >
          <div class="card collegeCard">
            <a href="collegeDetails.php?id=<?php echo $a['id'];?>" title="<?php $a['clg_type']; ?>">
              <img src="Clg_cover_Img/<?php echo $a['img'];?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $a['clg_name']; ?></h5>
              </div>
            </a>
          </div>
        </div>
        <?php
          }
        }
        else{

              $sql2="SELECT * FROM `clg_details` WHERE clg_type='$clg_type'";
              $result=mysqli_query($conn,$sql2);
              while($row2=mysqli_fetch_array($result)){
          ?>
        <div class="col-12 col-md-6 col-lg-3 mt-2 mb-2 mt-md-3 mb-md-2">
         <div class="card collegeCard">
             <a href="collegeDetails.php?id=<?php echo $row2['id'];?>">
               <img src="Clg_cover_Img/<?php echo $row2['img'];?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title"><?php echo $row2['clg_name']; ?></h5>
             </div>
            </a>
           </div>
         </div>
        <?php
        }
        }
      
              ?>
        <!-- <div class="col-12 col-md-6 col-lg-3 mt-2 mb-2 mt-md-3 mb-md-2">  -->
          <!-- <div class="card collegeCard">
            <a href="collegeDetails.html">
              <img src="img/colleges/collegeExample.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">College Name</h5>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mt-2 mb-2 mt-md-3 mb-md-2">
          <div class="card collegeCard">
            <a href="collegeDetails.html">
              <img src="img/colleges/collegeExample.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">College Name</h5>
              </div>
            </a>
          </div>
        </div>
        <div class="col-12 col-md-6 col-lg-3 mt-2 mb-2 mt-md-3 mb-md-2">
          <div class="card collegeCard">
            <a href="collegeDetails.html">
              <img src="img/colleges/collegeExample.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">College Name</h5>
              </div>
            </a>
          </div>
        </div> -->
      </div>
    </div>
  </section>
  <!-- college list end -->
  
  <div class="whatsapp-btn">
        <a href="https://api.whatsapp.com/send?phone=918310013653"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a>
    </div>

  <!-- footer start -->
    <footer class="dark-section">
        <div class="row p-4 quickLinks">
            <div class="col-md-4 col-12">
              <h5>Quick links</h5>
              <a href="collegeCourse.php">Browse Colleges</a><br />
              <a href="about.php">About Us</a><br />
              <a href="contact.php">Contact us</a>
            </div>
                <div class="col-md-4 col-12 social">
              <div class="row">
                  <div class="col-12">
                    <h5>Social links</h5>
                         <a href="https://www.facebook.com/Meritline1/" target="_blank"><img src="img/fb.png" height="35px" width="35px"></a>
              <a href="https://instagram.com/meritline_koramangala?igshid=19aq6wxeic5nh" target="_blank" class="ml-4"><img src="img/insta.png" height="40px" width="40px"></a>
              <a href="https://www.youtube.com/channel/UCjPiIoR5L7qjBGyJ8bzd-5g" target="_blank" class="ml-4"><img src="img/youtube.png" height="35px" width="45px"></a>
                 <div class="col-12">
                    <a href="Brochure - final.pdf" download><img class="mt-3" src="img/brochure-download-qr.svg" alt="brochure download" style="width:15%;"></a>
                  </div>
                  </div>
                  </div>
            </div>
            <div class="col-md-4 col-12">
              <a class="pb-3" href="http://" target="_blank"><i class="fa fa-map-marker"></i>&nbsp; No. 2/3, Above
                KFC, <br> Sony World Junction, Ejipura, <br> Bangalore - 560 034.</a><br>
                <a class="mt-3" href="tel:+919741941372"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;
                +91-9741941372</a><br />
                <a class="mt-3" href="tel:+918884058241"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;
                +91-8884058241</a><br />
              <a class="mt-3" href="mailto:info@meritline.in"><i class="fa fa-envelope-open" aria-hidden="true"></i>
                &nbsp;
                info@meritline.in</a>
            </div>
          </div>
          <div class="copyright">
            <p class="m-0 p-2">
              Copyright &copy; 2020, All rights reserved by
              <a href="https://www.webxinfinity.com/" target="_blank">Webxinfinity IT Solutions LLP</a>
            </p>
          </div>
    </footer>
    <!-- footer end -->

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
    
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
    
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
    

  <!-- Latest compiled and minified JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

  <!-- (Optional) Latest compiled and minified JavaScript translation files -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#submit').click(function(){
        debugger;
        // var form=$(this);
        // var txt=form.find("input[name='clg']").val();
        // var txt1=form.find("input[name='city']").val();
        var txt=$('#clg').val();
        var txt1=$('#city').val();
        $.ajax({
          url:"search.php",
          method:"post",
          data:{searchClg:txt,searchCity:txt1},
          dataType:"text",
          success:function(data){
                    $('#output').html(data);
                   // return false;
                    // console.log(data)
                    //  alert(data);
                    
               },
               error:function(ts) {
                    alert(ts.responseText);
               }
        });
      });
    });
  </script>
      <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5eb4020881d25c0e5849b220/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>

</html>