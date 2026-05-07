<?php include("includes/admin-header.php"); ?>

<?php

$arquivo = "../data/mensagens.json";

$mensagens = [];

if (file_exists($arquivo)) {

    $mensagens = json_decode(
        file_get_contents($arquivo),
        true
    );

    if (!$mensagens) {
        $mensagens = [];
    }
}
?>

<div class="email-container">

    <div class="email-header">

        <h1>📩 Caixa de Entrada</h1>

    </div>

    <form method="POST" action="deletar.php">

        <div class="email-actions">

            <button type="submit" class="delete-btn">
                🗑 Apagar Selecionadas
            </button>

        </div>

        <div class="email-list">

            <?php foreach (array_reverse($mensagens, true) as $index => $msg): ?>

                <div class="email-item <?= !$msg["lida"] ? 'nao-lida' : '' ?>">

                    <div class="email-select">

                        <input
                            type="checkbox"
                            name="selecionadas[]"
                            value="<?= $index ?>"
                        >

                    </div>

                    <a
                        href="visualizar.php?id=<?= $index ?>"
                        class="email-link"
                    >

                        <div class="email-top">

                            <span class="email-nome">
                                <?= $msg["nome"] ?>
                            </span>

                            <span class="email-data">
                                <?= $msg["data"] ?>
                            </span>

                        </div>

                        <div class="email-email">

                            <?= $msg["email"] ?>

                        </div>

                        <div class="email-preview">

                            <?= substr($msg["mensagem"], 0, 80) ?>...

                        </div>

                    </a>

                </div>

            <?php endforeach; ?>

        </div>

    </form>

</div>

<?php include("includes/admin-footer.php"); ?>