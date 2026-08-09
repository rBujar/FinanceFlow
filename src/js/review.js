const videoButton = document.querySelector(".review__videoPlay");
const video = document.querySelector(".review__video");
import Swiper from 'swiper/bundle';

var swiper = new Swiper(".mySwiper", {
    spaceBetween: 24,
    slidesPerView: "auto",
    // centeredSlides: true,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
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
