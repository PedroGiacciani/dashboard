<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar categoria</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="form.css">
    <script src="https://kit.fontawesome.com/52ff4c741b.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="sep">
        <header>
            <?php include("menu.php");?>
        </header>
        <main>
            <section>
                <h1><i class="fa-solid fa-user-plus"></i> Cadastro de postagem</h1>
                <p>Preencha os dados para adicionar postagem</p>
                <form action="#" method="POST">
                    <div class="space">
                        <label for="inome">Título</label>
                        <input type="text" name="nome" id="inome" placeholder="Digite o título da postagem">
                    </div>
        
                    <div class="space">
                        <label for="icont">Conteúdo</label>
                        <textarea name="cont" id="icont" placeholder="Sobre o que fala sua postagem??"></textarea>
                    </div>

                    <div class="space">
                        <label for="istats">Status</label>
                        <select name="stats" id="istats">
                            <option>Ativo</option>
                            <option>Inativo</option>
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
    <footer>
        <?php include("rodape.php"); ?>
    </footer>
</body>
</html>