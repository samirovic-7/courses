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
   
 
    <main role="main">

    <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Vedios</h1>
           <p>
           <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Upload Your Courses
          </button>         
           </p>
        </div>
        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vedio Data</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<form method="post" enctype="multipart/form-data" action="vedio_upload.php">
      <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">Vedio Name</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="name">
</div>
      <div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02" name="image">
  <label class="input-group-text" for="inputGroupFile02">Upload Poster of this Vedio</label>
</div>

<div class="input-group mb-3">
  <input type="file" class="form-control" id="inputGroupFile02" name="vedio">
  <label class="input-group-text" for="inputGroupFile02">Upload the Vedio</label>
</div>

<div class="form-floating input_sign">

<select class="select"  name="Course_id">
              <option value="" hidden>Course Name</option>

                <?php
         
              $query = $conn->prepare("SELECT * FROM courses_card");
              $query->execute();
              foreach ($query as $key) {
                $id = $key['id'];
                $name = $key['title'];
              echo'

                    
                    <option value="'.$id.'" >'.$name.'</option>';
                } ?>
              </select>
         
</div>
 

  
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="Upload">Save Uploaded</button>
      </div>
</form>
      </div>
    </div>
  </div>
</div>


    
        <!-- Button trigger modal -->


<!-- Modal -->
 
 
</section>

      <div class="album py-5 bg-light">
        <div class="container">

          <div class="row">
          <?php
                  if(isset($_GET['id'])){
                $query = $conn->prepare("SELECT * FROM vedios_of_courseds  WHERE courses_id =:id");
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
            <?php } } ?>
      
             
       
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