<?php

$rodando = true;

$alunos = [];

while ($rodando)
{
    echo "=== SISTEMA DE NOTAS ===" . PHP_EOL;
    echo "1- Cadastrar aluno". PHP_EOL;
    echo "2- Listar alunos". PHP_EOL;
    echo "3- Mostrar aprovados". PHP_EOL;
    echo "4- Mostrar reprovados". PHP_EOL;
    echo "0- Sair". PHP_EOL;

    $opcao = readline("Escolha uma opcao: ");

    switch ($opcao)
    {
        case "0":
            $rodando = false;
            break;

        case "1":
            $nome = readline("Nome do aluno: ");
            $nota1 = (float) readline("Nota1: ");
            $nota2 = (float) readline("Nota2: ");
            $nota3 = (float) readline("Nota3: ");

            $aluno = [
                "nome" => $nome,
                "nota1" => $nota1,
                "nota2" => $nota2,
                "nota3" => $nota3,
                "media" => ($nota1 + $nota2 + $nota3) / 3,
            ];

            $alunos[] = $aluno;

            break;

        case "2":
            foreach ($alunos as $aluno) {
                echo "Nome: " . $aluno["nome"] . PHP_EOL;
                echo "Media: " . $aluno['media'] . PHP_EOL;
            }
            break;
        
        case'3':
            foreach ($alunos as $aluno) {
                if ($aluno['media'] >= 7) {
                    echo "Nome: " . $aluno["nome"] . PHP_EOL;
                    echo "Media: " . $aluno['media'] . PHP_EOL;
                }
            }
            break;
        
        case '4':
            foreach ($alunos as $aluno) {
                if ($aluno['media'] < 7) {
                    echo "Nome: " . $aluno["nome"] . PHP_EOL;
                    echo "Media: " . $aluno['media'] . PHP_EOL;
                }
            }
            break;
    }
}