<?php   require_once ('../config/database.php');
        require_once ('../models/profile_model.php');
        session_start(); 
?>

<?php


// check the click submit and validation form
if(isset($_POST['editprofile_btn'])){

    $errors=array(); 

    if(!isset($_POST['first_name']) || strlen(trim($_POST['first_name']))<1)   //check if the username and password has been entered
                {
                $errors[]='your first name field is empty!';
                } 
            else{
                $first_name=$_POST['first_name'];
                $_SESSION['first_name']=$first_name;
                $update_firstname=profile_model::update_firstname($_SESSION['level'],$first_name,$_SESSION['email'],$connection);
                }


    if(!isset($_POST['last_name']) || strlen(trim($_POST['last_name']))<1)
                {
                $errors[]='your last name field is empty!';
                }
            else{
                $last_name=$_POST['last_name'];
                $_SESSION['last_name']=$last_name; 
                $update_lastname=profile_model::update_lastname($_SESSION['level'],$last_name,$_SESSION['email'],$connection);
                }

    if(!isset($_POST['address']) || strlen(trim($_POST['address']))<1)
                 {
                $errors[]='your address field is empty!';
               
                }else
                {
                $address=$_POST['address'];
                $_SESSION['address']=$address;
                $update_address=profile_model::update_address($_SESSION['level'],$address,$_SESSION['email'],$connection);
                }
            

      header('Location:../views/profilepage.php');


}




?>