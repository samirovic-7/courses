<?php

include '../conn.php';


 

            
        if(isset($_POST['add'])){

          if(isset($_POST['name'])   && isset($_POST['phone']) && isset($_POST['mail']) && isset($_POST['pass']) ){

       
  
              if(!empty($_POST['name'])  && !empty($_POST['phone'])  && !empty($_POST['mail']) && !empty($_POST['pass'])){
                       
            $select = $conn->prepare("SELECT * FROM student WHERE email = :mail");

            $check = $_POST['mail'];

            $select->bindParam("mail",$check);

            $select ->execute();
            
            if($select->rowCount()>0){
                 
                echo 'الحساب مسجل';
              
            }else{
  
              $name = $_POST['name'];  $age = $_POST['age'];  $mail = $_POST['mail'];  $phone = $_POST['phone'];  $pass = $_POST['pass']; $address = $_POST['address']; $Num_Experience = $_POST['exp'];
  
              
              $query = $conn->prepare("INSERT INTO student(name,age,phone,address,Num_Experience,password) VALUES('$name','$age','$phone','$mail','$address','$Num_Experience','$pass')");
  
              
              if($query->execute()){
                  
                  echo'<div class="alert alert-success d-flex align-items-center" role="alert">
                  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
                  <div>
                    data added success
                  </div>
                </div>';
                
              }
            }}
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
      
  
  
?>