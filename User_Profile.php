<?php
$conn = new mysqli("localhost", "root", "" , "gym");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

//  $sql1 = "SELECT * FROM users WHERE id=".$_GET['id'];

$sql = "SELECT id , name FROM users" ;
$result = $conn->query($sql);
    
session_start();

if(!isset($_SESSION['email'])){
    header("Location: user_login.php");
}

echo "Welcome " . $_SESSION['email'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>User Profile</title>

    <style>
        body {
           background-image: url("gym1.jpg");
           background-size: cover;
    }
        .flex-container{
            display: flex;
            justify-content:left;
    }
    }
        * {
             box-sizing: border-box;
    }

    </style>
</head>
<body >

<div class="flex-container">
    <div> 
        <img src="logo.png" alt="" width="150px" height="150px">
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

<div class="w-full bg-grey-lightest" id="admission"  >
      <h1 class="text-4xl font-bold text-center text-white my-6 ">User Profile</h1>
    <div class="container mx-auto py-8">
      <div class="w-5/6 lg:w-1/2 mx-auto bg-gray-100 rounded shadow">
            <div class="py-4 px-8 text-black font-bold text-xl border-b border-grey-lighter">Admission Form</div>

            <div class="dropdown inline-block relative ml-8 mt-4 font-bold">
               
                <label for="cars">Select Your Name:</label>
                        <select name="users" id="users" class="py-2 px-8 font-bold rounded border-4 border-gray-400 bg-gray-200">
                            
                            <?php
                               while($row = $result->fetch_assoc()) {
                                    $id = $row['id'];
                                    $name = $row['name'];
                                    if($id == $_COOKIE['id']){

                                  
                            ?>
                                    <option value="" ><?php echo $id . " " . $name ;  ?></option>
                            

                            <?php
                            }
                        }
                            ?>
                        </select>
            </div>

            <div class="py-4 px-8">
                <form action="user_profile_query.php?user_id=<?php echo $_COOKIE['id'] ?>" method="post" >
                
                <div class="flex mb-4">
                    <div class=" w-full ml-1 mt-4">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="leave">Date of leaving</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="leave" name="leaving_date" type="text" placeholder="Enter Date">
                        <span class="text-red-700" id="name_error"> </span>
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="current weight">Current Weight</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="current_weight"  name="current_weight"type="float" placeholder="Enter current weight">
                    </div>
                    <div class="w-1/2 ml-1">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="current height">Current Height</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="current_height" name="current_height" type="float" placeholder="Enter current height">
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="leaving_reason">Reason For Leaving</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="leaving_reason" name="leaving_reason" type="text" placeholder="Enter leaving reason">
                    </div>
                    <div class="w-1/2 ml-1">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="remarks">User Remarks</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="remarks" name="user_remarks" type="text" placeholder="Give Some Remarks">
                    </div>
                </div>
                <div class="flex justify-center mt-8">
                    <button class="bg-black hover:bg-white hover:text-black border-2 text-white font-bold py-2 px-8  rounded" id="addbtn" name="btn" type="submit" >
                        Add Report
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div> 

</body>
</html>