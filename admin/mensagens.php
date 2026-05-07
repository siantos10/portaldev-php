<?php include("includes/admin-header.php"); ?>

<?php

$arquivo = "../data/mensagens.json";

$mensagens = [];

if (file_exists($arquivo)) {

    $conteudo = file_get_contents($arquivo);

    $mensagens = json_decode($conteudo, true);
}

if (!$mensagens) {
    $mensagens = [];
}
?>

<div class="email-container">

    <div class="email-header">

        <h1>📩 Caixa de Entrada</h1>

    </div>

    <div class="email-list">

        <?php foreach (array_reverse($mensagens, true) as $index => $msg): ?>

            <a
                href="visualizar.php?id=<?= $index ?>"
                class="email-item <?= !$msg["lida"] ? 'nao-lida' : '' ?>"
            >

                <div class="email-top">

                    <span class="email-nome">

                        <?= htmlspecialchars($msg["nome"]) ?>

                    </span>

                    <span class="email-data">

                        <?= htmlspecialchars($msg["data"]) ?>

                    </span>

                </div>

                <div class="email-email">

                    <?= htmlspecialchars($msg["email"]) ?>

                </div>

                <div class="email-preview">

                    <?= htmlspecialchars(substr($msg["mensagem"], 0, 80)) ?>...

                </div>

            </a>

        <?php endforeach; ?>

    </div>

</div>

<?php include("includes/admin-footer.php"); ?>