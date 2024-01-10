




<?php

require '../includes/conn.php';


session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../login.php ');
    exit;
  
  }

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    
      $email = $_SESSION['email'];

  }
  
  ?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>EZY Rentals</title>
  <link rel="shortcut icon" type="image/png" href="./assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="./assets/css/styles.min.css" />
</head>

<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href="./index.html" class="text-nowrap logo-img">
            <img src="./assets/images/logos/dark-logo.svg" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
       <?php

    include 'sidebar.php';


?>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <div class="container-fluid">

  <h1>All Bookings</h1>
  <hr>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Car Name</th>
      <th scope="col">Booking Period</th>
      <th scope="col">Price</th>

    </tr>
  </thead>
  <tbody>

  <?php
require '../includes/conn.php';

// Perform the database query
$sql = "SELECT * FROM booking";
$result = $conn->query($sql);

$serial = 1;
 while ($row = $result->fetch_assoc()) {

?>
    <tr>
      <th scope="row"> <?php echo $serial++ ?> </th>
      <td><?php echo $row['customer_name'] ?></td>
      <td><?php echo $row['car_name'] ?></td>
      <td><?php echo $row['booking_period'] ?></td>
      <td><?php echo $row['price'] ?></td>

   
    </tr>

    <?php } ?>
   
  </tbody>
</table>
     

         
       
      </div>
    </div>
  </div>
 
</body>

</html>