window.addEventListener('DOMContentLoaded', function(){
    const swiper_1 = new Swiper('.swiper_1', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        allowTouchMove: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        breakpoints: {
        320: {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 0,
        grid: {
            rows: 2,
            fill: 'row',
        },
        },
        930: {
        slidesPerView: 2,
        slidesPerGroup: 2,
        spaceBetween: 0,
        grid: {
            rows: 2,
            fill: "row",
        },
        },
        1400: {
        slidesPerView: 3,
        slidesPerGroup: 3,
        spaceBetween: 0,
        grid: {
            rows: 2,
            fill: "row",
        },
        }
    }

    });

    const swiper_2 = new Swiper('.swiper_2', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        allowTouchMove: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
   
        breakpoints: {
        320: {
            slidesPerView: 'auto',
            spaceBetween: 15,
            centeredSlides: false,

        },
        1290: {
            slidesPerView: 2,
            spaceBetween: 15,
            centeredSlides: false,
        },
        1600: {
        slidesPerView: 3,
        spaceBetween: 30,
        }
    }

    });

    const swiper_3 = new Swiper('.swiper_3', {
        // Optional parameters
        direction: 'horizontal',
        loop: false,
        allowTouchMove: true,

        // If we need pagination
        pagination: {
            el: '.swiper-pagination',
        },

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        breakpoints:{
            320:{
                slidesPerView: 1,
                slidesPerGroup: 1,
                spaceBetween: 0,
            },
            955:{
                slidesPerView: 2,
                spaceBetween: 30,
            },
        },

    });
})