<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/52ff4c741b.js" crossorigin="anonymous"></script>
    <title>Postagens</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tabelas.css">
    <style>
        #tableh h1{
            margin: 10px;
        }

        #tableh{
            display: flex;
            flex-direction: row;
            justify-content: space-between; 
            align-items: center;
            margin: 10px;
        }

        #tableh  button{
            border-radius: 5px;
            border: 1px solid black;
            padding: 10px;
            background-color: #2743c0;
            color: white;
            cursor: pointer;
            transition-duration: .2s;
        }

        #tableh  button:hover{
            background-color: #5272ff;
        }

        #tableh i{
            margin-right: 5px;
        }
    </style>
</head>
<body>
    <div class="sep">
        <header><?php include("menu.php");?></header>
        <main>
            <div id="tableh">
                <h1>Gestão de postagens</h1>
                <a href="add-postagens.php"><button class="add"><i class="fa-solid fa-user-plus"></i> Adicionar postagem</button></a>
            </div>
            <div id="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Título</th>
                            <th>Conteúdo</th>
                            <th>Categoria</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Titulo</td>
                            <td>Conteúdo</td>
                            <td>Categoria</td>
                            <td><mark class="badge ativo">Ativo</mark></td>
                            <td>
                                <i class="fa-solid fa-pen"></i>
                                <i class="fa-solid fa-trash-can"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Titulo</td>
                            <td>Conteúdo</td>
                            <td>Categoria</td>
                            <td><mark class="badge ativo">Ativo</mark></td>
                            <td>
                                <i class="fa-solid fa-pen"></i>
                                <i class="fa-solid fa-trash-can"></i>
                            </td>
                        </tr>
                            <td>002</td>
                            <td>Titulo</td>
                            <td>Conteúdo</td>
                            <td>Categoria</td>
                            <td><mark class="badge inativo">Inativo</mark></td>
                            <td>
                                <i class="fa-solid fa-pen"></i>
                                <i class="fa-solid fa-trash-can"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <footer><?php include("rodape.php");?></footer>
</body>
</html> 