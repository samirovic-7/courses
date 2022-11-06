<?php 

include 'conn.php';

$edit_id = $_POST['edit_id'];

$model = new Model();

$Edit = $model->edit($edit_id);

if (!empty($Edit)) {
    foreach ($Edit as $Edits){
        
?>

<form action="" method="POST" id="form">
    <div id="rrrr"></div>
    <div>
        <input type="hidden" id="edit_id" value="<?php echo $Edits['id']; ?>">
    </div>
          <div class="mb-3" style="text-align:left">
            <label for="recipient-name" class="col-form-label"><h5>title</h5></label>
            <input type="text" class="form-control" id="edit_name" value="<?php echo $Edits['name']; ?>">
          </div>
          <div class="mb-3" style="text-align:left">
            <label for="recipient-name" class="col-form-label"><h5>age</h5></label>
            <input type="number" class="form-control" id="edit_age"  value="<?php echo $Edits['age']; ?>">
          </div>
          <div class="mb-3" style="text-align:left">
            <label for="recipient-name" class="col-form-label"><h5>phone</h5></label>
            <input type="number" class="form-control" id="edit_phone"  value="<?php echo $Edits['phone']; ?>">
          </div>
          <div class="mb-3" style="text-align:left">
            <label for="recipient-name" class="col-form-label"><h5>address</h5></label>
            <input type="text" class="form-control" id="edit_address"  value="<?php echo $Edits['address']; ?>">
          </div>
 
          <div class="mb-3" style="text-align:left">
            <label for="recipient-name" class="col-form-label"><h5>email</h5></label>
            <input type="email" class="form-control" id="edit_mail"  value="<?php echo $Edits['email']; ?>">
          </div>
 
 
          <div class="mb-3" style="text-align:left">
            <label for="recipient-name" class="col-form-label"><h5>Experience</h5></label>
            <input type="number" class="form-control" id="edit_Exp"  value="<?php echo $Edits['Experience']; ?>">
          </div>
          
 
          <div class="mb-3" style="text-align:left">
            <label for="recipient-name" class="col-form-label"><h5>password</h5></label>
            <input type="text" class="form-control" id="edit_pass"  value="<?php echo $Edits['password']; ?>">
          </div>

      </form> 

<?php 
}}
?>