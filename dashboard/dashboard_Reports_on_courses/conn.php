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
        if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['address']) && isset($_POST['age'])){

            if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['address']) && !empty($_POST['age'])){

            $name = $_POST['name'];  $phone = $_POST['phone'];  $address = $_POST['address'];  $age = $_POST['age'];

            $query = "INSERT INTO courses_card(title,about,numLesson,state) VALUES('$name','$phone','$address','$age')";

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


        $select = $this->conn->prepare("SELECT * FROM courses_card");
        
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

        $delete = $this->conn->prepare("DELETE FROM  courses_card WHERE   id = '$del_id' ;  ");
        
        $delete = $this->conn->prepare("DELETE  FROM courses_card    WHERE id =  '$del_id' ");
        
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
         $edit = $this->conn->prepare("SELECT * FROM courses_card WHERE id =  '$edit_id'");
        $edit -> execute();
        $data = $edit ->fetchAll();
        return $data;
    }

 

    // update function
    
    public function update($data){
        
        $update = $this->conn->prepare("UPDATE courses_card SET  title = '$data[edit_name]', about = '$data[edit_phone]',  numLesson = '$data[edit_address]', state = '$data[edit_age]'   WHERE id =  '$data[edit_id]'");
        
        
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

