<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION["admin"])) {

    header("Location: /admin/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Painel Administrativo</title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/css/components.css">
    <link rel="stylesheet" href="/css/forms.css">
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/responsive.css">

</head>

<body>

<header class="admin-header">

    <div class="admin-logo">
        🚀 Admin
    </div>

    <nav class="admin-nav">

        <a href="/index.php">
            🏠 Voltar ao Site
        </a>

        <a href="/admin/painel.php">
            ⚙ Painel
        </a>

        <a href="/admin/mensagens.php">
            📩 Mensagens
        </a>

        <a href="/admin/logout.php">
            🚪 Sair
        </a>

    </nav>

</header>

<div class="admin-content">