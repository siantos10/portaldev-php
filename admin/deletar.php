<?php

session_start();

if (!isset($_SESSION["admin"])) {

    header("Location: login.php");
    exit;
}

$arquivo = "../data/mensagens.json";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST["selecionadas"])) {

        $mensagens = json_decode(
            file_get_contents($arquivo),
            true
        );

        foreach ($_POST["selecionadas"] as $id) {

            unset($mensagens[$id]);
        }

        $mensagens = array_values($mensagens);

        file_put_contents(
            $arquivo,
            json_encode(
                $mensagens,
                JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE
            )
        );
    }
}

header("Location: mensagens.php");
exit;