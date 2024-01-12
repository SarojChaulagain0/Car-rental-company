<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EZY Rental</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/80f94435b1.js" crossorigin="anonymous"></script>
  <style>
    .container {
      display: flex;
    }

    .sidebar {
      flex: 1;
      margin-right: 20px;
    }

    .card-container {
      flex: 3;
      display: flex;
      flex-wrap: wrap;
    }

    .card {
      width: 300px;
      margin: 10px;
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }

    .card img {
      width: 100%;
      height: auto;
    }

    .card h4 {
      margin-top: 10px;
      margin-bottom: 5px;
    }

    .card p {
      margin-bottom: 10px;
    }

    .card button {
      background-color: #f44336;
      color: white;
      padding: 10px;
      border: none;
      cursor: pointer;
    }
  </style>
</head>

<body>
  <?php 

  include 'includes/header.php';
  
  ?>




  <div class="container">
   


    <div class="card-container">
     
    <?php

    include 'includes/conn.php';

$sql = "SELECT * FROM car";
$result = $conn->query($sql);

 while ($row = $result->fetch_assoc()) {

?>
      <div class="card">
        <img src="./admin/<?php echo $row['photo'] ?>" alt="Car">
        <h4><?php echo $row['name'] ?></h4>
        <p>Price: Au$<?php echo $row['rental_price'] ?></p>
        <button><a href="booking.php?name=<?php echo urlencode($row['name']); 
        ?>&car_id=<?php echo urlencode($row['car_id']); 
        ?>?>&rental_price=<?php echo urlencode($row['rental_price']); 
        ?>&photo=<?php echo urlencode($row['photo']); 
        ?>">Book Now</a></button>
      </div>
  

  <?php }?>


 </div>

 </div>




  <?php

include 'includes/footer.php';

?>




</body>

</html>