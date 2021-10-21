<?php

$conn = new mysqli("localhost", "root", "" , "gym");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

session_start();

if(!isset($_SESSION['email'])){
    header("Location:register_login.php");
}

$sql = "SELECT * FROM users WHERE id=".$_GET['id'];

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
 
        $name = $row['name'];
        $age = $row['age'];
        $phone = $row['phone'];
        $weight = $row['weight'];
        $height = $row['height'];
        $email = $row['email'];
        $admission_date = $row['admission_date'];  
    
    }
} else {
    echo "0 results";
}

  
?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Edit User</title>

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


    <!-- Admisssion Form -->
<div class="w-full bg-grey-lightest" id="admission" >
      <h1 class="text-4xl font-bold text-center text-white my-6 ">Update User</h1>
    <div class="container mx-auto py-8">
      <div class="w-5/6 lg:w-1/2 mx-auto bg-gray-100 rounded shadow">
            <div class="py-4 px-8 text-black font-bold text-xl border-b border-grey-lighter">Update Form</div>
            <div class="py-4 px-8">
                <form action="edit_user_query.php?user_id=<?php echo $_GET['id'] ?>" method="POST" >
                <div class="flex mb-4">
                    <div class=" w-full ml-1">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="name">Name</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="name" name="name" type="text" value="<?php echo $name; ?>" >
                        <span class="text-red-700" id="name_error"> </span>
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="Age">Age</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="age"  name="age"type="number" value="<?php echo $age; ?>" >
                    </div>
                    <div class="w-1/2 ml-1">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="Phone">Phone Number</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="phone" name="phone" type="number" value="<?php echo $phone; ?>" >
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="Weight">Weight in Kilogram</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="weight" name="weight" type="text" value="<?php echo $weight; ?>">
                    </div>
                    <div class="w-1/2 ml-1">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="Height">Height in Meters</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="height" name="height" type="text" value="<?php echo $height; ?>">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="email">Email Address</label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" name="email" type="email" value="<?php echo $email; ?>">
                    <span class="text-red-700" id="email_error"> </span>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="Admission_date">Admission Dates</label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="admission_date" name="admission_date" type="text" value="<?php echo $admission_date; ?>">
                </div>
                <div class="flex justify-center mt-8">
                    <button class="bg-black hover:bg-white hover:text-black border-2 text-white font-bold py-2 px-8  rounded" id="addbtn" name="btn" type="submit">
                        Update user
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div> 


<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(function(){

$('#name').on("keyup",function(){
         var name = $(this).val();
         var email = $('email').val();
       
         if(name.length > 0 && email.length > 0  ){
            $('#addbtn').attr('disabled' , false);
         }else{
            if (name.length > 0) {
                $('#name_error').html("");
                
            }else{
               $('#name_error').html("**Name can not be empty");
            }   
            $('#addbtn').attr('disabled' , true);
         }

      });

         $('#email').on("keyup",function(){
         var name = $('name').val();
         var email = $(this).val();
    
         if(name.length > 0 && email.length > 0 ){
            $('#addbtn' ).attr('disabled' , false);
         }else{  
            $('#addbtn').attr('disabled' , true);
         }

      });

      $("#email").focusout(function() {
            check_email();
         });

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error").hide();
            } else {
               $("#email_error").html("**Invalid Email");
               $("#email_error").show();
               email_error = true;
            }
         }
    
}); -->
</script>
</body>
</html>
