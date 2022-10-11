var mySwiper = new Swiper('.swiper-container', {
    // Optional parameters
    spaceBetween: 5,
    slidesPerView: 3,
    loop: true,
    freeMode: true,
    loopAdditionalSlides: 5,
    speed: 500,
    // Navigation arrows
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        // when window width is >= 640px
        640: {
            slidesPerView: 5,
            slidesPerGroup: 5,
            freeMode: false
        }
    }
})
var toggleSwitch = document.querySelector(".toggle-button");

function switchTheme(e) {
  if (e.target.checked) {
    document.documentElement.setAttribute("data-theme", "dark");
    /*If required*/
    document.body.classList.add("dark-mode");
    document.body.classList.remove("light-mode");
  } else {
    document.documentElement.setAttribute("data-theme", "light");
    /*If required*/
    document.body.classList.add("light-mode");
    document.body.classList.remove("dark-mode");
  }
}
toggleSwitch.addEventListener("change", switchTheme, false);
