<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post">
<?php for ($i = 0; $i < 10; $i++) { ?>
        <p>Numero digitado <?php echo $i + 1; ?>:</p>
        <label for="numero<?php echo $i; ?>" >Numero</label>
        <input type="number" name ="numero<?php echo $i; ?>" required>
        <br>
    <?php } ?>
    <br>
    <input type="submit" value="Conferir">
</form>


<?php
//entre com 10 numeros e armazene em um vetor. Ao final o programa deverá mostrar. 
//- quantos negativos foram digitados; quantos positivos foram digitaods; 
//- Quantos pares e ímpares 

//Vetor para armazenar os numeros e as var dos contadores
$numeros = [];
$negativo = 0;
$positivo = 0;
$par = 0;
$impar = 0;

//Vai ler os 10 numeros e armazenar em um vetor
for($i = 0; $i < 10; $i++) {
    $n = $_POST["numero$i"];
    $numeros[] = $n ;

    //Mostra se o numero é Postivo ou Negativo
    if($n > 0 ) {
        $positivo++;
    } else {
        $negativo++;
    } 

    //Mostra se o numero é ímpar ou Par
    if($n % 2 == 0) {
        $par++;
    } else {
        $impar++;
    }
}

echo "<br>" .$positivo ." numeros positivos foram digitados e " .$negativo ." numeros negativos foram digitados" ."<br><br>";
echo $impar ." numeros impares foram digitados e " .$par ." ,numeros pares foram digitados";
?>

</body>
</html>