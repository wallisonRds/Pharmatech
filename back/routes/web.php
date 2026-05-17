<?php
require_once __DIR__ . '/../app/controllers/authController.php';

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

    default:
        echo "<h1>Acesso negado ou rota não encontrada.</h1>";
        break;
}
?>