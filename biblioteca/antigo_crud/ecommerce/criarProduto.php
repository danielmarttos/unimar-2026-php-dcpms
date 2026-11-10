<?php
require_once "classes/Produto.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .form-container {
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
            text-align: center;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
        }
        input:focus {
            border-color: #007bff;
            outline: none;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            font-weight: bold;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Cadastro de Produto</h2>
        <form action="#" method="POST">
            
            <!-- Campo Nome -->
            <div class="form-group">
                <label for="nome">Nome do Produto:</label>
                <input type="text" id="nome" name="nome" placeholder="Ex: Camiseta Básica" required>
            </div>

            <!-- Campo Preço -->
            <div class="form-group">
                <label for="preco">Preço (R$):</label>
                <input type="number" id="preco" name="preco" step="0.01" min="0" placeholder="Ex: 49.90" required>
            </div>

            <!-- Campo Quantidade -->
            <div class="form-group">
                <label for="quantidade">Quantidade em Estoque:</label>
                <input type="number" id="quantidade" name="quantidade" min="0" placeholder="Ex: 15" required>
            </div>

            <!-- Botão de Envio -->
            <button type="submit">Cadastrar Produto</button>

        </form>
    </div>

</body>
</html>

<?php 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome  = trim($_POST['nome']);
    $preco = (float) $_POST['preco'];
    $quantidade = $_POST['quantidade'];

    $conteudoArquivo = file_get_contents("bd.json");
    $dados = json_decode($conteudoArquivo, true);

    $idMaior = 0;
    foreach ($dados["produtos"] as $produto) {
        if($produto["id"] > $idMaior) {
            $idMaior = $produto["id"];
        }
    }
    $idMaior = $idMaior + 1;
    $produtoNovo = new Produto($idMaior, $nome, $quantidade, $preco);

    $produtoArray = [ 
        "id" => $produtoNovo->getId(),
        "nome" => $produtoNovo->getNome(), 
        "quantidade" => $produtoNovo->getQuantidade(), 
        "preco" => $produtoNovo->getPreco()
    ];

    array_push($dados["produtos"], $produtoArray);
    $jsonAtualizado = json_encode($dados, JSON_PRETTY_PRINT);
    file_put_contents("bd.json", $jsonAtualizado);
}

?>