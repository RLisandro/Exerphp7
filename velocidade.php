<!DOCTYPE html>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 7</title>
</head>
<body>
    <!---   Escreva um algoritmo que leia a velocidade de um 
    objeto em m/s (metros por segundo),
     calcule e exiba para o usuário a velocidade em km/h.-->
     <h1>Transformar metros por segundo em Quilometros por hora</h1>
     <label >
        <form  method="POST">
            Velocidade m/s: <input type="text" name="velocidade" >
            <input type="submit" value="Transformar em Km/h">
        </form>
     </label>
</body>
<?php
$velocidade = $_POST["velocidade"];
$trans = $velocidade * 3.6;
print_r("<br><br>A velocidade em m/s é: " . $velocidade. " e em Km/h é: " . $trans);

?>
</html>