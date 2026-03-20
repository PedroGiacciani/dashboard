<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/52ff4c741b.js" crossorigin="anonymous"></script>
    <title>Usuários</title>
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
            <h1>Gestão de usuários</h1>
            <div id="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Acesso</th>
                            <th>Status</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>001</td>
                            <td>Pedro Giacciani</td>
                            <td>giaccianipedro@gmail.com</td>
                            <td>Administrador</td>
                            <td >Ativo</td>
                            <td><button><i class="fa-solid fa-pen"></i></button></td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Eric Freitas</td>
                            <td>eric@unifev.edu</td>
                            <td>Usuário</td>
                            <td>Ativo</td>
                            <td><button><i class="fa-solid fa-pen"></i></button></td>
                        </tr>
                            <tr>
                            <td>002</td>
                            <td>Eric Freitas</td>
                            <td>eric@unifev.edu</td>
                            <td>Usuário</td>
                            <td>Ativo</td>
                            <td><button><i class="fa-solid fa-pen"></i></button></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>
    <footer><?php include("rodape.php");?></footer>
</body>
</html>