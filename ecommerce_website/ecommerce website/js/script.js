document.addEventListener('DOMContentLoaded', function () {
    // Select elements after DOM is loaded
    let sideBar = document.querySelector('.side-bar');
    let searchForm = document.querySelector('.search-form');
    let menuBtn = document.querySelector('#menu-btn');
    let closeSideBarBtn = document.querySelector('#close-side-bar');
    let searchBtn = document.querySelector('#search-btn');
    let accordionContainers = document.querySelectorAll('.accordion-container .accordion');

    // Event listeners for sidebar
    if (sideBar && menuBtn && closeSideBarBtn) {
        menuBtn.addEventListener('click', () => {
            sideBar.classList.toggle('active');
        });

        closeSideBarBtn.addEventListener('click', () => {
            sideBar.classList.remove('active');
        });
    } else {
        console.error('Sidebar elements not found.');
    }

    // Event listener for search form
    if (searchForm && searchBtn) {
        searchBtn.addEventListener('click', () => {
            searchForm.classList.toggle('active');
        });
    } else {
        console.error('Search form elements not found.');
    }

    // Event listener for scroll
    window.addEventListener('scroll', () => {
        if (sideBar) sideBar.classList.remove('active');
        if (searchForm) searchForm.classList.remove('active');
    });

    // Event listeners for accordions
    accordionContainers.forEach(accordion => {
        if (accordion) {
            accordion.addEventListener('click', () => {
                accordion.classList.toggle('active');
            });
        }
    });

    // Initialize Swiper sliders (add null checks if needed)
    let homeSlider = new Swiper(".home-slider", {
        loop: true,
        grabCursor: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });

    let reviewSlider = new Swiper(".review-slider", {
        loop: true,
        grabCursor: true,
        spaceBetween: 20,
        breakpoints: {
            450: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            },
        },
    });
});
