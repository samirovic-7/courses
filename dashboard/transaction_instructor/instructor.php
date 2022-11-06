<?php 

include 'conn.php';

$model = new Model();

$row = $model->fetch();

$row2 = $model->fetchSkills();

$row3 = $model->fetchFaculty();

$row4 = $model->fetchProgramming();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <!-- Bootstrap CSS -->
    
   <link rel="stylesheet" href="../../css/bootstrap.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="../../css/table.css?<php echo date?>" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <style>
  .nav-link {
    display: block;
    padding: 0.5rem 1rem;
    color: #0e612c;
    text-decoration: none;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
}
</style>
</head>
<body> 


<?php
          require_once "../../static_page/dashboard_header.php";
      ?>

<?php
          require_once "../../static_page/dashboard_sidebar.php";
      ?>

  
         <div class="table">
        <div class="table_header">
            <h1>instructors</h1>
         
            
           
  
<button  type="button" class="Add_Data btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Add data</button>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
         <button type="button"   class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <form action="" method="POST" id="form">
          <div id="result"></div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"  style="float:left;">:Name</label>
            <input type="text" class="form-control" id="name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"  style="float:left;">:Phone</label>
            <input type="number" class="form-control" id="phone">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"  style="float:left;">:Age</label>
            <input type="number" class="form-control" id="age">
          </div>
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"  style="float:left;">:Position_OR_Job</label>
            <input type="text" class="form-control" id="position">
          </div>
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"  style="float:left;">:title</label>
            <input type="text" class="form-control" id="title">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"  style="float:left;">:Email</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"  style="float:left;">:Address</label>
            <input type="text" class="form-control" id="address">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"  style="float:left;">:Num of Experiance</label>
            <input type="number" class="form-control" id="experiance">
          </div>
          
       
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label"  style="float:left;">:Password</label>
            <input type="password" class="form-control" id="pass">
          </div>
         
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="add">save </button>
      </div>
      </form>  
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="edit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div id="edit_data"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="update">Update data </button>
      </div>
    </div>
  </div>
</div>



<div id="fetch"></div>

<div id="show"></div>

<div id="rrrr"></div>
</div>
</div>
      </div>
</body>
<script src="../js/bootstrap.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
<script
  src="https://code.jquery.com/jquery-3.6.0.min.js"
  integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
  crossorigin="anonymous"></script>
<script src="js/ajax.js"></script>
</html>