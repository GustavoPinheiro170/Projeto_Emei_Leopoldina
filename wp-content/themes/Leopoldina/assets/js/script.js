function scrollSuave() {
    const linksInternos = document.querySelectorAll('.js-menu a[href^="#"]');

    function scrollToSection(event) {
        event.preventDefault();
        const href = event.currentTarget.getAttribute('href');
        const section = document.querySelector(href);
        const topo = section.offsetTop - 50;
        window.scrollTo({
            top: topo,
            behavior: 'smooth'
        });
    }

    linksInternos.forEach((link) => {
        link.addEventListener('click', scrollToSection)
    })
}

function scrollNavbar() {
    const navbar = document.querySelector('.navbar');
    if (window.scrollY > navbar.scrollHeight) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
}

function scrollAnimate() {
    const classAnimated = document.querySelectorAll(".js-animated");
    const windowMetade = window.innerHeight * 0.6;
    classAnimated.forEach((section) => {
        const sectionTop = section.getBoundingClientRect().top;
        const isSectionVisible = (sectionTop - windowMetade < 0)
        if (isSectionVisible) {
            section.classList.add('class_animated');
        } else {
            section.classList.remove("class_animated");
        }
    })
}

window.onclick = () => {
    scrollSuave();
}
window.onscroll = () => {
    scrollAnimate();
    scrollNavbar();
}