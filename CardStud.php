<?php
          require_once"./conn.php";
      ?>
<!doctype html>
<html lang="en">
  <head>
    <title>card</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/instructor.css?<?php echo time() ?>">

</head>
          <!-- start navbar -->
   
          <?php
           session_start();

           if(isset($_SESSION['StudentData'])){
           
            if($_SESSION['StudentData']->Role==='Student'){
             
              require_once "./static_page//NavbarStudent.php";
             }else{
              header("location: loginStudent.php" , true);
             }
           }elseif (isset($_SESSION['InstructorData'])) {
            if($_SESSION['InstructorData']->Role==='Instructor'){
              echo $_SESSION['InstructorData']->name;
               require_once "./static_page//NavbarInstructor.php";
              }else{
               header("location: loginInstructor.php" , true);
              }
           }else{
            header("location: loginStudent.php" , true);
        
          }
        
         
      ?>
      <!-- end navbar -->

      <!-- start temp1 -->

      <div class="card cardTop">
        <div class="opacity"></div>
        <img  class="card-img">
        <div class="card-img-overlay ImgOverlay">
          <h4>Access 2700+</h4>
          <h2 class="card-text">Online Tutorial From<br> Top Instructor</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> cum libero quaerat minima iste.</p>
          <a class="btn btn-warning btn-sm " href="#"   role="button">View All courses</a>
        </div>
      </div>
      <!-- end temp1 -->


<!-- start temp2 -->

<div class="album bg-light">
 
 
     
  <h1 class="">Courses</h1>
  
  <div class="container-fluid">
    
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
 
      <div class="fillter"  style="width: 120px;">



        <a  class="d-flex align-items-center pb-3 mb-3 mr-3 link-dark text-decoration-none border-bottom">
          <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
          <span class="fs-5 fw-semibold">Fillter</span>
        </a>
            
        <?php
$select = $conn->prepare("SELECT * FROM skills");
$select ->execute();
foreach ($select as $value) {
  ?>
  
            <a href="?id=<?php echo  $value['id']; ?>"  class="btn btn-toggle align-items-center rounded collapsed" style="width:100px;" >
            <?php echo $value['skills'];?>
          </a>
       
         <?php } ?>
  
       </div>
       

 

       

                  <?php

  $i = 20;

  if(isset($_GET['id'])){
    $select = $conn->prepare("SELECT * FROM courses_card WHERE skills_id=:id ");
    $select->bindparam('id', $_GET["id"]);
    $select ->execute();
    
    foreach ($select as $value) {
   ?>
      <div class="card Tap_card col-md-3">

   

        <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
        <div class="card-footer card-footer-tap">
          <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i>  <?php echo $i=$i+7; ?> lesson</div>
          <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i><i class="fa fa-star star" aria-hidden="true"></i><i class="fa fa-star star" aria-hidden="true"></i><i class="fa fa-star star" aria-hidden="true"></i></div>

        </div>
          <p class="card-text card-footer-infor" > Name : <?php echo $value['title'];?></p>
        <div class="card-footer card-footer-inst">
          <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > Brief : <?php echo $value['about'];?></div>
          <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning3.gif" class="img_card_ins" > Salary : <?php echo $value['salary'];?>$</div>

        </div>
        <div class="card-footer card-footer-tap">
          <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> State : <?php echo $value['state'];?></div>
          
          <a  href="vedio_upload.php?id=<?php echo  $value['id']; ?>" class="card-footer card-footer-tap_two"  >show <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          
        </div>

      </div>
        <?php

}}else if(isset($_GET['BtnSearch'])){



  
       
  $select = $conn->prepare("SELECT * FROM courses_card WHERE title LIKE :value  ");
  $search= "%".$_GET['search']."%";
  $select->bindparam('value', $search);
  $select ->execute();
  

  foreach ($select as $value) {
    ?>
      <div class="card Tap_card col-md-3">
    
       
    
    <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
    <div class="card-footer card-footer-tap">
      <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i>  <?php echo $i=$i+7; ?> lesson</div>
      <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i><i class="fa fa-star star" aria-hidden="true"></i><i class="fa fa-star star" aria-hidden="true"></i><i class="fa fa-star star" aria-hidden="true"></i></div>
    
    </div>
      <p class="card-text card-footer-infor" > Name : <?php echo $value['title'];?></p>
    <div class="card-footer card-footer-inst">
      <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > Brief : <?php echo $value['about'];?></div>
      <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning3.gif" class="img_card_ins" > Salary : <?php echo $value['salary'];?>$</div>
    
    </div>
    <div class="card-footer card-footer-tap">
      <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> State : <?php echo $value['state'];?></div>
      
      <a  href="vedio_upload.php?id=<?php echo  $value['id']; ?>" class="card-footer card-footer-tap_two"  >show <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      
    </div>
     </div>
    <?php 
}}else{
  $select = $conn->prepare("SELECT * FROM courses_card ");
  $select ->execute();
  
  foreach ($select as $value) {
?>
  <div class="card Tap_card col-md-3">

   

<img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
<div class="card-footer card-footer-tap">
  <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i>  <?php echo $i=$i+7; ?> lesson</div>
  <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i><i class="fa fa-star star" aria-hidden="true"></i><i class="fa fa-star star" aria-hidden="true"></i><i class="fa fa-star star" aria-hidden="true"></i></div>

</div>
  <p class="card-text card-footer-infor" > Name : <?php echo $value['title'];?></p>
<div class="card-footer card-footer-inst">
  <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > Brief : <?php echo $value['about'];?></div>
  <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning3.gif" class="img_card_ins" > Salary : <?php echo $value['salary'];?>$</div>

</div>
<div class="card-footer card-footer-tap">
  <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> State : <?php echo $value['state'];?></div>
  
  <a  href="vedio_upload.php?id=<?php echo  $value['id']; ?>" class="card-footer card-footer-tap_two"  >show <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
  
</div>
 </div>
<?php }}?>
    </div>
  </div>
</div>

<!-- end temp2 -->




<!-- start footer -->
   
<?php
          require_once "./static_page/footer.php";
      ?>
    
      <!-- end footer -->

  </body>
  <script src="js/bootstrap.js"></script>

</html>