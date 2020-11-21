<?php

class foodSupplierPost{

    public static function foodPost($fid,$resName,$address,$location,$description,$image_name,$type,$otDeadline,$Lifespan,$Aamount,$upload_to,$connection){
        //$hh=$resName;
        //echo $hh;
        //echo $individual;
        //echo "dssssss";
        
        $query="INSERT INTO food_post (F_post_id,FSid,ad_title,description,address,location,type,rating,orderingtimedeadline,lifespan,post_amount,image)
        VALUES(null,'{$fid}','{$resName}','{$description}','{$address}','{$location}','{$type}',1,'{$otDeadline}','{$Lifespan}','{$Aamount}','{$upload_to}{$image_name}')";
        $result=mysqli_query($connection,$query);

        if($result){
            echo "Sucessfull";
        }else{
            echo "Unsucessfull";
        }
    }





    public static function addIteam($fid,$foodPostId,$pName,$image_name,$upload_to,$breakfirst,$lunch,$dinner,$price,$connection){
        //$hh=$resName;
        //echo $hh;
        //echo $individual;
        //echo "dssssss";
        
        $query="INSERT INTO product (id,FSid,F_post_id,product_name,image,price,breakfast,lunch,dinner)
        VALUES(null,'{$fid}','{$foodPostId}','{$pName}','{$upload_to}{$image_name}','{$price}','{$breakfirst}','{$lunch}','{$dinner}')";
        $result=mysqli_query($connection,$query);
        
        if($result){
            echo "Sucessfull";
        }else{
            echo "Unsucessfull";
        }
    }


    public static function getFoodPostId($FSid,$connection)
    {
        $query="SELECT F_post_id FROM food_post 
                WHERE FSid=$FSid
                ORDER BY F_post_id desc LIMIT 1;";


       $result= mysqli_query($connection,$query);

        if($result){
            echo "Sucessfull";
        }else{
            echo "Unsucessfull";
        }

        return $result;
    }
}

?>