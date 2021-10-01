<?php
$conn = new mysqli("localhost", "root", "" , "gym");

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
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
</div> 

<div class="grid grid-cols-2 px-12">

    
        <div class="  w-3/4 " id="member"> 
            <button class="p-4 ml-96  shadow-xl rounded-md bg-gray-200 font-bold text-2xl mt-2 w-2/4 text-center">Member List</button>
        </div>


   
        <div class=" w-3/4 "  id="add"> 
            <button class="bg-gray-200 p-4 m-2 shadow-xl rounded-md w-2/4 font-bold text-2xl mt-2 text-center">Add New User</>
        </div>
  

</div>


<!-- List of Users -->

<div class="container flex justify-center mx-auto" >
    <div class="border-b border-gray-600 shadow" id="user_list" hidden>
                <h1 class=" text-4xl font-bold text-center text-white my-6 ">All Members List</h1>
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
                                Action
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
                            <td class="px-6 py-4">
                                <a href="edit_user.php" <?php echo $user['id'] ?> class="px-4 py-1 text-sm text-white bg-blue-600 rounded edit">Edit</a>
                                <a href="#" data-userid="<?php echo $user['id'] ?>" class="px-4 py-1 text-sm text-white bg-red-600 rounded delete" >Delete</a>
                            </td>
                        </tr>

                    <?php
                        }
                    ?>    
                       
                      
                    
                    </tbody>
                </table>
            </div>
</div>

<!-- Admisssion Form -->
<div class="w-full bg-grey-lightest" id="admission" hidden >
      <h1 class="text-4xl font-bold text-center text-white my-6 ">Add New User</h1>
    <div class="container mx-auto py-8">
      <div class="w-5/6 lg:w-1/2 mx-auto bg-gray-100 rounded shadow">
            <div class="py-4 px-8 text-black font-bold text-xl border-b border-grey-lighter">Admission Form</div>
            <div class="py-4 px-8">
                <form action="admission_form.php" method="post" >
                <div class="flex mb-4">
                    <div class=" w-full ml-1">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="name">Name</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="name" name="name" type="text" placeholder="Your Name">
                        <span class="text-red-700" id="name_error"> </span>
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="Age">Age</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="age"  name="age"type="number" placeholder="Your Age">
                    </div>
                    <div class="w-1/2 ml-1">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="Phone">Phone Number</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="phone" name="phone" type="number" placeholder="Your Phone Number">
                    </div>
                </div>
                <div class="flex mb-4">
                    <div class="w-1/2 mr-1">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="Weight">Weight in Kilogram</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="weight" name="weight" type="text" placeholder="Your Weight">
                    </div>
                    <div class="w-1/2 ml-1">
                        <label class="block text-grey-darker text-sm font-bold mb-2" for="Height">Height in Meters</label>
                        <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="height" name="height" type="text" placeholder="Your Height">
                    </div>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="email">Email Address</label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="email" name="email" type="email" placeholder="Your email address">
                    <span class="text-red-700" id="email_error"> </span>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="Admission_date">Admission Dates</label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="admission_date" name="admission_date" type="text" placeholder="Your Admission date">
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="password">Password</label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="password" name="password" type="password" placeholder="Enter Password">
                    <span class="text-red-700" id="password_error"> </span>
                </div>
                <div class="mb-4">
                    <label class="block text-grey-darker text-sm font-bold mb-2" for="confirm_password">Enter Confirm Password</label>
                    <input class="appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="confirm_password" name="confirm_password" type="password" placeholder="Enter Confirm Password">
                    <span class="text-red-700" id="confirm_password_error"> </span>
                </div>
                <div class="flex justify-center mt-8">
                    <button class="bg-black hover:bg-white hover:text-black border-2 text-white font-bold py-2 px-8  rounded" id="addbtn" name="btn" type="submit" disabled>
                        Add new user
                    </button>
                </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</div> 
  <!-- Footer -->
  <!-- <footer class="w-full bg-grey-lighter py-8">
    <div class="container mx-auto text-center px-8">
        <p class="text-white mb-2 text-sm">This is a product of <span class="font-bold">Your Company</span></p>
    </div>
  </footer> -->

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(function(){
  

        $('.delete').on('click' , function () {

                var user_id = $(this).data('userid');

                window.location = "queries/delete_user.php?user_id="+user_id;

        });

        $('.edit').on('click' , function () {

        var user_id = $(this).data('userid');

        window.location = "queries/edit_user.php?user_id="+user_id;

        });


        $("#member").click(function(){
                $("#user_list").show();
                $("#admission").hide();
            
        });
        
        $("#add").click(function(){
                $("#admission").show();
                $("#user_list").hide();
        });

        $('#name').on("keyup",function(){
         var name = $(this).val();
         var email = $('email').val();
         var password = $('#password').val();
         var confirm_password = $('#confirm_password').val();

         if(name.length > 0 && email.length > 0 && password.length > 0 && confirm_password.length > 0 ){
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
         var password = $('#password').val();
         var confirm_password = $('#confirm_password').val();

         if(name.length > 0 && email.length > 0 && password.length > 0 && confirm_password.length > 0  ){
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

         $('#password').on("keyup",function(){
         var name = $('#name').val();
         var email = $('#email').val();
         var password = $(this).val();
         var confirm_password = $('#confirm_password').val();

         if(name.length > 0 && email.length > 0 && password.length > 0 && confirm_password.length > 0  ){
            $('#addbtn').attr('disabled' , false);
         }else{
            if (password.length > 0) {
                $('#password_error').html("");
                
            }else{
               $('#password_error').html("**password can not be empty");
            }   
            $('#addbtn').attr('disabled' , true);
         }

      });

      $("#password").focusout(function() {
            check_password();
         });

         function check_password() {
            var password_length = $("#password").val().length;
            if (password_length < 8) {
               $("#password_error").html("**Atleast 8 Characters");
               $("#password_error").show();
               error_password = true;
            } else {
               $("#password_error").hide();
            }
         }


         $('#confirm_password').on("keyup",function(){
         var name = $('#name').val();
         var email = $('#email').val();
         var password = $('#password').val();
         var confirm_password = $(this).val();

         if(name.length > 0 && email.length > 0 && password.length > 0 && confirm_password.length > 0 && password == confirm_password ){
            $('#addbtn').attr('disabled' , false);
         }else{
            $('#addbtn').attr('disabled' , true);
         }

      });

      $("#confirm_password").focusout(function() {
            check_password_confirm();
         });

      function check_password_confirm() {
            var password = $("#password").val();
            var retype_password = $("#confirm_password").val();
            if (password !== retype_password) {
               $("#confirm_password_error").html("**Passwords Did not Matched");
               $("#confirm_password_error").show();
               confirm_password_error = true;
            } else {
               $("#confirm_password_error").hide();
            }
         }
    
});
</script>
</body>
</html>