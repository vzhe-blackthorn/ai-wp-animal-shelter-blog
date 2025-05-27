document.addEventListener('DOMContentLoaded', function () {
    const nav = document.querySelector('.site-navigation');
    const burger = document.querySelector('.burger');

    if (burger && nav) {
        burger.addEventListener('click', function () {
            nav.classList.toggle('open');
        });
    }

    if (typeof Swiper !== 'undefined') {
        new Swiper('.swiper', {
            loop: true,
            slidesPerView: 1,
            autoplay: {
                delay: 5000,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    }
});
