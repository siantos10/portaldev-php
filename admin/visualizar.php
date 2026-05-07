<?php include("includes/admin-header.php"); ?>

<?php

$arquivo = "../data/mensagens.json";

$mensagens = json_decode(
    file_get_contents($arquivo),
    true
);

$id = $_GET["id"] ?? null;

if (!isset($mensagens[$id])) {

    die("Mensagem não encontrada.");
}

/* MARCA COMO LIDA */
$mensagens[$id]["lida"] = true;

file_put_contents(
    $arquivo,
    json_encode(
        $mensagens,
        JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
    )
);

$msg = $mensagens[$id];
?>

<div class="mensagem-view">

    <a href="mensagens.php" class="voltar-btn">
        ← Voltar
    </a>

    <h1>
        <?= $msg["nome"] ?>
    </h1>

    <p>
        <strong>Email:</strong>
        <?= $msg["email"] ?>
    </p>

    <p>
        <strong>Telefone:</strong>
        <?= $msg["telefone"] ?>
    </p>

    <p>
        <strong>Data:</strong>
        <?= $msg["data"] ?>
    </p>

    <hr>

    <div class="mensagem-texto">

        <?= nl2br($msg["mensagem"]) ?>

    </div>

</div>

<?php include("includes/admin-footer.php"); ?>