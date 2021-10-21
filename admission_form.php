<?php
$conn = new mysqli('localhost', 'root', '' , 'gym');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}

$name = $_POST['name'];
$age = $_POST['age'];
$phone = $_POST['phone'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$email = $_POST['email'];
$admission_date = $_POST['admission_date'];
$password = $_POST['password'];
$md_pass = md5($password);

$sql = "INSERT INTO users ( name , age , phone , weight , height  , email , admission_date , password   ) 
      VALUES ('$name' , '$age' , '$phone', '$weight', '$height' , '$email' , '$admission_date' , '$md_pass' )";

if ($conn -> query($sql) === TRUE) {

    echo "Registered successfully";
    header( 'Location: admission.php');
} else {
    echo "Error: " . $sql . "<br>". $conn->error;
}


?>