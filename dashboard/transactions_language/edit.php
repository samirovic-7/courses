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
            <label for="recipient-name" class="col-form-label"><h5>skills</h5></label>
            <input type="text" class="form-control" id="edit_name" value="<?php echo $Edits['langs']; ?>">
          </div>
    
 
      </form> 

<?php 
}}
?>