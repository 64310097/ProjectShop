<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="stylebox.css">
    <link rel="stylesheet" href="tempstyle.css">
    <title>เพิ่มสินค้า</title>
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



  <h1>การเพิ่มสินค้า</h1>
<form id="form01" name="form01" method="post" action="insert_product02.php">
    <table border="2">
      <tr>
        <td align="right">รหัสสินค้า  &nbsp; </td>
        <td align="left"><label for="txt_prod_id"></label>
          <input type="text" name="txt_prod_id" size="6"></td>
      </tr>
         <tr>
        <td align="right">&nbsp; ชื่อสินค้า &nbsp; </td>
        <td align="left"><label for="txt_prod_name"></label>
          <input type="text" name="txt_prod_name" size="45"></td>
      </tr>
   
        <td align="right">&nbsp; ราคาสินค้า  &nbsp; </td>
        <td align="left"><label for="txt_price"></label>
          <input type="text" name="txt_price" size="45"></td>
      </tr>
      </tr>
   
       <td align="right">&nbsp; จำนวนสินค้า  &nbsp; </td>
        <td align="left"><label for="txt_prod_amout"></label>
         <input type="text" name="txt_prod_amout" size="45"></td>
      </tr>
      <tr>
      <td colspan="2" align="center">
	      <input type="submit" name="btnsummit" value=" &nbsp; บันทึก &nbsp;">
          &nbsp;  &nbsp;
          <input type="reset" name="btmclear" value=" &nbsp; ล้าง &nbsp; ">
	  </td>
      </tr>

    </table>
</body>
</html>