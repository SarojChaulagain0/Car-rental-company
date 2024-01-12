<?php

include './includes/conn.php';


$name = $_GET['name'];
$rental_price = $_GET['rental_price'];
$car_id = $_GET['car_id'];
$photo = $_GET['photo'];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $customer_name = $_POST['customer_name'];
    $car_name = $_POST['car_name'];
    $booking_period = $_POST['booking_period'];
    $price = $_POST['price'];
    $car_id = $_POST['car_id'];
  
   

    $sql = "INSERT INTO booking (customer_name,car_name,booking_period,price,car_id) VALUES ('$customer_name','$car_name','$booking_period','$price','$car_id')";

    if ($conn->query($sql) === TRUE) {
        header('Location: cars.php');

    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

}


?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>EZY Rental</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/80f94435b1.js" crossorigin="anonymous"></script>


</head>

<style>

    .form-box{
        margin: 200px;
  


    }
  .car-booking-form {
   width: 1200px;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  
  .car-booking-form h2 {
    margin: 0 0 20px 0;
    font-size: 24px;
    text-align: center;
  }
  
  /* Form fields */
  .form-group {
    margin: 20px 0;
  }
  
  .form-group label {
    display: block;
    font-size: 14px;
    font-weight: bold;
  }
  
  .form-group input,
  .form-group select {
    width: 95%;
    height: 32px;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 14px;
  }
  
  /* Payment method options */
  #payment-method {
    display: flex;
  }
  
  #payment-method input[type="radio"] {
    margin: 0 10px 0 0;
  }
  
  #payment-method label {
    font-size: 14px;
    cursor: pointer;
  }
  
  button[type="submit"] {
    display: block;
    width: 100%;
    height: 32px;
    margin: 20px 0;
    background-color: #0858ce;
    color: white;
    border: none;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
  }
  
  button[type="submit"]:hover {
    background-color: #3f9a43;
  }
  
  

</style>
<body>

<?php 

include 'includes/header.php';

?>

<div class="form-box">

  

<form class="car-booking-form" action="booking.php" method="post">
    <h2>Book this car</h2>
 
    <img src="./admin/<?php echo $photo ?>" alt="" srcset="">
    <div class="form-group">
      <label for="pickup-date">Car Name</label>
      <input type="text" id="pickup-date" name="car_name" value = "<?php echo $name ?>" readonly>
    </div>
    <div class="form-group">
      <label for="pickup-time">Price</label>
      <input type="text" id="pickup-time" name="price" value = "<?php echo $rental_price ?>" readonly>
    </div>
    <div class="form-group">
      <label for="pickup-time">Full Name</label>
      <input type="text" id="pickup-time" name="customer_name" placeholder ="Enter your full name" >
    </div>
    <div class="form-group">
      <label for="pickup-time">Booking Period</label>
      <input type="text" id="pickup-time" name="booking_period" placeholder = " Enter your booking Period">
    </div>

    <input type="hidden" name = "car_id" value = <?php echo $car_id ?> >
  
   
    <!-- Submit button -->
    <button type="submit">Book</button>
  </form>


  </div>



<?php

include 'includes/footer.php';

?>




</body>

</html>