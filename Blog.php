  <!doctype html>
<html lang="en">
  <head>
    <title>blog</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/blog.css">


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


 

<main class="container">
 

  <div class="row my-4">
    <div class="container px-4 py-5" id="custom-cards">
   
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-1.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3">
                  <small>Earth</small>
                </li>
                <li class="d-flex align-items-center">
                   <small>3d</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-2.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3">
               
                  <small>Pakistan</small>
                </li>
                <li class="d-flex align-items-center">
                   <small>4d</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
  
        <div class="col">
          <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('unsplash-photo-3.jpg');">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
              <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="me-auto">
                  <img src="https://github.com/twbs.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
                </li>
                <li class="d-flex align-items-center me-3"> 
                  <small>California</small>
                </li>
                <li class="d-flex align-items-center">
                  <small>5d</small>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row g-5" style="justify-content: right;">
    

    <div class="col-md-4" >
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Archives</h4>
          <ul class="mb-0 ArcheveUl">
            <li><a href="#">March 2021</a></li>
            <li><a href="#">February 2021</a></li>
            <li><a href="#">January 2021</a></li>
            <li><a href="#">December 2020</a></li>
            <li><a href="#">November 2020</a></li>
            <li><a href="#">October 2020</a></li>
            <li><a href="#">September 2020</a></li>
            <li><a href="#">August 2020</a></li>
            <li><a href="#">July 2020</a></li>
            <li><a href="#">June 2020</a></li>
            <li><a href="#">May 2020</a></li>
            <li><a href="#">April 2020</a></li>
          </ul>
        </div>

        <div class="p-4">
          <h4 class="fst-italic">Elsewhere</h4>
          <ul class="ArcheveUl">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">youtube</a></li>
          </ul>
        </div>
        
        <div class="p-4">
          <h4 class="fst-italic">Tags</h4>
          <ul class="ArcheveUl">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>

</main>

<!-- start temp3 -->
   

<!-- end temp3 -->


   

<!-- start footer -->
   
<?php
          require_once "./static_page/footer.php";
      ?>
    
      <!-- end footer -->

  </body>
  <script src="js/bootstrap.js"></script>

</html>