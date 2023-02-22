const bg = document.getElementById('header');
window.addEventListener('scroll', function() {
    bg.style.backgroundSize = 100 - +this.window.pageYOffset/12+'%';
    bg.style.opacity = 1 - +window.pageYOffset / 700+ '';

})

const bgTwo = document.getElementById('headertwo');

window.addEventListener('scroll', function() {
    bgTwo.style.backgroundSize = 100 - +this.window.PageYOffset/24+'%';
    bgTwo.style.opacity = 1 - +this.window.pageYOffset / 700+ '';
})