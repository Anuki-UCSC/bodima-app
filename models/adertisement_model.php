<?php

class advertisement_model{

    public static function get_B_post_details_byId($B_post_id,$connection)
    {
        $query="SELECT * FROM boarding_post WHERE B_post_id = $B_post_id ";
        // echo $query;
        return mysqli_query($connection,$query);
    }

    public static function get_B_post_owner_byId($BOid,$connection)
    {
        $query="SELECT BOid,email,first_name,level,last_name FROM boardings_owner WHERE BOid = $BOid ";
        // echo $query;
        // die();
        return mysqli_query($connection,$query);
    }


}
?>