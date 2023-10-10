<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylebox.css">
    <link rel="stylesheet" href="tempstyle.css">


    <title>Document</title>
</head>
<body>
<div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <a href="/Project/FrontHouse/manage_product.php">Management of product</a>
        <a href="/Project/FrontHouse/about.php">about</a>
        <a href="#">Contact</a>
      </div>
    <nav>
      
            <div href="#" class="Menubutton" onclick="openNav()" >
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
       

        <div class="brand-title">
            <a href ="/Project/FrontHouse/">EDit SHOP</a>
        </div>
        
    </nav>

    <script src="script.js"></script>

    <?php 
            include("connect_db.php");
            $prod_id=$_REQUEST['txt_prod_id'];
            $prod_name=$_REQUEST['txt_prod_name'];
            $prod_price=$_REQUEST['prod_price'];
            $prod_amount=$_REQUEST['prod_amout'];
            

            $sql = "update  product  set " ;
            $sql = $sql." prod_id  = "." \"".$prod_id."\"  , " ; 
            $sql = $sql." prod_name  = "." \"".$prod_name."\"  , " ; 
            $sql = $sql." prod_price  = "." \"".$prod_price."\"  , " ; 
            $sql = $sql." prod_amout = "." \"".$prod_amount."\"   " ;

            $sql = $sql." where  prod_id  = "." \"".$prod_id."\"   " ; 

            //echo  " <BR> ".$sql." <BR> " ;

            $result = mysqli_query($conn,$sql); 
            if($result)
            {  echo "<script>alert('แก้ไขข้อมูลเรียบร้อย');window.location='./manage_product.php';</script>";   }
            else
            {  echo "<script>alert('แก้ไขข้อมูลไม่สำเร็จ');history.back();</script>";   }
            ?>


    
</body>
</html>