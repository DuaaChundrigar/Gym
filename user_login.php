
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>User</title>

    <style>
        body {
  background-image: url("Gymbg.jpg");
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

<div class="flex-container">
    <div> 
        <img src="logo.png" alt="">
    </div>
    <div class="px-32 ml-32 mt-8">
        <h1 class="text-center text-white font-extrabold text-8xl "> Muscle Fit </h1>
        <h1 class="text-center text-white font-bold text-3xl "> Lift like a worker and look like a boss </h1>
    </div>
</div> 
    

            
        <div class="  bg-gray-500 bg-opacity-75 shadow-xl p-10 mt-16 m-auto rounded w-4/12 "  > 
        <p class=" flex justify-center text-4xl font-bold text-gray-300">Login</p>
                         <form method="post" action="user_login_query.php"> 
                            <input type="text" placeholder="Enter email" name="email" class="rounded border-2 mt-2 p-4 w-full text-md h-10"> 
                            <br>
                            <input type="password" placeholder="********" name="password" class="rounded border-2 w-full text-md p-4 mt-2 h-10 ">
                           
                            <div class="flex justify-between text-xs mt-1 text-white">
                                <p class=" "><input type="checkbox" name="remember">  Remember </p>
                                <p class=" "><a href="#"> Forgot Password? </a></p>
                            </div>

                            <div class="flex justify-center">
                                <button name="login" class="bg-gray-700 px-8 w-2/4  rounded mt-4 h-10 text-2xl font-bold text-white">
                                <a >Login</a></button>
                            </div>
                            
                            <div class="flex justify-center">
                                <span class="error text-white text-center mt-4"> <?php// echo $Err; ?> </span>
                            </div>
                    </form>
                         
                </div>


</body>
</html>