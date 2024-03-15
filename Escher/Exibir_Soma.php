<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibe e faz o calculo da soma de 2 numeros</title>
</head>
<body>
    <?php
        echo "<h3 align='center'>SOMA DE 2 NUMEROS</h3>";
        echo "<hr size='3'color='red'>";
        //Recupera os valore infornados nas caixas de textos, e armazena nas variaveis
    $num1= $_POST ["numero1"];
    $num2 = $_POST["numero2"];
    echo "Numero1:" .$num1;
    echo "<br>Numero2:" .$num2;
    echo "<hr size='3' color='blue' align='left'
    width='165'>";
    // Efetuando e exibindo o calculo
    $soma= $num1 + $num2;
    echo "A soma de $num1 com $num2 é" .$soma;
    
    
    ?>
    
</body>
</html>