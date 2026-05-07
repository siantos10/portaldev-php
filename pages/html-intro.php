<?php include("../includes/header.php"); ?>

    <div class="container">
<aside class="left">
    <h3>🚀 Dicas Rápidas</h3><br>
    <ul>
        <li><strong>DOCTYPE:</strong> Sempre inicie seu documento com <code>&lt;!DOCTYPE html&gt;</code></li>
        <li><strong>Estrutura básica:</strong> Use as tags <code>&lt;html&gt;</code>, <code>&lt;head&gt;</code> e <code>&lt;body&gt;</code></li>
        <li><strong>Charset:</strong> Coloque <code>&lt;meta charset="UTF-8"&gt;</code> para aceitar acentuação</li>
        <li><strong>Título da página:</strong> Use a tag <code>&lt;title&gt;</code> dentro do <code>&lt;head&gt;</code></li>
        <li><strong>Tags semânticas:</strong> Prefira <code>&lt;header&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;section&gt;</code> e <code>&lt;footer&gt;</code></li>
        <li><strong>Indentação:</strong> Organize seu código com indentação (2 ou 4 espaços) para facilitar a leitura</li>
        <li><strong>Atributo alt:</strong> Sempre adicione <code>alt="descrição"</code> nas imagens</li>
        <li><strong>Comentários:</strong> Use <code>&lt;!-- Seu comentário aqui --&gt;</code> para explicar seu código</li>
        <li><strong>Nomenclatura:</strong> Use nomes em minúsculo e separados por hífen (ex: <code>menu-principal</code>)</li>
        <li><strong>Validação:</strong> Teste seu código no <a href="https://validator.w3.org/" target="_blank">W3C Validator</a></li>
    </ul><br>

    <h3>⚠️ Erros Comuns</h3><br>  
    <ul>
        <li>Esquecer de fechar tags corretamente</li>
        <li>Não declarar o <code>charset="UTF-8"</code> (problemas com acentuação)</li>
        <li>Esquecer o <code>&lt;!DOCTYPE html&gt;</code> no início do arquivo</li>
        <li>Usar IDs repetidos na mesma página</li>
        <li>Escrever caminhos errados para arquivos CSS ou imagens</li>
    </ul>
</aside>

      <main class="main full">
        <h2 class="banner">O que é HTML?</h2>

        <p>
          HTML (HyperText Markup Language) é a linguagem de marcação utilizada
          para estruturar páginas na web. Ele define os elementos que compõem um
          site, como títulos, parágrafos, imagens, links e tabelas.
        </p>

        <p>
          Diferente de linguagens de programação, o HTML não executa lógica, mas
          organiza o conteúdo de forma que os navegadores consigam interpretar e
          exibir corretamente.
        </p>

        <h3>Como o HTML funciona?</h3>

        <p>
          O HTML funciona através de <strong>tags</strong>, que são elementos
          envolvidos por sinais de menor e maior (<code>&lt; &gt;</code>). Essas
          tags indicam ao navegador o tipo de conteúdo que está sendo exibido.
        </p>

        <p>Exemplo:</p>

        <pre>
&lt;h1&gt;Título&lt;/h1&gt;
&lt;p&gt;Este é um parágrafo&lt;/p&gt;
    </pre
        >

        <p>
          Nesse exemplo, a tag <code>&lt;h1&gt;</code> representa um título e a
          tag <code>&lt;p&gt;</code> representa um parágrafo.
        </p>

        <h3>Estrutura básica de um documento HTML</h3>

        <pre>
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;title&gt;Minha Página&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;
    Conteúdo da página
&lt;/body&gt;
&lt;/html&gt;
    </pre
        >

        <ul>
          <li>
            <strong>&lt;!DOCTYPE html&gt;</strong> define o tipo do documento
          </li>
          <li><strong>&lt;html&gt;</strong> é a raiz da página</li>
          <li><strong>&lt;head&gt;</strong> contém configurações</li>
          <li><strong>&lt;body&gt;</strong> contém o conteúdo visível</li>
        </ul>

        <h3>Por que aprender HTML?</h3>

        <p>
          O HTML é o primeiro passo para quem deseja entrar no mundo do
          desenvolvimento web. Ele é fundamental para:
        </p>

        <ul>
          <li>Criar sites e páginas web</li>
          <li>Organizar conteúdo de forma estruturada</li>
          <li>Trabalhar com CSS e JavaScript</li>
          <li>Desenvolver aplicações web completas</li>
        </ul>

        <h3>Conclusão</h3>

        <p>
          Aprender HTML é essencial para qualquer pessoa que deseja trabalhar
          com tecnologia ou criar conteúdos para a internet. Ele é simples,
          poderoso e serve como base para todas as outras tecnologias web.
        </p>
      </main>

<aside class="right">
        <h3>📖 Aprenda HTML</h3><br>
        <ul>
          <li>
            <strong>Guia MDN:</strong> 
            <a href="https://developer.mozilla.org/pt-BR/docs/Learn_web_development/Core/Structuring_content" target="_blank">Documentação Oficial</a>
          </li>
          <li>
            <strong>Udemy:</strong> 
            <a href="https://www.udemy.com/course/introducao-a-linguagem-html/?srsltid=AfmBOorJz6wfNvdLybC5OXdi0EvcoqUGDYKSKWHQosAY03GvoTnMLIGt" target="_blank">Introdução à Linguagem HTML</a>
          </li>
          <li>
            <strong>Curso em Video:</strong> 
            <a href="https://www.cursoemvideo.com/curso/html5/" target="_blank">HTML[40 Horas]</a>
          </li>
          <li>
            <strong>Devmedia:</strong> 
            <a href="https://www.devmedia.com.br/html-basico-codigos-html/16596" target="_blank">HTML Básico</a>
          </li>
          <li>
            <strong>Youtube:</strong> 
            <a href="https://www.youtube.com/watch?v=Fhy-5CtVkiM" target="_blank">Seu primeito site do ZERO</a>
          </li>
        </ul>
      </aside>
    </div>

<?php include("../includes/footer.php"); ?>