import Swiper from "https://cdn.jsdelivr.net/npm/swiper@12/swiper-bundle.min.mjs";
const videoButton = document.querySelector(".review__videoPlay");
const video = document.querySelector(".review__video");

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 24,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        320: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 2.5,
            centeredSlides: true,
        },
        1200: {
            slidesPerView: 2,
            spaceBetween: 30,
            centeredSlides: true,
        },
        1400: {
            slidesPerView: 2.5,
            // spaceBetween: 80,
            centeredSlides: true,
        },
        1700: {
            slidesPerView: 3,
            centeredSlides: true,
        },
    },
});

const playVideo = () => {
    video.play();
    videoButton.classList.toggle("active");
};

const restartVideo = () => {
    videoButton.classList.toggle("active");
};

videoButton.addEventListener("click", playVideo);

video.addEventListener("ended", restartVideo);
