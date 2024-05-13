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
  </head>

  <body>
    <!-- navbar start -->
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

    <section id="counselling" class="p-md-5 p-3 dark-section">
      <div class="pt-3">
        <h2><span class="meritline">Meritline</span> One To One Counselling</h2>
        <p>
          We present various career options available for you and the scope in
          each of them. We will also provide information on all the courses and
          colleges that can help you in achieving your career goals.
        </p>
      </div>
      <div class="row py-5">
        <div class="col-md-6 mx-auto">
          <div class="card">
            <div class="card-body light-section">
              <h3 class="card-title my-3">BOOK FREE COUNSELLING</h3>
              <form action="confBook.php" method="post" name="conference">
                <div class="form-row px-md-5">
                  <div class="form-group col-12">
                    <label for="name">Name</label>
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      name="std_name"
                      required
                    />
                  </div>
                  <div class="form-group col-12">
                    <label for="email">Email</label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      name="email"
                      required
                    />
                  </div>
                  <div class="form-group col-12">
                    <label for="phone">Phone number</label>
                    <input
                      type="text"
                      class="form-control"
                      id="phone"
                      name="phone_num"
                      required
                    />
                  </div>
                  <div class="form-group col-12">
                    <label for="studying">Currently studying</label>
                    <input
                      type="text"
                      class="form-control"
                      id="studying"
                      name="curr_study"
                      required
                    />
                  </div>
                  <div class="form-group col-12">
                    <label for="location">Location for future studies</label>
                    <input
                      type="text"
                      class="form-control"
                      id="location"
                      name="location"
                      required
                    />
                  </div>
                  <div class="form-group col-12">
                    <label for="stream">Stream preference</label>
                    <input
                      type="text"
                      class="form-control"
                      id="stream"
                      name="stream"
                      required
                    />
                  </div>
                  <div class="form-group col-12">
                    <label for="counselling-for">Seeking counselling for</label>
                    <input
                      type="text"
                      class="form-control"
                      id="counselling-for"
                      name="couns_for"
                      required
                    />
                  </div>
                  <div class="form-group col-12">
                    <label for="name">Counselling Date</label>
                    <input
                      type="date"
                      class="form-control"
                      id="counselling-date"
                      name="couns_date"
                      required
                    />
                  </div>
                </div>
                <button type="submit" class="btn btn-outline-dark mt-3 mb-2" name="confBook">Book Now</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section> 
    <!-- counselling and about section ends -->
    
    <div class="whatsapp-btn">
        <a href="https://api.whatsapp.com/send?phone=918310013653"><i class="fa fa-whatsapp fa-2x" aria-hidden="true"></i></a>
    </div>
    <hr class="my-0">
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