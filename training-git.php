<?php

session_start();

$jogou = FALSE;
$jogada = "";

if (isset($_GET["jogou"])){
    $jogou = TRUE;
    $randomNumber = rand(1, 2);
    if ($randomNumber == 1){
        $jogada = "coroa";
    } else {
        $jogada = "cara";
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

    <link rel="stylesheet" href="css/style.css">
    <style>
    /* The animation code */
    @keyframes myAnimation {
    from {background-color: black;}
    to {background-color: white;}
    }

    /* The element to apply the animation to */
    div {
    width: 100px;
    height: 50px;
    animation-name: myAnimation;
    animation-duration: 1s; /* Required property for the animation to run */

    animation-direction: alternate; /* Makes it reverse direction each time */
    }
</style>

</head>

<body>
    <?php if (isset($_GET["jogou"])): ?>
    <div class="div  border border-black-900 px-4 py-3 rounded mb-6">
                <?php echo $jogada; ?>
    </div>
    <?php endif; ?>
   

    <form method="post" action="training-git.php">
                
                      
            <a href="training-git.php?jogou" 
            type="submit"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <?= $jogou ? "jogar novamente" : "jogar" ?>
                            </button>
                            </a>
           

    
</body>



</html>