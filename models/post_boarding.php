<?php

class boarding{

    public static function postBoarding($id,$Hnumber,$lane,$city,$district,$description,$image_name,$individual,$gender,$Pcount,$CPperson,$Keymoney,$Lifespan,$Aamount,$upload_to,$connection){

        //$hh=$Hnumber;
        //echo $hh;
        //echo $individual;
        //echo "dssssss";
        
        $query="INSERT INTO boarding_post (B_post_id,BOid,category,girlsBoys,person_count,cost_per_person,rating,image,house_num,lane,city,district,description,location,lifespan,post_amount,review,keymoney)
        VALUES(null,'{$id}','{$individual}','{$gender}','{$Pcount}','{$CPperson}',' ','{$upload_to}{$image_name}','{$Hnumber}','{$lane}','{$city}','{$district}','{$description}','fff','{$Lifespan}','{$Aamount}','ishan','{$Keymoney}')";
        $result=mysqli_query($connection,$query);

        if($result){
            echo "Sucessfull";
        }else{
            echo "Unsucessfull";
        }
    }
}

?>