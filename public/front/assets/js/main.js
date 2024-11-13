const navMenu = document.getElementById("nav-menu");
const hamburger = document.getElementById("hamburger");
const closeicon = document.getElementById("closeicon");

hamburger.addEventListener("click", () => {
    if (navMenu.getAttribute("data-menu") === "closed") {
        navMenu.setAttribute("data-menu", "open");
    } else {
        navMenu.setAttribute("data-menu", "closed");
    }
});

closeicon.addEventListener("click", () => {
    navMenu.setAttribute("data-menu", "closed");
});
