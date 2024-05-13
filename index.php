<?php
  include 'conn.php';
  $sql1="SELECT * FROM `clg_details`";
  $res=mysqli_query($conn,$sql1);
  while ($row1=mysqli_fetch_array($res)) {
    $_SESSION['College_type']=$row1['clg_type'];
  }
  
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
    <link
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <!-- google fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Baloo+Tamma+2:wght@500&family=Oxygen:wght@300&display=swap"
      rel="stylesheet"
    />
    <!-- custom styles -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- bootstrap styles -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/css/bootstrap-select.min.css"
    />
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
    
<a href="tel:+919739575753" class="float">
<i class="fa fa-phone my-float"></i>
</a>
    <section id="navigation">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php"
          >&nbsp;<img src="img/my-edit.png" alt="meritline-logo" height="60px" width="150px" 
        /></a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarTogglerDemo02"
          aria-controls="navbarTogglerDemo02"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav ml-auto mr-4 mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="collegeCourse.php">Colleges & Courses</a>
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
                What we do
              </a>
              <div
                class="dropdown-menu"
                aria-labelledby="navbarDropdownMenuLink"
              >
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
                <a class="dropdown-item" download href="franchise.pdf">Franchise</a>
                  <a class="dropdown-item" download  href="franchise.pdf">Student</a>
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

    <!-- cover section starts -->
    <div style="background-image: url('img/cover-img.jpg'); 
    width: 100%;   height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;">
    <section id="cover-img">
      <div class="cover-text">
        <h1 class="cover-heading">
         Welcome To <span class="meritline">Meritline</span>
        </h1>
        <h2><p class="mt-md-5 mb-md-0">Education Career Counselling</p>
        <br /></h2>
        <a href="collegeCourse.php" class="mt-md-5 btn btn-outline-light">Search for colleges</a>
        <a href="Brochure - final.pdf" class="mt-md-5 btn btn-outline-light" download>Download Brochure</a>
      </div>
    </section>
    <!-- cover section ends -->

    <!-- counselling and about section start -->
  </div>
    <section id="about" class="p-md-5 p-3 mb-sm-3 mt-sm-2 mt-md-5">
      <div class="row">
        <div class="col-12 col-md-4">
          <img class="about-img" src="img/about_img2.png" alt="" />
        </div>
        <div class="col-12 col-md-8 my-auto">
          <h2>Who We Are</h2>
          <p>
            We are a team of leading education counsellors, extending excellent support and services to the students in charting their bright future.
            No matter where you are in india we will guide you to choose a College, stream and other programs that are a perfect match for you.
            We have the wide knowledge and expertise of Indian education system.</p>
        <p>
            Meritline is a perfect place for you and provides you with the right services and assistance.
            We also offer carefully developed assistance programs and counseling  sessions which are open to all the students community
        </p>
          <a href="#" class="btn btn-outline-secondary">Read More</a>
        </div>
      </div>
    </section>

    <div id="counselling-homepage" class="p-md-5 p-4 mb-sm-3 mt-sm-4 mt-md-5 dark-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h2><span class="meritline">Meritline</span> One on One Counselling</h2>
                    <p>We present various career options available for you and the scope in each of them. We will also provide information on all the courses and colleges that can help you in achieving your career goals.</p>
                </div>
                <div class="col-12 col-md-6">
                 <a href="counselling.php" class="btn btn-outline-secondary mt-3 right">Book Counselling</a>
                </div>
            </div>
        </div>
    </div>
    <!-- counselling and about section ends -->
    
    <!-- pricing section start -->
    <div class="p-md-5 p-3 mb-sm-3 mb-md-5 mt-sm-4 mt-md-5 price-section">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4">
                    <div class="card text-center my-3 my-lg-0 price-card" style="width: 100%;">
                        <div class="card-body">
                            <h4 class="card-title">Basic <br> package</h4>
                            <hr>
                            <div class="text-left mt-4">
                                <p class="pl-3"><b>Package includes:</b></p>
                                <ul>
                                    <li>Psychometric test </li> 
                                    <li>A brief discussion about courses </li>
                                    <li>Future Scope </li>
                                    <li>one on one counselling </li>
                                    <li>Interview tips </li>
                                    <li>Question and Answers </li>
                                </ul>
                            </div>
                            <a href="https://rzp.io/l/gtZsXzQ" target="_blank" class="price-btn my-3">Rs 5000 + GST</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card text-center my-3 my-lg-0 price-card" style="width: 100%;">
                        <div class="card-body">
                            <h4 class="card-title">Advanced package for <br> local students</h4>
                            <hr>
                            <div class="text-left mt-4">
                                <p class="pl-3"><b>Package includes:</b></p>
                                <ul>
                                    <li>Psychometric test </li> 
                                    <li>A brief discussion about courses </li>
                                    <li>Future Scope </li>
                                    <li>one on one counselling </li>
                                    <li>Interview tips </li>
                                    <li>Question and Answers </li>
                                    <li>Application and Documentation </li>
                                    <li>College Tour</li>
                                </ul>
                            </div>
                          <a href="https://rzp.io/l/xthyJNj" target="_blank" class="price-btn my-3">Rs 10000 + GST</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-4">
                    <div class="card text-center my-3 my-lg-0 price-card" style="width: 100%;">
                        <div class="card-body">
                            <h4 class="card-title">Advanced package for <br> Outside students</h4>
                            <hr>
                            <div class="text-left mt-4">
                                <p class="pl-3"><b>Package includes:</b></p>
                                <ul>
                                    <li>Psychometric test </li> 
                                    <li>A brief discussion about courses </li>
                                    <li>Future Scope </li>
                                    <li>one on one counselling </li>
                                    <li>Interview tips </li>
                                    <li>Question and Answers </li>
                                    <li>Application and Documentation</li>
                                    <li>College Tour</li>
                                    <li>Airport pick up and drop</li>
                                    <li>Hotel Accommodation for 2 nights</li>
                                </ul>
                            </div>
                            <a href="https://rzp.io/l/CjPXoUA" target="_blank" class="price-btn my-3">Rs 25000 + GST</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pricing section end -->

    <!-- how it works section start-->
    <section id="howItWorks" class="p-lg-5 px-2 pb-5 pt-md-5 dark-section">
      <h2 class="mb-4 py-5">How It Works</h2>
      <div class="row pb-md-5">
        <div class="col-6 offset-lg-1 col-lg-2 hover-light mt-sm-2 mt-md-3">
          <a href="careerCounselling.php"
            ><i class="fa fa-globe fa-2x m-3"></i>
            <p>Career Counselling</p></a
          >
        </div>
        <div class="col-6 col-lg-2 hover-light mt-sm-2 mt-md-3">
          <a href="applyAndDocument.php"
            ><i class="fa fa-line-chart fa-2x m-3"></i>
            <p>Application</p></a
          >
        </div>
        <div class="col-6 col-lg-2 hover-light mt-3">
          <a href="admissionGuidance.php"
            ><i class="fa fa-book fa-2x m-3"></i>
            <p>Admission Guidance</p></a
          >
        </div>
        <div class="col-6 col-lg-2 hover-light mt-3">
          <a href="securedAdmission.php"
            ><i class="fa fa-camera fa-2x m-3"></i>
            <p>Secured Admissions</p></a
          >
        </div>
        <div class="col-12 col-lg-2 hover-light mt-3 mx-sm-auto mx-md-0">
          <a href="institutionalPromotion.php"
            ><i class="fa fa-heartbeat fa-2x m-3"></i>
            <p>Institutional Promotion</p></a
          >
        </div>
      </div>
    </section>
    <!-- how it works section end-->
    
    <!-- leading streams section start-->
    <section id="leading-streams" class="px-lg-5 pt-lg-1 p-2 light-section">
      <h2 class="mb-2 py-5">Leading streams</h2>
      <div class="row pb-md-5">
        <?php
            $type=$_SESSION['College_type'];

           $sql="SELECT * FROM `clg_details` WHERE clg_type='$type'";
           $res=mysqli_query($conn,$sql);
           While($row=mysqli_fetch_array($res)){
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
            $_SESSION['type']=$row['clg_type'];
            $_SESSION['about']=$row['about'];
            $_SESSION['web_link']=$row['web_link'];
            $_SESSION['img']=$row['img'];
           }
           ?>
        

        <div class="col-6 hover-dark col-md-4 mt-sm-2 mt-md-3">
          <a href="collegeCourse.php?type=Engineering"
            ><i class="fa fa-book fa-2x m-3"></i>
            <p>Engineering</p></a
          >
        </div>
        <div class="col-6 hover-dark col-md-4 mt-sm-2 mt-md-3">
          <a href="collegeCourse.php?type=Ayurvedic"
            ><i class="fa fa-child fa-2x m-3"></i>
            <p>Ayurvedic</p></a
          >
        </div>
        <div class="col-6 hover-dark col-md-4 mt-3">
          <a href="collegeCourse.php?type=B.Arch"
            ><i class="fa fa-book fa-2x m-3"></i>
            <p>B.Arch</p></a
          >
        </div>
        <div class="col-6 hover-dark col-md-4 mt-3">
          <a href="collegeCourse.php?type=Law"
            ><i class="fa fa-graduation-cap fa-2x m-3"></i>
            <p>Law</p></a
          >
        </div>
        <div class="col-6 hover-dark col-md-4 mt-3">
          <a href="collegeCourse.php?type=Management And Commerce"
            ><i class="fa fa-globe fa-2x m-3"></i>
            <p>Management And Commerce</p></a
          >
        </div>
        <div class="col-6 hover-dark col-md-4 mt-3">
          <a href="collegeCourse.php?type=Hotel Management"
            ><i class="fa fa-book fa-2x m-3"></i>
            <p>Hotel Management</p></a
          >
        </div>
      </div>
    </section>
    <!-- leading streams section end-->
    
      <!-- review section start  -->
      <?php
      $sql="SELECT * FROM `reviews` ORDER BY `reviews`.`date_time`  ";
      $res=mysqli_query($conn,$sql);
      while ($row=mysqli_fetch_array($res)) {
        $_SESSION['freviews']=$row['freviews'];
        $_SESSION['frating']=$row['frating'];
        $_SESSION['jreviws']=$row['jreviws'];
        $_SESSION['jrating']=$row['jrating'];
        $_SESSION['greviews']=$row['greviews'];
        $_SESSION['grating']=$row['grating'];
        $_SESSION['id']=$row['id'];
        $_SESSION['date_time']=$row['date_time'];
      }
      ?>
  <section id="reviews" class="p-4">
    <div class="container-fluid text-center review-block">
      <div class="row mx-0">
         <div class="col-12 col-md-4 py-2 py-md-0">
            <a href="https://g.co/kgs/JvKPNq" target="_blank">
               <svg height="50" viewBox="0 0 512 512" width="50" xmlns="http://www.w3.org/2000/svg">
                  <path d="M511.969 255.59c-.512 2.66 5.32 96.648-69.918 176.23-101.094 106.922-271.11 106.868-372.121-.011-93.145-98.547-93.336-252.844 0-351.594 64.261-67.996 157.918-93.82 244.773-73.418 32.266 7.574 48.594 43.691 33.25 73.062-10.797 20.672-34.246 31.23-56.898 25.954-52.313-12.192-108.578 3.484-147.145 44.296-56.207 59.426-56.148 152.438 0 211.801 60.856 64.426 163.34 64.395 224.16 0 15.743-16.64 27.813-36.789 34.918-59.164h-85.14c-24.301 0-44.008-19.71-44.008-44.012s19.695-44.011 44.008-44.011h152.89c22.621 0 41.2 18.238 41.23 40.867zm0 0" fill="#ffda44"></path>
                  <path d="M511.969 255.59v.422c0 65.578-24.836 128.125-69.918 175.808-48.082 50.852-116.184 81.551-191.285 80.114V410.129c46.273 1.476 88.043-17.234 117.304-48.219 15.746-16.64 27.813-36.789 34.922-59.164h-85.14c-24.305 0-44.012-19.71-44.012-44.012s19.695-44.011 44.012-44.011h152.886c22.621 0 41.2 18.238 41.23 40.867zm0 0" fill="#0fa9dd"></path>
                  <path d="M347.957 79.86c-10.785 20.66-34.2 31.226-56.898 25.949-52.145-12.125-108.43 3.324-147.149 44.3L69.93 80.215C134.332 12.07 228.023-13.555 314.707 6.8c32.254 7.574 48.586 43.687 33.25 73.058zm0 0" fill="#ff6426"></path>
                  <path d="M442.05 431.82c-101.116 106.946-271.105 106.871-372.12-.011l73.984-69.899c60.875 64.43 163.324 64.406 224.156 0zm0 0" fill="#6fbf6b"></path>
               </svg>
            </a>
            <svg viewBox="0 0 36 36" class="circular-chart google-orange">
               <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
               <path class="circle start" stroke-dasharray="100, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
               <text x="18" y="21" class="percentage"><?php echo $_SESSION['grating']; ?>/5</text>
            </svg>
            <a class="star-link" href="https://g.co/kgs/JvKPNq" target="_blank">
               <span class="rat_text1">(<?php echo $_SESSION['greviews'];  ?> Reviews)</span>
               <!--<span class="_pxg _Jxg google" aria-label="Rated 4.9 out of 5"></span>-->
            </a>
         </div>
         <div class="col-12 col-md-4 py-2 py-md-0">
            <a href="https://www.facebook.com/Meritline1/" target="_blank">
               <svg height="50" viewBox="0 0 64 64" width="50" xmlns="http://www.w3.org/2000/svg">
                  <g fill-rule="evenodd">
                     <path d="M32 64H16A16 16 0 010 48V16A16 16 0 0116 0h32a16 16 0 0116 16v32a16 16 0 01-16 16h-6a5 5 0 00-10 0z" fill="#3764b9"></path>
                     <path d="M30 18h18A9 9 0 0048.92.046C48.614.029 48.311 0 48 0H16A16 16 0 000 16v32a30 30 0 0130-30" fill="#507dd2"></path>
                     <path d="M48 32a16 16 0 1016 16V16a16 16 0 01-16 16" fill="#1e4ba0"></path>
                     <path d="M52 18a2 2 0 01-2 2h-6a2 2 0 00-2 2v8h7.56a2 2 0 011.961 2.392l-1.2 6A2 2 0 0148.36 40H42v24H32V40h-6a2 2 0 01-2-2v-6a2 2 0 012-2h6v-8a12 12 0 0112-12h6a2 2 0 012 2z" fill="#fff"></path>
                  </g>
               </svg>
            </a>
            <svg viewBox="0 0 36 36" class="circular-chart facebook-green">
               <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
               <path class="circle" stroke-dasharray="100, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
               <text x="18" y="21" class="percentage"><?php echo $_SESSION['frating']; ?>/5</text>
            </svg>
            <a class="star-link" href="https://www.facebook.com/Meritline1/" target="_blank">
               <span class="rat_text1">(<?php echo $_SESSION['freviews']; ?> Reviews)</span>
               <!--<span class="_pxg _Jxg" aria-label="Rated 4.8 out of 5"></span>-->
            </a>
         </div>
         <div class="col-12 col-md-4 py-2 py-md-0">
            <a href="https://jsdl.in/DT-15I66IE6YIE" target="_blank">
               <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 60 60">
                  <path fill="#C5E0F1" d="M0 29.688s23.083 10.771 60 0v22.646s-1.214 6.75-8.44 7.667H7.667s-6.049-.75-7.691-7.75L0 29.688z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" fill="#FF6B00" d="M45.082 44.177c-1.591 2.077-3.706 2.874-6.113 2.855-3.193-.025-5.827-1.351-7.814-3.851-2.221-2.795-3.045-6.002-2.679-9.544.277-2.679 1.09-5.145 2.788-7.264 3.194-3.988 9.099-4.793 13.262-1.828.168.12.337.237.627.441v-.761c0-2.676-.007-5.352.003-8.027.007-1.6.903-2.822 2.32-3.21 2.057-.563 3.983.824 4.057 2.946.036 1.054.016 2.109.017 3.164.005 7.929.009 15.859.01 23.789 0 .429.015.866-.063 1.284-.27 1.429-1.362 2.454-2.676 2.563-1.816.15-2.934-.498-3.53-2.048l-.209-.509zm.072-9.361c-.025-1.576-.332-3.009-1.195-4.277-1.868-2.742-5.739-2.827-7.724-.177-1.854 2.477-1.892 6.441-.086 8.962 1.987 2.773 5.869 2.713 7.752-.131.89-1.343 1.209-2.855 1.253-4.377z"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" fill="#1172BF" d="M25.621 27.593c0 3.71.027 7.42-.011 11.129-.017 1.673-.377 3.292-1.234 4.76-1.314 2.253-3.391 3.327-5.882 3.686-2.263.326-4.473.026-6.601-.804-1.089-.425-2.076-1.023-2.708-2.049-.566-.919-.803-1.899-.35-2.952.538-1.251 1.689-1.855 2.996-1.493.671.187 1.305.507 1.961.75.637.236 1.267.537 1.927.658 2.044.376 3.244-.61 3.294-2.695.041-1.697.018-3.396.018-5.095.001-5.662-.002-11.324.002-16.986.001-1.747.903-2.983 2.499-3.275 2.459-.449 4.092.979 4.088 3.238-.005 3.709 0 7.418.001 11.128z"></path>
               </svg>
            </a>
            <svg viewBox="0 0 36 36" class="circular-chart jd-blue">
               <path class="circle-bg" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
               <path class="circle" stroke-dasharray="100, 100" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
               <text x="18" y="21" class="percentage"><?php echo  $_SESSION['jrating'] ; ?>/5</text>
            </svg>
            <a class="star-link" href="https://jsdl.in/DT-15I66IE6YIE" target="_blank">
               <span class="rat_text1">(<?php echo  $_SESSION['jreviws']; ?> Reviews)</span>
               <!--<span class="_pxg _Jxg jd" aria-label="Rated 4.5 out of 5"></span>-->
            </a>
            <?php 
            $dt=explode(" ",$_SESSION['date_time']);
            // print_r($dt);
            $timestamp = strtotime($dt[0]);
            $new_dateSt = date("M/Y", $timestamp);
            
            ?>
            <span class="up-date">As on <?php echo $new_dateSt;?></span>
         </div>
      </div>
   </div>
  </section>
  <!-- review section end  -->

    <!-- awards section start-->
    <section id="awards" class="py-5 px-2">
      <div class="row">
        <div class="col-6 col-lg-2 mt-md-2 py-2 offset-lg-2">
          <img src="img/icons/counter_icon_dark4.png" alt="icon" />
          <p class="mt-3">3 Years</p>
        </div>
        <div class="col-6 col-lg-2 mt-md-2 py-2">
          <img src="img/icons/counter_icon_dark1.png" alt="" />
          <p class="mt-3">ISO-9001:2005 Certified</p>
        </div>
        <div class="col-6 col-lg-2 mt-md-2 py-2">
          <img src="img/icons/counter_icon_dark2.png" alt="" />
          <p class="mt-3">Associated With 100+ Institutes</p>
        </div>
        <div class="col-6 col-lg-2 mt-md-2 py-2">
          <img src="img/icons/counter_icon_dark3.png" alt="" />
          <p class="mt-3">2000+ Counselling Done</p>
        </div>
      </div>
    </section>
    <!-- awards section end-->
    
    <div class="whatsapp-btn">
        <a href="https://api.whatsapp.com/send?phone=918310013653"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a>
    </div>
    
    
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-sm" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title"><img src="img/my-edit.png" alt="meritline-logo" height="60px" width="150px" 
        /></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="popupSubmit.php" method="POST">
                        <div class="popup-container">
                            <p class="popup-greeting">Want some quick info..?</p>
                            <label for="popup-name"><i class="fa fa-user fa-color-purple fa-lg" aria-hidden="true"></i></label>
                            <input class="popup-input" type="text" name="popup-name" id="popup-name" placeholder="Name*" required><br>
                            <label for="popup-phone"><i class="fa fa-color-purple fa-phone fa-lg" aria-hidden="true"></i></label>
                            <input class="popup-input" type="tel" name="popup-phone" id="popup-phone" placeholder="Phone Number*" required><br>
                            <label for="popup-email"><i class="fa fa-color-purple fa-lg fa-envelope" aria-hidden="true"></i></label>
                            <input class="popup-input" type="text" name="popup-email" id="popup-email" placeholder="Email"><br>
                            <button type="submit" class="price-btn my-3" name="popup-submit">Get a call</button>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <a href="tel:+919739575753">Call Us: +91-9739575753</a>
                    
                </div>
            </div>
        </div>
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
              <a class="mt-3" href="tel:+919739575753"><i class="fa fa-phone" aria-hidden="true"></i> &nbsp;
                +91-9739575753</a><br />
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

    <script
      src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
      integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
      integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
      integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
      crossorigin="anonymous"
    ></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/bootstrap-select.min.js"></script>

    <!-- (Optional) Latest compiled and minified JavaScript translation files -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.9/dist/js/i18n/defaults-*.min.js"></script>
    <script>
    var flag = false;
    if (flag == false){
        setTimeout(function() {
            $('#myModal').modal();
            flag = true;
        }, 15000);
    }
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
<!-- The core Firebase JS SDK is always required and must be listed first -->
<script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-app.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<script src="https://www.gstatic.com/firebasejs/7.17.2/firebase-analytics.js"></script>

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {
    apiKey: "AIzaSyCYS7FObK3Sk21PiDtooYzrsciDxdIC1Go",
    authDomain: "fir-64301.firebaseapp.com",
    databaseURL: "https://fir-64301.firebaseio.com",
    projectId: "fir-64301",
    storageBucket: "fir-64301.appspot.com",
    messagingSenderId: "624079326792",
    appId: "1:624079326792:web:313784d231194478cc127d",
    measurementId: "G-SCQFSW0W9V"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
  firebase.analytics();
  firebase.auth().languageCode = 'it';
// To apply the default browser preference instead of explicitly setting it.
// firebase.auth().useDeviceLanguage();
window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('sign-in-button', {
  'size': 'invisible',
  'callback': function(response) {
    // reCAPTCHA solved, allow signInWithPhoneNumber.
    onSignInSubmit();
  }
});
window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container', {
  'size': 'normal',
  'callback': function(response) {
    // reCAPTCHA solved, allow signInWithPhoneNumber.
    // ...
  },
  'expired-callback': function() {
    // Response expired. Ask user to solve reCAPTCHA again.
    // ...
  }
});
recaptchaVerifier.render().then(function(widgetId) {
  window.recaptchaWidgetId = widgetId;
});
var phoneNumber = getPhoneNumberFromUserInput();
var appVerifier = window.recaptchaVerifier;
firebase.auth().signInWithPhoneNumber(phoneNumber, appVerifier)
    .then(function (confirmationResult) {
      // SMS sent. Prompt user to type the code from the message, then sign the
      // user in with confirmationResult.confirm(code).
      window.confirmationResult = confirmationResult;
    }).catch(function (error) {
      // Error; SMS not sent
      // ...
    });
    grecaptcha.reset(window.recaptchaWidgetId);

// Or, if you haven't stored the widget ID:
window.recaptchaVerifier.render().then(function(widgetId) {
  grecaptcha.reset(widgetId);
}
var code = getCodeFromUserInput();
confirmationResult.confirm(code).then(function (result) {
  // User signed in successfully.
  var user = result.user;
  // ...
}).catch(function (error) {
  // User couldn't sign in (bad verification code?)
  // ...
});
var credential = firebase.auth.PhoneAuthProvider.credential(confirmationResult.verificationId, code);
firebase.auth().signInWithCredential(credential);
</script>
  </body>
</html>
