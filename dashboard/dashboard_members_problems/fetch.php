<?php 

include 'conn.php';

$model = new Model();

$row = $model->fetch();


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
  <link rel="stylesheet" href="./css/table.css?v=<?php echo time() ?>">
  <title>Document</title>
</head>
<body>
  
<div class="table_section" style="width: 93%;">

<table  >
<thead>
                    <tr>
                        <th>#</th>
                        <th>الاسم</th>
                        <th>المیل</th>
                        <th>رقم التليفون</th>
                        <th>الموضوع</th>
                        <th>تفصيل المشكلة</th>
                         <th>حذف</th>
                    </tr>
                </thead>
<tbody >
    <?php 
            $i = 1;
        if(!empty($row)){
            foreach ($row as $rows) {?>
                <tr>
                    
                  <th scope="row"><?php echo $i++; ?></th>
                  <td> <?php echo $rows['name']; ?> </td>
                  <td> <?php echo $rows['mail']; ?> </td>
                  <td> <?php echo $rows['phone']; ?> </td>
                  <td> <?php echo $rows['subject']; ?> </td>
                  <td> <?php echo $rows['message']; ?> </td>
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
