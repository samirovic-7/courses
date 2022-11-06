    <!-- start navbar -->
    <?php 
     ob_start();
    ?>
    <nav class="navbar navbar-light bg-light fixed-top navbarFix">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="img/one.jpg" alt="" width="50" height="40" class="d-inline-block align-text-top">
                <div class="wall"></div>
                Electronic School
              </a>
              <form class="d-flex search" method="GET" action="./CardStud.php">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search">
                <button class="btn btn-outline-success" type="submit" name="BtnSearch">Search</button>
              </form>
              <div class="session"> 
              <?php
            

            if(isset($_SESSION['StudentData'])){
              echo $_SESSION['StudentData']->name;
            }else{
              header("location: loginStudent.php" , true);

            }
            

 ?>


 
              </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
              <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Navbar</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
              <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="./home.php">Home</a>
                </li>
                      
                <li class="nav-item">
                  <a class="nav-link" href="CardStud.php" >
                    Courses
                  </a>
                  
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./aboutUS.php">about</a>
                </li>
               
                <li class="nav-item">
                  <a class="nav-link" href="./Blog.php">Blog</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="./instructor.php">instructor</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="./profile.php?id=<?php echo  $_SESSION['StudentData']->email; ?>">profile</a>
                </li>
                
                    
                <li class="nav-item">
                  <a class="nav-link" href="./check_out.php">check_out</a>
                </li>
                
                <li class="nav-item">
                  <a class="nav-link" href="./contact.php">contact us</a>
                </li> 
                
                
                
                  <form>
                    <button  type="submit" name="LogOut" class="loguot">log-out</button>
                  </form>
                </li>
              </ul>
            
            </div>
          </div>
        </div>
      </nav>

      <!-- end navbar -->
      <?php
      
            if(isset($_GET['LogOut'])){
              session_unset();
              session_destroy();

              header("location: loginStudent.php" , true);
            }

      ?>