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
 
        $name=$_POST['name'];

        $Img = $_FILES['phone']['name'];
        $temp_img_name = $_FILES['phone']['tmp_name'];
        move_uploaded_file($temp_img_name,"../img/UploadImg/$Img");
  
        $Course=$_POST['age'];
  
  
        
        $Vedio_name = $_FILES['address']['name'];
        $temp_name = $_FILES['address']['tmp_name'];
        $error = $_FILES['address']['error'];
  
        if($error === 0){
          $ved_ex = pathinfo($Vedio_name,PATHINFO_EXTENSION);
          
          $ved_ex_lc = strtolower($ved_ex);
  
          $allowed_exs = array("mp4","webm","avi","flv");
  
          if(in_array($ved_ex_lc,$allowed_exs)){
            
          $new_ved_name = uniqid("address-",true).'.'.$ved_ex_lc;
  
          $ved_upload_path = 'Vedio_Uploads/'.$Vedio_name;
          move_uploaded_file($temp_name,$ved_upload_path);
          }else{
            $em = "You can`t upload files of this type";
          }
        }

            $query = "INSERT INTO vedios_of_courseds(Vedio_name,vedio,poster,courses_id) VALUES('$name','$Vedio_name','$Img', '$Course')";

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

