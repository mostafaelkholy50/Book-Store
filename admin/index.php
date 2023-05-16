<?php
include ('../inc/config.php');
session_start();
$admin_id = $_SESSION['admin_id'];

 if(!isset($admin_id)){
    header('location:login.php');
 }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- main template css file -->
    <link rel="stylesheet" href="../css/admin/admin_page.css">
    <!-- Render All Elements Normally -->
    <link rel="stylesheet" href="../css/normalize.css">
    <!-- font Awesome Library -->
    <link rel="stylesheet" href="../css/all.min.css">
    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <title>Admin Home</title>
</head>
<body>
    <!-- Start header -->
    <?php include("header_admin.php");

?>
    <!-- End header -->
    <!-- Start dashboard -->
    <div class="dashboard">
        <h1 class="title">DASHBOARD</h1>
        <div class="container">
            
            <div class="box">
                <?php
                $total_pending = 0;
                $select_pending = mysqli_query($conn, "SELECT total_price 
                FROM orders WHERE payment_status = 'pending'") or die('query failed 1');
                if (mysqli_num_rows($select_pending) > 0) {
                    while ($fetch_pending = mysqli_fetch_assoc($select_pending)) {
                        $total_price = $fetch_pending['total_price'];
                        $total_pending += $total_price;
                    };
                };

                ?>
                <h3><?php echo $total_pending; ?></h3>
                <p>total pendings</p>
            </div>
            
            <div class="box">
                <?php
                $total_completed = 0;
                $select_completed = mysqli_query($conn, "SELECT total_price 
                FROM orders WHERE payment_status = 'completed'") or die('query failed 2');
                if (mysqli_num_rows($select_completed) > 0) {
                    while ($fetch_pendings = mysqli_fetch_assoc($select_completed)) {
                        $total_price = $fetch_completed['total_price'];
                        $total_completed += $total_price;
                    };
                };

                ?>
                <h3><?php echo $total_completed; ?></h3>
               <p>completed payments</p>
            </div>
      
            <div class="box">
                <?php
                $select_orders = mysqli_query($conn, "SELECT * FROM orders") or
                    die('query failed');
                $number_of_orders = mysqli_num_rows($select_orders);
                ?>
                <h3><?php echo $number_of_orders; ?></h3>
               <p>order placed</p>
            </div>
            
            <div class="box">
                <?php
                $select_products = mysqli_query($conn, "SELECT * FROM products") or
                    die('query failed');
                $number_of_products = mysqli_num_rows($select_products);
                ?>
                <h3><?php echo $number_of_products; ?></h3>
               <p>products added</p>
            </div>
            
            <div class="box">
                <?php
                $select_users = mysqli_query($conn, "SELECT * FROM users WHERE user_type = 'user'")
                 or die('query failed');
                $number_of_users = mysqli_num_rows($select_users);
                ?>
                <h3><?php echo $number_of_users; ?></h3>
                <p>normal users</p>
            </div>
            
            <div class="box">
                <?php
                $select_admins = mysqli_query($conn, "SELECT * FROM users WHERE user_type = 'admin'")
                 or die('query failed');
                $number_of_admins = mysqli_num_rows($select_admins);
                ?>
                <h3><?php echo $number_of_admins; ?></h3>
                <p>admin users</p>
            </div>
      
            <div class="box">
                <?php
                $select_total = mysqli_query($conn, "SELECT * FROM users")
                 or die('query failed');
                $number_of_accounts = mysqli_num_rows($select_total);
                ?>
                <h3><?php echo $number_of_accounts; ?></h3>
               <p>total accounts</p>
            </div>
            
            <div class="box">
                <?php
                $select_message = mysqli_query($conn, "SELECT * FROM message") or
                    die('query failed 111');
                $number_of_message = mysqli_num_rows($select_message);
                ?>
                <h3><?php echo $number_of_message; ?></h3>
                        <p>new messages</p>
                    </div>
                    
         </div>
    </div>
    <!-- End dashboard -->
</body>
</html>