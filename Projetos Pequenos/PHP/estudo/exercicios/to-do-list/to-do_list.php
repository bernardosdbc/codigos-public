<?php

function carregarTarefas() 
{
    $arquivo = 'tarefas.json';
    if (file_exists($arquivo)) {
        $conteudo = file_get_contents($arquivo);
        $dados = json_decode($conteudo, true);
        return $dados['tarefas'] ?? [];
    }
    return [];
}

function novaTarefa($descricao) 
{
    $tarefas = carregarTarefas();
    $novoId = 1;
    foreach($tarefas as $tarefa)
    {
        if($tarefa["id"] >= $novoId)
        {
            $novoId = $tarefa["id"] + 1;
        }
    }
    $tarefas[] = 
    [
        'id' => $novoId,
        'descricao' => $descricao,
        'concluida' => false
    ];
    salvarTarefas($tarefas);    
}

function salvarTarefas($tarefas) 
{
    $dados = ['tarefas' => $tarefas];
    file_put_contents('tarefas.json', json_encode($dados, JSON_PRETTY_PRINT));
}

function exibirTarefas() 
{
    $tarefas = carregarTarefas();
    if (empty($tarefas)) {
        echo "<p>Nenhuma tarefa encontrada.</p>";
    } else {
        echo "<ul>";
        foreach ($tarefas as $tarefa) {
            $concluida = $tarefa['concluida'] ? 'checked' : '';
            echo "<li>
                    <input type='checkbox' data-id='{$tarefa['id']}' class='concluir-tarefa' $concluida>
                    <span class='descricao'>{$tarefa['descricao']}</span>
                    <button data-id='{$tarefa['id']}' class='excluir-tarefa'>Excluir</button>
                  </li>";
        }
        echo "</ul>";
    }
}

function excluirTarefa($id)
{
    $tarefas = carregarTarefas();

    foreach ($tarefas as $indice => $tarefa) {
        if ($tarefa['id'] == $id) {
            unset($tarefas[$indice]);
            $tarefas = array_values($tarefas);
            break;
        }
    }

    salvarTarefas($tarefas);
}

function concluirTarefa($id)
{
    $tarefas = carregarTarefas();

    foreach ($tarefas as &$tarefa) {
        if ($tarefa['id'] == $id) {
            $tarefa['concluida'] = !$tarefa['concluida'];
            break;
        }
    }

    salvarTarefas($tarefas);
}