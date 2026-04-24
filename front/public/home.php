<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pharmatech</title>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
</head>
<body>
    <div class="layout-container">
        <?php include_once __DIR__ . "/../src/components/sidebar.inc.php"; ?>
        <div class="main-wrapper">
            <?php include_once __DIR__ . "/../src/components/header.inc.php"; ?>
            <main class="content-area">
                <header>
                    <h1>Seja bem vindo(a), Carlos Ítalo!</h1>
                </header>
                <section class="cards">
                    <div class="card">
                        <div class="card-flex">
                            <p>Total de Produtos</p>
                            <img src="assets/icons/resetar.svg" alt="icone de resetar">
                        </div>
                        <span>1.248</span>
                    </div>
                    <div class="card">
                        <div class="card-flex">
                            <p>Estoque Baixo</p>
                            <img src="assets/icons/alta-prioridade.svg" alt="icone de alta prioridade">
                        </div>
                        <span>23</span>
                    </div>
                    <div class="card">
                        <div class="card-flex">
                            <p>Estoque Baixo</p>
                            <img src="assets/icons/alta-prioridade.svg" alt="icone de alta prioridade">
                        </div>
                        <span>23</span>
                    </div>
                    <div class="card">
                        <div class="card-flex">
                            <p>Vencendo nos ultimos 20 dias</p>
                            <img src="assets/icons/livro-marcado.svg" alt="icone de bookmark">
                        </div>
                        <span>15</span>
                    </div>
                    <div class="card">
                        <div class="card-flex">
                            <p>Vencendo nos ultimos 90 dias</p>
                            <img src="assets/icons/perigo.svg" alt="icone de perigo">
                        </div>
                        <span>8</span>
                    </div>
                    <div class="card">
                        <div class="card-flex">
                            <p>Estoque Baixo</p>
                            <img src="assets/icons/alta-prioridade.svg" alt="icone de alta prioridade">
                        </div>
                        <span>23</span>
                    </div>
                </section>

                <section class="produtos">
                    <div class="produtos-container">
                        <div class="table-header">
                            <h2>Produtos Recentes</h2>
                        </div>
        
                        <table>
                            <thead>
                                <tr>
                                    <th>Nome</th>
                                    <th>SKU</th>
                                    <th>Estoque</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Amoxicilina 500mg</td>
                                    <td>AMX-500</td>
                                    <td>450</td>
                                    <td><span class="status-badge green">Em estoque</span></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Amoxicilina 500mg</td>
                                    <td>AMX-500</td>
                                    <td>450</td>
                                    <td><span class="status-badge yellow">Estoque baixo</span></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Amoxicilina 500mg</td>
                                    <td>AMX-500</td>
                                    <td>450</td>
                                    <td><span class="status-badge red">Sem estoque</span></td>
                                </tr>
                            </tbody>
                            <tbody>
                                <tr>
                                    <td>Amoxicilina 500mg</td>
                                    <td>AMX-500</td>
                                    <td>450</td>
                                    <td><span class="status-badge yellow">Estoque baixo</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
            </main>
        </div>
    </div>
    <script type="module" src="/js/main.js"></script>
</body>
</html>