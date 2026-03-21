<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/52ff4c741b.js" crossorigin="anonymous"></script>
    <title>Postagens</title>
    <link rel="stylesheet" href="style.css">
    <style>
        *{
            margin: 0px;
            padding: 0px;
        }

        h1{
            margin: 10px;
        }

        #table-container{
            border-radius: 5px;
            margin: 10px;
            overflow: hidden;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.219);
        }

        table{
            border-collapse: collapse;
            width: 100%;
        }

        thead{
            background-color: #2e3e50;
            color: white;
        }

        tr:nth-child(even){
            background-color: #e6e6e6;
        }

        td, th{
            font-size: .8em;
            padding: 10px;
            text-align: center;
        }

        #btn-add{
            background-color: #2e3e50;
            color: white;
        }

        #btn-add a{
            color: white;
            text-decoration: none;
        }

        @media screen and (min-width: 800px) {
            td, th{
                font-size: 1em;
            }
        }
    </style>
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
                            <td class="badge-ativo">Ativo</td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Titulo</td>
                            <td>Conteúdo</td>
                            <td>Categoria</td>
                            <td class="badge-ativo">Ativo</td>
                        </tr>
                            <td>002</td>
                            <td>Titulo</td>
                            <td>Conteúdo</td>
                            <td>Categoria</td>
                            <td class="badge-inativo">Inativo</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" id="btn-add"><i class="fa-solid fa-plus"></i> <a href="usuarios.php">Adicionar postagem</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>
    </div>
    <footer><?php include("rodape.php");?></footer>
</body>
</html> 