<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio 2</title>
    <link rel="stylesheet" href="styles2.css">
</head>
<body>
    
    <main>
        <h1>Trabalhando com números aleatórios</h1>
<?php 
$gerado =rand(0,100);
echo"Gerado um número aleatório entre 0 e 100...<br>
O valor gerado foi<strong> $gerado</strong>
<p>
";

?>
 <button onclick="javascript:history.go(-0)">&#128260; Gerar outro</button>


    </main>
    
</body>
</html>