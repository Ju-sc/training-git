<?php

session_start();


if (isset($_GET["jogou"])){
    $randomNumber = rand(1, 2);
    if ($randomNumber == 1){
        echo ("coroa");
    } else {
        echo ("cara");
    }
}



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--- Tailwind CSS via CDN --->
    <script src="https://cdn.tailwindcss.com"></script>


</head>

<body>
    <form method="post" action="training-git.php">
                
                      
            <a href="training-git.php?jogou" 
            <button onclick="return confirm('Jogar?')"
            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"> 
                            Clique aqui 
                            </button>
                            </a>
           

    
</body>



</html>