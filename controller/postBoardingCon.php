<?php
    require_once ('../config/database.php');
    require_once ('../models/post_boarding.php');
    session_start();
    print_r($_POST['Aamount']);

?>

<?php


if(isset($_POST['submit']))
{
$errors=array(); //create empty array

    $Hnumber=$_POST['Hnumber'];
    if(empty($_POST['Hnumber']) || strlen(trim($_POST['Hnumber']))<1){
        $errors[]='*Home Number is required';
    }
    
    $lane=$_POST['lane'];
    if(empty($_POST['lane']) || strlen(trim($_POST['lane']))<1){
        $errors[]='*Lane is required';
    }
  
    $city=$_POST['city'];
    if(empty($_POST['city']) || strlen(trim($_POST['city']))<1){
        $errors[]='*City is required';
    }

    
    $district=$_POST['district'];
    if(empty($_POST['district']) || strlen(trim($_POST['district']))<1){
        $errors[]='*District is required';
    }

   // $location=$_POST['location'];
    //if(empty($_POST['location']) || strlen(trim($_POST['location']))<1){
      //  $errors[]='*location is required';
    //}

    
    if(!isset($_POST['individual'])){
        $errors[]='*No Avertisement Type were checked';
    }

    if(!isset($_POST['gender'])){
        $errors[]='*No Gender were checked';
    }
    
    $Pcount=$_POST['Pcount'];
    //print_r($_POST['Pcount']);
    
    if(empty($Pcount) || strlen(trim($Pcount))<1){
        $errors[]='*Person Count is required';
    }else if($Pcount<=1){
        $errors[]='*Person Count must be greater than or equal 1';
    }else if($Pcount>=30){
        $errors[]='*Person Count must be less than or equal 30';
    }

    $CPperson=$_POST['CPperson'];
    if(empty($_POST['CPperson']) || strlen(trim($_POST['CPperson']))<1){
        $errors[]='*Cost Per Person For Month is required';
    }else if(!is_numeric($CPperson)) {
        $errors[]='*Cost Per Person Data entered was not numeric';
    }

    $Keymoney=$_POST['Keymoney'];
    if(empty($_POST['Keymoney']) || strlen(trim($_POST['Keymoney']))<1){
        $errors[]='*Keymoney is required';
    }else if(!is_numeric($Keymoney)) {
        $errors[]='*Keymoney Data entered was not numeric';
    }


    $Lifespan=$_POST['Lifespan'];
    //print_r($_POST['Pcount']);
    
    if(empty($Lifespan) || strlen(trim($Lifespan))<1){
        $errors[]='*Lifespan is required';
    }else if($Lifespan<30){
        $errors[]='*Life must be greater than or equal 30';
    } 


   
   


    if(empty($errors)){

        $Hnumber=$_POST['Hnumber'];
        $lane=$_POST['lane'];
        $city=$_POST['city'];
        $district=$_POST['district'];
        //$location=$_POST['location'];
        $description=$_POST['description'];
    
        $image_name=$_FILES['BCimage']['name'];
        $image_type=$_FILES['BCimage']['type'];
        $image_size=$_FILES['BCimage']['size'];
        $temp_name=$_FILES['BCimage']['tmp_name'];
    
        $upload_to="../resource/Images/uploaded_boarding/";
    
        move_uploaded_file($temp_name, $upload_to . $image_name);
    
        $individual=$_POST['individual'];
        $gender=$_POST['gender'];
        $Pcount=$_POST['Pcount'];
        $CPperson=$_POST['CPperson'];
        $Keymoney=$_POST['Keymoney'];
        $Lifespan=$_POST['Lifespan'];
        //$Aamount=$_SESSION['result'];
        $Aamount=$_POST['Aamount'];
    
        //echo $Hnumber;
        $id=$_SESSION['BOid'];
        echo $upload_to.$image_name;
        boarding::postBoarding($id,$Hnumber,$lane,$city,$district,$description,$image_name,$individual,$gender,$Pcount,$CPperson,$Keymoney,$Lifespan,$Aamount,$upload_to,$connection);
        header('Location:../views/myads_boardingowner.php');

    }else{
        header('Location:../views/postBoarding.php?'.http_build_query(array('param'=>$errors)));
    }
    

    
}
?>