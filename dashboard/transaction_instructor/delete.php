<?php 

include 'conn.php';

$del_id = $_POST['del_id'];

$model = new Model();

$delete = $model->del($del_id);
?>