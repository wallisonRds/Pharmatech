<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header('Location: /PHARMATECH_PROJETO/Pharmatech/front/public/login.php?erro=autenticacao');
    exit;
}
?>