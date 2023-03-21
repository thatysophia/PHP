<?php
if (isset($_POST['acao'])) {
    $numeros = filter_input(INPUT_POST, "lista", FILTER_VALIDATE_FLOAT, FILTER_REQUIRE_ARRAY);
    if (!empty($numeros)) {
        $menor = min($numeros);
        $maior = max($numeros);
        $media = array_sum($numeros) / count($numeros);
        echo "O menor número é: " . $menor . "<br>";
        echo "O maior número é: " . $maior . "<br>";
        echo "A média dos números é: " . $media . "<br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="POST">
        <button type="button" onclick="adicionarItem()">Adicionar item</button>
        <button type="button" onclick="removerItem()">Remover item</button>
        <button type="submit" name="acao">Calcular</button>
        <?php
        $num_inputs = 3;
        for ($i = 0; $i < $num_inputs; $i++) {
            echo "<p><input type='number' name='lista[]'/></p>";
        }
        ?>
    </form>
</body>
<script>
    form = document.forms[0];

    function adicionarItem() {
        var item = document.createElement("input");
        item.setAttribute("type", "number");
        item.setAttribute("name", "lista[]");
        var p = document.createElement("p");
        p.appendChild(item);
        form.appendChild(p);
    }

    function removerItem() {
        var lastInput = form.querySelector("input:last-child")
        if (lastInput != null) {
            form.removeChild(lastInput.parentNode)
        }
    }
</script>

</html>