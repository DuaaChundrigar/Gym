<?php
$conn = new mysqli('localhost', 'root', '' , 'gym');

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
 session_start();
 
if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];
$md_pass = md5($password);

// $Err = "";
// if($remember==1)
//  {
//    setcookie('email' , $email , time()+60*60*7 );
//  }

 $_SESSION['email'] = $email;

}
$sql = "SELECT * FROM users WHERE email = '$email' AND password = '$md_pass' LIMIT 1";

$result = $conn -> query($sql) ;

if ($result->num_rows > 0) {
  
  $row = $result->fetch_assoc();

   setcookie('id' , $row['id'] , time()+60*60*7 );

  header( 'Location: User_Profile.php');

} else {
  
  echo '<script>alert("Invalid Email Or Password")</script>';
  
  header( 'Location: user_login.php');
}
?>