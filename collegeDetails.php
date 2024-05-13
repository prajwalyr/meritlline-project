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
  <link href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&family=Oxygen:wght@300&displincludeay=swap"
    rel="stylesheet" />
  <!-- custom styles -->
  <link rel="stylesheet" href="css/styles.css" />
  <!-- bootstrap styles -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css" />
</head>

<body>
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
  <?php
    $id=$_GET['id'];
    $sql="SELECT * FROM `clg_details` WHERE id='$id'";
    $res=mysqli_query($conn,$sql);?>
    
  
  <section class="topBanner">
    <div class="collegeHeading">
    <?php While($row=mysqli_fetch_array($res)){
      $_SESSION['id']=$row['id'];
      $_SESSION['clg_id']=$row['clg_id'];
      $_SESSION['clg_name']=$row['clg_name'];
      $_SESSION['university_name']=$row['university_name'];      
      $_SESSION['course']=$row['course'];     
      $_SESSION['country']=$row['country'];
      $_SESSION['state']=$row['state'];
      $_SESSION['city']=$row['city'];
      $_SESSION['duration']=$row['duration'];
      $_SESSION['elg_criteria']=$row['elg_criteria'];
      $_SESSION['ph_num']=$row['ph_num'];
      $_SESSION['address']=$row['address'];
      $_SESSION['clg_type']=$row['clg_type'];
      $_SESSION['about']=$row['about'];
      $_SESSION['web_link']=$row['web_link'];
      $_SESSION['img']=$row['img'];
      $_SESSION['email']=$row['email'];
  ?>
        <h1><?php echo $row['clg_name']; ?></h1>
        <?php
    }
        ?>
    </div>
  </section>
  <!-- top banner end -->
</div>
  <!-- details and form start -->
  <section id="deatilsForm">
    <div class="row">
      <div class="col-12 col-md-8">
        <div class="nav-container p-4">
          <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="pills-about-tab" data-toggle="pill" href="#pills-about" role="tab" aria-controls="pills-about" aria-selected="true">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-criteria-tab" data-toggle="pill" href="#pills-criteria" role="tab" aria-controls="pills-criteria" aria-selected="false">Admission Criteria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-course" role="tab" aria-controls="pills-contact" aria-selected="false">Courses</a>
            </li>
          </ul>
          <div class="tab-content p-5" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-about" role="tabpanel" aria-labelledby="pills-about-tab">
              <h3><?php echo $_SESSION['clg_name']; ?></h3>
              <p><?php echo $_SESSION['about']; ?></p>
            </div>
            <div class="tab-pane fade" id="pills-criteria" role="tabpanel" aria-labelledby="pills-criteria-tab">
              <h3><?php echo $_SESSION['clg_name']; ?></h3>
              <p><?php echo $_SESSION['elg_criteria']; ?></p>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
              <h3><?php echo $_SESSION['clg_name']; ?></h3>
               <a style="color: rgba(10, 9, 34, 0.952);" href="http://" target="_blank" rel="noopener noreferrer"><?php echo $_SESSION['web_link']; ?></a><br>
               <a style="color: rgba(10, 9, 34, 0.952);" href="mailto:#"><?php echo $_SESSION['email']; ?></a><br>
               <a style="color: rgba(10, 9, 34, 0.952);" href="tel:+"><?php echo $_SESSION['ph_num']; ?></a><br>
            </div>
            <div class="tab-pane fade" id="pills-course" role="tabpanel" aria-labelledby="pills-contact-tab">
              <h3><?php echo $_SESSION['clg_name']; ?></h3>
               <!-- <a style="color: rgba(10, 9, 34, 0.952);" href="http://" target="_blank" rel="noopener noreferrer"><?php echo $_SESSION['web_link']; ?></a><br>
               <a style="color: rgba(10, 9, 34, 0.952);" href="mailto:#"><?php echo $_SESSION['email']; ?></a><br>
               <a style="color: rgba(10, 9, 34, 0.952);" href="tel:+"><?php echo $_SESSION['ph_num']; ?></a><br> -->
               <p><?php 
                $variable=explode(",",$_SESSION['course']);
               echo '<ul>' ;
                foreach ($variable as $key => $value) {
                 echo '<li>'.$value.'</li>';
                }
                echo '</ul>' ;
               ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-4">
        <div class="form-container p-4">
          <div class="form-heading mx-auto">
            <h3 class="p-3 mb-0">May I Help You</h3>
          </div>
          <div class="form-body">
            <form class="mx-auto pt-5" name="form" action="" method="post">
              <div class="form-row">
                <span class="col-1 mt-4"><i class="fa fa-user"></i></span>
                <input class="col mt-4" type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
              </div>
              <div class="form-row">
                <span class="col-1 mt-5"><i class="fa fa-envelope"></i></span>
                <input class="col mt-5" type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
              </div>
              <div class="form-row">
                <span class="col-1 mt-5"><i class="fa fa-phone"></i></span>
                <input class="col mt-5" type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
              </div>
              <div class="form-row">
                <span class="col-1 mt-5"><i class="fa fa-book"></i></span>
                <input class="col mt-5" type="course" class="form-control" id="course" name="course" placeholder="Course you are looking for?" required>
              </div>
              <div class="form-row">
                <span class="col-1 mt-5"><i class="fa fa-university"></i></span>
                <input class="col mt-5" type="college" class="form-control" id="college" name="clg_name" placeholder="College Name" value="<?php echo $_SESSION['clg_name'];  ?>">
              </div>
              <div class="button-center my-3"><br>
                <input type="submit"  name="submit" value="Send">
              </div><br>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <style>
  input[type="submit"]:hover {
      background-color:white;
      color:#00003f;
    border: 1px solid black;
}
      input[type=submit] {
    padding:5px 15px; 
    background:#00003f; 
    border:0 none;
    cursor:pointer;
    color:white;
    -webkit-border-radius: 5px;
    border-radius: 5px; 
}
  </style>
  <!-- details and form end -->

  <!-- deatils and form start -->
  <section>
    
  </section>
  <!-- details and form end -->
  
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


<?php
if(isset($_POST['submit']) && !empty($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$cou=$_POST['course'];
		$clg=$_POST['clg_name'];

		$to='info@meritline.in'; // Receiver Email ID, Replace with your email ID
		$subject='Form Submission';
		$message='Name  : '.$name.'               E-mail  : '.$email.'              Phone  : ' .$phone. '                      Course  : ' .$cou.'                  College Name  : ' .$clg;

		if(mail($to, $subject, $message)){
		
			echo "<script>alert('successfully sent');windows.location='contact.php';</script>";
		}
		else{
			echo "Something went wrong!";
		}
}	

//header("refresh:5; url:/meritline/contact.php");

?>