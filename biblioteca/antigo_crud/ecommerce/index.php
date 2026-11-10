<?php 
require_once "./classes/Produto.php";

$conteudoArquivo = file_get_contents("./bd.json");
$dados = json_decode($conteudoArquivo, true);

$produtosArray = $dados["produtos"];
$produtos = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["fname"])) {
        $nomeBuscado = $_POST["fname"];

        foreach ($produtosArray as $produto) {
            if ($produto[0] == $nomeBuscado) {
                $prod = new Produto($produto[0], $produto[1], $produto[2]);
                array_push($produtos, $prod);
            }
        }
    }

    if (isset($_POST["id"])) {
        $id = $_POST["id"];
        foreach ($produtosArray as $key => &$produto) {
            if ($produto["id"] == $id) {
                unset($produtosArray[$key]);
                break;
            }
        }
    }

    $jsonAtualizado = json_encode($dados, JSON_PRETTY_PRINT);
    file_put_contents("bd.json", $jsonAtualizado);

} else {

    foreach ($produtosArray as $produto) {
        $prod = new Produto($produto["id"], $produto["nome"], $produto["quantidade"], $produto["preco"]);
        array_push($produtos, $prod);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Nosso Ecommerce</title>
</head>
<body>
    <div class="navbar">
        <h1>Nosso Ecommerce</h1>
    </div>
    <br><br>

    <div class="line">
        <div style="width: 95%">
            <form action="#" method="POST">
                <label for="fname">Nome:</label>
                <input type="text" id="fname" name="fname">
                <input type="submit" value="Buscar">
            </form>
        </div>
        <div style="width: 5%">
            <a href="./criarProduto.php">+</a>
        </div>
    </div>
    <br>

    <table class="prod-table" border="1">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Ações</th>
        </tr>

        <?php foreach ($produtos as $produto) { ?>
            <tr>
                <td><?php echo $produto->getId(); ?></td>
                <td><?php echo $produto->getNome(); ?></td>
                <td>R$ <?php echo $produto->getPreco(); ?></td>
                <td><?php echo $produto->getQuantidade(); ?></td>
                <td>
                    <div>
                        <form action="#" method="POST">
                            <input id="id" name="id" type="hidden" value=<?php echo $produto->getId() ?> />
                            <button type="submit">Excluir</button>
                        </form>
                        <form action="./editarProduto.php" method="GET">
                            <input id="id" name="id" type="hidden" value=<?php echo $produto->getId() ?> />
                            <button type="submit">Editar</button>
                        </form>
                    </div>
                </td>
            </tr>
        <?php } ?>
    </table>
    <br><br><br>

</body>
</html>