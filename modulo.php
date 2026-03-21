<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/52ff4c741b.js" crossorigin="anonymous"></script>
    <title>Módulo de Usuários</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tabelas.css">
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
                            <td><mark class="badge inativo">Inativo</mark></td>
                            <td>
                                <i class="fa-solid fa-pen"></i>
                                <i class="fa-solid fa-trash-can"></i>
                            </td>
                        </tr>
                        <tr>
                            <td>002</td>
                            <td>Eric Freitas</td>
                            <td>eric@unifev.edu</td>
                            <td>Usuário</td>
                            <td><mark class="badge ativo">Ativo</mark></td>
                            <td>
                                <i class="fa-solid fa-pen"></i>
                                <i class="fa-solid fa-trash-can"></i>
                            </td>
                        </tr>
                            <td>002</td>
                            <td>Eric Freitas</td>
                            <td>eric@unifev.edu</td>
                            <td>Usuário</td>
                            <td><mark class="badge inativo">Inativo</mark></td>
                            <td>
                                <i class="fa-solid fa-pen"></i>
                                <i class="fa-solid fa-trash-can"></i>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="6" id="btn-add"><i class="fa-solid fa-plus"></i> <a href="usuarios.php">Adicionar usuário</a></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </main>
    </div>
    <footer><?php include("rodape.php");?></footer>
</body>
</html>