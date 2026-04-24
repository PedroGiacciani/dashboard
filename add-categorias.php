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
                <h1><i class="fa-solid fa-user-plus"></i> Cadastro de categoria</h1>
                <p>Preencha os dados para adicionar categoria</p>
                <form action="#" method="POST">
                    <div class="space">
                        <label for="inome">Nome</label>
                        <input type="text" name="nome" id="inome" placeholder="Digite o nome da categoria">
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
    <script>
        let categorias = prompt("Quantas categorias você quer cadastrar??")
        let categoriasNum = Number(categorias)
        for(let i = 1; i <= categoriasNum; i++){
            let add = prompt(`Qual o nome da categoria ${i}?`)
            if(add.length == 0){
                alert("[ERRO] o nome da categoria não pode ser vazio!!")
                i--
            } else{
                console.log(add)
                console.log("Categoria registrada com sucesso!!")
            }
        }
        window.alert("Prontinho, categorias registradas!! Aperte f12 para conferir")
    </script>
</body>
</html>