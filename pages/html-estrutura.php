<?php include("../includes/header.php"); ?>

<div class="container">
  <aside class="left">
    <h3>🏗️ Dicas Rápidas</h3>
    <br />
    <ul>
      <li>
        <strong>DOCTYPE:</strong> Sempre comece o arquivo com
        <code>&lt;!DOCTYPE html&gt;</code>
      </li>
      <li>
        <strong>Estrutura principal:</strong> Use as tags
        <code>&lt;html&gt;</code>, <code>&lt;head&gt;</code> e
        <code>&lt;body&gt;</code>
      </li>
      <li>
        <strong>Meta Charset:</strong> Coloque
        <code>&lt;meta charset="UTF-8"&gt;</code> para suportar acentuação
      </li>
      <li>
        <strong>Título da página:</strong> Use
        <code>&lt;title&gt;Nome da Página&lt;/title&gt;</code> dentro do
        <code>&lt;head&gt;</code>
      </li>
      <li>
        <strong>Meta Viewport:</strong> Adicione
        <code
          >&lt;meta name="viewport" content="width=device-width,
          initial-scale=1.0"&gt;</code
        >
        para responsividade
      </li>
      <li>
        <strong>Separação de conteúdo:</strong> Coloque tudo visível dentro da
        tag <code>&lt;body&gt;</code>
      </li>
      <li>
        <strong>Tags semânticas:</strong> Use <code>&lt;header&gt;</code>,
        <code>&lt;main&gt;</code>, <code>&lt;section&gt;</code> e
        <code>&lt;footer&gt;</code>
      </li>
      <li>
        <strong>Comentários:</strong> Use
        <code>&lt;!-- Comentário --&gt;</code> para documentar as seções
      </li>
      <li>
        <strong>Indentação:</strong> Indente corretamente o código para
        facilitar a leitura
      </li>
      <li>
        <strong>Validação:</strong> Teste sua estrutura no
        <a href="https://validator.w3.org/" target="_blank">W3C Validator</a>
      </li>
    </ul>
    <br />

    <h3>⚠️ Erros Comuns</h3>
    <br />
    <ul>
      <li>Esquecer o <code>&lt;!DOCTYPE html&gt;</code> no topo do arquivo</li>
      <li>
        Não colocar o <code>&lt;meta charset="UTF-8"&gt;</code> (problemas com
        acentos)
      </li>
      <li>Colocar conteúdo visível dentro do <code>&lt;head&gt;</code></li>
      <li>Esquecer de fechar tags corretamente</li>
      <li>
        Não usar a tag <code>&lt;main&gt;</code> para o conteúdo principal
      </li>
    </ul>
  </aside>

  <main class="main full">
    <h2 class="banner">Estrutura Básica do HTML</h2>

    <p>
      Todo documento HTML segue uma estrutura padrão que permite ao navegador
      interpretar corretamente o conteúdo da página. Essa estrutura organiza os
      elementos e define como a página será exibida.
    </p>

    <h3>Exemplo de estrutura básica</h3>

    <pre>
&lt;!DOCTYPE html&gt;
&lt;html lang="pt-br"&gt;
&lt;head&gt;
    &lt;meta charset="UTF-8"&gt;
    &lt;title&gt;Minha Página&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    Conteúdo da página
&lt;/body&gt;
&lt;/html&gt;
        </pre
    >

    <h3>Explicação dos elementos</h3>

    <ul>
      <li>
        <strong>&lt;!DOCTYPE html&gt;</strong> → Define o tipo do documento
      </li>
      <li><strong>&lt;html&gt;</strong> → Elemento raiz da página</li>
      <li><strong>&lt;head&gt;</strong> → Configurações e metadados</li>
      <li><strong>&lt;body&gt;</strong> → Conteúdo visível ao usuário</li>
    </ul>

    <h3>O que vai dentro do &lt;head&gt;?</h3>

    <p>
      A seção <code>&lt;head&gt;</code> contém informações importantes para o
      navegador, mas que não aparecem diretamente na tela.
    </p>

    <ul>
      <li>Definição de charset</li>
      <li>Título da página</li>
      <li>Links para arquivos CSS</li>
      <li>Configurações de responsividade</li>
    </ul>

    <h3>O que vai dentro do &lt;body&gt;?</h3>

    <p>O <code>&lt;body&gt;</code> contém tudo o que o usuário vê na página:</p>

    <ul>
      <li>Títulos (h1 até h6)</li>
      <li>Parágrafos</li>
      <li>Imagens</li>
      <li>Links</li>
      <li>Tabelas</li>
      <li>Formulários</li>
    </ul>

    <h3>Boas práticas</h3>

    <ul>
      <li>Usar indentação para organizar o código</li>
      <li>Manter nomes claros e semânticos</li>
      <li>Separar HTML, CSS e JavaScript</li>
      <li>Validar o código sempre que possível</li>
    </ul>

    <h3>Conclusão</h3>

    <p>
      Entender a estrutura básica do HTML é essencial para criar qualquer página
      web. Ela serve como base para todas as outras tecnologias e garante que
      seu site funcione corretamente em diferentes navegadores.
    </p>
  </main>

  <!-- ASIDE DIREITO - ESTRUTURA HTML -->
  <aside class="right">
    <h3>🏗️ Estrutura do HTML</h3>
    <br />
    <ul>
      <li>
        <strong>Hiperbytes:</strong>
        <a
          href="https://www.hiperbytes.com.br/curso-de-html-aula1-estrutura-basica-paginas-web/"
          target="_blank"
          >Estrutura básica de páginas web</a
        >
      </li>
      <li>
        <strong>MDN Web Docs:</strong>
        <a
          href="https://developer.mozilla.org/pt-BR/docs/Learn/HTML/Introduction_to_HTML/Getting_started"
          target="_blank"
          >O que há no Head?</a
        >
      </li>
      <li>
        <strong>DevMedia:</strong>
        <a
          href="https://www.devmedia.com.br/estrutura-basica-do-html/38153"
          target="_blank"
          >Tags Obrigatórias</a
        >
      </li>
      <li>
        <strong>CFB Cursos:</strong>
        <a
          href="https://www.youtube.com/watch?v=8dPpZsC6Vg8&list=PLx4x_zx8csUgS5ioRmQVBeGHmKBQEyNXQ"
          target="_blank"
          >Vídeo: Estrutura básica e primeiros comandos HTML</a
        >
      </li>
      <li>
        <strong>Homehost:</strong>
        <a
          href="https://www.homehost.com.br/blog/tutoriais/html-basico/"
          target="_blank"
          >Manual da Estrutura Básica</a
        >
      </li>
    </ul>
  </aside>
</div>
<?php include("../includes/footer.php"); ?>
