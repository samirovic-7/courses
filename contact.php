  <!doctype html>
<html lang="en">
  <head>
    <title>contact</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login.css?<?php echo time() ?>">
    <link rel="stylesheet" href="css/check.css">


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


      <?php

include './conn.php';


 

            
        if(isset($_POST['send'])){

          if(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['phone']) && isset($_POST['subject'])&& isset($_POST['message'])){

       
  
              if(!empty($_POST['mail']) && !empty($_POST['phone']) && !empty($_POST['subject'])){
                       
            
  
              $name = $_POST['name'];  $mail = $_POST['mail'];  $phone = $_POST['phone'];  $message = $_POST['message']; $subject = $_POST['subject'];
  
              
              $query = $conn->prepare("INSERT INTO contact(name,mail,phone,subject,message) VALUES('$name','$mail','$phone','$subject','$message')");
  
              
              if($query->execute()){
                  
                  echo'<div class="alert alert-success d-flex align-items-center" style=" width:38%; margin:2% auto;" role="alert"  >
                  <svg class="bi flex-shrink-0 me-2" width="20" height="24" role="img"   aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                  <div>
                  We will contact you by replying to your message shortly

                  </div>
                </div>';
                
              }
            }
              else{
                  echo '
                   <div class="alert alert-danger d-flex align-items-center" role="alert" style=" width:38%; margin:2% auto;">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                  <div>
                      please fill empty data
                  </div>
               </div>';
              }
          }
      }
      
  
  
?>
 
      <main class="container allCheckBody col-md-12">
    
    
        <div class="row g-5">
          <div class="col-md-5 col-lg-4 order-md-last">
            
            <ul class="list-group mb-3">
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0"> <i class="fa fa-thumb-tack" aria-hidden="true"></i> Cairo Egypt</h6>
                  <small class="text-muted">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quaerat, debitis.</small>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0"><i class="fa fa-envelope" aria-hidden="true"></i> Email us directly</h6>
                  <small class="text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, impedit!Brief description</small>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between lh-sm">
                <div>
                  <h6 class="my-0"><i class="fa fa-phone" aria-hidden="true"></i> phone</h6>
                  <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, quos?</small>
                </div>
              </li>
              <li class="list-group-item d-flex justify-content-between bg-light">
                <div class="text-success">
                  <h6 class="my-0">Follow Us</h6>
                  <small><i class="fa fa-facebook-square" aria-hidden="true"></i></small>
                  <small><i class="fa fa-facebook-square" aria-hidden="true"></i></small>
                  <small><i class="fa fa-facebook-square" aria-hidden="true"></i></small>
                </div>
              </li>
            
            </ul>
    
          
          </div>
          
          <div class="col-md-8">
            <form class="" method="POST">
              <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
              <div class="form-floating input_sign">
                <input type="text" class="form-control input" id="floatingname" placeholder="name" name="name">
                <label for="floatingname"><i class="fa fa-user" aria-hidden="true"></i> your name</label>
              </div>

              <div class="form-floating input_sign">
                <input type="email" class="form-control input" id="floatingInput" placeholder="name@example.com" name="mail">
                <label for="floatingInput"><i class="fa fa-envelope" aria-hidden="true"></i> Email address</label>
              </div>

              <div class="form-floating input_sign">
                <input type="number" class="form-control input" id="floatingnumber" placeholder="phone" name="phone">
                <label for="floatingnumber"><i class="fa fa-phone" aria-hidden="true"></i> phone</label>
              </div>

              <div class="form-floating input_sign">
                <input type="text" class="form-control input" id="floatingtext" placeholder="subject" name="subject">
                <label for="floatingtext"><i class="fa fa-comments" aria-hidden="true"></i> subject</label>
              </div>

              <div class="form-floating input_sign">
                <textarea type="text" class="form-control input" id="floatingPassword" placeholder="Enter Your Message" name="message"></textarea>
                <label for="floatingPassword"><i class="fa fa-comments" aria-hidden="true"></i> Enter Your Message </label>
              </div>

              
              <button class="w-100 btn btn-lg btn-success" type="submit" name="send">Send your message</button>
      
            </div>
            </form>
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