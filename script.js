document.getElementById('toggle').addEventListener('change', function() {
    var menu = document.querySelector('.main-nav');
    menu.classList.toggle('active');
});

window.addEventListener('scroll', (e) => {
    if (e.target.scrollingElement.scrollTop > 100) {
        document.querySelector('.main-nav').classList.add('scroll');
        
    }
});