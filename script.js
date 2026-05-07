// MENU MOBILE
const toggle = document.getElementById("menu-toggle");
const menu = document.getElementById("menu-list");

if (toggle && menu) {
    toggle.addEventListener("click", (e) => {
        e.stopPropagation();
        menu.classList.toggle("active");
    });
}

// DROPDOWN (CLIQUE)
document.querySelectorAll(".drop-hover > a").forEach(item => {
    item.addEventListener("click", function (e) {
        e.preventDefault();
        e.stopPropagation();

        const parent = this.parentElement;

        document.querySelectorAll(".drop-hover").forEach(el => {
            if (el !== parent) el.classList.remove("active");
        });

        parent.classList.toggle("active");
    });
});

// FECHAR AO CLICAR FORA
document.addEventListener("click", () => {
    document.querySelectorAll(".drop-hover").forEach(el => {
        el.classList.remove("active");
    });
    menu.classList.remove("active");
});

// ==============================
// MENU ATIVO AUTOMÁTICO
// ==============================

// Pega a página atual
const currentPage = window.location.pathname.split("/").pop();

const links = document.querySelectorAll(".menu a");

links.forEach(link => {

    // 🔥 IGNORA O ÍCONE HOME
    if (link.classList.contains("no-active")) return;

    const linkPage = link.getAttribute("href");

    if (linkPage === currentPage) {
        link.classList.add("active");
    }
});
// ==============================
// MÁSCARA TELEFONE
// ==============================

const telefone = document.getElementById("telefone");

if (telefone) {

    telefone.addEventListener("input", function (e) {

        let valor = e.target.value;

        // REMOVE TUDO QUE NÃO FOR NÚMERO
        valor = valor.replace(/\D/g, "");

        // LIMITA A 11 NÚMEROS
        valor = valor.substring(0, 11);

        // FORMATA
        valor = valor.replace(/^(\d{2})(\d)/g, "($1) $2");

        valor = valor.replace(/(\d{5})(\d)/, "$1-$2");

        e.target.value = valor;
    });
}