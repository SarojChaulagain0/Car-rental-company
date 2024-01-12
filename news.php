<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alps Motors</title>
  <link rel="stylesheet" href="style.css">
  <script src="https://kit.fontawesome.com/80f94435b1.js" crossorigin="anonymous"></script>
  <style>
    .news-events {
      width: 100%;
      margin: 50px 0;
    }

    .hero {
      position: relative;
      height: 500px;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
    }

    .hero h1 {
      font-size: 3em;
      color: #fff;
      margin-bottom: 20px;
    }

    .hero img {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      object-fit: cover;
      z-index: -1;
    }

    .cards-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-top: 50px;
    }

    .card {
      width: calc(33.33% - 20px);
      margin-bottom: 40px;
      background-color: #fff;
      box-shadow: 0px 5px 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
    }

    .card img {
      height: 200px;
      width: 100%;
      object-fit: cover;
      margin-bottom: 20px;
    }

    .card h2 {
      font-size: 1.5em;
      margin-bottom: 10px;
    }

    .card p {
      font-size: 1em;
      color: #777;
      margin-bottom: 20px;
    }

    .card a {
      display: inline-block;
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border-radius: 5px;
      text-decoration: none;
      transition: background-color 0.3s ease;
    }

    .card a:hover {
      background-color: #555;
    }
  </style>
</head>

<body>
  <?php 

include 'includes/header.php';

?>

  <section class="news-events">
    <div class="hero">
      <h1>Find News and Events</h1>
      <img src="images/car2.jpg" alt="News and Events Hero Image">
    </div>
    <div class="cards-container">
      <div class="card">
        <img src="images/car4.jpg" alt="News Article 1">
        <h2>Fastest car</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus iste pariatur sapiente nam laboriosam
          aliquam quos fugiat illo ullam necessitatibus?</p>
        <a href="#">Read More</a>
      </div>
      <div class="card">
        <img src="images/car3.jpg" alt="News Article 2">
        <h2>Luxury hypercar</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus iste pariatur sapiente nam laboriosam
          aliquam quos fugiat illo ullam necessitatibus?</p>
        <a href="#">Read More</a>
      </div>
      <div class="card">
        <img src="images/car1.jpg" alt="News Article 3">
        <h2>car</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus iste pariatur sapiente nam laboriosam
          aliquam quos fugiat illo ullam necessitatibus?</p>
        <a href="#">Read More</a>
      </div>
    </div>
  </section>






  <?php

include 'includes/footer.php';

?>




</body>

</html>