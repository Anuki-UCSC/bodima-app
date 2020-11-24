<?php 

class reg_userIshan{
	//////////request
  public static function getReq($connection,$student_email,$id){
        $query="SELECT * FROM request WHERE student_email='{$student_email}' AND B_post_id=$id";
        $result=mysqli_query($connection,$query);
        return $result;
    }
///insert request
   public static function insertReq($connection,$student_email,$BOid,$B_post_id,$message){
   	$query = "INSERT INTO request (request_id ,student_email,BOid,B_post_id,message,isAccept,date) VALUES (NULL,'{$student_email}',$BOid,$B_post_id, '{$message}',0, CURRENT_TIMESTAMP) ";

   	$result=mysqli_query($connection,$query);
        return $result;

   }
   

   public static function SelectBOtemRequest($BOid,$connection)
     {
       $query="SELECT *  FROM request INNER JOIN boarding_post ON request.B_post_id=boarding_post.B_post_id WHERE request.BOid='{$BOid}' AND request.isAccept=0";
        $result=mysqli_query($connection,$query);
        return $result;
     }
///tempory accept for Boarding Owner
     public static function temAccBORequest($B_post_id,$student_email,$connection)
     {
        $query = "UPDATE request SET isAccept=1 WHERE student_email = '{$student_email}' AND B_post_id=$B_post_id";
        $result_set=mysqli_query($connection,$query);
       
     }
     //Reject for Boarding Owner
      public static function  temRejectBORequest($B_post_id,$student_email,$connection)
     {
         $query = "UPDATE request SET isAccept=2 WHERE student_email = '{$student_email}' AND B_post_id=$B_post_id";;
         $result_set=mysqli_query($connection,$query);
     }
     ///display student details

     /* public static function temBRequest($student_email,$connection)
     {
       $query="SELECT * FROM request  INNER JOIN boarding_post ON request.B_post_id=boarding_post.B_post_id WHERE isAccept=1 AND student_email='{$student_email}'";
           
        $result=$connection->query($query);
        return $result;
     }
*/
     ///display confirm deal for boarding owner
     public static function SelectConBODeal($connection,$BOid)
     {
       $query="SELECT *  FROM request INNER JOIN boarding_post ON request.B_post_id=boarding_post.B_post_id WHERE request.BOid='{$BOid}' AND request.isAccept=3";
           
             $result=$connection->query($query);
             return $result;
     }


     ////accept the boarding deal =boarder
  /*   public static function confirmDealAcc($B_post_id,$student_email,$connection)
    {
        $query="UPDATE request SET  isAccept=3 WHERE B_post_id=$B_post_id AND student_email='{$student_email}' AND isAccept=1";
        $result=mysqli_query($connection,$query);
        return $result;
    }*/

///reject the boarding deal=boarder
    public static function confirmDealRej($B_post_id,$student_email,$connection)
    {
        $query="UPDATE request SET  isAccept=4 WHERE B_post_id=$B_post_id AND student_email='{$student_email}' AND isAccept=1";
        $result=mysqli_query($connection,$query);
        return $result;
    }
        ////boarderge confirm deal eka accept kirima
     public static function  temchooseB($B_post_id,$student_email,$connection)
     {
         $query = "UPDATE request SET isAccept=5 WHERE student_email = '{$student_email}' AND B_post_id=$B_post_id";;
         $result_set=mysqli_query($connection,$query);
     }




     /////////////student requets

     /////select pending details in student page
      public static function selectPendingRequest($student_email,$connection)
     {
       $query="SELECT * FROM request ,boarding_post,boardings_owner WHERE request.B_post_id=boarding_post.B_post_id AND request.BOid=boardings_owner.BOid AND isAccept=0 AND student_email='{$student_email}'";
           
        $result=$connection->query($query);
        return $result;
     }

     /////select new request  details in boarding owner page 
      public static function selectnewRequest($BOid,$connection)
     {
       $query="SELECT * FROM request ,boarding_post,student WHERE request.B_post_id=boarding_post.B_post_id AND request.student_email=student.email AND request.isAccept=0 AND request.BOid='{$BOid}'";
           
        $result=$connection->query($query);
        return $result;
     }

     /////////delete pending request
     ///if isAccept=5,cancel request
     public static function PendingrequestDelete($connection,$request_id){
        $query="Update request SET isAccept=5 WHERE request_id='{$request_id}'";
        $result=mysqli_query($connection,$query);
        return $result;
     }


