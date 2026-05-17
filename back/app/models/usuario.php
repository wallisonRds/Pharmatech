<?php

class Usuario {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function cadastrar($nomeCompleto, $email, $senha) {

    $stmt = $this->pdo->prepare("SELECT id FROM usuario WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->rowCount() > 0) {
            return false; 
        }

        $senhaHash = password_hash($senha, PASSWORD_DEFAULT);

        $stmt = $this->pdo->prepare("INSERT INTO usuario (nome_completo, email, senha_hash) VALUES (?, ?, ?)");
        return $stmt->execute([$nomeCompleto, $email, $senhaHash]);
    }

    public function buscarPorEmail($email) {
        $stmt = $this->pdo->prepare("SELECT * FROM usuario WHERE email = ?");

        $stmt->execute([$email]);

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
?>