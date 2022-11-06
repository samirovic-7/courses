<?php 

include 'conn.php';

$model = new Model();

$row = $model->fetch();


$row2 = $model->fetchSkills();

$row3 = $model->fetchFaculty();

 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">    
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  <link rel="stylesheet" href="css/home.css">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Mukta:wght@300;400;600;700;800&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/table.css?v=<?php echo time();?>">
  <title>Document</title>
  <style>
    .img{
        height: 150px; 
        width:96%; 
        display: block; 
        background-size: cover;
        background-position: center;
         background-repeat: no-repeat;
        border-radius: 60px;
        padding: 1%;
        border: none;
    }
  </style>
</head>
<body>
  
<div class="table_section">

<table  >
<thead>
                    <tr>
                        <th>#</th>
                        <th>الصوره</th>
                        <th>الاسم</th>
                        <th>العمر</th>
                        <th>رقم التليفون</th>
                        <th>عنوان</th>
                        <th>المیل</th>
                        <th>خبرة</th> 
                        <th>الباسورد</th> 
                        <th>تعديل</th>
                        <th>حذف</th>
                    </tr>
                </thead>
<tbody >
    <?php 
            $i = 1;
        if(!empty($row)){
            foreach ($row as $rows) 
       

            {?>
                <tr>
                
                  <th scope="row"><?php echo $i++; ?></th>
                  <td> <img class="img" src="../../img/UploadImg/<?=$rows['image']?>"  > </td>
                  <td> <?php echo $rows['name']; ?> </td>
                  <td> <?php echo $rows['age']; ?> </td>
                  <td> <?php echo $rows['phone']; ?> </td>
                  <td> <?php echo $rows['address']; ?> </td>
                  <td> <?php echo $rows['email']; ?> </td>
                  <td> <?php echo $rows['Experience']; ?> </td> 
                  <td> <?php echo $rows['password']; ?> </td>
              
                  <td><button type="button" class="btn btn-warning"    id="edit_id" value="<?php echo $rows['id']; ?>"   data-bs-toggle="modal" data-bs-target="#edit"><i class="fa-solid fa-pen-to-square"></i></button></td>
                  <td><button type="button" class="btn btn-danger" id="del" value="<?php echo $rows['id']; ?>"><i class="fa-solid fa-trash"></i></button></td>
              </tr> 
             
              <?php
            }
  
            }
      
    ?>
</tbody>
</table>
</div>

</body>
</html>





 