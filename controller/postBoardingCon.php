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
        $errors['err1']='*Home Number is required';
    }
    
    $lane=$_POST['lane'];
    if(empty($_POST['lane']) || strlen(trim($_POST['lane']))<1){
        $errors['err2']='*Lane is required';
    }
  
    $city=$_POST['city'];
    if(empty($_POST['city']) || strlen(trim($_POST['city']))<1){
        $errors['err3']='*City is required';
    }

    
    $district=$_POST['district'];
    if(empty($_POST['district']) || strlen(trim($_POST['district']))<1){
        $errors['err4']='*District is required';
    }

   // $location=$_POST['location'];
    //if(empty($_POST['location']) || strlen(trim($_POST['location']))<1){
      //  $errors[]='*location is required';
    //}

    
    if(!isset($_POST['individual'])){
        $errors['err5']='*Select one option';
    }

    if(!isset($_POST['gender'])){
        $errors['err6']='*Select one option';
    }
    
    $Pcount=$_POST['Pcount'];
    //print_r($_POST['Pcount']);
    
    if(empty($Pcount) || strlen(trim($Pcount))<1){
        $errors['err7']='*Person Count is required';
    }else if($Pcount<=1){
        $errors['err8']='*Should be greater than  1';
    }else if($Pcount>=30){
        $errors['err9']='*Should be less than 30';
    }

    $CPperson=$_POST['CPperson'];
    if(empty($_POST['CPperson']) || strlen(trim($_POST['CPperson']))<1){
        $errors['err10']='*Cost Per Person For Month is required';
    }else if(!is_numeric($CPperson)) {
        $errors['err11']='*Should be an integer';
    }

    $Keymoney=$_POST['Keymoney'];
    if(empty($_POST['Keymoney']) || strlen(trim($_POST['Keymoney']))<1){
        $errors['err12']='*Keymoney is required';
    }else if(!is_numeric($Keymoney)) {
        $errors['err13']='*Should be an integer';
    }


    $Lifespan=$_POST['Lifespan'];
    //print_r($_POST['Pcount']);
    
    if(empty($Lifespan) || strlen(trim($Lifespan))<1){
        $errors['err14']='*Lifespan is required';
    }else if($Lifespan<30){
        $errors['err15']='*Should be greater than 30 days';
    } 


   
   


    if(empty($errors)){

        $Hnumber=$_POST['Hnumber'];
        $lane=$_POST['lane'];
        $city=$_POST['city'];
        $district=$_POST['district'];
        //$location=$_POST['location'];
        $description=$_POST['description'];
    
        $image_name=$_FILES['BCimage']['name'];
        if(null==trim($image_name)){
            echo "null";
            $image_name="defaultbp1.jpg";
        }else{
            echo " have value";
        }
        
        $image_type=$_FILES['BCimage']['type'];
        $image_size=$_FILES['BCimage']['size'];
        $temp_name=$_FILES['BCimage']['tmp_name'];
        print_r($_FILES);
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