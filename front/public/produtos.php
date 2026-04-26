<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Advent+Pro:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css" />
</head>
<body>
    <div class="layout-container">
        <?php include_once __DIR__ . "/../src/components/sidebar.inc.php"; ?>
        <div class="main-wrapper">
            <?php include_once __DIR__ . "/../src/components/header.inc.php"; ?>
            <main class="content-area">
                <div class="fornecedor-group">
                    <span class="fornecedor-title">Produtos</span>
                    <button class="btn" data-modal="abrir">+ Novo Produto</button>
                </div>
                <section class="produtos">
                 <div class="produtos-container">
                    <div class="table-header">
                        <div class="input-search">
                            <img src="assets/icons/search.svg" alt="buscar">
                            <input type="text" placeholder="Buscar Produtos ou SKU...">
                        </div>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>SKU</th>
                                <th>Categoria</th>
                                <th>Estoque</th>
                                <th>Preço</th>
                                <th>Status</th>
                                <th>Ajustes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Amoxicilina 500mg</td>
                                <td>AMX-500</td>
                                <td>Antibiotico</td>
                                <td>450</td>
                                <td>R$ 12,90</td>
                                <td><span class="status-badge green">Ativo</span></td>
                                <td><img src="/assets/icons/pencil.svg" alt="icone de lapis"></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>Dipirona Sódica 1g</td>
                                <td>DIP-1G</td>
                                <td>Analgésico  </td>
                                <td>0</td>
                                <td>R$ 5,90</td>
                                <td><span class="status-badge red">Inativo</span></td>
                                <td><img src="/assets/icons/pencil.svg" alt="icone de lapis"></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>Amoxicilina 500mg</td>
                                <td>AMX-500</td>
                                <td>Antibiotico</td>
                                <td>450</td>
                                <td>R$ 12,90</td>
                                <td><span class="status-badge green">ativo</span></td>
                                <td><img src="/assets/icons/pencil.svg" alt="icone de lapis"></td>
                            </tr>
                        </tbody>
                        <tbody>
                            <tr>
                            <td>4</td>
                                <td>Dipirona Sódica 1g</td>
                                <td>DIP-1G</td>
                                <td>Analgésico  </td>
                                <td>12</td>
                                <td>R$ 22,90</td>
                                <td><span class="status-badge green">Ativo</span></td>
                                <td><img src="/assets/icons/pencil.svg" alt="icone de lapis"></td>
                            </tr>
                        </tbody>
                         <tbody>
                            <tr>
                                <td>5</td>
                                <td>Amoxicilina 500mg</td>
                                <td>AMX-500</td>
                                <td>Antibiotico</td>
                                <td>450</td>
                                <td>R$ 12,90</td>
                                <td><span class="status-badge green">ativo</span></td>
                                <td><img src="/assets/icons/pencil.svg" alt="icone de lapis"></td>
                            </tr>
                        </tbody>
                            <tbody>
                            <tr>
                            <td>6</td>
                                <td>Dipirona Sódica 1g</td>
                                <td>DIP-1G</td>
                                <td>Analgésico  </td>
                                <td>12</td>
                                <td>R$ 22,90</td>
                                <td><span class="status-badge green">Ativo</span></td>
                                <td><img src="/assets/icons/pencil.svg" alt="icone de lapis"></td>
                            </tr>
                        </tbody>
                          <tbody>
                            <tr>
                                <td>7</td>
                                <td>Amoxicilina 500mg</td>
                                <td>AMX-500</td>
                                <td>Antibiotico</td>
                                <td>450</td>
                                <td>R$ 12,90</td>
                                <td><span class="status-badge green">ativo</span></td>
                                <td><img src="/assets/icons/pencil.svg" alt="icone de lapis"></td>
                            </tr>
                        </tbody>
                    </table>

                    <?php include_once __DIR__ . "/../src/components/pagination.inc.php"; ?>
                 </div>
                </section>
        </main>
        </div>
        </div>
    </div>

    <section class="modal-container" data-modal="container">
      <div class="modal">
        <button data-modal="fechar" class="fechar">X</button>
        <form action="">
        <div class="input-modal">
            <div class="input-wrapper">
                <label for="name">Nome</label>
                <input type="text" for="name" id="name" placeholder="Ex: Amoxicilina 500mg"/>
            </div>
            <div class="input-wrapper">
                <label for="sku">SKU</label>
                <input type="text" for="sku" id="sku" placeholder="ex: AMX-500"/>
            </div>
               <div class="input-wrapper">
                <label for="categoria">Categoria</label>
                <input type="text" for="categoria" id="categoria" placeholder="Selecione"/>
            </div>
               <div class="input-wrapper">
                <label for="preco">Preço</label>
                <input type="text" for="preco" id="preco" placeholder="R$ 0,00"/>
            </div>
            <div class="input-wrapper">
                <label for="estoque">Estoque inicial</label>
                <input type="number" for="estoque" id="estoque" placeholder="0"/>
            </div>
               <div class="input-wrapper">
                <label for="status">status</label>
                <input type="text" for="status" id="status" placeholder="Ativo"/>
            </div>
        </div>
          <div class="btn-modal">
            <button class="pagination-btn" type="submit">Cancelar</button>
            <button class="btn" type="submit">Salvar produto</button>
          </div>
        
        </form>
      </div>
    </section>
    <script type="module" src="/js/main.js"></script>
</body>
</html>