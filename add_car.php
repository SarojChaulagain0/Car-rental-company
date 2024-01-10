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
  
 

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: ../login.php ');
    exit;
  
  }

  if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    
      $email = $_SESSION['email'];
      
  }

  $farmerId = "SELECT id FROM  farmer WHERE  email = $email";


  if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $name = $_POST['name'];
    $model = $_POST['model'];
    $make = $_POST['make'];
    $rental_price = $_POST['rental_price'];
    $colour = $_POST['colour'];



    $uniqueNumber = time();
   


    $target_dir = "uploads/"; 
    $target_file = $target_dir .$uniqueNumber. basename($_FILES["photo"]["name"]);
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

 
$check = getimagesize($_FILES["photo"]["tmp_name"]);
if ($check === false) {
  echo "Error: Invalid image file.";
  exit;
}

if (file_exists($target_file)) {
  echo "Error: File already exists.";
  exit;
}

if ($_FILES["photo"]["size"] > 5000000) { 
  echo "Error: File size is too large.";
  exit;
}

$allowed_formats = array("jpg", "jpeg", "png", "gif");
if (!in_array($imageFileType, $allowed_formats)) {
  echo "Error: Only JPG, JPEG, PNG, and GIF files are allowed.";
  exit;
}

if (!move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file)) {
  echo "Error: Failed to upload the file.";
  exit;
}
  

    $sql = "INSERT INTO car (name,model,make,colour,rental_price,photo) VALUES ('$name',' $model','$make','$colour','$rental_price','$target_file')";

    if ($conn->query($sql) === TRUE) {
        echo "Admin Added successfully";
        header('Location: cars.php');
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

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

      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Add cars</h1>
      </div>

 


     <form action = "add_car.php" method = "POST" enctype="multipart/form-data">

    

<br>


  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Product Name" name = "name" required>
 
  </div>

  <br>
  <div class="form-group">
    <label for="exampleInputEmail1">Model</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Model Name" name = "model" required>
 
  </div>

  <br>

  <div class="form-group">
    <label for="exampleInputEmail1">Colour</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Colour Name" name = "colour" required>
 
  </div>

  <br>

  <div class="form-group">
    <label for="exampleInputEmail1">Make Year</label>
    <input type="date" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="" name = "make" required>
 
  </div>

  <br>

  <div class="form-group">
    <label for="exampleInputEmail1"> Rental Price</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Rental price" name = "rental_price" required>

  </div>

  <br>

  <div class="form-group">
    <label for="exampleInputFile">Photo</label>
    <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp" name="photo" required>
    <small id="fileHelp" class="form-text text-muted">Please choose an image file.</small>
  </div>

  <br>



  <br>

  <button type="submit" class="btn btn-primary">Add Cars</button>
</form>
         
       
      </div>
    </div>
  </div>
 
</body>

</html>