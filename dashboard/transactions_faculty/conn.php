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
    // insert function

public function insert(){
    if(isset($_POST['add'])){
        if(isset($_POST['name'])){

            if(!empty($_POST['name']) ){

            $name = $_POST['name']; 

            $query = "INSERT INTO faculty(name) VALUES('$name')";

            if($sql = $this->conn->exec($query)){
                echo'<div class="alert alert-success d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                <div>
                  data added success
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
            else{
                echo '
                 <div class="alert alert-danger d-flex align-items-center" role="alert">
                <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
                <div>
                    empty data
                </div>
             </div>';
            }
        }
    }
    

}


    // select function

    public function fetch(){


        $select = $this->conn->prepare("SELECT * FROM faculty");
        
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

        $delete = $this->conn->prepare("DELETE FROM  faculty WHERE   id = '$del_id' ;  ");
        
        $delete = $this->conn->prepare("DELETE  FROM faculty    WHERE id =  '$del_id' ");
        
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


    // edit function
    
    public function edit($edit_id){
        
        // $edit = $this->conn->prepare("SELECT * FROM crud WHERE id =  '$edit_id'");
        
        // $edit -> execute();

        // return $edit;

         $data = null;
         $edit = $this->conn->prepare("SELECT * FROM faculty WHERE id =  '$edit_id'");
        $edit -> execute();
        $data = $edit ->fetchAll();
        return $data;
    }

 

    // update function
    
    public function update($data){
        
        $update = $this->conn->prepare("UPDATE faculty SET  name = '$data[edit_name]'   WHERE id =  '$data[edit_id]'");
        
        
        if($update -> execute()){
            echo'<div class="alert alert-info d-flex align-items-center" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <div>
              data update success
            </div>
          </div>';
        }

        
    }
}
?>

