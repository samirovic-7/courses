<?php 


include 'conn.php';


if(isset($_POST['update'])){
    if(isset($_POST['edit_name']) && isset($_POST['edit_phone']) && isset($_POST['edit_address']) && isset($_POST['edit_age']) && isset($_POST['edit_id'])){

        if(!empty($_POST['edit_name']) && !empty($_POST['edit_phone']) && !empty($_POST['edit_address']) && !empty($_POST['edit_age'])&& isset($_POST['edit_id'])){

        $data['edit_name'] = $_POST['edit_name']; 
         $data['edit_phone'] = $_POST['edit_phone'];
           $data['edit_address'] = $_POST['edit_address']; 
            $data['edit_age'] = $_POST['edit_age'];
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