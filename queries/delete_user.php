<?php

$conn = new mysqli("localhost", "root", "" , "gym");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


if(isset($_GET['user_id'])){
    echo "user to be dlt is " .$_GET['user_id'];
     

    $sql = "DELETE  FROM users WHERE id=".$_GET['user_id'];

if($conn->query($sql) === TRUE){

    header("location: ../admission.php");

    }else{
        echo "Error deleting record" .$conn->error;
    }

}

?>