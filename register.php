<?php
require 'includes/conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $role = $_POST['role'];
   
  
    $sql = "INSERT INTO user (name,  email, password, address, role) VALUES ('$name','$email', '$password', '$address', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful";
        header('Location: admin/index.php');
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
  <style>
    .login-section {
      background-color: #f1f1f1;
      padding: 50px 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }

    .login-form {
      flex-basis: 50%;
      padding-right: 50px;
    }

    .login-form h2 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
    }

    .login-form form {
      display: flex;
      flex-direction: column;
    }

    .login-form label {
      margin-bottom: 10px;
      font-weight: bold;
    }

    .login-form input{
      padding: 10px;
      width: 100%;
      border: none;
      border-radius: 5px;
      margin-bottom: 20px;
    }

    .login-form input[type="submit"] {
      padding: 10px 20px;
      background-color: #000;
      color: #fff;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

   

    
  </style>
</head>

<body>
  <?php 

  include 'includes/header.php';
  
  ?>


  <section class="login-section">
    <div class="container">
      <div class="login-form">
        <h2>Register</h2>
        <form method = "POST" action = "register.php">
          <label for="username">name:</label>
          <input type="text" id="username" name="name">

          <label for="username">Email:</label>
          <input type="email" id="username" name="email">

          <label for="password">Password:</label>
          <input type="password" id="password" name="password">

          <label for="username">Address:</label>
          <input type="text" id="username" name="address">

    
          <input type="hidden" id="username" name="role" name = "customer">


          <input type="submit" value="Register">
        </form>
      </div>
    
    </div>
  </section>


  




  <?php

include 'includes/footer.php';

?>




</body>

</html>