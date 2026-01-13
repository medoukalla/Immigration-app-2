// Initialize Swiper

var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 10,
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 5000,
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        "@1.00": {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        "@1.50": {
            slidesPerView: 4,
            spaceBetween: 50,
        },
    },
});

const winAccordionHeader = document.querySelectorAll(".win-accordion-header");

winAccordionHeader.forEach((header) => {
    header.addEventListener("click", () => {
        // 1. Remove active from ALL others
        winAccordionHeader.forEach((otherHeader) => {
            if (otherHeader !== header) {
                otherHeader.classList.remove("active");
                const otherBody = otherHeader.nextElementSibling;
                otherBody.style.maxHeight = 0;
            }
        });

        // 2. Toggle current one
        header.classList.toggle("active");
        const body = header.nextElementSibling;

        if (header.classList.contains("active")) {
            body.style.maxHeight = body.scrollHeight + "px";
        } else {
            body.style.maxHeight = 0;
        }
    });
});
