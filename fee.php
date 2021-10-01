
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

<div class="m-auto bg-gray-200 p-4 text-center shadow-xl rounded-md w-1/4 " id="member_list"> 
            <button class="font-bold text-2xl mt-2 text-center">Member List</button>
        </div>


<div class="container flex justify-center mx-auto" >
    <div class="border-b border-gray-600 shadow" id="fee_list" hidden>
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
                        <tr class="whitespace-nowrap">
                            <td class="px-6 py-4 text-sm text-gray-500">
                                1
                            </td>
                            <td class="px-6 py-4">
                                <div class="text-sm text-gray-900">
                                    Ali
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <button class="px-4 py-1 text-sm text-white bg-green-600 rounded" disabled>Paid</button>
                            </td>
                        
                        </tr>
                       
                    
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

