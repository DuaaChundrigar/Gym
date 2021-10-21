<?php

$conn = new mysqli("localhost", "root", "" , "gym");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
if(isset($_GET['user_id'])){
    echo "user to be update is " .$_GET['user_id'];

$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$email = $_POST['email'];
$admission_date = $_POST['admission_date'];

$sql = "UPDATE `users` SET  name = '$name' , age= '$age' , phone= '$phone' , 
        weight = '$weight' , height = '$height' , email='$email' , 
        admission_date='$admission_date' WHERE id=".$_GET['user_id'] ;

if($conn->query($sql) === TRUE){

    header("location: admission.php");

}else{
    echo "Error Updating record" .$conn->error;
}

}



?>
