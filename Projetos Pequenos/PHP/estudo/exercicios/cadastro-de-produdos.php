<?php

$rodando = true;

$produtos = [];

function cadastrarProduto($nome, $preco, $quantidade)
    {
        global $produtos;

        foreach($produtos as $produto)
            {
                if($produto["nome"] === $nome)
                    {
                        echo "Produto ja cadastrado!" . PHP_EOL;
                        return;   
                    }
            }

        $produto = [
            "nome" => $nome,
            "preco" => $preco,
            "quantidade" => $quantidade
        ];

        $produtos[] = $produto;
        
        echo "Produto cadastrado com sucesso!" . PHP_EOL;
    }

while ($rodando)
    {
        echo "=== SISTEMA DE PRODUTOS ===" . PHP_EOL;
        echo "1- Cadastrar produto". PHP_EOL;
        echo "2- Listar produtos". PHP_EOL;
        echo "3- Buscar produto". PHP_EOL;
        echo "4- Remover produto". PHP_EOL;
        echo "5- Calcular valor total do estoque". PHP_EOL;
        echo "0- Sair". PHP_EOL;

        $opcao = readline("Escolha uma opcao: ");

        switch($opcao)
        {
            case "0":

                $rodando = false;
                break;

            case "1":

                echo "Digite o nome do produto: " . PHP_EOL;
                $nome = readline();

                echo "Digite o preço do produto: " . PHP_EOL;
                $preco = floatval(readline());

                echo "Digite a quantidade do produto: " . PHP_EOL;
                $quantidade = intval(readline());

                cadastrarProduto($nome, $preco, $quantidade);
                break;
            
            case "2":

                foreach($produtos as $produto)
                {
                    echo "Nome: " . $produto["nome"] . PHP_EOL;
                    echo "Preço: " . $produto["preco"] . PHP_EOL;
                    echo "Quantidade: " . $produto["quantidade"] . PHP_EOL;
                    echo "-------------------------" . PHP_EOL;
                }
                break;

            case "3":

                echo "Digite o nome do produto". PHP_EOL;

                $nomeProduto = readline();

                foreach($produtos as $produto)
                {
                    if ($produto["nome"] === $nomeProduto)
                    {
                        echo "Nome: " . $produto["nome"] . PHP_EOL;
                        echo "Preço: " . $produto["preco"] . PHP_EOL;
                        echo "Quantidade: " . $produto["quantidade"] . PHP_EOL;
                        echo "-------------------------" . PHP_EOL;
                    }
                }
                break;

            case "4":

                echo "Digite o nome do produto que deseja remover: " . PHP_EOL;

                $nomeProduto = readline();

                foreach($produtos as $index => $produto)
                {
                    if ($produto["nome"] === $nomeProduto)
                    {
                        $produtos[$index]["quantidade"]--;
                        echo "Produto removido com sucesso!" . PHP_EOL;
                    }
                    break;
                }
                break;

            case "5":

                $valorTotal = 0;

                foreach($produtos as $produto)
                {
                    $valorTotal += $produto["preco"] * $produto["quantidade"];
                }

                echo "Valor total do estoque: R$ " . number_format($valorTotal, 2, ',', '.') . PHP_EOL;
                break;
            
        }
    }
