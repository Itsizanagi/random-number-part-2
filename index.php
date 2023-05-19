<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>Números Aleatorios</main>
    <?php 
    $min = 0;
    $max = 100;
    $num = mt_rand($min, $max);
    echo "O numero gerado entre $min e $max... \n";
    echo "Foi de <strong>$num</strong>"
    ?> 
<button onclick="javascript:document.location.reload()">&#x1F504; de novo  </button> // criar botão de reload 

</body>
</html>
