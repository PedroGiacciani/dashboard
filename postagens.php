<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/52ff4c741b.js" crossorigin="anonymous"></script>
    <title>Postagens</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tabelas.css">
</head>
<body>
    <div class="sep">
        <header><?php include("menu.php");?></header>
        <main>
            <h1>Gestão de postagens</h1>
            <div id="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Título</th>
                            <th>Conteúdo</th>
                            <th>Categoria</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Titulo</td>
                            <td>Conteúdo</td>
                            <td>Categoria</td>
                            <td><mark class="badge ativo">Ativo</mark></td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Titulo</td>
                            <td>Conteúdo</td>
                            <td>Categoria</td>
                            <td><mark class="badge ativo">Ativo</mark></td>
                        </tr>
                            <td>002</td>
                            <td>Titulo</td>
                            <td>Conteúdo</td>
                            <td>Categoria</td>
                            <td><mark class="badge inativo">Inativo</mark></td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" id="btn-add"><i class="fa-solid fa-plus"></i> <a href="add-postagens.php">Adicionar postagem</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>
    </div>
    <footer><?php include("rodape.php");?></footer>
</body>
</html> 