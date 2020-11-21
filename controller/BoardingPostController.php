<?php
require_once ('../models/reg_userIshan.php');
require ("../models/BoardingPostModel.php");


class BoardingPostController {
    
    function CreateCategoryDropdownList() {
        $BoardingPostModel = new BoardingPostModel();
        $result = "<div class='search'><form action = '' method = 'post' width = '100%'>
                    <div class='search-item'>
                        <h2>Please select a category:</h2> 
                        <select name = 'categories' >
                            <option value = '%'  >All</option>
                            " . $this->CreateOptionValues($BoardingPostModel->GetBoardingCategories()) .
                        "</select>
                        <input type = 'submit' value = 'Search'>  
                     </div>          
                    </form></div>";

        return $result;
    }

    public function CreateBoardingTables($types) {
        $BoardingPostModel = new BoardingPostModel();
        $BoardingPostArray = $BoardingPostModel->GetBoardingbyCategory($types);
        $result = "";
        
        //Generate a Boarding_post for each BoardingPostEntity in array
        foreach ($BoardingPostArray as $key => $boarding_post) 
        {
            $result = $result .
                    "
                    <a class='divtable' href='../views/BoardingPage.php?id=$boarding_post->B_post_id'>


                    <table class = 'boardingPostTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$boarding_post->image' /></th>
                            <th width = '75px' >location: </th>
                            <td>$boarding_post->city</td>
                        </tr>
                        
                        <tr>
                            <th>category: </th>
                            <td>$boarding_post->category</td>
                        </tr>
                        
                        <tr>
                            <th>Price: </th>
                            <td>$boarding_post->cost_per_person</td>
                        </tr>
                        
                        <tr>
                            <th>gender: </th>
                            <td>$boarding_post->girlsBoys</td>
                        </tr>
                       
                        
                        <tr>
                            <td colspan='2' >$boarding_post->description</td>
                        </tr> 
                        
                     </table></a>";
        }        
        return $result;
        
    }




function CreateOptionValues(array $valueArray) {
        $result = "";

        foreach ($valueArray as $value) {
            $result = $result . "<option value='$value'>$value</option>";
        }

        return $result;
    }
    
    
/*function CreateBoardingTables($types)
    {
        $BoardingPostModel = new BoardingPostModel();
        $BoardingPostArray = $BoardingPostModel->GetBoardingbyCategory($types);
        $result = "";
        
        //Generate a Boarding_post for each BoardingPostEntity in array
        foreach ($BoardingPostArray as $key => $boarding_post) 
        {
            $result = $result .
                    "<table class = 'boardingPostTable'>
                        <tr>
                            <th rowspan='6' width = '150px' ><img runat = 'server' src = '$boarding_post->image' /></th>
                            <th width = '75px' >location: </th>
                            <td>$boarding_post->city</td>
                        </tr>
                        
                        <tr>
                            <th>category: </th>
                            <td>$boarding_post->category</td>
                        </tr>
                        
                        <tr>
                            <th>Price: </th>
                            <td>$boarding_post->cost_per_person</td>
                        </tr>
                        
                        <tr>
                            <th>gender: </th>
                            <td>$boarding_post->girlsBoys</td>
                        </tr>
                       
                        
                        <tr>
                            <td colspan='2' >$boarding_post->description</td>
                        </tr>                      
                     </table>";
        }        
        return $result;
      */ 

public function CreateBoardingPages($id) {
    require_once ('../config/database.php');
        $BoardingPostModel = new BoardingPostModel();
        $BoardingPostArray = $BoardingPostModel->GetBoardingDetailsToDisplay($id);
         $student_email=$_SESSION['email'];

          $result=reg_userIshan::getReq($connection,$student_email,$id);//$id means B_post_id
        $record=mysqli_fetch_assoc($result);
        // echo "<pre>";
        // print_r($record);
        // echo "</pre>";
        if($record)
        {
            if($record['isAccept']==0)
            {
                echo "<script>addEventListener('load',(e)=>{
                    document.getElementById('demo').disabled=true;
                    document.getElementById('demo').style.backgroundColor='gray';
                    document.getElementById('demo').value='Pending';
            });
            </script>";
            }
            else if($record['isAccept']==1)
            {

               
                echo "<script>addEventListener('load',(e)=>{
                    document.getElementById('demo').disabled=true;
                    document.getElementById('demo').style.backgroundColor='green';
                    document.getElementById('demo').value='Accepted';
            });
            </script>";
            }
             else if($record['isAccept']==2)
            {

               
                echo "<script>addEventListener('load',(e)=>{
                    document.getElementById('demo').disabled=true;
                    document.getElementById('demo').style.backgroundColor='red';
                    document.getElementById('demo').value='Rejected';
            });
            </script>";
            }
            /////////////practise

           // echo($record['date']);
        //    echo '<br>'.time();
          //  echo '<br>'.date($record['date']);
           //  echo '<br>'.date('d');

            /////////////
        }



        $result = "";
        
        //Generate a Boarding_post for each BoardingPostEntity in array
        foreach ($BoardingPostArray as $key => $boarding_post) 
        {
            $result = $result .
                    "
                    <div class='div_a' style='padding:20px;'>

                     <table class = 'boardingPostpage'>

                        <tr>
                            <th rowspan='3' width = '150px' ><img runat = 'server' src = '$boarding_post->image' style='width:300px; padding-left:50px; padding-right:40px;'/></th>
                            <th width = '75px' >location: </th>
                            <td>$boarding_post->city</td>
                        </tr>
                        
                        <tr>
                            <th>category: </th>
                            <td>$boarding_post->category</td>
                        </tr>

                        <tr>
                            <th>description:   </th>
                            <td>$boarding_post->description</td>
                            
                        </tr> 
                        
                        <tr colspan='2'> 
                        </tr>
                            
                        

                    </table>

                        

                        <div class='Address tag'>
                             <div class='T_Header'>
                             gender:
                            </div>
                            <div class='T_Define'>
                             $boarding_post->girlsBoys
                            </div>
                        </div>
                       
                        <div class='Address tag'>
                            <div class='T_Header'>
                             Address:
                            </div>
                            <div class='T_Define'>
                             No $boarding_post->house_num, $boarding_post->lane, $boarding_post->city.

                            </div>
                        </div>

                       <i class='fas fa-location'></i>
                       

                        <button class='button location'><i class='fas fa-map-marker-alt'></i> See the location</button>
                        

                    <div class='requestBlock'>
                        <hr/>
                        <div class='requestInner'>
                            request this boarding place :  
                            <form action='../controller/SRequestIshan.php?click1&description=$boarding_post->description&category=$boarding_post->category&B_post_id=$boarding_post->B_post_id&city=$boarding_post->city&BOid=$boarding_post->BOid' method='post'><input id='demo' class='btn6 request' type='submit' value='Request'></form>
                               </div>
                    </div>
                    
                </div>    "
                    
                    ;
        }        
        return $result;
        
    }



    } 
    
  