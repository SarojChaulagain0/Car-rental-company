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
    .banner {
      background-image: url('images/car3.jpg');
      background-size: cover;
      background-position: center;
      height: 300px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
    }

    .banner h2 {
      font-size: 36px;
      text-shadow: 1px 1px #000;
    }

    /* Contact Box Styles */

    .contact-box {
      background-color: #f9f9f9;
      padding: 50px 0;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
    }

    .contact-box .container {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      align-items: center;
    }

    .map {
      flex-basis: 50%;
      height: 400px;
    }

    .form {
      flex-basis: 40%;
    }

    form {
      display: flex;
      flex-wrap: wrap;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      padding: 10px;
      margin-bottom: 20px;
      width: 100%;
    }

    textarea {
      height: 150px;
    }

    input[type="submit"] {
      background-color: #333;
      color: #fff;
      padding: 10px 20px;
      border: none;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #555;
    }
  </style>
</head>

<body>
  <?php 

  include 'includes/header.php';
  
  ?>


  <section class="banner">
    <h2>Contact Us</h2>
  </section>

  <section class="contact-box">
    <div class="container">
      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.348773729883!2d77.6294084147482!3d12.918795490897364!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae131308c06437%3A0x388578ff1f47c69e!2sJSS+Academy+of+Technical+Education%2C+Mauranipur!5e0!3m2!1sen!2sin!4v1552162120779"
          frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
      <div class="form">
        <form>
          <label for="name">Name:</label><br>
          <input type="text" id="name" name="name" required><br>

          <label for="email">Email:</label><br>
          <input type="email" id="email" name="email" required><br>

          <label for="phone">Phone:</label><br>
          <input type="tel" id="phone" name="phone" required><br>

          <label for="message">Message:</label><br>
          <textarea id="message" name="message" required></textarea><br>

          <input type="submit" value="Send">
        </form>
      </div>
    </div>
  </section>





  <?php

include 'includes/footer.php';

?>



</body>

</html>