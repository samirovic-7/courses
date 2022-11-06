 
 <!doctype html>
<html lang="en">
  <head>
    <title>regist</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/login.css?v=<?php echo time();?>">
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
         <!-- start navbar -->
   
         <?php
          // require_once "./static_page//navbar.php";
      ?>
      <!-- end navbar -->

      <!-- start temp1 -->

      <!-- <div class="card cardTop">
        <div class="opacity"></div>
        <img  class="card-img">
        <div class="card-img-overlay ImgOverlay">
          <h4>Access 2700+</h4>
          <h2 class="card-text">Online Tutorial From<br> Top Instructor</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br> cum libero quaerat minima iste.</p>
          <a class="btn btn-warning btn-sm " href="#"   role="button">View All courses</a>
        </div>
      </div>  -->
      <!-- end temp1 -->

  
<!-- start temp2 -->
   

<main class="form-signin main_log">
  <span id="resultw"></span>
  <form class="main" method="POST" id="form">
    <h1 class="h3 mb-3 fw-normal">Please sign up</h1>
    <div class="form-floating input_sign">
      <input type="text" class="form-control input" id="name" name="name"   placeholder="name">
      <label for="name"><i class="fa fa-user" aria-hidden="true"></i> Full name</label>
    </div>
    <div class="form-floating input_sign"  >
      <input class="form-control input" id="AG" name="age"  >
      <label for="AG"><i class="fa fa-birthday-cake" aria-hidden="true"></i> Age</label>
    </div>
    <div class="form-floating input_sign">
      <input type="number" class="form-control input" id="ph" name="phone"   placeholder="phone">
      <label for="ph"><i class="fa fa-phone" aria-hidden="true"></i> phone</label>
    </div>
    <div class="form-floating input_sign">
      <input type="text" class="form-control input"  name="address"  placeholder="address">
      <label for="address"><i class="fa fa-address-card" aria-hidden="true"></i> Address </label>
    </div> 
    <div class="form-floating input_sign">
      <input type="email" class="form-control input"  name="mail"  placeholder="name@example.com">
      <label for="mail"><i class="fa fa-envelope" aria-hidden="true"></i> Email address</label>
    </div>
    <div class="form-floating input_sign" >
      <input type="number" class="form-control input"  name="exp"   >
      <label for="exp"><i class="fa fa-font-awesome" aria-hidden="true"></i> Num of Experiance</label>
    </div>
  
    <div class="form-floating input_sign">
      <input type="password" class="form-control input"  name="pass"  placeholder="Password">
      <label for="pass"><i class="fa fa-lock" aria-hidden="true"></i> Password</label>
    </div> 
    <div class="checkbox mb-3 check">
      <label>
        <input type="checkbox" value="remember-me"> i agree to   <a href="#" class="A">Terms & Conditions</a>
      </label>
     
    </div>
    <button class="w-100 btn btn-lg btn-success" type="button" id="add"   name="add">Sign up</button>
    <div class="social"> 
      <p>Already to Markit? <a href="./login.php" class="A" >login</a></p>

    </div>
  </div>
  </form>
  
</main>
<!-- end temp2 --> 


<!-- start footer -->
   
      <?php
          // require_once "./static_page/footer.php";
      ?>
    
      <!-- end footer -->

  </body>
  <script src="js/bootstrap.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
  <script src="js/ajax.js"></script>

</html>