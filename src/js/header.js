const hamburger = document.querySelector(".header__hamburger");
const navbar = document.querySelector(".header__nav");
const menuList = document.querySelectorAll(".header__item");

const noScroll = () => {
    if (window.innerWidth < 1200) {
        document.body.classList.toggle("no-scroll");
    }
};

hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    navbar.classList.toggle("active");
    noScroll();
});

menuList.forEach((list) => {
    list.addEventListener("click", () => {
        hamburger.classList.toggle("active");
        navbar.classList.toggle("active");
        noScroll();
    });
});