<?php   require_once ('../config/database.php');
        require_once ('../models/reg_userIshan.php');
      //  require_once ('../config/email.php');
        session_start(); 
?>
<?php

// check the click submit and validation form
if(isset($_POST['submit']))
{
 $errors=array();            //create empty array

 



        if(!isset($_POST['university_name']) || strlen(trim($_POST['university_name']))<1)   
        {
            $errors[]='*University Name is required';
        }
        // elseif(!preg_match(("/^([a-zA-Z']+)$/"), $university_name)){ // preg_match -> check regular expression
        //         $errors[]='*Invalid University name ';
        // }


        if(!isset($_POST['gender']))   
        {
            $errors[]='*Your Gender is required';
        }
         if(!isset($_POST['pay']))   
        {
            $errors[]='*Payment Method is required';
        }
        //  elseif(!preg_match(("/^([a-zA-Z']+)$/"), $gender)){ // preg_match -> check regular expression
        //         $errors[]='*Invalid first name ';
        // }
        if(!isset($_POST['telephone']) || strlen(trim($_POST['telephone']))<1)
                {
                 $errors[]='*Telephone Number is required';
                }
        if(!isset($_POST['p_name']) || strlen(trim($_POST['p_name']))<1)
        {
                $errors[]='*Parent Name is required';
        }
        //  elseif(!preg_match(("/^([a-zA-Z']+)$/"), $p_name)){ // preg_match -> check regular expression
        //         $errors[]='*Invalid parent name ';
        // }
        if(!isset($_POST['p_telephone']) || strlen(trim($_POST['p_telephone']))<1)
                {
                 $errors[]='*Parent Telephone Number is required';
                }       


         // if(!isset($_POST['nicImg']) )
         //         {
         //        $errors[]='*Your NIC Image is required.Please Uploaded.';
         //        }
       
       
        

      
        

        if(empty($errors))
        {
            $university_name=mysqli_real_escape_string($connection,$_POST['university_name']);

             $gender=mysqli_real_escape_string($connection,$_POST['gender']);

             $telephone=mysqli_real_escape_string($connection,$_POST['telephone']);

             $p_name=mysqli_real_escape_string($connection,$_POST['p_name']);
             $p_telephone=mysqli_real_escape_string($connection,$_POST['p_telephone']);
             $payment_method=mysqli_real_escape_string($connection,$_POST['pay']);

            ///upload image file

             $file_name=$_FILES['nicImg']['name'];
             $file_type=$_FILES['nicImg']['type'];
             $file_size=$_FILES['nicImg']['size'];
             $temp_name=$_FILES['nicImg']['tmp_name'];

             $upload_to="../resource/nicImage/";
             move_uploaded_file($temp_name,$upload_to . $file_name);

             $st_email=$_SESSION['email'];


             $result=reg_userIshan::selectStToBoarder($st_email,$connection);

            $user=mysqli_fetch_assoc($result);

            $password=$user['password'];
            $token=$user['token'];
            $first_name=$user['first_name'];
            $last_name=$user['last_name'];
            $level="boarder";
            $nic=$user['nic'];
            $keymoney=$user['keymoney'];
            $BOid=$user['BOid'];
            $B_post_id=$user['B_post_id'];


            ////payhere variable








            reg_userIshan::insertBorder($connection,$st_email,$password,$token,$first_name,$last_name,$level,$nic,$file_name,$upload_to,$university_name,$gender,$telephone);



              $data=reg_userIshan::selectBorderid($connection,$st_email);

             
             


            reg_userIshan::insertBorderparent($connection,$data,$p_name,$p_telephone);

            reg_userIshan::insertConfirmRent($connection,$data,$BOid,$B_post_id,$keymoney,$payment_method);









                // $user_email=reg_user::checkUser($_POST['email'],$connection);
                // $email_arr=mysqli_fetch_assoc($user_email);  
                // if(empty($email_arr))
                // {
                //   $_SESSION['email']=$_POST['email'];
                //   $_SESSION['first_name']=$_POST['first_name'];
                //   $_SESSION['last_name']=$_POST['last_name'];
                //   $_SESSION['nic']=$_POST['nic'];
                //   $_SESSION['level']=$_POST['level'];

                if($_POST['pay']=="hand")
                {
                        header('Location:../views/rentedPayNotIshan.php');
                }
                elseif($_POST['pay']=="online")
                {
                        header('Location:../views/payKeyMIshan.php?B_post_id='.$B_post_id);
                }
              
                }
                else{
                        
                        header('Location:../views/payKeyAndRegBIshan.php?'.http_build_query(array('param'=>$errors)));
                }
                
        }
        else
        {
                header('Location:../views/payKeyAndRegBIshan.php?'.http_build_query(array('param'=>$errors)));
        }








?>
