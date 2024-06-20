document.getElementById('toggle').addEventListener('change', function() {
    var menu = document.querySelector('.main-nav');
    menu.classList.toggle('active');
});

window.addEventListener('click', function(e) {
    var menu = document.querySelector('.main-nav');
    if (e.target != menu && e.target != document.querySelector('.toggle')) {
        menu.classList.remove('active');
    }
});

window.addEventListener('scroll', function() {
    var menu = document.querySelector('.main-nav');
    menu.classList.remove('active');
});