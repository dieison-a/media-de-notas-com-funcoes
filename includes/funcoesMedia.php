<?php

function calcularMediaAritmetica($nota1, $nota2, $nota3)
{
    return ($nota1 + $nota2 + $nota3) / 3;
}

function calcularMediaPonderada($nota1, $nota2, $nota3)
{
    $peso1 = 5;
    $peso2 = 3;
    $peso3 = 2;

    $numerador = ($nota1 * $peso1) + ($nota2 * $peso2) + ($nota3 * $peso3);
    $denominador = $peso1 + $peso2 + $peso3;

    return $numerador / $denominador;
}

function exibirNotasEMedia($nota1, $nota2, $nota3, $tipoMedia, $media)
{
    echo '<p><strong>Primeira nota:</strong> ' . number_format($nota1, 2, ',', '.') . '</p>';
    echo '<p><strong>Segunda nota:</strong> ' . number_format($nota2, 2, ',', '.') . '</p>';
    echo '<p><strong>Terceira nota:</strong> ' . number_format($nota3, 2, ',', '.') . '</p>';

    if ($tipoMedia === 'aritmetica') {
        echo '<p><strong>Tipo de média:</strong> Aritmética simples</p>';
    } else {
        echo '<p><strong>Tipo de média:</strong> Ponderada</p>';
    }

    echo '<p><strong>Média:</strong> ' . number_format($media, 2, ',', '.') . '</p>';
}

?>
