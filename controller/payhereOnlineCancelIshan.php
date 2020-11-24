<?php 
  require_once ('../config/database.php');
        require_once ('../models/reg_userIshan.php');
     
        session_start(); 

 ?>

 <?php 
      reg_userIshan::payhereCanReq($connection)


  ?>