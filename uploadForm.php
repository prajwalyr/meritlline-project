<?php
include('conn.php');
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
    <!-- bootstrap styles -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <!--Text editor Css-->
    <link href="assets/plugins/datatables/datatables.min.css" rel="stylesheet">
<!--    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
   <link href="editor.css" type="text/css" rel="stylesheet"/>-->
    <!-- custom styles -->
    <style>
      .uploadFormHeading {
        text-align: center;
      }
      .note {
        background: rgb(121, 120, 120);
        border-radius: 10px;
      }
      .meritline {
        color: #ffbc09;
      }
    </style>
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
    <div class="uploadFormHeading pt-4">
      <h1><span class="meritline">Meritline</span> data upload form</h1>
    </div>
    <div class="container note my-3">
      <h5 class="pt-2 px-2 pb-0 mb-0">Note:</h5>
      <p class="px-2 pb-2 pt-0 mb-0">
        Seperate values by " <b>,</b> " for inputs with multiple values.
      </p>
    </div>
    <div class="container  my-3">
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add Reviews
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Reviews</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="addreviews.php" name="" method="post" enctype="multipart/form-data">
        <div class="form-row mb-2">
          <div class="form-group col-md-6">
            <label for="collegeName">FaceBook Reviews</label>
            <input required type="text" class="form-control" id="collegeName" name="freviews" />
          </div>
          <div class="form-group col-md-6">
            <label for="universityName">FaceBook Ratings</label>
            <input
              required
              type="text"
              class="form-control"
              id="universityName"
              name="frating"
            />
          </div>
        </div>
        <div class="form-row mb-2">
          <div class="form-group col-md-6">
            <label for="collegeURL">Google Reviews</label>
            <input required type="text" class="form-control" id="collegeURL" name="greviews" />
          </div>
          <div class="form-group col-md-6">
            <label for="collegeImg">Google Ratings</label>
            <input required type="text" class="form-control" id="collegeImg" name="grating"/>
          </div>
        </div>
        <div class="form-row mb-2">
          <div class="form-group col-md-6">
            <label for="courses">Just Dial Reviews</label>
            <input required type="text" class="form-control" id="courses" name="jreviws"/>
          </div>
          <div class="form-group col-md-6">
            <label for="courseDuration">Just Dial Ratings</label>
            <input
              required
              type="text"
              class="form-control"
              id="courseDuration"
              name="jrating"
            />
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="Add" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>
    </div>
    <!-- end model -->
    <div class="container mt-2">
      <form action="" name="" method="post" enctype="multipart/form-data">
        <div class="form-row mb-2">
          <div class="form-group col-12">
            <label for="collegeType">College Type</label>
            <input required type="text" class="form-control" id="collegeType" name="clg_type" />
          </div>
        </div>
        <div class="form-row mb-2">
          <div class="form-group col-md-6">
            <label for="collegeName">College Name</label>
            <input required type="text" class="form-control" id="collegeName" name="clg_name" />
          </div>
          <div class="form-group col-md-6">
            <label for="universityName">University Name</label>
            <input
              required
              type="text"
              class="form-control"
              id="universityName"
              name="university_name"
            />
          </div>
        </div>
        <div class="form-row mb-2">
          <div class="form-group col-md-6">
            <label for="collegeURL">College Website</label>
            <input required type="text" class="form-control" id="collegeURL" name="web_link" />
          </div>
          <div class="form-group col-md-6">
            <label for="collegeImg">College Image</label>
            <input required type="file" class="form-control" id="collegeImg" name="img"/>
          </div>
        </div>
        <div class="form-row mb-2">
          <div class="form-group col-md-6">
            <label for="courses">Courses</label>
            <input required type="text" class="form-control" id="courses" name="course"/>
          </div>
          <div class="form-group col-md-6">
            <label for="courseDuration">Course Duration</label>
            <input
              required
              type="text"
              class="form-control"
              id="courseDuration"
              name="duration"
            />
          </div>
        </div>
        <div class="form-row mb-2">
          <div class="form-group col-md-6">
            <label for="country">Country</label>
            <input type="text" class="form-control" id="country" name="country" />
          </div>
          <div class="form-group col-md-6">
            <label for="state">State</label>
            <input type="text" class="form-control" id="state" name="state" />
          </div>
        </div>
        <div class="form-row mb-2">
          <div class="form-group col-md-6">
            <label for="city">City</label>
            <input required type="text" class="form-control" id="city" name="city" />
          </div>
          <div class="form-group col-md-6">
            <label for="contactNumber">Contact Number</label>
            <input type="text" class="form-control" id="contactNumber" name="ph_num"/>
          </div>
        </div>
        <div class="form-row mb-2">
          <div class="form-group col-12">
            <label for="eligibility">Email</label>
            <input type="email" required class="form-control" id="email" name="email">
          </div>
        </div>
        <div class="form-row mb-2">        
          <div class="form-group col-12">
            <label for="address">College Address</label>
            <textarea required class="form-control" id="address" name="address"></textarea>
          </div>
        </div>
        <div class="form-row mb-2">
          <div class="form-group col-12">
            <label for="eligibility">Eligibility Criteria</label>
            <textarea required class="form-control ckeditor" id="eligibility" name="elg_criteria"></textarea>
          </div>
        </div>
        <div class="form-row mb-2">
          <div class="form-group col-12">
            <label>About College</label>
            <textarea class="form-control ckeditor" name="about" required></textarea>
          </div>
