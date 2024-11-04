const topBar = document.getElementById("top-bar");
const navContainer = document.getElementById("nav-container");
let lastScrollTop = 0;

window.addEventListener("scroll", () => {
    let scrollTop = window.scrollY || document.documentElement.scrollTop;

    if (scrollTop > 0) {
        topBar.style.transform = "translateY(-100%)"; // Oculta el top-bar al hacer scroll
        navContainer.style.top = "0"; // Fija el nav-container en la parte superior
    } else {
        topBar.style.transform = "translateY(0)"; // Muestra el top-bar
        navContainer.style.top = "36px"; // Coloca el nav-container debajo del top-bar
    }

    lastScrollTop = scrollTop;
});