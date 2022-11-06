<?php
  require_once"./conn.php";
?>
<!doctype html>
<html lang="en">
  <head>
    <title>instructor</title>
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
             echo $_SESSION['StudentData']->name;
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
   
<div class="album py-5 bg-light">
  <h1 class="">instructors</h1>
  
  <div class="container">

    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
      
    <?php

$select = $conn->prepare("SELECT * FROM  instructor");
$select ->execute();
foreach ($select as $value) {
?> 
      <div class="col">
        <div class="card shadow-sm">


          <img class="img_ins"   src="./img/UploadImg/<?php echo $value['image'];?>"  > 
          <h2 class="name">Prof : <?php echo $value['username'];?></h2>

          <div class="card-body">
            <p class="card-text">Job : <?php echo $value['Position_OR_Job'];?></p><br>
            <p class="card-text">Brief : <?php echo $value['title'];?></p> 
            <div class="d-flex justify-content-between align-items-center">
             
              <h6 class="text-muted">Address : <?php echo $value['address'];?> </h6>
              <h6 class="text-muted">Experiance : <?php echo $value['Num_Experience'];?> </h6>

              
            </div>
            <div class="btn-group">
                <a href="#" class="btn btn-sm btn-outline-success"><i class="fa fa-lock" aria-hidden="true"></i></a>
                <a href="#"  class="btn btn-sm btn-outline-success"><i class="fa fa-rss" aria-hidden="true"></i></a>
                <a href="#" class="btn btn-sm btn-outline-success"><i class="fa fa-laptop" aria-hidden="true"></i></a>
                <a href="#"  class="btn btn-sm btn-outline-success"><i class="fa fa-lock" aria-hidden="true"></i></a>
              </div>
          </div>
        
        </div>
      </div>
       <?php }; ?>
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