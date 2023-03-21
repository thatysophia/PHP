<?php

$tipo_de_peca = "calça";
$quantidade = 15;
$preco = 94.90;

if ($quantidade >= 10) {
    $desconto = 0.2;
} else if ($quantidade >= 5) {
    $desconto = 0.1;
} else {
    $desconto = 0;
}

$total_sem_desconto = $preco * $quantidade;
$valor_desconto = $total_sem_desconto * $desconto;
$total_com_desconto = $total_sem_desconto - $valor_desconto;

switch ($tipo_de_peca) {
    case "calça":
        $valor_unitario = $preco;
        break;

    default:
        $valor_unitario = 0;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loja de Roupas</title>
</head>

<body>
    <h1>Detalhes da compra</h1>
    <p>Tipo de peça: <?php echo $tipo_de_peca; ?></p>
    <p>Quantidade: <?php echo $quantidade; ?></p>
    <p>Valor unitário: R$ <?php echo number_format($valor_unitario, 2, ",", "."); ?></p>
    <p>Total sem desconto: R$ <?php echo number_format($total_sem_desconto, 2, ",", "."); ?></p>
    <p>Desconto: <?php echo ($desconto * 100) . "%"; ?></p>
    <p>Valor do desconto: R$ <?php echo number_format($valor_desconto, 2, ",", "."); ?></p>
    <p>Total com desconto: R$ <?php echo number_format($total_com_desconto, 2, ",", "."); ?></p>
</body>

</html>