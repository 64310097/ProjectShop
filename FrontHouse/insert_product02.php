<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    




<?php 
include("connect_db.php");
$prod_id=$_REQUEST['txt_prod_id'];
$prod_name=$_REQUEST['txt_prod_name'];

$price=$_REQUEST['txt_prod_price'];

$prod_amout=$_REQUEST['txt_prod_amout'];


$sql = "INSERT INTO product " ;
$sql = $sql." (prod_id, prod_name,  prod_price,prod_amout ) " ;
$sql = $sql."  VALUES  " ;
$sql = $sql." ( \"".$prod_id."\",  \"".$prod_name."\", \"".$price."\", \"".$prod_amout."\" ) ";
echo  " <BR> ".$sql." <BR> " ;

$result = mysqli_query($conn,$sql); 
 if($result)
 {  echo "<script>alert('เพิ่มข้อมูลเรียบร้อย');window.location='insert_product01.php';</script>";   }
 else
 {  echo "<script>alert('เพิ่มข้อมูลไม่สำเร็จ');history.back();</script>";   }
?>
</body>
</html>