<?php
$conn = new mysqli('localhost', 'root', '' , 'gym');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " .$conn->connect_error);
}
if(isset($_GET['user_id'])){
    echo "user profile to be update is " .$_GET['user_id'];

$leaving_date = $_POST['leaving_date'];
$current_weight = $_POST['current_weight'];
$current_height = $_POST['current_height'];
$leaving_reason = $_POST['leaving_reason'];
$user_remarks = $_POST['user_remarks'];


$sql = "INSERT INTO users ( leaving_date , current_weight , current_height , leaving_reason , user_remarks )
        VALUES ('$leaving_date' , '$current_weight' , '$current_height', '$leaving_reason', '$user_remarks' )";

if ($conn -> query($sql) === TRUE) {

    header( 'Location: User_Profile.php');

} else {
    echo "Error: " . $sql . "<br>". $conn->error;
}

}

?>