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
            
            <h1>ALL ADMIN</h1>

        
            
            <hr>
            <div class="btn btn-success"> <a id ="add-button" href="add_admin.php">Add New Admin</a> </div>

            <br>
            <br>

      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  <?php
require '../includes/conn.php';

// Perform the database query
$sql = "SELECT * FROM user where role = 'admin'";
$result = $conn->query($sql);

 while ($row = $result->fetch_assoc()) {

?>
    <tr>
      <th scope="row">1</th>
      <td><?php echo $row['name'] ?></td>
      <td><?php echo $row['email'] ?></td>
      <td><?php echo $row['address'] ?></td>
      <td><?php echo $row['role'] ?></td>
      <td>  <form action='delete_user.php' method='POST'>
                    <input type='hidden' name='user_id' value="<?php echo $row['user_id'] ?>">
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