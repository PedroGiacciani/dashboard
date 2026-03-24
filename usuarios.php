<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Usuário</title>
    <script src="https://kit.fontawesome.com/52ff4c741b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <div class="sep">
        <header><?php include("menu.php");?></header>
        <main>
            <section>
                <h1><i class="fa-solid fa-user-plus"></i> Cadastro de usuário</h1>
                <p>Preencha os dados para realizar um novo acesso</p>
                <form action="#" method="POST">
                    <div class="space">
                        <label for="inome">Nome completo</label>
                        <input type="text" name="nome" id="inome" placeholder="Digite o nome completo">
                    </div>
                    
                    <div class="space">
                        <label for="imail">E-mail</label>
                        <input type="email" name="mail" id="imail" placeholder="Digite o e-mail">
                    </div>
                    
                    <div class="space">
                        <label for="isen">Senha</label>
                        <input type="password" name="senha" id="isenha" placeholder="Digite sua senha">
                    </div>
                    
                    <div class="space">
                        <label for="inivel">Nível</label>
                        <select name="nivel" id="inivel">
                            <option value="user">Usuário</option>
                            <option value="admin">Administrador</option>
                        </select>
                    </div>

                    <div class="space">
                        <input type="submit" value="Salvar" class="esp-btn">
                        <input type="reset" value="Limpar" class="esp-btn">
                    </div>
                </form>
            </section>
        </main>
    </div>
    <footer><?php include("rodape.php");?></footer>
</body>
</html>