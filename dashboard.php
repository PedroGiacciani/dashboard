<!DOCTYPE html>
<html lang="pt=br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="sep">
        <header><?php include("menu.php");?></header>
        <main>
            <section id="caixa-container">
                <div class="caixa">
                    <h1>Módulo de usuários</h1>
                    <p>Gerencie os acessos e permissões do sistema nessa área</p>
                    <a href="#">Acessar</a>
                </div>
                <div class="caixa">
                    <h1>Relatórios de vendas</h1>
                    <p>Acompanhe os gráficos de desempenho desse mês</p>
                    <a href="#">Acessar</a>
                </div>
                <div class="caixa">
                    <h1>Configurações de Servidor</h1>
                    <p>Ajuste as portas do Apache</p>
                    <a href="#">Acessar</a>
                </div>
            </section>
        </main>
    </div>
   <footer><?php include("rodape.php");?></footer>
</body>
</html>