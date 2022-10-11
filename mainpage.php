<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/mainpage.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="./js/mainpage.js"></script>
    <title>Animflix-Home</title>
</head>
<body class = light-mode>
<header>
    <div class="wrapper">
        <nav class="navbar">
          <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>
            <ul id="menu">
              <a href="#"><li>Home</li></a>
              <a href="#"><li>Series</li></a>
              <a href="#"><li>film</li></a>
              <a href="#"><li>New From Animflix</li></a>
              <a href="about.html" target="_blank"><li>About</li></a>
            </ul>
            </div>
            <div class ="navbar-logo">
                <img src="./img/Animflix-Logo.png" alt="">
            </div>
            <div class="search-2">
              <img src="./img/baseline_search_white_24dp.png" >
            </div>
                <ul class="list-bar">
                    <li><a href="">Home</a></li>
                    <li><a href="">Series</a></li>
                    <li><a href="">Film</a></li>
                    <li><a href="">New From ANIMFLIX </a></li>
                    <li><a href="">About</a></li>
                <ul>
                    <div class="right-menu">
                        <ul>
                            <li>
                                <a class="search">
                                    <span class="material-icons">
                                        search
                                    </span>
                                </a> 

                            </li>
                            <li>
                            <a class="darkmode-toggle">
                                <input type="checkbox" class="toggle-button">
                            </a>
                            </li>
                            <li>
                            <a href="">AniKids</a>
                            </li>
                            <li>
                                <a class="gift">
                                <img src="./img/gift-512.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="notif">
                                <img src="./img/baseline_notifications_white_24dp.png" alt="">
                                </a>
                            </li>
                            <li>
                                <a class="user-profile">
                                <img src="./img/User-Profile-PNG.png" alt="">
                                </a>
                            </li>
                        <ul>
                    </div>
            </div>
        </nav>
    </div>
</header>
<main>
    <section class="thumbSection">
        <h2 class="thumbTitle">Popular Now</h2>
        <div class="thumbTiles swiper-container">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image"
                            src="./img/anime-mob-psycho-100-season-3.jpg"
                            alt="The Queen's Gambit">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image"
                            src="./img/spy-x-family.webp"
                            alt="Dark">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image"
                            src="./img/Chainsaw-Man-Anime.webp"
                            alt="Suits">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image"
                            src="./img/bleachthousandyearbloodwararc_keyvisual2-1-e1659800164822.webp"
                            alt="">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a class="thumbTile" href="#">
                        <img class="thumbTile__image"
                            src="./img/anime-mob-psycho-100-season-3.jpg"
                            alt="The Crown">
                    </a>
    
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>

            <!-- If we need navigation buttons -->

        </div>
    </section>
</main>
        <section class="footer">Footer</section>

        <footer class="footer-distributed">
    
          <div class="footer-right">


    
          </div>
    
          <div class="footer-left">
          </div>

        </footer>
        <script>
        var mySwiper = new Swiper('.swiper-container', {
            // Optional parameters
            spaceBetween: 5,
            slidesPerView: 2,
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
    </script>
    <script src="./js/jquery.js"></script>
</body>
</html>