<?php
  require_once"./conn.php";
 ?>

<!doctype html>
  <html lang="en">
  <head>
    <title>logIn</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login.css?<?php echo time() ?>">
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>
</head>
     

<!-- start temp2 -->
   

<main class="form-signin main_log">
<span id="result"></span>
  <form class="main" method="POST" id="form">
    <h1 class="h3 mb-10 fw-normal">Please sign in  As An Admin</h1>
    <br>
    <div class="form-floating input_sign">
      <input type="email" class="form-control input"  id="mail" name="mail"   placeholder="name@example.com">
      <label for="mail"><i class="fa fa-envelope"  aria-hidden="true"></i> Email address</label>
    </div>
    <div class="form-floating input_sign">
      <input type="password" class="form-control input" id="pass" name="pass"   placeholder="Password">
      <label for="pass"><i class="fa fa-lock" aria-hidden="true"></i> Password</label>
    </div>

    
    <button class="w-100 btn btn-lg btn-success" type="submit" id="login" name="login" >Sign in</button>
    <div class="social"> 
    <div class="col-9 sec_one_one">
    
    <i class="fa-brands fa-facebook-square"></i>
    <i class="fa-brands fa-twitter"></i>
    <i class="fa-brands fa-instagram"></i>
    <i class="fa-brands fa-linkedin"></i>
    </div>
    <p>Log-in As Student? <a href="./loginStudent.php" class="A" >Go To Log in</a></p>
    <p>Log-in As Instructor? <a href="./loginInstructor.php" class="A" >Go To Log in</a></p>
  </div>
  </form>
</main>

<?php
  
  

  if(isset($_POST["login"])){

    if( isset($_POST['mail'])   && isset($_POST['pass'])){
  
      if( !empty($_POST['mail']) &&   !empty($_POST['pass'])){
               
    $select = $conn->prepare("SELECT * FROM  admin    WHERE Email = :mail AND Password = :pass");
  
    $email = $_POST['mail'];
  
    $pass = $_POST['pass'];
  
    $select->bindParam("mail",$email);
  
    $select->bindParam("pass",$pass);
  
    $select ->execute();
    
    if($select->rowCount()===1){
     
      $data = $select->fetchObject();

      session_start();

      $_SESSION['StudentAdmin']=$data;
         
      header("location: dashboard/dashboard/dashboard.php" , true);
ob_end_flush();
      
        // echo '
       
        // <div class="alert alert-success d-flex align-items-center" role="alert">
        // <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
        // <div>
        //         الحساب مسجل                
        //     </div>
        // </div>';
      
    }else{
  
      echo ' 
        <div class="alert alert-warning d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
            <div>
                الحساب غير مسجل
            </div>
        </div>';
  
    }}
      else{
          echo ' 
           <div class="alert alert-danger d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
          <div>
              empty data
          </div>
       </div>';
      }
  }
  };

  ?>

 
<!-- end temp2 -->


 
  </body>
  <script src="js/bootstrap.js"></script>
 
</html>