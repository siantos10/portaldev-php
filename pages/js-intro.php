<?php include("../includes/header.php"); ?>

<div class="container">
  <aside class="left">
    <h3>⚡ Dicas Rápidas</h3>
    <br />
    <ul>
      <li>
        <strong>Linkar o JS:</strong> Coloque
        <code>&lt;script src="js/script.js"&gt;&lt;/script&gt;</code> antes do
        fechamento do <code>&lt;/body&gt;</code>
      </li>
      <li>
        <strong>Comentários:</strong> Use <code>//</code> para linha única e
        <code>/* */</code> para múltiplas linhas
      </li>
      <li>
        <strong>Variáveis:</strong> Use <code>let</code> e
        <code>const</code> (evite <code>var</code>)
      </li>
      <li>
        <strong>Selecionar elementos:</strong> Use
        <code>document.getElementById()</code> ou
        <code>document.querySelector()</code>
      </li>
      <li>
        <strong>Manipular conteúdo:</strong> Use <code>.innerHTML</code> ou
        <code>.textContent</code> para alterar texto
      </li>
      <li>
        <strong>Eventos:</strong> Adicione interatividade com
        <code>.addEventListener('click', ...)</code>
      </li>
      <li>
        <strong>Console:</strong> Use <code>console.log()</code> para testar e
        debugar seu código
      </li>
      <li>
        <strong>Funções:</strong> Crie funções reutilizáveis com
        <code>function nome() { }</code> ou arrow functions
      </li>
      <li>
        <strong>Condicionais:</strong> Use <code>if...else</code> para tomar
        decisões no código
      </li>
      <li>
        <strong>DevTools:</strong> Pressione F12 e use a aba Console para testar
        JavaScript ao vivo
      </li>
    </ul>
    <br />

    <h3>⚠️ Erros Comuns</h3>
    <br />
    <ul>
      <li>Esquecer de linkar o arquivo JavaScript no HTML</li>
      <li>
        Colocar o <code>&lt;script&gt;</code> no <code>&lt;head&gt;</code> sem
        usar <code>defer</code>
      </li>
      <li>Esquecer de fechar parênteses, chaves ou aspas</li>
      <li>
        Usar <code>==</code> ao invés de <code>===</code> (comparação estrita)
      </li>
      <li>
        Não entender o escopo de variáveis (<code>let</code> vs
        <code>const</code>)
      </li>
    </ul>
  </aside>

  <main class="main full">
    <h2 class="banner">O que é JavaScript?</h2>

    <p>
      JavaScript é uma linguagem de programação utilizada para tornar páginas
      web interativas. Enquanto o HTML estrutura e o CSS estiliza, o JavaScript
      adiciona comportamento e dinâmica ao site.
    </p>

    <p>
      Com JavaScript, você pode criar ações como cliques, validação de
      formulários, animações e atualizações de conteúdo sem recarregar a página.
    </p>

    <h3>Como o JavaScript funciona?</h3>

    <p>
      O JavaScript é executado diretamente no navegador do usuário. Ele permite
      manipular elementos da página, responder a eventos e controlar a lógica da
      aplicação.
    </p>

    <p>Exemplo:</p>

    <pre>
alert("Olá, mundo!");
        </pre
    >

    <p>Esse código exibe uma mensagem na tela do usuário.</p>

    <h3>Manipulando elementos HTML</h3>

    <p>
      O JavaScript pode acessar e alterar elementos da página usando o DOM
      (Document Object Model).
    </p>

    <pre>
document.querySelector("h1").innerText = "Novo título";
        </pre
    >

    <p>Nesse exemplo, o título da página é alterado dinamicamente.</p>

    <h3>Eventos</h3>

    <p>
      Eventos são ações do usuário, como cliques ou digitação. O JavaScript
      permite reagir a esses eventos.
    </p>

    <pre>
button.addEventListener("click", function() {
  alert("Você clicou!");
});
        </pre
    >

    <h3>Por que aprender JavaScript?</h3>

    <ul>
      <li>Criar páginas interativas</li>
      <li>Desenvolver aplicações web completas</li>
      <li>Trabalhar com APIs e dados</li>
      <li>Entrar no mercado de desenvolvimento</li>
    </ul>

    <h3>Conclusão</h3>

    <p>
      O JavaScript é essencial no desenvolvimento web moderno. Ele transforma
      páginas estáticas em experiências dinâmicas e interativas, sendo uma das
      linguagens mais importantes da atualidade.
    </p>
  </main>

  <!-- ASIDE DIREITO - CURSOS DE JAVASCRIPT -->
  <aside class="right">
    <h3>⚡ JavaScript Interativo</h3>
    <br />
    <ul>
      <li>
        <strong>Curso em Vídeo:</strong>
        <a
          href="https://www.youtube.com/watch?v=vEwPnjqWQ-g&list=PL2Fdisxwzt_dpxlW0pWrVqBc04GUQfXm3"
          target="_blank"
          >JavaScript Completo</a
        >
      </li>
      <li>
        <strong>MDN (Mozilla):</strong>
        <a
          href="https://developer.mozilla.org/pt-BR/docs/Learn/JavaScript/First_steps"
          target="_blank"
          >Primeiros Passos em JS</a
        >
      </li>
      <li>
        <strong>FreeCodeCamp:</strong>
        <a
          href="https://www.freecodecamp.org/portuguese/learn/javascript-algorithms-and-data-structures/"
          target="_blank"
          >Algoritmos e Lógica</a
        >
      </li>
      <li>
        <strong>W3Schools:</strong>
        <a href="https://www.w3schools.com/js/default.asp" target="_blank"
          >Tutorial de JS (Interativo)</a
        >
      </li>
      <li>
        <strong>Digital Innovation One:</strong>
        <a
          href="https://www.dio.me/courses/primeiros-passos-com-javascript"
          target="_blank"
          >Fundamentos de JS</a
        >
      </li>
    </ul>
  </aside>
</div>

<?php include("../includes/footer.php"); ?>
