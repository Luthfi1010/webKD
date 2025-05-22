document.querySelector('.nav-link').addEventListener('click', function(e) {
    e.preventDefault(); // Mencegah perilaku default link

    // Scroll halus menuju bagian "About"
    document.querySelector('#about').scrollIntoView({
        behavior: 'smooth'
    });
});


