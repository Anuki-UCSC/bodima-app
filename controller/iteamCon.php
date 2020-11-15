<?php
    
    require_once ('../config/database.php');
    require_once ('../models/food_post.php');
    

   

?>

<?php

$submit=$_POST['submit'];

if(isset($_POST['submit']))
{

    $errors=array(); //create empty array

    $pName=$_POST['pName'];
    if(empty($_POST['pName']) || strlen(trim($_POST['pName']))<1){
        $errors[]='*Product Name Name is required';
    }

    $price=$_POST['price'];
    if(empty($_POST['price']) || strlen(trim($_POST['price']))<1){
        $errors[]='*Price is required';
    }else if(!is_numeric($price)) {
        $errors[]='*Price Data entered was not numeric';
    }

    if(isset($_POST['breakfirst'])){
        $breakfirst=1; 
    }else{
        $breakfirst=0; 
    }

    if(isset($_POST['lunch'])){
        $lunch=1; 
    }else{
        $lunch=0; 
    }

    if(isset($_POST['dinner'])){
        $dinner=1; 
    }else{
        $dinner=0; 
    }


    if($submit=='save'){
    
        $pName=$_POST['pName'];
                

        $image_name=$_FILES['pimage']['name'];
        $image_type=$_FILES['pimage']['type'];
        $image_size=$_FILES['pimage']['size'];
        $temp_name=$_FILES['pimage']['tmp_name'];

        $upload_to='../resource/Images/uploaded_foodpost/';

        move_uploaded_file($temp_name, $upload_to . $image_name);

        $price=$_POST['price'];
        //$breakfirst=$_POST['breakfirst'];
            
                
        //$lunch=$_POST['lunch'];
                
        //$dinner=$_POST['dinner'];

        //echo $Hnumber;

        foodSupplierPost::addIteam($pName,$image_name,$breakfirst,$lunch,$dinner,$price,$connection);

        header('Location:../views/myads_foodsupplier.php');
        // print_r($_POST);

        // print_r($_FILES);


    }elseif($submit=='Add Iteam')
    {


                        
        $pName=$_POST['pName'];
                

        $image_name=$_FILES['pimage']['name'];
        $image_type=$_FILES['pimage']['type'];
        $image_size=$_FILES['pimage']['size'];
        $temp_name=$_FILES['pimage']['tmp_name'];

        $upload_to='../img/';

        move_uploaded_file($temp_name, $upload_to . $image_name);

        $price=$_POST['price'];
        //$breakfirst=$_POST['breakfirst'];
            
                
        //$lunch=$_POST['lunch'];
                
        //$dinner=$_POST['dinner'];

        //echo $Hnumber;

        foodSupplierPost::addIteam($pName,$image_name,$breakfirst,$lunch,$dinner,$price,$connection);



        header('Location:../views/iteam.php');

        print_r($_POST);

        print_r($_FILES);

    }
                
           
}
?>