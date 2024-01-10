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

       
      <h1>ALL Cars</h1>

        
            
<hr>

      <div class="btn btn-success"> <a id ="add-button" href="add_car.php">Add New Cars</a> </div>
     <br>
     <br>

      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Car Name</th>
      <th scope="col">Car Image</th>
      <th scope="col">Car Model</th>
      <th scope="col">Car Make Year</th>
      <th scope="col">Rental Price</th>

      <th scope="col">Colour</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php

$sql = "SELECT * FROM car";
$result = $conn->query($sql);

 while ($row = $result->fetch_assoc()) {

?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row['name'] ?></td>
      <td><img src="<?php echo $row['photo'] ?>" alt="" srcset="" style = "width:200px"></td>
      <td><?php echo $row['model'] ?></td>
      <td><?php echo $row['make'] ?></td>
      <td><?php echo $row['rental_price'] ?></td>
      <td><?php echo $row['colour'] ?></td>
      <td>  <form action='delete_car.php' method='POST'>
                    <input type='hidden' name='car_id' value="<?php echo $row['car_id'] ?>">
                    <button
                      class="btn btn-sm btn-danger"
                      type = "submit"
                    >
                      Delete
                    </button>

                    </form></td>
    </tr>

    <?php } ?>
   
  </tbody>
</table>
       
      </div>
    </div>
  </div>
 
</body>

</html>