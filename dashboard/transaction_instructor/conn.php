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
            if(isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['age']) && isset($_POST['email']) && isset($_POST['address']) && isset($_POST['experiance']) && isset($_POST['pass'])){
    
                if(!empty($_POST['name']) && !empty($_POST['phone']) && !empty($_POST['age'])  && isset($_POST['email']) && !empty($_POST['address']) && isset($_POST['experiance'])&& isset($_POST['pass'])){
    
                $name = $_POST['name'];  $phone = $_POST['phone'];  $age = $_POST['age'];    $email = $_POST['email']; $address = $_POST['address'];  $experiance = $_POST['experiance']; $position = $_POST['experiance'];  $title = $_POST['experiance']; $pass = $_POST['pass'];
                
      
                $query = "INSERT INTO instructor(username,phone,age,email,address,Num_Experience,Position_OR_Job,title,password) VALUES('$name','$phone','$age','$email','$address','$experiance','$position','$title','$pass')";
    
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


        $select = $this->conn->prepare("SELECT * FROM instructor");
        
        $select -> execute();

        return $select;
        // another solution------------>
        // $data = null;
        // $select = $this->conn->prepare("SELECT * FROM crud");
        // $select -> execute();
        // $data = $select ->fetchAll();
        // return $data;
    }


    public function fetchSkills(){


        $select = $this->conn->prepare("SELECT * FROM skills");
        
        $select -> execute();

        return $select;
       
    }
    public function fetchFaculty(){


        $select = $this->conn->prepare("SELECT * FROM faculty");
        
        $select -> execute();

        return $select;
       
    }
    public function fetchProgramming(){


        $select = $this->conn->prepare("SELECT * FROM programming_fields");
        
        $select -> execute();

        return $select;
       
    }


    // delete function
    
    public function del($del_id){

        $delete = $this->conn->prepare("DELETE FROM  instructor WHERE   id = '$del_id' ;  ");
        
        $delete = $this->conn->prepare("DELETE  FROM instructor    WHERE id =  '$del_id' ");
        
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
         $edit = $this->conn->prepare("SELECT * FROM instructor WHERE id =  '$edit_id'");
        $edit -> execute();
        $data = $edit ->fetchAll();
        return $data;
    }

 

    // update function
    
    public function update($data){
        
        $update = $this->conn->prepare("UPDATE instructor SET  username = '$data[edit_name]', phone = '$data[edit_phone]',  address = '$data[edit_address]', age = '$data[edit_age]'    WHERE id =  '$data[edit_id]'");
        
        
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

