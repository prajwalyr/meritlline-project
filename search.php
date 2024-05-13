<?php
include 'conn.php';

// if(isset($_POST['search'])){
    $searchClg=$_POST['searchClg'];
    $searchCity=$_POST['searchCity'];
    $output="";
if($searchCity == ""){
  $sql2="SELECT * FROM `clg_details` WHERE clg_name LIKE '%$searchClg%' OR course LIKE '%$searchClg%' ";
  
    $result=mysqli_query($conn,$sql2);
    
    if(mysqli_num_rows($result)>0){
   
    while($row2=mysqli_fetch_array($result)){
        
        $output.='<div class="col-12 col-md-6 col-lg-3 mt-2 mb-2 mt-md-3 mb-md-2">';
        $output.= '<div class="card collegeCard">';
        $output.= '  <a href="collegeDetails.php?id='. $row2['id'].'">';
        $output.=  ' <img src="Clg_cover_Img/'. $row2['img'].'" class="card-img-top" alt="...">';
        $output.= '<div class="card-body">';
        $output.= '   <h5 class="card-title">'. $row2['clg_name'].'</h5>';
        $output.= '</div>  </a>  </div></div></div>';


    }
}else {
  $output.='No Data Found';
}


} else if($searchClg == ""){
  $sql2="SELECT * FROM `clg_details` WHERE  city LIKE '%$searchCity%' ";
 
    $result=mysqli_query($conn,$sql2);
    $output="";
    if(mysqli_num_rows($result)>0){
   
    while($row2=mysqli_fetch_array($result)){
        $output.='<div class="col-12 col-md-6 col-lg-3 mt-2 mb-2 mt-md-3 mb-md-2">';
        $output.= '<div class="card collegeCard">';
        $output.= '  <a href="collegeDetails.php?id='. $row2['id'].'">';
        $output.=  ' <img src="Clg_cover_Img/'. $row2['img'].'" class="card-img-top" alt="...">';
        $output.= '<div class="card-body">';
        $output.= '   <h5 class="card-title">'. $row2['clg_name'].'</h5>';
        $output.= '</div>  </a>  </div></div></div>';


    }
}else{
  $output.='No Data Found';
} 
}else if($searchClg !== "" && $searchCity !== ""){
  $sql2="SELECT * FROM `clg_details` WHERE clg_name LIKE '%$searchClg%' OR course LIKE '%$searchClg%' OR city LIKE '%$searchCity%' ";
  
    $result=mysqli_query($conn,$sql2);
    $output="";
    if(mysqli_num_rows($result)>0){
   
    while($row2=mysqli_fetch_array($result)){
        
        $output.='<div class="col-12 col-md-6 col-lg-3 mt-2 mb-2 mt-md-3 mb-md-2">';
        $output.= '<div class="card collegeCard">';
        $output.= '  <a href="collegeDetails.php?id='. $row2['id'].'">';
        $output.=  ' <img src="Clg_cover_Img/'. $row2['img'].'" class="card-img-top" alt="...">';
        $output.= '<div class="card-body">';
        $output.= '   <h5 class="card-title">'. $row2['clg_name'].'</h5>';
        $output.= '</div>  </a>  </div></div></div>';


    }
}else {
  $output.='No Data Found';
}
} 
echo $output;