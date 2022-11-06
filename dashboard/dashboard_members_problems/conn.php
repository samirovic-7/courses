<?php 

class Model{

private $server="localhost";
private $username="root";
private $pass="";
private $db='courses';
private $conn;
public function __construct(){

try
{
    $this->conn= new PDO("mysql:host=$this->server;dbname= $this->db", $this->username , $this->pass);

}catch(PDOException $e)
{
    echo'
    <div class="alert alert-danger d-flex align-items-center" role="alert">
      <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
      <div>
       there is an error
      </div>
    </div>'.$e->getMessage();
}

}
  


    // select function

    public function fetch(){


        $select = $this->conn->prepare("SELECT * FROM contact");
        
        $select -> execute();

        return $select;
        // another solution------------>
        // $data = null;
        // $select = $this->conn->prepare("SELECT * FROM crud");
        // $select -> execute();
        // $data = $select ->fetchAll();
        // return $data;
    }




    // delete function
    
    public function del($del_id){

        $delete = $this->conn->prepare("DELETE FROM  contact WHERE   id = '$del_id' ;  ");
        
        $delete = $this->conn->prepare("DELETE  FROM contact    WHERE id =  '$del_id' ");
        
        if( $delete -> execute()){
            echo'<div class="alert alert-warning d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
              data delete success
            </div>
          </div>';
        }else{
            echo '
            <div class="alert alert-warning d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    an error while upload data 
                </div>
            </div>';
        }


    }


 
}
?>

