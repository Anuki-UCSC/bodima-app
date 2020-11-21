<?php 

class orderModel{

    public static function food_request($Fpid,$email,$address,$first_name,$last_name,$product_name,$quantity,$order_id,$total,$connection)
    {
        $query="INSERT INTO food_request (F_post_id,email,address,first_name,last_name,is_accepted,product_name,quantity,total,order_id) 
        VALUES('{$Fpid}','{$email}','{$address}','{$first_name}','{$last_name}',0,'{$product_name}','{$quantity}','{$total}','{$order_id}') LIMIT 1";
         $result=mysqli_query($connection,$query);
    }
    public static function accept($order_id,$connection)
    {
       $query="UPDATE food_request SET is_accepted=1 WHERE order_id=$order_id ";
       $result_set=mysqli_query($connection,$query);
       return $result_set;
    }

    public static function requestOrderDelete($connection,$order_id){
        $query="Update food_request SET is_accepted=2 WHERE order_id='{$order_id}'";
        $result=mysqli_query($connection,$query);
        return $result;
    }
   
    public static function paymentOrder($connection,$order_id){
        $query="Update food_request SET is_accepted=3 WHERE order_id='{$order_id}'";
        $result=mysqli_query($connection,$query);
        return $result;
    }
    public static function requestOrderConfirm($connection,$order_id){
        $query="Update food_request SET is_accepted=4 WHERE order_id='{$order_id}'";
        $result=mysqli_query($connection,$query);
        return $result;
    }
    public static function getPostFoodSupplier($connection,$FSid){
        $query="SELECT F_post_id FROM food_post WHERE FSid=$FSid";
        $result=mysqli_query($connection,$query);
        return $result;
    }
    public static function getOrderIDFoodSupplier($connection,$F_post_id){
        $query="SELECT DISTINCT order_id FROM food_request WHERE F_post_id=$F_post_id AND is_accepted=0";
        $result=mysqli_query($connection,$query);
        return $result;
    }

    public static function getOrderFoodSupplier($connection,$order_id){
        $query="SELECT * FROM food_request WHERE order_id=$order_id AND is_accepted=0";
        $result=mysqli_query($connection,$query);
        return $result;
    }
}