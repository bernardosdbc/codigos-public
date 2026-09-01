<?php

require_once 'to-do_list.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['descricao'])) {

        $descricao = $_POST['descricao'];
        novaTarefa($descricao);

    } elseif (isset($_POST['excluir_id'])) {

        $id = $_POST['excluir_id'];
        excluirTarefa($id);

    } elseif (isset($_POST['concluir_id'])) {

        $id = $_POST['concluir_id'];
        concluirTarefa($id);
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <title>Lista de Tarefas</title>
</head>

<body>

    <h1>Minha Lista de Tarefas</h1>

    <form method="POST">

        <input
            type="text"
            name="descricao"
            placeholder="Digite uma tarefa..."
        >

        <button type="submit">
            Adicionar
        </button>

    </form>

    <hr>

    <h2>Tarefas</h2>

    <?php exibirTarefas(); ?>

</body>

</html>