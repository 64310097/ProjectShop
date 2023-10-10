<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel ="stylesheet" href="stylebox.css">
    <link rel="stylesheet" href="tempstyle.css">
    <link rel="stylesheet" href="main.css">
    <title>EDit SHOP</title>
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
            <a href ="#">EDit SHOP</a>
        </div>

    
        <div class="Search">
             <a><input type="text" name="mysearch" placeholder="Search"></a>
        </div>
        <div class="Login">
            <a href ="/Project/FrontHouse/Login.php">Login</a>
        </div>
         
        
        
    </nav>

    <?PHP
    include('connect_db.php') ;
    if(isset($_POST["mysearch"]))
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


    <div class="container">
        <div class="products-con" >


         
            <div class="products-item" >

                <div class="products-img">
                    <img src="https://images.unsplash.com/photo-1458538977777-0549b2370168?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cHJvZHVjdCUyMCUyMHBlcmZ1bWV8ZW58MHx8MHx8&auto=format&fit=crop&w=500&q=60" alt="">
                </div>
                <div class="products-detail">
                <?PHP   
                         $data = mysqli_fetch_assoc($record)     ?>
                         &nbsp; <?PHP echo $data['prod_name']; ?> &nbsp;
                </div>
                <div class="products-price">
                    <div class="products-left">
                    <?PHP 
                            $sql2 ="Select prod_name,prod_price ";
                            $sql2=$sql2." from product ";
                            $sql2=$sql2." order by prod_name ";
                            $record2 = mysqli_query($conn,$sql2) ;  
                            $data = mysqli_fetch_assoc($record2)    ?>
                                &nbsp;฿<?PHP echo $data['prod_price']; ?> &nbsp;
                       
                    </div>
                    <div class="products-right">
                            <span>ขายแล้ว 2 ชิ้น</span>
                                
                    </div>

                  
                </div>
                


                
            </div>
            <div class="products-item">
                <div class="products-img">
                    <img src="https://plus.unsplash.com/premium_photo-1679865289918-b21aae5a9559?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8N3x8aGVhZCUyMHBob25lfGVufDB8fDB8fA%3D%3D&auto=format&fit=crop&w=500&q=60" alt="">
                </div>
                <div class="products-detail">
                <?PHP   
                         $data = mysqli_fetch_assoc($record)     ?>
                         &nbsp; <?PHP echo $data['prod_name']; ?> &nbsp;
                </div>
                <div class="products-price">
                    <div class="products-left">
                    <?PHP 
                               $data = mysqli_fetch_assoc($record2)    ?>
                                &nbsp;฿<?PHP echo $data['prod_price']; ?> &nbsp;
                       
                    </div>
                    <div class="products-right">
                             
                    <span>ขายแล้ว 10 ชิ้น</span>    
                    </div>

                </div>
              

            </div> 
            <div class="products-item">
                <div class="products-img">
                    <img src="https://images.unsplash.com/photo-1527864550417-7fd91fc51a46?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fG1vdXNlJTIwcHJvZHVjdHxlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60" alt="">
                </div>
                <div class="products-detail">
                        <?PHP   
                         $data = mysqli_fetch_assoc($record)     ?>
                         &nbsp; <?PHP echo $data['prod_name']; ?> &nbsp;
                </div>
                <div class="products-price">
                            <div class="products-left">
                                 <?PHP 
                
                                       

                                        $data = mysqli_fetch_assoc($record2)    
                                ?>
                                        &nbsp;฿<?PHP echo $data['prod_price']; ?> &nbsp;
                       
                            </div>

                            <div class="products-right">
                            <span>ขายแล้ว 2 ชิ้น</span>
                                
                             </div>

                </div>
              
                

            </div>

        </div>

    </div>

    <script src="script.js"></script>
</body>
</html>