<div class="profile">
    <a href="../views/profilepage.php"> 
        <i  class="fa fa-user-circle"></i>
    </a>
</div>

<!-- the massage that have to show -->

<?php if($_SESSION['level']=='boarder'){?>
    <div class="hide" style='
    .hide {
            display: none;
        }
            
        .profile:hover + .hide {
            color: rgb(29, 28, 28);
            align: center;
            display:block;
            background-color:rgb(255, 217, 0,0.7);
            width:180px;
            padding:10px;
            border-radius:15px 0 15px 15px;
            z-index:30;
            top:50px;
            left:70%;
            position:absolute;
        
    }'
>Boarder</div>

<?php
}elseif($_SESSION['level']=='food_supplier'){ ?>
    <div class="hide" style='
                    .hide {
                            display: none;
                        }
                            
                        .profile:hover + .hide {
                            color: rgb(29, 28, 28);
                            align: center;
                            display:block;
                            background-color:rgb(255, 217, 0,0.7);
                            width:180px;
                            padding:10px;
                            border-radius:15px 0 15px 15px;
                            z-index:30;
                            top:50px;
                            left:70%;
                            position:absolute;
                        
                    }'
>Food Supplier</div>


<?php
}elseif($_SESSION['level']=='boardings_owner'){?>
    <div class="hide" style='
                    .hide {
                            display: none;
                        }
                            
                        .profile:hover + .hide {
                            color: rgb(29, 28, 28);
                            align: center;
                            display:block;
                            background-color:rgb(255, 217, 0,0.7);
                            width:180px;
                            padding:10px;
                            border-radius:15px 0 15px 15px;
                            z-index:30;
                            top:50px;
                            left:70%;
                            position:absolute;
                        
                    }'
>Boarding Owner</div>

<?php
}elseif($_SESSION['level']=='administrator'){ ?>
    <div class="hide" style='
                    .hide {
                            display: none;
                        }
                            
                        .profile:hover + .hide {
                            color: rgb(29, 28, 28);
                            align: center;
                            display:block;
                            background-color:rgb(255, 217, 0,0.7);
                            width:180px;
                            padding:10px;
                            border-radius:15px 0 15px 15px;
                            z-index:30;
                            top:50px;
                            left:70%;
                            position:absolute;
                        
                    }'
>Administrator</div>

<?php
}elseif($_SESSION['level']=='student'){?>
    <div class="hide" style='
                    .hide {
                            display: none;
                        }
                            
                        .profile:hover + .hide {
                            color: rgb(29, 28, 28);
                            align: center;
                            display:block;
                            background-color:rgb(255, 217, 0,0.7);
                            width:180px;
                            padding:10px;
                            border-radius:15px 0 15px 15px;
                            z-index:30;
                            top:50px;
                            left:70%;
                            position:absolute;
                        
                    }'
>Registered User(student)</div>

<?php
}else{?>
    <div class="hide" style='
                    .hide {
                            display: none;
                        }
                            
                        .profile:hover + .hide {
                            color: rgb(29, 28, 28);
                            align: center;
                            display:block;
                            background-color:rgb(255, 217, 0,0.7);
                            width:180px;
                            padding:10px;
                            border-radius:15px 0 15px 15px;
                            z-index:30;
                            top:50px;
                            left:70%;
                            position:absolute;
                        
                    }'
>Boarder</div>

<?php
}?>