  <!doctype html>
<html lang="en">
  <head>
    <title>about us</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login.css?<?php echo time() ?>">

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
   
<div class="px-4 py-5 my-5 text-center">
  <img class="d-block mx-auto mb-4" src="./img/one.jpg" alt="" width="200" height="157" style="border-radius: 40px;">
  <h1 class="display-5 fw-bold"> Electronic School</h1>
  <div class="col-lg-6 mx-auto">
    <p class="lead mb-4">COVID-19 is not the first the crise that we have been 
through and also it will not be the last as life is full of 
ups and downs and what we should make is to enhance 
ourtechnology and to develop systems in different 
fields in order to survive.Learning is very important 
process in our lives Becous it’s the only way for 
continuous development and enhancement and actually 
learning will be the reason for finding solutions for any 
problem or crises so developing learning systems is 
very important.Our project as mentioned before is an 
Electronic School platform</p>
  
  </div>
</div>

<div class="b-example-divider"></div>

<div class="container col-xxl-8 px-4 py-5">
  <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
    <div class="col-10 col-sm-8 col-lg-6">
      <img src="./img/one.jpg" class="d-block mx-lg-auto img-fluid" alt="Bootstrap Themes" width="700" height="500" loading="lazy" style="border-radius: 40px;">
    </div>
    <div class="col-lg-6">
      <h1 class="display-5 fw-bold lh-1 mb-3">Project Objective</h1>
      <p class="lead"> Our project scope is to establish a user-friendly online learning platform called (Electronic School ) that supports the teacher and helps him provide educational content easily and supports the student to have an efficient online learning experience and supports also Egyptian/Arab universities and educational institutions to provide information and courses for students online.</p>
    
    </div>
  </div>
</div>
<div class="b-example-divider"></div>
     <!-- start temp6 -->
     <div class="container">
        <div class="row">
          <div class="col-lg-3">
            <img  src="./img/member2.jpeg" width="140" height="140" style="border-radius: 40%; margin: 30px auto;display: flex;" >

            <h4>Mohamed Mostafa Gad</h4>
            </div>
          <div class="col-lg-3">
            <img  src="./img/member1.jpeg" width="140" height="140" style="border-radius: 40%; margin: 30px auto;display: flex;" >
    
            <h4>Mohamed Mostafa metwally</h4>
            </div>
          <div class="col-lg-3">
            <img  src="./gifs/learning4.gif" width="140" height="140" style="border-radius: 40%; margin: 30px auto;display: flex;" >
    
            <h2>Amr hhj</h2>
            </div>
          <div class="col-lg-3">
            <img  src="./gifs/learning4.gif" width="140" height="140" style="border-radius: 40%; margin: 30px auto;display: flex;" >
    
            <h2>hakim </h2>
            </div>
        </div>
      </div>
      <!-- end temp6 -->


<!-- end temp2 -->


<!-- start footer -->
   
<?php
          require_once "./static_page/footer.php";
      ?>
    
      <!-- end footer -->

  </body>
  <script src="js/bootstrap.js"></script>

</html>