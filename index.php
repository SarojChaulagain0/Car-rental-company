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

<body>

<?php 

include 'includes/header.php';

?>

  <section class="hero">
    <div class="hero-overlay">
      <div class="container">
        <h1>Find Your Dream Car</h1>
        <form action = "search.php" method = "GET">
          <input type="text" placeholder="Car Name" name = "query">
          <button type="submit">Search</button>
        </form>
      </div>
    </div>
  </section>


  <section class="car-types">
    <div class="container">
      <h2>Car Types</h2>
      <div class="row">

      <?php

include 'includes/conn.php';

$sql = "SELECT * FROM car";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) {

?>
        <div class="col">
          <img src="./admin/<?php echo $row['photo'] ?>" alt="Car 1">
          <p><?php echo $row['name'] ?></p>
        </div>


        <?php } ?>
      
        
       
      </div>
    </div>
  </section>


  <section class="car-news">
    <div class="container">
      <h2>Car News</h2>
      <div class="row">
        <div class="col">
          <div class="card">
            <img src="images/car1.jpg" alt="News 1">
            <div class="card-body">
              <h3 style="color: black;">Buggatis new car</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean varius ultricies neque, quis euismod
                sapien finibus vitae. Nunc vel mauris ut purus molestie bibendum quis vel enim.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/car4.jpg" alt="News 2">
            <div class="card-body">
              <h3 style="color: black;">Mclaren new record</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean varius ultricies neque, quis euismod
                sapien finibus vitae. Nunc vel mauris ut purus molestie bibendum quis vel enim.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="images/car2.jpg" alt="News 3">
            <div class="card-body">
              <h3 style="color: black;">Pagani to stop produciton</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean varius ultricies neque, quis euismod
                sapien finibus vitae. Nunc vel mauris ut purus molestie bibendum quis vel enim.</p>
              <a href="#" class="btn btn-primary">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



  <?php

include 'includes/footer.php';

?>




</body>

</html>