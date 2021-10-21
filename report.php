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

$sql = "SELECT * FROM users ORDER BY id DESC";
$result = $conn->query($sql);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Report</title>

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

    <div class="container flex justify-center mx-auto " >
        <div class="border-b border-gray-600 shadow " id="user_list" >
                <h1 class=" text-4xl font-bold text-center text-white my-6 ">User Report</h1>
                <table class="bg-gray-100 rounded-2xl ">
                    <thead>
                        <tr>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                ID
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Name
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Age
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Phone Number
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Weight
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Height
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Email
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Admission Date
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Leaving Date
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Current Weight
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Current Height
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                Leaving Reason
                            </th>
                            <th class="px-6 py-2 text-xs text-gray-500">
                                User Remarks
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
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?php echo $user ['age']?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?php echo $user ['phone']?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?php echo $user ['weight']?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?php echo $user ['height']?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?php echo $user ['email']?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?php echo $user ['admission_date']?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?php echo $user ['leaving_date']?>
                            </td>    
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?php echo $user ['current_weight']?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?php echo $user ['current_height']?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?php echo $user ['leaving_reason']?>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500">
                                <?php echo $user ['user_remarks']?>
                            </td>
                        </tr>

                        <?php
                            }
                        ?>    
                       
                      
                    
                    </tbody>
                </table>
            </div>
        </div> 
 















</body>
</html>