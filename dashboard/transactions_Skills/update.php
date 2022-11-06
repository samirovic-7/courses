<?php 


include 'conn.php';


if(isset($_POST['update'])){
    if(isset($_POST['edit_name']) ){

        if(!empty($_POST['edit_name']) ){

        $data['edit_name'] = $_POST['edit_name']; 

             $data['edit_id'] = $_POST['edit_id'];

       
            $model = new Model();

            $update = $model->update($data);

        }
        else{
            echo '
                      <script>alert("empty");</script> 
             ';
        }
    }
}
?>