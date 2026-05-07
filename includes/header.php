<!doctype html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Portal Dev - Início</title>

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/layout.css">
    <link rel="stylesheet" href="/css/components.css">
    <link rel="stylesheet" href="/css/forms.css">
    <link rel="stylesheet" href="/css/admin.css">
    <link rel="stylesheet" href="/css/responsive.css">

</head>

<body>

<header class="header">

    <h1>Portal Dev - Aprenda Programação</h1>

</header>

<nav class="menu">

    <div class="menu-toggle" id="menu-toggle">
        ☰
    </div>

    <ul id="menu-list">

        <!-- HOME -->
        <li>
            <a href="/index.php" class="home-icon no-active" title="Início">
                🏠
            </a>
        </li>

        <!-- HTML -->
        <li class="drop-hover">

            <a href="#">HTML</a>

            <div class="drop">

                <a href="/pages/html-intro.php">
                    Introdução
                </a>

                <a href="/pages/html-estrutura.php">
                    Estrutura Básica
                </a>

                <a href="#">
                    Textos e Links
                </a>

                <a href="#">
                    Imagens e Tabelas
                </a>

            </div>

        </li>

        <!-- CSS -->
        <li class="drop-hover">

            <a href="#">CSS</a>

            <div class="drop">

                <a href="/pages/css-intro.php">
                    Introdução ao CSS
                </a>

                <a href="#">
                    Seletores
                </a>

                <a href="#">
                    Box Model
                </a>

                <a href="#">
                    Flexbox
                </a>

            </div>

        </li>

        <!-- JAVASCRIPT -->
        <li class="drop-hover">

            <a href="#">JavaScript</a>

            <div class="drop">

                <a href="/pages/js-intro.php">
                    Introdução
                </a>

                <a href="#">
                    Variáveis
                </a>

                <a href="#">
                    Condições
                </a>

                <a href="#">
                    Funções
                </a>

            </div>

        </li>

        <!-- CONTATO -->
        <li>

            <a href="/pages/contato.php">
                Contato
            </a>

        </li>

        <!-- ADMIN -->
        <li>

            <a href="/admin/login.php" class="admin-link">
                🔐 Admin
            </a>

        </li>

    </ul>

</nav>