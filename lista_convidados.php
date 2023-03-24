<?php
session_start();
if (!isset($_SESSION['convidados'])) {

    $_SESSION['convidados'] = array();
}
if (isset($_POST['adicionar'])) {

    if (!empty($_POST['novo_convidado'])) {

        $novo_convidado = $_POST['novo_convidado'];
        array_push($_SESSION['convidados'], $novo_convidado);
    }
}
if (isset($_POST['limpar'])) {
    $_SESSION['convidados'] = array();
    session_destroy();
}

sort($_SESSION['convidados']);
?>

<!DOCTYPE html>
<html>

<head>
    <title>Lista de Convidados</title>
</head>

<body>
    <h1>Lista de Convidados</h1>


    <form method="post">
        <label for="novo_convidado">Quem vai? </label>
        <input type="text" name="novo_convidado" id="novo_convidado">
        <button type="submit" name="adicionar">Adicionar</button>
        <button type="submit" name="limpar">Limpar Lista</button>
    </form>
    <?php if (!empty($_SESSION['convidados'])) : ?>
        <ul>
            <?php foreach ($_SESSION['convidados'] as $convidado) : ?>
                <li><?php echo $convidado; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php else : ?>
        <p>Não há convidados na lista.</p>
    <?php endif; ?>
</body>

</html>