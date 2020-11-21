<?php   require_once ('../config/database.php');
        require_once ('../models/reg_user.php');
        session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../resource/css/card1.css">
    <link rel="stylesheet" href="../resource/css/card.css">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/footer.css">
    <link rel="stylesheet" href="../resource/css/all.css">
</head>
<body>
<?php include 'nav.php' ?>
<?php 
   if(isset($_SESSION['order_id']))
   {
    //    echo $_SESSION['order_id'];
    $order_records=reg_user::getOrder($connection,$_SESSION['order_id']);
    // print_r($order_records);
    // $order_record=mysqli_fetch_assoc($order_records);
    // if($order_record['is_accepted']==1){
    //     $_SESSION['isdisable']=0;
    // }
   }
?>                         <!-- header-bar -->
 <div class="cart-icon">
    <?php 
   
      if(isset($_SESSION['cart']))
      {
        $count=count($_SESSION['cart']);
        echo '<a href="cartItem.php"><i class="fas fa-shopping-cart"></i> Cart <span id="cart-count" class="count">'.$count.'</span></a>
        ';
      }
    ?>
   </div>

                                <!-- product-cart and product order deatils -->
 <div class="grid-item">
 <div class="mycart">
     <div class="mycart-header">
    <!-- <?php echo '<a href="cart.php?Pid='.$_GET["Pid"].'&name='.$_GET["name"].'&address='.$_GET["address"].'"><i class="fas fa-chevron-circle-left fa-2x"></i></a>'; ?> -->
    <h5>My Cart</h5>
     </div>
<?php 
$total=0;
 if(isset($_SESSION['cart']))
 {
    $result=reg_user::getProduct($connection);
    $product_id=array_column($_SESSION['cart'],'product_id'); //create array of product_ids
    $amount=0;
         while($row=mysqli_fetch_assoc($result))
         {
             foreach($product_id as $id)
             {
                 if($row['id']==$id)
                 {
           ?>
                   <form action="../controller/cartCon.php?action=remove&id=<?php echo $row['id'];?>" method="post">
                   
                     <div class="item-wrap">
                         <div class="cart-item">
                             <img src="<?php echo $row['image']?>" alt="">
                                 <div class="product-details">
                                     <h4><?php echo $row['product_name'];?></h4>
                                     <p><small>Lorem ipsum dolor sit amet .</small></p>
                                     <h3><?php echo $row['price'];?></h3>
                
                                     <div class="item-count">
                                         
                                        <button class="btn4" type="button" onclick="quan.decrease('<?php echo $row['id'];?>')" >-</button>
                                            <p><h4 ><a id="<?php echo $row['id'];?>">1</a></h4></p>
                                        <button  class="btn4" type="button" onclick="quan.increse('<?php echo $row['id'];?>')" >+</button>
                                        <button class="btn2" name="remove" type="submit">cancel</button>

                                     </div>
                                     
                                 </div>
                            
                         </div>
                     </div>
                   
                   </form>
           <?php
           $total=$total+$row['price'];
                 }
             }
         }
 }
      ?>
 </div> 
                                         <!-- order price details -->

      <?php $count=count($_SESSION['cart']); 
            $_SESSION['total']=$total; 
      ?>
     <div class="payment">
     <div class="price-details">
        <div class="total">
            <h3>Price details</h3>
        </div>
        <div class="details">
            <h5>price (<?php echo $count ?>) item<span class="left-item">Rs <?php echo $total; ?></span></h5>
            <h5>delivery Charges <span style="color: green;" class="left-item">Free</span></h5>
            <h4>Amount payable<span class="left-item1">Rs <?php echo $total; ?></span> </h4>
            <form action="../controller/orderCon.php" method="post">
                <h4>Enter delivery address :</h4>
                <?php if(isset($_GET['errorAddress'])) echo "<h5 style='color:red'>*Please enter the delivery address</h5>"; ?>
                <input type="hidden" name="Pid" value="<?php echo $_GET['Pid'];?>">
                <input type="text" placeholder="ex:310/delgasduwa/dodanduwa" name="address"  ?>
                <h4>Enter phone number :</h4>
                <?php if(isset($_GET['errorPhone'])) echo "<h5 style='color:red'>*Please enter the delivery address</h5>"; ?>
                <input type="text" placeholder="ex:07x xxx xxx xxxx" name="phone"  ?>
                <button name="submit" type="submit" id="request" class="btn6 request">Request </button>
            </form>
           
        </div>
     </div>
     </div>
     
    </div>
    <?php include 'footer.php'?>
        <script src="../resource/js/cart1.js"></script>
        <script src="../resource/js/home1.js"></script>
<script src="../resource/js/jquery.js"></script>
</body>
</html> 