<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <body>
        <div class="title">
            <h1>Lista de Livros</h1>
            <a href="#"><button>Cadastrar Livro!</button></a>
        </div>

        <table class="prod-table" border="1">
            <tr>
                <th>Id</th>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Ano</th>
            </tr>

            <?php //foreach ($livros as $livro) { ?>
                <tr>
                    <td><?php //echo $livro->getId(); ?></td>
                    <td><?php //echo $livro->getTitulo(); ?></td>
                    <td><?php //echo $livro->getAutor(); ?></td>
                    <td><?php //echo $livro->getAno(); ?></td>
                </tr>
            <?php // } ?>
        </table>
        <br><br><br>
        <footer>
            <span>MicroDick Company TM - 2009</span>
        </footer>

        <script>
            function L() {
                console.log("Preciso te contar Light Yagami... Eu sou L!");
            } 
        </script>
    </body>

</html>