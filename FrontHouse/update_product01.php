<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylebox.css">
    <link rel="stylesheet" href="tempstyle.css">


    <title>Edit data</title>
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






<center>
<form id="form01" name="form01" method="post" action="./update_product02.php"> 
<?php
 include("connect_db.php");
 $find_emp_id = $_REQUEST["prod_id"];
 $sql = " SELECT * " ;
 $sql = $sql." FROM product where prod_id = \"".$find_emp_id."\" "  ;
 // echo  "<BR> ".$sql." <BR>" ;
 $record=mysqli_query($conn,$sql) or die(mysql_error());
 $data = mysqli_fetch_assoc($record) ;
 ?>
<table border="2">
<tr align="center" > 
    <td colspan="2"> แก้ไขข้อมูลสินค้า </td> 
</tr>
<tr>
    <td align="right">รหัสสินค้า  &nbsp; </td>
    <td> <input type="text" name="txt_prod_id" 
	       value="<?php echo ($data['prod_id']); ?>" readonly size="6">
	  </td>
</tr>
<tr>
    <td align="right"> &nbsp; ชื่อสินค้า  &nbsp; </td>
    <td align="left">
	 	<label for="txt_prod_name"></label>
      <input type="text" name="txt_prod_name" 
		  value="<?php echo ($data['prod_name']); ?>" size="45">
	  </td>
</tr>

<tr>
    <td align="right"> &nbsp; ราคาสินค้า  &nbsp; </td>
    <td align="left">
	 	<label for="prod_price"></label>
      <input type="text" name="prod_price" 
		  value="<?php echo ($data['prod_price']) ; ?>" size="45">
	  </td>
</tr>

<tr>
    <td align="right"> &nbsp; จำนวนสินค้า  &nbsp; </td>
    <td align="left">
	 	<label for="prod_amout"></label>
      <input type="text" name="prod_amout" 
		  value="<?php echo ($data['prod_amout']) ; ?>" size="45">
    </td>
</tr>

<tr>
  <td colspan="2" align="center"> 
     <input type="submit" name="btnsummit" value=" &nbsp; บันทึก &nbsp; "> 
  </td>
</tr>
</table>
</form>
</center>
</body>
</html>