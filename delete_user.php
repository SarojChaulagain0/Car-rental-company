<?php
require '../includes/conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   
    $user_id = $_POST['user_id'];


    $sql = "DELETE FROM user WHERE user_id = '$user_id'";

    if ($conn->query($sql) === TRUE) {
       
        header('Location: index.php ');
        exit;
    } else {
        echo "Error deleting products: " . $conn->error;
    }


    $conn->close();
}
?>