     /////select pending details in student page
      public static function AcceptRequest($student_email,$connection)
     {
       $query="SELECT * FROM request ,boarding_post,boardings_owner WHERE request.B_post_id=boarding_post.B_post_id AND request.BOid=boardings_owner.BOid AND isAccept=1 AND student_email='{$student_email}'";
           
        $result=$connection->query($query);
        return $result;
     }

      ////student accept the confirm boarding deal==accepted request
     public static function confirmDealAcc($request_id,$connection)
    {
        $query="UPDATE request SET  isAccept=3 WHERE request_id='{$request_id}'";
        $result=mysqli_query($connection,$query);
        return $result;
    }


     ////Boarding owner accept the  boarding  request
     public static function confirmReqAccBO($request_id,$connection)
    {
        $query="UPDATE request SET  isAccept=1 WHERE request_id='{$request_id}' AND isAccept=0";
        $result=mysqli_query($connection,$query);
        return $result;
    }





/////////select data helpful insert boarder table
    public static function selectStToBoarder($st_email,$connection){
        $query="SELECT * FROM boarding_post,student,request WHERE boarding_post.BOid=request.BOid AND student.email=request.student_email AND request.student_email='{$st_email}'";
             $result=mysqli_query($connection,$query);
             return $result;
    }
/////////select confirm rent payment done
    public static function selectRPayD($connection,$student_email){

        $query="SELECT request.request_id,boarding_post.city,boarding_post.image, boarding_post.house_num,boarding_post.lane,boardings_owner.first_name,boardings_owner.last_name,confirm_rent.payment_date,confirm_rent.B_post_id FROM request,boarding_post,boardings_owner,confirm_rent WHERE request.B_post_id=boarding_post.B_post_id AND boarding_post.BOid=boardings_owner.BOid AND boardings_owner.BOid=confirm_rent.BOid AND confirm_rent.is_paid=1 AND confirm_rent.payment_method='online' AND request.student_email='{$student_email}'LIMIT 1";
       $result=mysqli_query($connection,$query);
        return $result;
    }

    
/////////Insert Boarder table

     public static function insertBorder($connection,$st_email,$password,$token,$first_name,$last_name,$level,$nic,$file_name,$upload_to,$university_name,$gender,$telephone){

        $query="INSERT INTO boarder(Bid,email,password,token,first_name,last_name,level,address,location_link,NIC,image,institute,gender,telephone,user_accepted) VALUES(null,'{$st_email}','{$password}','{$token}','{$first_name}','{$last_name}','{$level}','  ','  ', '{$nic}','{$upload_to}{$file_name}','{$university_name}','{$gender}','{$telephone}',0)";

        $result=mysqli_query($connection,$query);


     }



     ///////select boarder details

     public static function selectBorderid($connection,$st_email){
        $query="SELECT * FROM boarder WHERE email='{$st_email}' ";
        $result=mysqli_query($connection,$query);

        $user1=mysqli_fetch_assoc($result);
        $Bid=$user1['Bid'];
        return $Bid;
     }


     ////insert parent table


     public static function insertBorderparent($connection,$Bid,$p_name,$p_telephone){
        $query="INSERT INTO boarderparent(Pid,Bid,parent_name,parent_telephone) VALUES(null,$Bid,'{$p_name}','{$p_telephone}')";
         $result=mysqli_query($connection,$query);
     }



     ///////insert confirm rent table

    public static function insertConfirmRent($connection,$data,$BOid,$B_post_id,$keymoney,$payment_method){
        $query="INSERT INTO confirm_rent(rent_id,Bid,BOid,B_post_id,is_paid,keymoneyAmount,payment_method,agreement) VALUES(null,'{$data}','{$BOid}','{$B_post_id}',' ','{$keymoney}','{$payment_method}',' ')";
        mysqli_query($connection,$query);
    }


    /////payhere want to boarding owner name
     public static function getBONamepayhere($st_email,$connection)
     {
       $query="SELECT boardings_owner.first_name,boardings_owner.last_name,boardings_owner.address,request.date,boarding_post.image,request.student_email FROM request,boarding_post,boardings_owner WHERE request.B_post_id=boarding_post.B_post_id AND boarding_post.BOid=boardings_owner.BOid AND isAccept=3 AND student_email='{$st_email}'";
           
        $result1=mysqli_query($connection,$query);
        return $result1;
     }

///////////get boarder id used for confirm rent table
     public static function getboarderIspaid($connection,$student_email){
  
    $query="SELECT Bid FROM boarder WHERE email='{$student_email}'";
    $result=mysqli_query($connection,$query);
    return $result;
     }


   

