<?php   require_once ('../config/database.php');
        require_once ('../models/reg_user.php');
        session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/footer.css">
    <link rel="stylesheet" href="../resource/css/all.css">
    <link rel="stylesheet" href="../resource/css/card1.css">
</head>
<body>
  <?php include 'nav.php' ?>
  <div class="cart-wrap">
<h1><?php echo $_GET['name']; ?></h1>
  <h3><?php echo $_GET['address']; ?></h3>
  <h3>For breakfast,lunch and dinner delivery to your home.</h3>
  <div class="rate"><h4><i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star"></i> <i class="fas fa-star-half"></i></h4></div>
<img src="../resource/img/resturent.jpg" alt="">
  <div class="cart-icon">
    <?php 
   
      if(isset($_SESSION['cart']))
      {
        $count=count($_SESSION['cart']);
        echo '<a href="cartItem.php?Pid='.$_GET["Pid"].'&name='.$_GET["name"].'&address='.$_GET["address"].'"><i class="fas fa-shopping-cart"></i> Cart <span id="cart-count" class="count">'.$count.'</span></a>';
       
      }else{
        echo '<a href="#"><i class="fas fa-shopping-cart"></i> Cart <span id="cart-count" class="count">0</span></a>';
      }
    ?>
   </div>
</div>
<?php 

if(isset($_GET['Pid']))
{
  $fpid=$_GET['Pid'];
?>
  <div class="catogory">
    <div class="cato-header">
        <img src="../resource/img/catogory1.png" alt="">
        <h1>Get your Breakfast</h1>
    </div>
    <div class="cart-wrapper">
    <?php
      $result =reg_user::getProductsByPostid($fpid,$connection); 
      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result))
        {
          if($row['breakfast']==1)
          {?>
        <div class="cartbox">  
             <form action="../controller/cartCon.php?action=add&id=<?php echo $row['id']; ?>" method="post">         
                 <div class="card"> 
                     <img src="<?php echo $row['image'];?>" alt="">
                     <h3><?php echo $row['product_name'];?><span class="price"> Rs. <?php echo $row['price'];?></span></h3>
                     
                     <p>Some text about the item </p>
                     <input type="hidden" name="quantity" value="1">
                     <input type="hidden" name="item_name" value="<?php echo $row['product_name'];?> ">
                     <input style="color: green;" type="hidden" name="price" value="<?php echo $row['price'];?>">
                     <!-- <input type="hidden" name="FSid" value="<?php echo $row['FSid'];?>"> -->
                     <input type="hidden" name="Pid" value="<?php echo $fpid;?>">
                     <input type="hidden" name="name" value="<?php echo $_GET['name'];?>">
                     <input type="hidden" name="address" value="<?php echo $_GET['address'];?>">
                     <p><button class="cart-num block1" name="add"><i style="padding-right:5px;" class="fa fa-cart-plus"></i>Add to Order</button></p>
                 </div>
               </form>
         </div>
        <?php  }

        }
      }
    ?>
    </div>
  </div>
  <div class="catogory">
  <div class="cato-header">
        <img src="../resource/img/catogory.png" alt="">
        <h1>Get your Lunch</h1>
    </div>
    <div class="cart-wrapper">
    <?php
      $result =reg_user::getProductsByPostid($fpid,$connection); 
      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result))
        {
          if($row['lunch']==1)
          {?>
        <div class="cartbox">  
             <form action="../controller/cartCon.php?action=add&id=<?php echo $row['id']; ?>" method="post">         
                 <div class="card"> 
                     <img src="<?php echo $row['image'];?>" alt="">
                     <h3><?php echo $row['product_name'];?><span class="price"> Rs. <?php echo $row['price'];?></span></h3>
                     
                     <p>Some text about the item </p>
                     <input type="hidden" name="quantity" value="1">
                     <input type="hidden" name="item_name" value="<?php echo $row['product_name'];?> ">
                     <input style="color: green;" type="hidden" name="price" value="<?php echo $row['price'];?>">
                     <!-- <input type="hidden" name="FSid" value="<?php echo $row['FSid'];?>"> -->
                     <input type="hidden" name="Pid" value="<?php echo $fpid;?>">
                     <input type="hidden" name="name" value="<?php echo $_GET['name'];?>">
                     <input type="hidden" name="address" value="<?php echo $_GET['address'];?>">
                     <p><button class="cart-num block2" name="add"><i style="padding-right:5px;" class="fa fa-cart-plus"></i>Add to Order</button></p>
                 </div>
               </form>
         </div>
        <?php  }

        }
      }
    ?>
    </div>
  </div>
  <div class="catogory">
  <div class="cato-header">
        <img src="../resource/img/catogory2.png" alt="">
        <h1>Get your Dinner</h1>
    </div>
    <div class="cart-wrapper">
    <?php
      $result =reg_user::getProductsByPostid($fpid,$connection); 
      if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result))
        {
          if($row['dinner']==1)
          {?>
       <div class="cartbox">  
             <form action="../controller/cartCon.php?action=add&id=<?php echo $row['id']; ?>" method="post">         
                 <div class="card"> 
                     <img src="<?php echo $row['image'];?>" alt="">
                     <h3><?php echo $row['product_name'];?><span class="price"> Rs. <?php echo $row['price'];?></span></h3>
                     
                     <p>Some text about the item </p>
                     <input type="hidden" name="quantity" value="1">
                     <input type="hidden" name="item_name" value="<?php echo $row['product_name'];?> ">
                     <input style="color: green;" type="hidden" name="price" value="<?php echo $row['price'];?>">
                     <!-- <input type="hidden" name="FSid" value="<?php echo $row['FSid'];?>"> -->
                     <input type="hidden" name="Pid" value="<?php echo $fpid;?>">
                     <input type="hidden" name="name" value="<?php echo $_GET['name'];?>">
                     <input type="hidden" name="address" value="<?php echo $_GET['address'];?>">
                     <p><button class="cart-num block3" name="add"><i style="padding-right:5px;" class="fa fa-cart-plus"></i>Add to Order</button></p>
                 </div>
               </form>
         </div>
        <?php  }

        }
      }
    ?>
    </div>
  </div>

    <?php }
    ?>


<?php include 'footer.php'?>
<script src="../resource/js/cart.js"></script>
<script src="../resource/js/home1.js"></script>
<script src="../resource/js/jquery.js"></script>
</body>
</html> 