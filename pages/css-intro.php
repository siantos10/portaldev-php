<?php include("../includes/header.php"); ?>

<div class="container">
  <aside class="left">
    <h3>🎨 Dicas Rápidas</h3>
    <br />
    <ul>
      <li>
        <strong>Linkar o CSS:</strong> Use
        <code>&lt;link rel="stylesheet" href="css/style.css"&gt;</code> no
        <code>&lt;head&gt;</code>
      </li>
      <li>
        <strong>Seletores básicos:</strong> Aprenda a usar tags, classes (.) e
        IDs (#)
      </li>
      <li>
        <strong>Cor e fundo:</strong> Use <code>color</code> e
        <code>background-color</code>
      </li>
      <li>
        <strong>Fontes:</strong> Defina <code>font-family</code> e
        <code>font-size</code> para melhorar a leitura
      </li>
      <li>
        <strong>Espaçamentos:</strong> Use <code>margin</code> (externo) e
        <code>padding</code> (interno)
      </li>
      <li>
        <strong>Caixa de modelo:</strong> Entenda o
        <strong>box-model</strong> (content + padding + border + margin)
      </li>
      <li>
        <strong>Centralizar elementos:</strong> Use
        <code>margin: 0 auto;</code> em elementos com largura definida
      </li>
      <li>
        <strong>Flexbox básico:</strong> Use <code>display: flex;</code> para
        alinhar itens facilmente
      </li>
      <li>
        <strong>Comentários no CSS:</strong> Use
        <code>/* Seu comentário */</code> para organizar seu código
      </li>
      <li>
        <strong>Teste ao vivo:</strong> Use o DevTools (F12) para testar estilos
        rapidamente
      </li>
    </ul>
    <br />

    <h3>⚠️ Erros Comuns</h3>
    <br />
    <ul>
      <li>Esquecer de linkar o arquivo CSS na página HTML</li>
      <li>Escrever o nome da classe ou ID errado (case sensitive)</li>
      <li>Usar ponto (.) ou cerquilha (#) de forma incorreta nos seletores</li>
      <li>Esquecer de colocar <code>;</code> no final de cada propriedade</li>
      <li>Não entender o Box Model (causa problemas de espaçamento)</li>
    </ul>
  </aside>

  <main class="main full">
    <h2 class="banner">O que é CSS?</h2>

    <p>
      CSS (Cascading Style Sheets) é a linguagem utilizada para estilizar
      páginas web. Enquanto o HTML define a estrutura, o CSS define a aparência
      visual, como cores, tamanhos, espaçamentos e posicionamento dos elementos.
    </p>

    <p>
      Com CSS, você pode transformar uma página simples em um layout moderno e
      agradável, controlando desde pequenos detalhes até estruturas completas de
      design.
    </p>

    <h3>Como o CSS funciona?</h3>

    <p>
      O CSS funciona através de <strong>seletores</strong> e
      <strong>propriedades</strong>. O seletor define qual elemento será
      estilizado, e as propriedades definem como ele será exibido.
    </p>

    <p>Exemplo:</p>

    <pre>
p {
  color: blue;
  font-size: 16px;
}
        </pre
    >

    <p>
      Nesse exemplo, todos os parágrafos (<code>&lt;p&gt;</code>) terão texto
      azul e tamanho de 16 pixels.
    </p>

    <h3>Formas de usar CSS</h3>

    <ul>
      <li><strong>Inline:</strong> diretamente na tag HTML</li>
      <li><strong>Interno:</strong> dentro da tag &lt;style&gt;</li>
      <li><strong>Externo:</strong> arquivo separado (.css) ✔ recomendado</li>
    </ul>

    <h3>Exemplo de CSS externo</h3>

    <pre>
&lt;link rel="stylesheet" href="style.css"&gt;
        </pre
    >

    <h3>Por que aprender CSS?</h3>

    <p>O CSS é essencial para qualquer desenvolvedor web, pois permite:</p>

    <ul>
      <li>Criar layouts modernos e responsivos</li>
      <li>Melhorar a experiência do usuário</li>
      <li>Organizar visualmente o conteúdo</li>
      <li>Adaptar páginas para diferentes dispositivos</li>
    </ul>

    <h3>Conclusão</h3>

    <p>
      O CSS é responsável por dar vida ao HTML. Aprender CSS permite que você
      crie interfaces bonitas, organizadas e profissionais.
    </p>
  </main>

  <!-- ASIDE DIREITO - CURSOS DE CSS -->
  <aside class="right">
    <h3>🎨 Aprenda CSS3</h3>
    <br />
    <ul>
      <li>
        <strong>Curso em Vídeo HTML5 e CSS3:</strong>
        <a
          href="https://www.youtube.com/playlist?list=PLHz_AreHm4dkZ9-atkcmcBaMZdmLHft8n"
          target="_blank"
          >Curso HTML5 + CSS3 (Guanabara)</a
        >
      </li>
      <li>
        <strong>W3Schools:</strong>
        <a href="https://www.w3schools.com/css/default.asp" target="_blank"
          >Tutorial de CSS</a
        >
      </li>
      <li>
        <strong>Prime Cursos:</strong>
        <a
          href="https://www.primecursos.com.br/css-cascading-style-sheets-basico/"
          target="_blank"
          >CSS Básico (Grátis)</a
        >
      </li>
      <li>
        <strong>Khan Academy:</strong>
        <a
          href="https://pt.khanacademy.org/computing/computer-programming/html-css"
          target="_blank"
          >Introdução ao CSS</a
        >
      </li>
      <li>
        <strong>Hostinger Guia:</strong>
        <a
          href="https://www.hostinger.com.br/tutoriais/o-que-e-css-guia-basico-de-css"
          target="_blank"
          >Manual de Estilos</a
        >
      </li>
    </ul>
  </aside>
</div>

<?php include("../includes/footer.php"); ?>
