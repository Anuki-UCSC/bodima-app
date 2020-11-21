<?php   require_once ('../config/database.php');
        require_once ('../models/adertisement_model.php');
        session_start(); 
?>


<?php

echo $_GET['id'];

if(isset($_SESSION['email'])){
    header('Location:../views/boardingpage_detailed.php?id='.$_GET['id']);
}
// else{
//     header('Location:../views/boardings.php
// }

?>

