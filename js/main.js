document.addEventListener("DOMContentLoaded", () => {

    var swiper = new Swiper(".hyperSwiper", {
        slidesPerView: 4,
        spaceBetween: 20,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            269: {
                slidesPerView: 1,
            },
            640: {
                slidesPerView: 2,
            },
            991: {
                slidesPerView: 3,
            },
            1240: {
                slidesPerView: 3,
            },
            1650: {
                slidesPerView: 4,
            },
        },
    });

    // Плавный скролл для якорей (Адаптировано под wp_nav_menu();)
    // let anchors = document.querySelectorAll('ul.nav-menu a')
    //
    // for (let anchor of anchors) {
    //     anchor.addEventListener('click', function (e) {
    //         e.preventDefault()
    //
    //         const blockID = anchor.getAttribute('href')
    //
    //         document.querySelector(blockID).scrollIntoView({
    //             behavior: 'smooth',
    //             block: 'start'
    //         })
    //     })
    // }

    document.querySelectorAll('#hero-link').forEach(anchor => {
        Scroll(anchor)
    });

    document.querySelectorAll('#games-link').forEach(anchor => {
        Scroll(anchor)
    });

    document.querySelectorAll('ul.nav-menu a').forEach(anchor => {
        Scroll(anchor)
    });

    function Scroll(x) {
        x.addEventListener('click', function (e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth',
                block: 'end'
            });
        });
    }

    const sVlados = (x,y) => {
        let t = x + y;
        return t;
    }
    console.log(sVlados(10, 2));
});

