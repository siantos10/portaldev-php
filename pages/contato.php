<?php

include("../includes/header.php");

$sucesso = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nome = htmlspecialchars($_POST["nome"]);
    $telefone = htmlspecialchars($_POST["telefone"]);
    $email = htmlspecialchars($_POST["email"]);
    $mensagem = htmlspecialchars($_POST["mensagem"]);

    // NOVA MENSAGEM
    $novaMensagem = [

        "nome" => $nome,
        "telefone" => $telefone,
        "email" => $email,
        "mensagem" => $mensagem,
        "data" => date("d/m/Y H:i"),
        "lida" => false
    ];

    // CAMINHO JSON
    $arquivo = "data/mensagens.json";

    // LÊ MENSAGENS
    $mensagens = json_decode(file_get_contents($arquivo), true);

    // ADICIONA
    $mensagens[] = $novaMensagem;

    // SALVA
    file_put_contents(
        $arquivo,
        json_encode($mensagens, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE)
    );

    $sucesso = true;
}
?>
<?php if ($sucesso): ?>

<div class="success">
    <h3>Mensagem enviada com sucesso!</h3>
</div>

<?php endif; ?>
        <!-- FORMULÁRIO -->
        <form method="POST" class="form-contato">

            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>

            <label for="telefone">Telefone</label>
            <input 
                type="tel"
                id="telefone"
                name="telefone"
                maxlength="15"
                placeholder="(00) 00000-0000"
                required
            >

            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>

            <label for="mensagem">Mensagem</label>
            <textarea id="mensagem" name="mensagem" rows="6" required></textarea>

            <button type="submit">Enviar Mensagem</button>

        </form>

    </main>

</div>

<?php include("../includes/footer.php"); ?>