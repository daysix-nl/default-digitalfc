try {
    // JavaScript-code om class te togglen
    document.getElementById('menu').addEventListener('click', function () {
        // Verkrijg het body-element
        var bodyElement = document.body;

        // Toggle class 'active' en 'non-active' op het body-element
        bodyElement.classList.toggle('active');
        bodyElement.classList.toggle('non-active');
    });
} catch (error) { }



function addParallaxEffect(innerClass, sectionClass) {
    try {
        const inner = document.querySelector(innerClass);
        const section = document.querySelector(sectionClass);

        if (!inner || !section) {
            throw new Error("Inner or section element not found");
        }

        window.addEventListener("scroll", function () {
            let scrollPosition =
                window.scrollY ||
                window.scrollTop ||
                document.getElementsByTagName("html")[0].scrollTop;
            let centerPoint = section.offsetTop + section.offsetHeight / 2 - window.innerHeight / 1;
            let scale;

            // Scaling from 1 to 1.5 when scroll is from 0 to centerPoint of image
            if (scrollPosition <= centerPoint) {
                scale = 1.5 - (scrollPosition / centerPoint) * 0.5;
            }
            scale = Math.max(Math.min(scale, 1.5), 1); // Clamp scale value between 1 and 1.5

            inner.style.transform = `scale(${scale})`;
        });
    } catch (error) {
        console.error(error.message);
    }
}

// Gebruik de functie voor elk geval op de pagina
addParallaxEffect(".inner-par1", ".section-par1");
addParallaxEffect(".inner-par2", ".section-par2");
// Voeg hier zoveel aanroepen toe als nodig is



try {
    var swiperHero = new Swiper(".swiperhero", {
        spaceBetween: 40,
        lazy: false,
        freeMode: true,
        loop: true,
        speed: 750000,

        autoplay: {
            delay: 0,
            disableOnInteraction: false,
        },
        slidesPerView: "auto",
        breakpoints: {
            640: {
                speed: 750000,
            },
            768: {
                speed: 660000,
            },
            1024: {
                speed: 660000,
            },
        },
    });
} catch (error) { }



try {
    let prevScrollpos = window.pageYOffset;
    window.addEventListener("scroll", () => {
        let body = document.body;
        let currentScrollPos = window.pageYOffset;
        const scrollpos = window.scrollY;

        if (prevScrollpos > currentScrollPos) {
            body.classList.remove('scroll-active');
            body.classList.add('scroll-nonactive');
        } else if (scrollpos > 200) {

            body.classList.remove('scroll-nonactive');
            body.classList.add('scroll-active');
        }
        prevScrollpos = currentScrollPos;
    });
} catch (error) { }