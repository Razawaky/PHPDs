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
        <p>Aluno <?php echo $i + 1; ?>:</p>
        <label for="nome_<?php echo $i; ?>" >Nome:</label>
        <input type="text" name ="nome_<?php echo $i; ?>" required>
        <label for="nota_<?php echo $i; ?>" >Nota:</label>
        <input type="number" name="nota_<?php echo $i; ?>" step="0.01" min="0" max="10" required>
        <br>
    <?php } ?>
    <br>
    <input type="submit" value="Calcular média e maior nota">

</form>

<?php
$alunos = array();
$maiornota = 0;
$alunoMaiorNota = '';

for($i = 0; $i < 10; $i++) {
    $nome = $_POST["nome_$i"];
    $nota = floatval($_POST["nota_$i"]);
    $alunos[] = array("nome" => $nome, "nota" => $nota);
    if ($nota > $maiornota) {
        $maiornota = $nota;
        $alunoMaiorNota = $nome;
    }
}

$somaNotas = 0;

foreach ($alunos as $aluno) {
    $somaNotas += $aluno["nota"];
}
$mediaNotas = $somaNotas / count($alunos);
echo "<h2>Média de Notas de Classe: $mediaNotas</h2>";
echo "<h2>Aluno com Maior Nota: $alunoMaiorNota</h2>";
?>
</body>
</html>