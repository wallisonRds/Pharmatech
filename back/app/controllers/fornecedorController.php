<?php
require_once __DIR__ . '/../models/fornecedor.php';

class FornecedorController {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function cadastrar() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $polo        = trim($_POST['polo'] ?? '');
            $razaoSocial = trim($_POST['razao_social'] ?? '');
            $nomeFantasia= trim($_POST['nome_fantasia'] ?? '');
            $cnpj        = trim($_POST['cnpj'] ?? '');
            $localidade  = trim($_POST['localidade'] ?? '');

            if (empty($polo) || empty($razaoSocial) || empty($cnpj) || empty($localidade)) {
                die("Erro: Preencha todos os campos obrigatórios.");
            }

            $fornecedorModel = new Fornecedor($this->pdo);
            $cadastrou = $fornecedorModel->cadastrar($polo, $razaoSocial, $nomeFantasia, $cnpj, $localidade);

            if ($cadastrou) {
                header("Location: /PHARMATECH_PROJETO/Pharmatech/front/public/fornecedores.php?sucesso=1");
                exit;
            } else {
                header("Location: /PHARMATECH_PROJETO/Pharmatech/front/public/fornecedores.php?erro=cnpj_duplicado");
                exit;
            }

        } else {
            echo "Acesso inválido.";
        }
    }
}
?>