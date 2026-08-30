O próximo eu faria um **Sistema de Cadastro de Produtos**.

Ele vai ser um pouco mais difícil que o sistema de notas e vai te fazer praticar **funções**, que é o próximo conceito importante.

## Mini projeto 3 — Cadastro de Produtos

Menu:

```text
=== SISTEMA DE PRODUTOS ===

1 - Cadastrar produto
2 - Listar produtos
3 - Buscar produto
4 - Remover produto
5 - Calcular valor total do estoque
0 - Sair
```

### 1 — Cadastrar

Peça:

```text
Nome do produto: Teclado
Preço: 150
Quantidade: 3

Produto cadastrado!
```

Guarde algo parecido com:

```php
[
    "nome" => "Teclado",
    "preco" => 150,
    "quantidade" => 3
]
```

### 2 — Listar

```text
=== PRODUTOS ===

Teclado
Preço: R$ 150
Quantidade: 3

Mouse
Preço: R$ 80
Quantidade: 5
```

### 3 — Buscar

Peça o nome:

```text
Digite o produto: Teclado

Produto encontrado!
Preço: R$ 150
Quantidade: 3
```

Se não encontrar:

```text
Produto não encontrado.
```

### 4 — Remover

```text
Digite o produto que deseja remover: Mouse

Produto removido!
```

### 5 — Valor total

Se tiver:

```text
Teclado → 150 × 3 = 450
Mouse → 80 × 5 = 400
```

Mostrar:

```text
Valor total do estoque: R$ 850
```

---

## O que você vai praticar

Você já sabe:

- `while`
- `switch`
- `if/else`
- `foreach`
- `readline`
- arrays associativos

Agora quero que você aprenda:

- **funções**
- `return`
- parâmetros
- `array_search()`
- `unset()`
- `count()`
- `number_format()`

E tente **não colocar tudo dentro do `switch`**.

Por exemplo, futuramente:

```php
function cadastrarProduto()
{
    // ...
}

function listarProdutos()
{
    // ...
}

function buscarProduto()
{
    // ...
}
```

A ideia é começar a transformar seu código em partes menores e organizadas.

### Sequência dos projetos

Você está aqui:

```text
✅ 1. Calculadora
✅ 2. Sistema de Notas
👉 3. Cadastro de Produtos
⬜ 4. Lista de Tarefas com JSON
⬜ 5. Lista de Tarefas + MySQL
⬜ 6. To-Do List com Laravel
```

Esse **projeto 3** é um bom momento para começar a estudar **funções junto com a prática**.