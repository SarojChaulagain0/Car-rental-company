<?php
require '../includes/conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $car_id = $_POST['car_id'];


    $sql = "DELETE FROM car WHERE car_id = '$car_id'";

    if ($conn->query($sql) === TRUE) {
       
        header('Location: cars.php ');
        exit;
    } else {
        echo "Error deleting products: " . $conn->error;
    }


    $conn->close();
}
?>
