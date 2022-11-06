   
  <header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" >
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">المدرسة الالكترونية</a>
    <div class="navbar-brand col-md-3 col-lg-2 me-0 px-3">  
    <?php
            session_start();

            if(isset($_SESSION['StudentAdmin'])){
              echo $_SESSION['StudentAdmin']->username;
            }else{
              header("location: http://localhost/courses/loginAdmin.php" , true);

            }

 ?>
    </div>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input class="form-control form-control-dark w-50" type="text" placeholder="بحث" aria-label="Search">
    <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form>
          <button class="nav-link px-3" type="submit" name="LogOut" style="background:#009942;border:none;color:white">تسجيل الخروج</button>
        </form>
      </div>
    </div>
  </header>

  <?php
      
      if(isset($_GET['LogOut'])){
        session_unset();
        session_destroy();

        header("location: http://localhost/courses/loginAdmin.php" , true);
      }

?>