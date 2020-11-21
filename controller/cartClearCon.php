<?php   
        session_start();
          unset($_SESSION['cart']);
          unset($_SESSION['total']);
          unset($_SESSION['order_id']);
          header('Location:../views/cart.php?Pid='.$_GET['Pid'].'&name='.$_GET['name'].'&address='.$_GET['address']);
        
?>