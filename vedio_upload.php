<?php

include './conn.php';


?>
<html lang="en"><head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
 
    <title>Vedios</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/album/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/login.css?<?php echo time() ?>">

<style>
.select {
    min-width: 80%;
    border-radius: 6px;
    padding: 2% .4%;
    border: none;
    box-shadow: 0px 0px 50px 1px rgb(214, 214, 214) inset;
    display:flex;
    flex-wrap:wrap;
    justify-content:space-around;
}

</style>

</head>
  <body>
  <?php
 
   if(isset($_POST['Upload'])) {
            
     $name=$_POST['name'];

      $Img = $_FILES['image']['name'];
      $temp_img_name = $_FILES['image']['tmp_name'];
      move_uploaded_file($temp_img_name,"./img/UploadImg/$Img");

      $Course=$_POST['Course_id'];


      
      $Vedio_name = $_FILES['vedio']['name'];
      $temp_name = $_FILES['vedio']['tmp_name'];
      $error = $_FILES['vedio']['error'];

      if($error === 0){
        $ved_ex = pathinfo($Vedio_name,PATHINFO_EXTENSION);
        
        $ved_ex_lc = strtolower($ved_ex);

        $allowed_exs = array("mp4","webm","avi","flv");

        if(in_array($ved_ex_lc,$allowed_exs)){
          
        $new_ved_name = uniqid("vedio-",true).'.'.$ved_ex_lc;

        $ved_upload_path = 'Vedio_Uploads/'.$Vedio_name;
        move_uploaded_file($temp_name,$ved_upload_path);
        }else{
          $em = "You can`t upload files of this type";
        }
      }
      
      $query = $conn->prepare("INSERT INTO vedios_of_courseds(Vedio_name,vedio,poster,courses_id) VALUES('$name','$Vedio_name','$Img', '$Course')");
     
      
      if($query->execute()){
          
          echo'<div class="alert alert-success d-flex align-items-center" style=" width:38%; margin:2% auto;" role="alert"  >
          <svg class="bi flex-shrink-0 me-2" width="20" height="24" role="img"   aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
          <div>
          The Vedio Uploaded sucessfully

          </div>
        </div>';
        
      }};



?>
 
    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Vedios</h1>
           <p>
         
          
                
   <a href="check_out.php?id=<?php echo  $_GET['id']; ?>" class="btn btn-secondary my-2">Pay For This Courses</a>
          
          
           </p>
        </div>
        <!-- Button trigger modal -->

 

</section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
          <?php
                       if(isset($_GET['id'])){

                        $query = $conn->prepare("SELECT * FROM vedios_of_courseds WHERE courses_id =:id");
                $query->bindparam('id', $_GET["id"]);
                $query->execute();
                foreach ($query as $key) {
                  $vedio = $key['vedio'];
                  $name = $key['Vedio_name'];
                  $img = $key['poster'];
                  $time = $key['time'];
              ?>
  
                
                
            <div class="col-md-4">
              <div class="Card card mb-4 box-shadow">
                <!-- <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22348%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20348%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_181e74b6df9%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A17pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_181e74b6df9%22%3E%3Crect%20width%3D%22348%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22116.39999771118164%22%20y%3D%22120.41999988555908%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true"> -->
                <video class="card-img-top" src="Vedio_Uploads/<?=$vedio?>" controls style="height: 225px; width: 100%; display: block;" poster="img/UploadImg/<?=$img?>"></video>
                <div class="card-body">
                <h4 class="card-text"><?php echo $name ?></h4>

                  <p class="card-text">about Html5</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Any thing</button>
                    </div>
                    <small class="text-muted"><?php echo $time ?></small>
                  </div>
                </div>
              </div>
            </div>
            <?php  } }?>
      
             
       
          </div>
        </div>
      </div>

    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
      </div>
    </footer>



<div style="display: none" class="ubey-RecordingScreen-count-down ubey-RecordingScreen-count-down-container">
    <style>
        .ubey-RecordingScreen-count-down-container {
            position: fixed;
            height: 100vh;
            width: 100vw;
            top: 0;
            left: 0;
            z-index: 9999999999999;
            background-color: rgba(0, 0, 0, 0.2);
        }

        .ubey-RecordingScreen-count-down-content {
            position: absolute;
            display: flex;
            top: 50%;
            left: 50%;
            justify-content: center;
            align-items: center;
            color: white;
            height: 15em;
            width: 15em;
            transform: translate(-50%, -100%);
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 50%;
        }

        #ubey-RecordingScreen-count-count {
            font-size: 14em;
            transform: translateY(-2%);
        }
        .Card{
          border-radius:25px ;
        }
        .modal-content {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    align-content: space-around;
    flex-direction: column;
    width: 155%;
    padding:5px 0px;
    pointer-events: auto;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 0.3rem;
    outline: 0;
    right:170px;
}
.card-body {
    flex: 1 1 auto;
    padding: 1rem 1rem;
    background: rgb(196 255 191 / 41%);
    border-radius: 0px 0px 10px 10px ;
}
    </style>

</div> 

</body>
 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="../../assets/js/vendor/popper.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <script src="../../assets/js/vendor/holder.min.js"></script>
<script src="js/bootstrap.js"></script>

</html>