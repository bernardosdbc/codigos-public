# Plano de estudos: PHP até Laravel

Este roteiro é para quem começa do zero em PHP e quer chegar a uma **To-Do List em Laravel**. Estude na ordem proposta: cada etapa prepara a próxima.

## Ordem de estudo

1. PHP básico
2. PHP intermediário
3. Formulários + HTTP
4. CRUD com JSON
5. SQL + MySQL
6. CRUD com MySQL
7. Programação orientada a objetos (OOP)
8. Laravel
9. Projeto final: To-Do List em Laravel

---

## 1. PHP básico

**Objetivo:** aprender a lógica e a sintaxe essencial para criar programas simples.

### Tópicos e conceitos

- Variáveis e tipos de dados: `string`, `int`, `float` e `bool`
- Operadores matemáticos, de comparação e lógicos
- Decisões: `if`, `else`, `elseif` e `switch`
- Repetições: `for`, `while` e `foreach`
- Arrays
- Funções, parâmetros e retorno
- Exibir dados com `echo`

### Projetos progressivos

- **Calculadora:** dois números, uma operação e o resultado.
- **Sistema de notas:** calcular a média e informar aprovado, recuperação ou reprovado.
- **Jogo de adivinhação:** gerar um número e permitir tentativas do usuário.

**Avance quando:** conseguir usar condições, laços, arrays e funções em programas pequenos sem apenas copiar código.

---

## 2. PHP intermediário

**Objetivo:** manipular e organizar dados de uma maneira útil para aplicações.

### Tópicos e conceitos

- Arrays associativos e multidimensionais
- Strings: concatenação, busca, substituição e formatação
- `include`, `require` e suas versões `*_once`
- Leitura e escrita de arquivos
- JSON: converter array em JSON e JSON em array
- Validação de dados e tratamento básico de erros
- Organização simples do projeto em arquivos

### Projetos progressivos

- **Agenda simples:** cadastrar e listar contatos em um arquivo JSON.
- **Sistema de notas melhorado:** separar o código em arquivos e salvar dados em JSON.

**Avance quando:** entender como os dados podem continuar existindo após o programa terminar.

---

## 3. Formulários + HTTP

**Objetivo:** entender como o navegador envia dados para o PHP e recebe uma resposta.

### Tópicos e conceitos

- HTML básico e formulários
- Campos `input`, `select`, `textarea` e `button`
- Métodos `GET` e `POST`
- `$_GET`, `$_POST` e `$_SERVER`
- Validação e limpeza dos dados recebidos
- Redirecionamento com `header()`
- Noções de requisição, resposta, URL e status HTTP

### Projetos progressivos

- **Calculadora web:** um formulário envia os valores para o PHP calcular.
- **Cadastro de aluno:** formulário recebe nome e notas; a página mostra média e situação.

**Avance quando:** conseguir receber dados de formulário, validá-los e exibir um resultado.

---

## 4. CRUD com JSON

**Objetivo:** montar uma aplicação completa de tarefas antes de usar banco de dados.

CRUD significa:

- **Create:** criar
- **Read:** ler/listar
- **Update:** editar/atualizar
- **Delete:** excluir

### Tópicos e conceitos

- Ler e escrever arquivos JSON
- IDs para identificar registros
- Exibir listas em HTML
- Formulários de criação e edição
- Parâmetros na URL
- Redirecionamento após ações

### Projeto: To-Do List com JSON

Crie uma lista de tarefas com:

- Adicionar tarefa
- Listar tarefas
- Editar o título
- Marcar como concluída
- Excluir tarefa
- Salvar tudo em `tarefas.json`

**Avance quando:** entender todo o fluxo do CRUD e perceber por que JSON não é a melhor escolha para sistemas maiores.

---

## 5. SQL + MySQL

**Objetivo:** aprender a armazenar e consultar dados em um banco relacional.

### Tópicos e conceitos

- Banco de dados, tabela, coluna e registro
- Chave primária (`PRIMARY KEY`) e `AUTO_INCREMENT`
- Tipos de dados no MySQL
- `CREATE DATABASE` e `CREATE TABLE`
- `INSERT`, `SELECT`, `WHERE`, `ORDER BY` e `LIMIT`
- `UPDATE` e `DELETE`
- Relacionamentos e introdução a `JOIN`

### Exercícios práticos

