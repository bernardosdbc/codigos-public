# Exercício 4 — Lista de Tarefas com JSON

## Objetivo

Crie um programa em PHP executado pelo terminal para organizar uma lista de tarefas. Diferentemente do exercício anterior, os dados não devem desaparecer quando o programa for fechado: use um arquivo JSON para salvar e recuperar as tarefas.

Este exercício continua os conceitos praticados no **Cadastro de Produtos**: funções, arrays, laços de repetição, condicionais e menu com `switch`. A novidade é trabalhar com leitura e gravação de arquivos.

## Contexto

Você vai criar uma lista de tarefas simples. Cada tarefa deve ter, no mínimo:

- `id`: identificador numérico único;
- `titulo`: descrição curta da tarefa;
- `concluida`: informa se a tarefa foi concluída (`true` ou `false`).

Exemplo de uma tarefa:

```json
{
  "id": 1,
  "titulo": "Estudar arrays em PHP",
  "concluida": false
}
```

As tarefas devem ficar armazenadas em um arquivo chamado `tarefas.json`, na mesma pasta do programa.

## Requisitos

1. Ao iniciar o programa, leia o arquivo `tarefas.json`.
   - Se ele ainda não existir ou estiver vazio, comece com uma lista vazia.
2. Mostre um menu repetidamente até a pessoa escolher sair.
3. Sempre que houver uma alteração (adicionar, concluir ou remover), atualize o arquivo JSON.
4. Não permita cadastrar uma tarefa com título vazio.
5. Cada nova tarefa deve receber um `id` único.
6. Ao informar um `id` inexistente para concluir ou remover uma tarefa, mostre uma mensagem adequada.

## Menu sugerido

```text
=== LISTA DE TAREFAS ===
1 - Adicionar tarefa
2 - Listar tarefas
3 - Concluir tarefa
4 - Remover tarefa
0 - Sair
```

Você pode melhorar esse menu, desde que mantenha as funcionalidades principais.

## Funcionalidades esperadas

### 1. Adicionar tarefa

Peça o título da tarefa e adicione-a à lista como pendente (`concluida: false`).

Exemplo:

```text
Digite o título da tarefa: Fazer exercício de PHP
Tarefa adicionada com sucesso!
```

### 2. Listar tarefas

Mostre todas as tarefas cadastradas, incluindo o `id`, o título e o status.

Sugestão de visualização:

```text
[ ] 1 - Fazer exercício de PHP
[x] 2 - Revisar JSON
```

- `[ ]` para tarefa pendente;
- `[x]` para tarefa concluída.

Se não houver tarefas, avise a pessoa.

### 3. Concluir tarefa

Peça o `id` de uma tarefa pendente e altere seu status para concluída.

Exemplo:

```text
Digite o ID da tarefa que deseja concluir: 1
Tarefa concluída com sucesso!
```

Pense também no que deve acontecer se a tarefa já estiver concluída.

### 4. Remover tarefa

Peça o `id` da tarefa e remova apenas a tarefa correspondente da lista.

Exemplo:

```text
Digite o ID da tarefa que deseja remover: 2
Tarefa removida com sucesso!
```

Depois da remoção, salve a lista atualizada no JSON.

## Dicas de estudo

Pesquise e experimente estas funções do PHP:

- `file_exists()` para verificar se o arquivo existe;
- `file_get_contents()` para ler o conteúdo do arquivo;
- `json_decode()` para transformar JSON em array PHP;
- `json_encode()` para transformar o array em JSON;
- `file_put_contents()` para salvar o JSON no arquivo;
- `array_filter()` ou um `foreach` para ajudar na remoção.

Ao usar `json_encode()`, veja como a opção `JSON_PRETTY_PRINT` deixa o arquivo mais organizado para leitura.

## Organização sugerida

Você pode separar o programa em funções, por exemplo:

- uma função para carregar as tarefas do JSON;
- uma função para salvar as tarefas no JSON;
- uma função para adicionar;
- uma função para listar;
- uma função para concluir;
- uma função para remover.

Não é obrigatório usar exatamente esses nomes ou essa divisão. O importante é que o código fique compreensível e que cada responsabilidade esteja bem definida.

## Critérios de conclusão

Considere o exercício concluído quando você conseguir:

- adicionar pelo menos duas tarefas;
- fechar e abrir o programa sem perder as tarefas cadastradas;
- listar corretamente tarefas pendentes e concluídas;
- concluir uma tarefa pelo `id`;
- remover uma tarefa pelo `id`;
- tratar uma opção inválida do menu;
- tratar um `id` que não existe;
- manter o arquivo `tarefas.json` válido após cada alteração.

## Desafio extra (opcional)

Depois de finalizar o básico, escolha um ou mais desafios:

- listar somente tarefas pendentes;
- listar somente tarefas concluídas;
- editar o título de uma tarefa;
- adicionar uma data de criação;
- pedir confirmação antes de remover;
- ordenar as tarefas por status ou título.

Boa prática: implemente primeiro a versão simples funcionando. Depois faça os desafios extras um de cada vez.