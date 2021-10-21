<?php
$conn = new mysqli("localhost", "root", "" , "gym");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
session_start();

if(!isset($_SESSION['email'])){
    header("Location:Admin_index.php");
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Addmision</title>

    <style>
        body {
  background-image: url("gym1.jpg");
  background-size: cover;



}
.flex-container{
        display: flex;
        justify-content:left;
    }
    * {
    box-sizing: border-box;
}
    </style>
</head>
<body >

<div>

<div class="flex-container">
    <div> 
        <a href="admin_panel.php">
            <img src="logo.png" alt="" width="150px" height="150px">
        </a>
    </div>
    <div class="my-12 ml-auto mr-auto ">
        <h1 class="text-6xl font-extrabold text-center text-white "> Muscle Fit </h1>
        <h1 class="text-4xl font-bold text-center text-white "> Lift like a worker and look like a boss </h1>
    </div>
    <div class="flex flex-row-reverse ">
            <div >
                <button class="px-8 py-1 mt-4 mr-8 text-black bg-white rounded ">
                     <a  href="logout.php"> Logout</a>
                </button>
            </div>
        </div>
</div> 

<div class="m-auto bg-gray-200 p-4 text-center shadow-xl rounded-md w-1/4 " id="member_list"> 
            <button class="font-bold text-2xl mt-2 text-center">Member List</button>
        </div>


<div class="container flex justify-center mx-auto" >
    <div class=" border-gray-600 shadow" id="fee_list" hidden>
                <h1 class=" text-4xl font-bold text-center text-white my-6 ">All Member Fees List</h1>
                <table class="bg-gray-100 rounded-2xl">
                    <thead>
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                ID
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                               Name
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Paid / Non-Paid
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-gray-200">

                    <?php
                        while($user = $result->fetch_assoc()){
                       ?>
                            <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?php echo $user ['id']?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?php echo $user ['name']?>
                            </td>
                            <td class="px-6 py-4 flex justify-center">
                                <?php
                                   $fees = $user ['fees']; 
                                    if($fees == 1){
                                ?>
                                <button class="px-4 py-1 text-sm text-white bg-green-600 rounded" disabled>Paid</button>

                                <?php

                                }else{
                                ?>
                                
                                <button class="px-4 py-1 text-sm text-white bg-green-600 rounded" disabled>Non Paid</button>

                                <?php    
                                }
                                ?>
                            </td>
                        
                        </tr>
                        <?php
                            }
                        ?>  
                    
                    </tbody>
                </table>
            </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(function(){
  

  $("#member_list").click(function(){
    $("#fee_list").show();
  });

});

</script>
</body>
</html>

