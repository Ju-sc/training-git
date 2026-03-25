<?php

session_start();

$numerodojogador = $_POST["numero"] ?? NULL;

if (!empty($numerodojogador)){
    $randomNumber = rand(1, 10);
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
    <div class="mb-4">
                <label for="numero" class="block text-gray-700 font-medium mb-2">
                numero
                </label>
                <input
                    type="numero"
                    name="numero"
                    required
                    placeholder="Digite seu numero"
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                >
            </div>
    
    <?php if (!empty($numerodojogador)): ?>
        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                <?php echo $randomNumber; ?>
        </div> 
    <?php endif; ?>
</body>



</html>