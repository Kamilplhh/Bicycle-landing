const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        const prom = entry.target.querySelector('.prom');

        if (entry.isIntersecting) {
            prom.classList.add('appear');
            return;
        }

        prom.classList.remove('appear');
    });
});


observer.observe(document.querySelector('.text'));