<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Admin Panel</title>

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

<div class="flex-container">
    <div> 
        <img src="logo.png" alt="" width="150px" height="150px">
    </div>
    <div class="my-12 ml-auto mr-auto ">
        <h1 class="text-6xl font-extrabold text-center text-white "> Muscle Fit </h1>
        <h1 class="text-4xl font-bold text-center text-white "> Lift like a worker and look like a boss </h1>
    </div>
</div> 
    
<div class="grid grid-cols-3 px-12">

    <a href="admission.php">
        <div class="bg-white p-4 m-2 shadow-xl rounded-md  "> 
            <h1 class="font-bold text-2xl mt-2 text-center">Admission</h1>
            <img src="admission.png" alt="" class="h-24 w-24  ml-auto mr-auto">
        </div>
    </a>

    <a href="fee.php">
        <div class="bg-white p-4 m-2 shadow-xl rounded-md  "> 
            <h1 class="font-bold text-2xl mt-2 text-center">Fees</h1>
            <img src="fee.png" alt="" class="h-24 w-24  ml-auto mr-auto">
        </div>
    </a>

    <a href="report.php">
        <div class="bg-white p-4 m-2 shadow-xl rounded-md  "> 
            <h1 class="font-bold text-2xl mt-2 text-center">Report</h1>
            <img src="report.png" alt="" class="h-24 w-24  ml-auto mr-auto">
        </div>
    </a>

</div>
</body>
</html>