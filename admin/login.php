<?php
session_start();

// SE JÁ ESTIVER LOGADO
if (isset($_SESSION["admin"])) {

    header("Location: /admin/painel.php");
    exit;
}

$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $usuario = $_POST["usuario"];
    $senha = $_POST["senha"];

    // LOGIN SIMPLES
    if ($usuario === "admin" && $senha === "123456") {

        $_SESSION["admin"] = true;

        header("Location: /admin/painel.php");
        exit;

    } else {

        $erro = "Usuário ou senha inválidos.";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Administrativo</title>

<link rel="stylesheet" href="/css/style.css">
<link rel="stylesheet" href="/css/layout.css">
<link rel="stylesheet" href="/css/components.css">
<link rel="stylesheet" href="/css/forms.css">
<link rel="stylesheet" href="/css/admin.css">
<link rel="stylesheet" href="/css/responsive.css">

</head>

<body>

<div class="login-container">

    <form method="POST" class="login-form">

        <h2>🔐 Painel Admin</h2>

        <?php if ($erro): ?>

            <div class="error">
                <?= $erro ?>
            </div>

        <?php endif; ?>

        <label>Usuário</label>

        <input
            type="text"
            name="usuario"
            required
        >

        <label>Senha</label>

        <input
            type="password"
            name="senha"
            required
        >

        <button type="submit">
            Entrar
        </button>

        <div class="admin-back">

            <a href="/index.php" class="back-site-btn">
                ⬅ Voltar ao Site
            </a>

        </div>

    </form>

</div>

</body>
</html>