<?php include("includes/header.php"); ?>

<div class="container">
  <!-- ASIDE ESQUERDO -->
  <aside class="left">
    <h3>🚀 Dicas Rápidas para Iniciantes</h3>
    <br />
    <ul>
      <li>
        <strong>Indentação:</strong> Mantenha o código organizado com 2 ou 4
        espaços
      </li>
      <li>
        <strong>Estrutura de pastas:</strong> Separe CSS, JS e imagens em pastas
      </li>
      <li>
        <strong>DOCTYPE:</strong> Sempre comece o documento com
        <code>&lt;!DOCTYPE html&gt;</code>
      </li>
      <li>
        <strong>Semântica:</strong> Prefira tags como
        <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>,
        <code>&lt;main&gt;</code>
      </li>
      <li>
        <strong>Nomenclatura:</strong> Use nomes claros em minúsculo (ex:
        <code>botao-enviar</code>)
      </li>
      <li>
        <strong>Comentários:</strong> Comente seções importantes do código
      </li>
    </ul>

    <br />

    <h3>⚠️ 5 Erros Comuns que você deve evitar</h3>
    <br />

    <ul>
      <li>Esquecer de fechar tags ou usar tags incorretamente</li>
      <li>Escrever caminhos errados para CSS, JS ou imagens</li>
      <li>Erros de digitação em tags, atributos ou nomes de arquivos</li>
      <li>Repetir o mesmo <code>id</code> em vários elementos</li>
      <li>Não configurar o charset UTF-8 (causa acentuação errada)</li>
    </ul>
  </aside>

  <!-- CONTEÚDO PRINCIPAL -->
  <main class="main">
    <div class="banner">
      <h2>Bem-vindo ao Portal Dev</h2>
      <p>Aprenda HTML, CSS e JavaScript do zero ao avançado.</p>
    </div>

    <div class="separator"></div>

    <div class="cards">
      <div class="card">
        <h3>HTML</h3>
        <p>Aprenda a estruturar páginas web.</p>
        <a href="/pages/html-intro.php">Começar</a>
      </div>

      <div class="card">
        <h3>CSS</h3>
        <p>Deixe seus sites bonitos e responsivos.</p>
        <a href="/pages/css-intro.php">Começar</a>
      </div>

      <div class="card">
        <h3>JavaScript</h3>
        <p>Adicione interatividade ao seu site.</p>
        <a href="/pages/js-intro.php">Começar</a>
      </div>

      <div class="card">
        <h3>Projeto Final</h3>
        <p>Construa seu próprio site completo.</p>
        <a href="/pages/projeto-final.php">Começar</a>
      </div>
    </div>
  </main>

  <!-- ASIDE DIREITO -->
  <aside class="right">
    <h3>📚 Cursos Gratuitos</h3>
    <br />
    <ul>
      <li>
        <strong>Curso de Lógica de Programação:</strong>
        <a
          href="https://www.youtube.com/playlist?list=PLHz_AreHm4dmSj0MHol_aoNYCSGFqvfXV"
          target="_blank"
        >
          Curso em Vídeo
        </a>
      </li>

      <li>
        <strong>HTML5 e CSS3:</strong>
        <a
          href="https://www.freecodecamp.org/portuguese/learn/2022/responsive-web-design/"
          target="_blank"
        >
          FreeCodeCamp
        </a>
      </li>

      <li>
        <strong>CSS Tutorias:</strong>
        <a href="https://www.w3schools.com/css/default.asp" target="_blank">
          W3Schools (Interativo)
        </a>
      </li>

      <li>
        <strong>JavaScript:</strong>
        <a
          href="https://developer.mozilla.org/pt-BR/docs/Learn/JavaScript"
          target="_blank"
        >
          Guia da MDN
        </a>
      </li>

      <li>
        <strong>Introdução ao HTML/CSS:</strong>
        <a
          href="https://pt.khanacademy.org/computing/computer-programming/html-css"
          target="_blank"
        >
          Khan Academy
        </a>
      </li>
    </ul>
  </aside>
</div>

<?php include("includes/footer.php"); ?>
