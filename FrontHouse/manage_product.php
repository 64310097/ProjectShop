<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylebox.css">
    <link rel="stylesheet" href="tempstyle.css">
    <link rel="stylesheet" href="managestyle.css">

  
    <title>Management</title>

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






<table border="0">
<tr>
    <form id="form1" name="form1" method="post" action='./manage_product.php'>
    <div class="row uniform">
    <div class="6u 12u$(xsmall)">
    <td> <label> &nbsp; รหัส </label>      </td>
    <td> <input type="text"   name="s_prod_id">  </td>
    <td> <label> &nbsp;  ชื่อสินค้า    &nbsp;  </label> </td>
    <td> <input type="text"   name="s_prod_name">   </td>
    <td> <input type="submit" name="btnSearch" value="ค้นหา">  </td>
    <td> <input type="reset"  name="btnreset" value="ล้าง">  </td>
    </form>
    
	  <form id="form2" name="form2" method="post" action="insert_product01.php">   
         <td> <input type="submit" name="btnAdd" value="เพิ่มสินค้า">  </td> 
    </form>
    </div>
    </div>
</tr>
</table>

<?PHP
  include('connect_db.php') ;
  if(isset($_POST["btnSearch"]))
  {
    $q_prod_id =$_REQUEST["s_prod_id"];
    $q_prod_name=$_REQUEST["s_prod_name"];  
    
	if ($q_prod_id == "")	$q_prod_id = "%" ;
    if ($q_prod_name == "")	$q_prod_name = "%" ;

	$sql=" Select  * "; 
    $sql=$sql." from product ";
    $sql=$sql." where prod_id  like  "."\"".$q_prod_id."\"  "  ; 
    $sql=$sql." and  prod_name like  "."\"".$q_prod_name."\"  "  ; 
    $sql=$sql." order by prod_id ";
  }
  else 
  {
	$sql=" Select  *  "; 
    $sql=$sql." from product ";
    $sql=$sql." order by prod_name ";
  }
  $record = mysqli_query($conn,$sql) ;  
 
 ?>
    <div style="overflow-x:auto;">
        <table>
        <tr>
            <td>&nbsp;รหัสสินค้า&nbsp;</td>
            <td>&nbsp;ชื่อสินค้า&nbsp;</td>
            <td>&nbsp;ราคาสินค้า&nbsp;</td>
            <td>&nbsp;จำนวนสินค้า&nbsp;</td>
            <td>&nbsp;แก้ไขข้อมูล&nbsp;</td>
        </tr>

 
        <?PHP   
        while( $data = mysqli_fetch_assoc($record) ) {   ?>
        <tr>
                <td align="center"> &nbsp; <?PHP echo $data['prod_id']; ?> &nbsp; </td>    
                <td align="center"> &nbsp; <?PHP echo $data['prod_name']; ?> &nbsp; </td>    
                <td align="center"> &nbsp; <?PHP echo $data['prod_price']; ?> &nbsp; </td>    
                <td align="center"> &nbsp; <?PHP echo $data['prod_amout']; ?> &nbsp; </td>
                <td align="center"> &nbsp; 
                 <a href="./update_product01.php?prod_id=<?PHP echo $data['prod_id']; ?>">     
                 <img src="https://cdn-icons-png.flaticon.com/512/1827/1827951.png" width="15px" high="15px" ></a> </td> 
        </tr>
        <?PHP } ?>
        </table>
    </div>
</div>

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</body>
</html>