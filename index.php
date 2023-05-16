<?php
session_start();
$user_id = $_SESSION['user_id'];
if(!isset($user_id)){
    header('location:login.php');

}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>home</title>
        <!-- Render All Elements Normally -->
        <link rel="stylesheet" href="css/normalize.css" />
        <!-- Font Awesome Library -->
        <link rel="stylesheet" href="css/all.min.css" />
        <!-- Main Template CSS File -->
        <link rel="stylesheet" href="css/home.css" />
        <!-- Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
        <title>Home</title>
    </head>
<body>
   
<!-- start php -->
<?php
include('inc/config.php');
?>
<!-- end php -->
<?php include("inc/header.php");

?>    <!-- end header_2 -->
    <!-- start home -->
    <div class="home">
        <div class="contact">
            <h3>Hand Picked Book to your door.</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, quod? Reiciendis ut porro iste totam.</p>
            <a href="shoping.php">Go To Shopping</a>
        </div>
    </div>

    <section class="about">
        <div class="container">
           <div class="image">
              <img src="image/background.jpg" alt="">
           </div>
           <div class="content">
              <h3>About us</h3>
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit quos enim minima ipsa dicta officia corporis ratione saepe sed adipisci?</p>
                            <a href="about.php" class="btn"><details> <summary>read more</summary> <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit, laborum.</p></details>
                          </a>

           </div>
        </div>
     </section> 
     <!-- end about -->

     <!-- start home-contact -->
     <section class="home-contact">
        <div class="content">
           <h3>have any questions?</h3>
           <p>-| Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque cumque exercitationem repellendus, amet ullam voluptatibus?</p>
           <a href="contact.php" class="white-btn">Contact us</a>
        </div>    
     </section>
     <!-- end home-contact -->
     <!-- start footer -->
   <?php include("inc/footer.php")?>
     <!-- end footer -->
     <script src="main.js"></script>
</body>
</html>