     /////////insert IsPaid=1 And PaymentDate
     public static function insertboarderIspaid($connection,$Bid,$B_post_id){

        $query="UPDATE confirm_rent SET is_paid=1,payment_date=now() WHERE Bid='{$Bid}' AND B_post_id='{$B_post_id}' AND is_paid=0 ";
        mysqli_query($connection,$query);

     }


     ////////student interface to boarder Homepage
     public static function updateStTOBorder($connection,$student_email){
        $query="UPDATE boarder b JOIN student s ON (b.email=s.email) SET b.user_accepted=1 ,s.user_accepted=3 WHERE b.user_accepted=0 AND b.email='{$student_email}' ";
         $result=mysqli_query($connection,$query);
         return $result;
     }


     //////////////////////select confirm rent Not Done student

     /////////select confirm rent payment done
    public static function selectRPayNotD($connection,$student_email){

        $query="SELECT request.request_id,boarding_post.city,boarding_post.image, boarding_post.house_num,boarding_post.lane,boardings_owner.first_name,boardings_owner.last_name,confirm_rent.B_post_id FROM request,boarding_post,boardings_owner,confirm_rent WHERE request.B_post_id=boarding_post.B_post_id AND boarding_post.BOid=boardings_owner.BOid AND boardings_owner.BOid=confirm_rent.BOid AND confirm_rent.is_paid=1 AND confirm_rent.payment_method='cash' AND confirm_rent.payment_method='online'AND confirm_rent.is_paid=0 AND request.student_email='{$student_email}'";
           $result=mysqli_query($connection,$query);
        return $result;
    }


    /////select cancel request isAccept=5

    public static function selectcancelReq($connection,$student_email)
    {
        $query="SELECT * FROM request,boarding_post WHERE request.B_post_id=boarding_post.B_post_id  AND request.student_email='{$student_email}' AND isAccept=5";
           $result=mysqli_query($connection,$query);
        return $result;

    }


    ///////////select my Boarders
    public static function selectMyBorders($connection,$BOid){

          $query="SELECT boarder.first_name,boarder.last_name,boarder.nic,boarding_post.house_num,boarding_post.lane,boarding_post.city,confirm_rent.B_post_id FROM boarder,boarding_post,confirm_rent WHERE boarder.Bid=confirm_rent.Bid AND boarding_post.B_post_id=confirm_rent.B_post_id AND boarder.user_accepted=1 AND confirm_rent.is_paid=1 AND confirm_rent.BOid='{$BOid}' ";
            $result=mysqli_query($connection,$query);
            return $result;

    }

    ///////////select my Boarders
    public static function selectMyBordersBO($connection,$BOid){

          $query="SELECT * FROM boarder,boarding_post,confirm_rent WHERE boarder.Bid=confirm_rent.Bid AND boarding_post.B_post_id=confirm_rent.B_post_id AND boarder.user_accepted=1 AND confirm_rent.is_paid=1 AND confirm_rent.BOid='{$BOid}' ";
            $result=mysqli_query($connection,$query);
            return $result;

    }


      ///////////select my Boarders
    public static function selectMyBordersBOPaynot($connection,$BOid){

          $query="SELECT * FROM boarder,boarding_post,confirm_rent WHERE boarder.Bid=confirm_rent.Bid AND boarding_post.B_post_id=confirm_rent.B_post_id AND boarder.user_accepted=0 AND confirm_rent.is_paid=0 AND confirm_rent.BOid='{$BOid}' ";
            $result=mysqli_query($connection,$query);
            return $result;

    }


    ///////////select my Boarders
   /* public static function selectMyBordersDetails($connection,$BOid){

          $query="SELECT * FROM boarder,confirm_rent,request WHERE boarder.Bid=confirm_rent.Bid AND confirm_rent.B_post_id=request.B_post_id AND boarder.user_accepted=1 AND confirm_rent.is_paid=1 AND confirm_rent.BOid='{$BOid}'";
            $result=mysqli_query($connection,$query);
            return $result;

    }*/



                    

                   


}

 ?>