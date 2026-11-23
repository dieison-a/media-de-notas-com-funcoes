<?php
include 'includes/funcoesMedia.inc.php';

$nota1 = $_POST['nota1'];
$nota2 = $_POST['nota2'];
$nota3 = $_POST['nota3'];
$tipoMedia = $_POST['tipoMedia'];

if ($tipoMedia === 'ponderada') {
    $media = calcularMediaPonderada($nota1, $nota2, $nota3);
} else {
    $media = calcularMediaAritmetica($nota1, $nota2, $nota3);
}
?>

<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Resultado da média</title>
    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <main class="card">
        <h1>Resultado</h1>

        <?php exibirNotasEMedia($nota1, $nota2, $nota3, $tipoMedia, $media); ?>

        <p>
            <a class="link" href="index.html">Calcular novamente</a>
        </p>
    </main>
</body>

</html>