<!--           <label for="about">About College</label>
        <div id="txtEditor" ></div>-->
      </div>
<!--</br>-->
        <div class="form-row mb-5">
          <button type="submit" class="btn btn-success col-10 col-md-4 mx-auto" name="submit">
            Submit
          </button>
        </div>
      </form>
    </div>

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
    
    <!-- CK Editor -->
	<script src="https://cdn.ckeditor.com/4.7.3/standard/ckeditor.js"></script>
        
        <!-- Bootstrap --> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
    
    <!--DataTables-->
    <script src="assets/plugins/datatables/datatables.min.js"></script>
    
<!--    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="editor.js"></script>-->
<!--<script type="text/javascript">
$(document).ready( function() {
$("#txtEditor").Editor();                    
});
</script>-->
  </body>
</html>
<?php

      if(isset($_POST['submit'])){
        
        $c_Image = mysqli_real_escape_string($conn, $_FILES['img']['name']);
        $target_dir = 'Clg_cover_Img/' . basename($c_Image);
        $imageFiletypeC = strtolower(pathinfo($target_dir, PATHINFO_EXTENSION));


        $c_type=mysqli_real_escape_string($conn, $_POST['clg_type']);
        $c_name=mysqli_real_escape_string($conn,$_POST['clg_name']);
        $u_name=mysqli_real_escape_string($conn,$_POST['university_name']);
        $w_name=mysqli_real_escape_string($conn,$_POST['web_link']);
        // $img=mysqli_real_escape_string($conn,$_POST['img']);
        $course=mysqli_real_escape_string($conn,$_POST['course']);
        $duration=mysqli_real_escape_string($conn,$_POST['duration']);
        $country=mysqli_real_escape_string($conn,$_POST['country']);
        $state=mysqli_real_escape_string($conn,$_POST['state']);
        $city=mysqli_real_escape_string($conn,$_POST['city']);
        $ph_num=mysqli_real_escape_string($conn,$_POST['ph_num']);
        $address=mysqli_real_escape_string($conn,$_POST['address']);
        $elg=mysqli_real_escape_string($conn,$_POST['elg_criteria']);
        $about=mysqli_real_escape_string($conn,$_POST['about']);
        $email=mysqli_real_escape_string($conn,$_POST['email']);

        $sql="INSERT INTO `clg_details`(`clg_id`, `clg_name`, `university_name`, `course`, `country`, `state`, `city`, `email`,`duration`, `exam_accept`,`elg_criteria`, `ph_num`, `address`, `clg_type`, `about`, `web_link`,`img`) VALUES ('','$c_name','$u_name','$course','$country','$state','$city','$email','$duration','','$elg','$ph_num','$address','$c_type','$about','$w_name','')";
        $res=mysqli_query($conn,$sql) or die(mysqli_error($conn)) ;
        $lastId=mysqli_insert_id($conn);
        $clgId='clg'.$lastId;

        $sqlUp="UPDATE `clg_details` SET `clg_id`='$clgId' WHERE `id`=$lastId";
        $resUp=mysqli_query($conn,$sqlUp);

        

        if($res){
          $upQuery="UPDATE `clg_details` SET `img`='$lastId.$imageFiletypeC' WHERE id=$lastId";
          $resquery=mysqli_query($conn,$upQuery);
          if (move_uploaded_file($_FILES['img']['tmp_name'], "Clg_cover_Img/" .$lastId . '.' . $imageFiletypeC)) {
                
           echo 'hi';
            }else {
              echo 'no';
            }
          ?>
              <script>alert('success'); window.location.href="uploadForm.php";</script>
      <?php  }

      }

     
?>
