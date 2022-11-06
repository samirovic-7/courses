  <!doctype html>
<html lang="en">
  <head>
    <title>Sign-up for student</title>
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

       
          if(isset($_POST['name']) && isset($_POST['mail']) && isset($_POST['phone']) ){

       
  
              if(!empty($_POST['mail']) && !empty($_POST['phone'])){
                       
            
  
              $name = $_POST['name'];  $mail = $_POST['mail'];  $phone = $_POST['phone'];  $age = $_POST['age'];  $address = $_POST['address'];  $Experience = $_POST['exp'];  $pass = $_POST['pass'];

              $Img = $_FILES['image']['name'];
              $temp_img_name = $_FILES['image']['tmp_name'];
              move_uploaded_file($temp_img_name,"./img/UploadImg/$Img");
    
              $SKILLS=$_POST['id_skill'];
    
              $faculty=$_POST['faculty_id'];

              
              $program=$_POST['program_id'];

              $Resume_name = $_FILES['Resume']['name'];
              $temp_Resume_name = $_FILES['Resume']['name'];
              $folder = 'img/UploadImg/';
              move_uploaded_file($temp_Resume_name,$folder.$Resume_name);
  
              
              $query = $conn->prepare("INSERT INTO student(name,age,phone,address,email,Experience,image,Resume,skills_id,programming_fields_id,faculty_id,password) VALUES('$name','$age','$phone','$address','$mail','$Experience','$Img','$Resume_name','$SKILLS',$program,$faculty,'$pass')");
             
              
              if($query->execute()){
                  
                  echo'<div class="alert alert-success d-flex align-items-center" style=" width:38%; margin:2% auto;" role="alert"  >
                  <svg class="bi flex-shrink-0 me-2" width="20" height="24" role="img"   aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                  <div>
                  
                  The Data Added Sucessfully

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
 
      <main class=" container-fluid allCheckBody col-md-12">
    
    
        <div class="row g-5">
        
          
          <div class="col-md-10">
            <form class="" method="POST" enctype="multipart/form-data">
              <h1 class="h3 mb-3 fw-normal">Please sign up As a Student</h1>
              <div class="form-floating input_sign">
                <input type="text" class="form-control input" id="floatingname" placeholder="name" name="name" required>
                <label for="floatingname"><i class="fa fa-user" aria-hidden="true"></i> your name</label>
              </div>

              <div class="form-floating input_sign">
                <input type="email" class="form-control input" id="floatingInput" placeholder="name@example.com" name="mail" required>
                <label for="floatingInput"><i class="fa fa-envelope" aria-hidden="true"></i> Email address</label>
              </div>

              <div class="form-floating input_sign">
                <input type="number" class="form-control input" id="floatingnumber" placeholder="phone" name="phone" required>
                <label for="floatingnumber"><i class="fa fa-phone" aria-hidden="true"></i> phone</label>
              </div>

              <div class="form-floating input_sign">
                <input type="text" class="form-control input" id="floatingtext" placeholder="address" name="address" required>
                <label for="floatingtext"><i class="fa fa-address-card" aria-hidden="true"></i> address</label>
              </div>

              <div class="form-floating input_sign">
              <input  type="number" class="form-control input" id="floatingPassword" placeholder=" Your age" name="age" required>

                <label for="floatingPassword"><i class="fa fa-birthday-cake" aria-hidden="true"></i>  Your age </label>
              </div>


              <div class="form-floating input_sign">
              <input  type="text" class="form-control input" id="floatingExp" placeholder="Enter Your Experiance" name="exp" required>

                <label for="floatingExp"><i class="fa fa-font-awesome" aria-hidden="true"></i> Enter Your Experiance </label>
              </div>


              <div class="form-floating input_sign">
              <input  type="file" class="form-control input" id="floatingImg" placeholder="Upload Your photo" name="image" required>

                <label for="floatingImg"><i class="fa fa-font-awesome" aria-hidden="true"></i> Enter Your photo </label>
              </div>


              <div class="form-floating input_sign">
              <input  type="file" class="form-control input" id="floatingCV" placeholder="Upload Your Resume" name="Resume">

                <label for="floatingCV"><i class="fa fa-font-awesome" aria-hidden="true"></i> Enter Your Resume </label>
              </div>

              <div class="form-floating input_sign">
                <input  type="text" class="form-control input" id="floatingPass" placeholder="Enter Your Password" name="pass" required>

                <label for="floatingPass"><i class="fa fa-lock" aria-hidden="true"></i> Enter Your Password </label>
              </div>

              <div class="form-floating input_sign" style="display:flex; flex-wrap:wrap; justify-content:space-around;">
              <select class="select"  name="faculty_id">
              <option value="" hidden>faculty</option>

                <?php
                
              $query = $conn->prepare("SELECT * FROM faculty");
              $query->execute();
              foreach ($query as $key) {
                $id = $key['id'];
                $name = $key['name'];
              echo'

                    
                    <option value="'.$id.'" >'.$name.'</option>';
                } ?>
              </select>
         
              <select class="select"  name="id_skill">

              <option value="Skills" hidden >Skills</option>

                <?php
                
              $query = $conn->prepare("SELECT * FROM skills");
              $query->execute();
              foreach ($query as $key) {
                $id_skills = $key['id'];
                $name_skills = $key['skills'];
              echo'

                    
                    <option value="'.$id_skills.'">'.$name_skills.'</option>';
                } ?>
              </select>
           
       
              <select class="select"  name="program_id">

              <option value="Programming" hidden>Programming language</option>

                <?php
                
              $query = $conn->prepare("SELECT * FROM programming_fields");
              $query->execute();
              foreach ($query as $key) {
                $id_langs = $key['id'];
                $name_langs = $key['langs'];
              echo'

                    
                    <option value="'.$id_langs.'" >'.$name_langs.'</option>';
                } ?>
              </select>
              </div>
    



              <div class="checkbox mb-3 check">
                <label>
                  <input type="checkbox" value="remember-me"> i agree to   <a href="#" class="A">Terms & Conditions</a>
                </label>
                    <div class="sociawl"> 
                          <p>Sign Up As an Instructor <i class="fa fa-arrow-right" aria-hidden="true"></i> <a href="./SignInstructor.php" class="A" > Sidn_Up</a></p>

                  </div>

              </div>
              <button class="w-100 btn btn-lg btn-success" type="submit" name="send">Accept your Data</button>
                          <div class="social"> 
                  <p>Already to Markit? <a href="./loginStudent.php" class="A" >login</a></p>

                </div>
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