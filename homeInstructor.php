 
 <!doctype html>
<html lang="en">
  <head>
    <title>Home Instructor</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    
    <link rel="stylesheet" href="css/bootstrap.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />  
      <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>">
    
</head>

      <!-- start navbar -->
   
      <?php
           session_start();

           if(isset($_SESSION['InstructorData'])){
            if($_SESSION['InstructorData']->Role==='Instructor'){
             echo $_SESSION['InstructorData']->name;
              require_once "./static_page//NavbarInstructor.php";
             }else{
              header("location: loginInstructor.php" , true);
             }
           }else{
             header("location: loginInstructor.php" , true);

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

<div class="popular_Cou">
  <h1>Explore <br> Our Popular Courses</h1>
  <div class="popular_card">
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>

  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  <div class="card col-md-3 card_pop" style="height: 100px;">
    <div class="row">
      <div class="col-md-5">
        <img src="gifs/sky/sky3.gif" class="img-fluid rounded-start img_pop" >
      </div>
      <div class="col-md-7">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
      </div>
    </div>
  </div>
  
</div>

<div class="fin_pop" >
  <div class="card mb-3 col-md-5 card-body-pop" >
    <div class="row g-0">
      <div class="col-md-7">
        <img src="gifs/learning4.gif" class="img-fluid rounded-start" >
      </div>
      <div class="col-md-5">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to  .</p>
          <a class="btn btn-warning btn-sm " href="#"   role="button">View courses</a>
        </div>
      </div>
    </div>
  </div>
  <div class="card mb-3 col-md-5 card-body-pop" >
    <div class="row g-0">
      <div class="col-md-7">
        <img src="gifs/learning1.gif" class="img-fluid rounded-start" >
      </div>
      <div class="col-md-5">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a wider card with supporting text below as a natural lead-in to  .</p>
          <a class="btn btn-warning btn-sm " href="#"   role="button">View courses</a>
        </div>
      </div>
    </div>
  </div>
  
</div>

</div>

      <!-- end temp2 -->

      <!-- start temp3 -->

     <div class="current_Cou">
        <h2>Current Events</h2>
        <div class="current_card">
          <div class="accordion accordion-flush accordion_on" id="accordionFlushExample">
          <a href="#" class="accordion_link">
            <div class="accordion-item accordion-item_con">
              <h2 class="accordion-header" id="flush-headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                  Accordion Item #1
                  
                </button>
                  </h2>
              <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
              </div>
            </div>
          </a>
          <a href="#" class="accordion_link">

            <div class="accordion-item accordion_on">
              <h2 class="accordion-header" id="flush-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseOne">
                  Accordion Item #2
                </button>
              </h2>
              <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
              </div>
            </div>
          </a>
          <a href="#" class="accordion_link">

            <div class="accordion-item accordion_on">
              <h2 class="accordion-header" id="flush-headingthree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsethree" aria-expanded="false" aria-controls="flush-collapseOne">
                  Accordion Item #3
                </button>
              </h2>
              <div id="flush-collapsethree" class="accordion-collapse collapse" aria-labelledby="flush-headingthree" data-bs-parent="#accordionFlushExample">
              </div>
            </div>
          </a>
          <a href="#" class="accordion_link">

            <div class="accordion-item accordion_on">
              <h2 class="accordion-header" id="flush-headingfour">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapseOne">
                  Accordion Item #4
                </button>
              </h2>
              <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
              </div>
            </div>
          </a>
          <a href="#" class="accordion_link">

            <div class="accordion-item accordion_on">
              <h2 class="accordion-header" id="flush-headingfive">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapseOne">
                  Accordion Item #5
                </button>
              </h2>
              <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
              </div>
            </div>
          </a>
          <a href="#" class="accordion_link">

            <div class="accordion-item accordion_on">
              <h2 class="accordion-header" id="flush-headingsex">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesex" aria-expanded="false" aria-controls="flush-collapseOne">
                  Accordion Item #6
                </button>
              </h2>
              <div id="flush-collapsesex" class="accordion-collapse collapse" aria-labelledby="flush-headingsex" data-bs-parent="#accordionFlushExample">
              </div>
            </div>
          </a>
          </div>
          </div>
          </div> 
      <!-- end temp3 -->
      
      
      <!-- start temp4 -->

     <div class="Tap_Cou">
      <h2>Find The Right<br> online course For You</h2>
      <div class="Tap_allcard">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Home</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Contact</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="card-group myTabContent_card ">
              <div class="row">

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

          </div>
        </div>
        </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="card-group myTabContent_card ">
              <div class="row">

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

          </div>
        </div>
          </div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
            <div class="card-group myTabContent_card ">
              <div class="row">

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

            <div class="card Tap_card col-md-3">
              
              <img  src="./gifs/learning2.gif" class="card-img-top card-img-tap" >
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-book" aria-hidden="true"></i> 24 lesson</div>
                <div  class="card-footer card-footer-tap_two"><i class="fa fa-star star" aria-hidden="true"></i> 4.5</div>

              </div>
                <p class="card-text card-footer-infor" >This is a wider c longer</p>
              <div class="card-footer card-footer-inst">
                <div  class="card-footer card-footer-tap_three"><img src="./gifs/learning4.gif" class="img_card_ins" > free</div>

              </div>
              <div class="card-footer card-footer-tap">
                <div  class="card-footer card-footer-tap_one"><i class="fa fa-graduation-cap" aria-hidden="true"></i> free</div>
                <div  class="card-footer card-footer-tap_two">show <i class="fa fa-arrow-right" aria-hidden="true"></i></div>

              </div>
            </div>

          </div>
        </div>
          </div>
        </div>
      
      
      </div>
      </div>
            <!-- end temp4 -->

            <!-- start temp5 -->

      <div class="container-fluid">

      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Free</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>10 users included</li>
                <li>2 GB of storage</li>
                <li>Email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-success ">Sign up for free</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Pro</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$15<small class="text-muted fw-light">/mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>20 users included</li>
                <li>10 GB of storage</li>
                <li>Priority email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-success">Get started</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-success">
            <div class="card-header py-3 text-white bg-success border-success">
              <h4 class="my-0 fw-normal">Enterprise</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$29<small class="text-muted fw-light">/mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>30 users included</li>
                <li>15 GB of storage</li>
                <li>Phone and email support</li>
                <li>Help center access</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-success">Contact us</button>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- end temp5 -->

      <!-- start temp6 -->
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <img  src="./gifs/learning1.gif" width="140" height="140" style="border-radius: 40%;" >

            <h2>member 1</h2>
            <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
            <p><a class="btn btn-success" href="#">View details »</a></p>
          </div>
          <div class="col-lg-4">
            <img  src="./gifs/learning3.gif" width="140" height="140" style="border-radius: 40%;" >
    
            <h2>member 2</h2>
            <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
            <p><a class="btn btn-success" href="#">View details »</a></p>
          </div>
          <div class="col-lg-4">
            <img  src="./gifs/learning4.gif" width="140" height="140" style="border-radius: 40%;" >
    
            <h2>member 3</h2>
            <p>And lastly this, the third column of representative placeholder content.</p>
            <p><a class="btn btn-success" href="#">View details »</a></p>
          </div>
        </div>
      </div>
      <!-- end temp6 -->

        <!-- start footer -->
   
      <?php
          require_once "./static_page/footer.php";
      ?>
    
      <!-- end footer -->

  </body>
  <script src="js/bootstrap.js"></script>

</html>