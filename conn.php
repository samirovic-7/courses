<?php 


$server="localhost";
 $username="root";
 $pass="";
$db=' courses';

$conn= new PDO("mysql:host=$server;dbname=$db", $username , $pass);

 
























// class Model{

// public $server="localhost";
// public $username="root";
// public $pass="";
// public $db='courses';
// public function __construct(){

// try
// {
//     $this->conn= new PDO("mysql:host=$this->server;dbname= $this->db", $this->username , $this->pass);


// }catch(PDOException $e)
// {
//     echo'
//     <div class="alert alert-danger d-flex align-items-center" role="alert">
//       <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
//       <div>
//        there is an error
//       </div>
//     </div>'.$e->getMessage();
    
// }

// }
  
// }   