<?php
require_once __DIR__ . '/../app/controllers/authController.php';
require_once __DIR__ . '/../app/controllers/fornecedorController.php'; 

$acao = $_GET['acao'] ?? '';

switch ($acao) {
    case 'registrar':
        $auth = new AuthController($pdo);
        $auth->registrar();
        break;

    case 'login':
        $auth = new AuthController($pdo);
        $auth->login();
        break;

    case 'cadastrar_fornecedor':                        
        $fornecedor = new FornecedorController($pdo);
        $fornecedor->cadastrar();
        break;

    default:
        echo "<h1>Acesso negado ou rota não encontrada.</h1>";
        break;
}
?>