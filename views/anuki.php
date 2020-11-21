<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resource/css/nav.css">
    <link rel="stylesheet" href="../resource/css/footer.css">
    <link rel="stylesheet" href="../resource/css/all.css">
    <link rel="stylesheet" href="../resource/css/about_us.css">
    
  
    <title>Document</title>
</head>
<body>
<div class="back-img">
   <div class="back-image"> <img src="../resource/img/about-us1.jpg" alt=""></div>
<?php include 'nav.php' ?>

    <div class="containe">
        <div class="nav-contact">
            <h1>Team Member</h1>
            <ul class="nav-contact-item">
            
                <li><a href="anuki.php">Anuki Alwis</a></li>
                <li><a href="ishan.php">Ishan Resmika</a></li>
                <li><a href="nimasha.php">Nimasha Supunpaba</a></li>
                <li><a href="amal.php">Amal Lakshan</a></li>
              
            </ul>
        </div>
        <div class="details">
            <h1>Hi, I am Anuki </h1>
            <p>I am an undergraduate of the University of Colombo School of Computing. I am a passionate individual.My interested areas are programming, Web development, Artificial intelligence and Quantum Computing. 

                <br/><br/>I joined as a developer to this project. In my point of view, this project is a result of a broad research on university student's accomadation issues and related areas. This platform will be a great solution which address most of the issues faced by university students.  </p>
        </div>
        <div class="pic">
            <div class="picture">
                <img src="../resource/img/anuki.jpg" alt="">
            </div>
            <div class="name">
                <h1>Anuki Alwis</h1>
            </div>
          
        </div>
    </div>
   <?php include 'footer.php' ?>
</div>
</body>
<script src="../resource/js/home1.js"></script>
<script src="../resource/js/jquery.js"></script>
</html>