- Tabela de alunos e consulta por média.
- Tabela de produtos e filtro por preço.
- Tabela `tasks` com `id`, `title`, `completed`, `created_at` e `updated_at`.

**Avance quando:** conseguir criar uma tabela e executar `INSERT`, `SELECT`, `UPDATE` e `DELETE` diretamente no MySQL.

---

## 6. CRUD com MySQL

**Objetivo:** refazer a To-Do List conectando PHP ao banco de dados.

### Tópicos e conceitos

- Conexão PHP–MySQL com PDO
- Consultas preparadas (prepared statements)
- Parâmetros nas consultas
- Tratamento de erros de banco
- Organização da conexão e funções reutilizáveis
- Segurança básica contra SQL Injection

### Projeto: To-Do List com MySQL

Refaça a etapa anterior, agora com uma tabela no banco:

- Adicionar tarefas ao MySQL
- Listar tarefas do MySQL
- Editar tarefas
- Concluir e reabrir tarefas
- Excluir tarefas
- Filtrar pendentes e concluídas

**Avance quando:** conseguir substituir o arquivo JSON pelo banco sem mudar a lógica central do CRUD.

---

## 7. Programação orientada a objetos (OOP)

**Objetivo:** aprender a estruturar melhor aplicações maiores em PHP.

### Tópicos e conceitos

- Classes e objetos
- Propriedades e métodos
- Construtor
- Visibilidade: `public`, `private` e `protected`
- Encapsulamento, herança e interfaces
- Namespaces
- Autoload com Composer

### Projeto pequeno

Transforme partes da To-Do List em classes, por exemplo `Task`, `TaskRepository` e `Database`.

**Avance quando:** entender que Laravel usa classes, objetos, namespaces e Composer intensamente.

---

## 8. Laravel

**Objetivo:** usar o framework para construir aplicações PHP de forma organizada e produtiva.

### Pré-requisitos

- PHP e HTML básicos
- Formulários e CRUD
- SQL e MySQL
- Noção de Composer e terminal

### Tópicos e conceitos

- Estrutura de projeto Laravel
- Rotas em `routes/web.php`
- Controllers
- Views Blade em `resources/views`
- Models e Eloquent ORM
- Migrations e seeders
- Validação de formulários
- Requests e responses
- Layouts Blade
- Resource controllers
- Configuração no `.env`
- Autenticação, depois do CRUD básico

### Exercícios práticos

- Criar uma rota que mostra uma página.
- Criar controller e view.
- Criar migration e model para `Category`.
- Fazer um CRUD simples de categorias.

**Avance quando:** puder criar um CRUD Laravel com rota, controller, model, migration e view.

---

## 9. Projeto final: To-Do List em Laravel

**Objetivo:** juntar tudo em uma aplicação web organizada e funcional.

### Funcionalidades mínimas

- Criar tarefa
- Listar tarefas
- Editar tarefa
- Marcar como concluída ou pendente
- Excluir tarefa
- Validar o título
- Mostrar mensagens de sucesso e erro

### Fluxo que você vai praticar

```text
Rota
  ↓
Controller
  ↓
Model (Eloquent)
  ↓
MySQL
  ↓
View Blade
```

### Evoluções depois da primeira versão

- Autenticação de usuários
- Tarefas separadas por usuário
- Categorias, prioridades e prazo
- Filtros e busca
- Paginação
- Interface com CSS ou Tailwind
- API de tarefas
- Testes automatizados

---

## Ritmo sugerido

| Etapa | Tempo de referência |
| --- | --- |
| PHP básico | 2 a 3 semanas |
| PHP intermediário | 1 a 2 semanas |
| Formulários + HTTP | 1 semana |
| CRUD com JSON | 1 a 2 semanas |
| SQL + MySQL | 2 semanas |
| CRUD com MySQL | 1 a 2 semanas |
| OOP | 1 a 2 semanas |
| Laravel + projeto final | 3 a 5 semanas |

O ritmo pode variar. O essencial é repetir este ciclo: **aprender um conceito → fazer exercícios → aplicar em uma pequena funcionalidade → revisar o que ficou confuso**.

## Regra prática

Não pule direto para Laravel. Primeiro faça a To-Do List em PHP puro com JSON; depois com MySQL. Assim, no Laravel você reconhecerá os mesmos problemas e entenderá melhor o que o framework está resolvendo.
