import './bootstrap';
import { Carousel } from './carousel';

AOS.init();

document.addEventListener('DOMContentLoaded', () => {
    new Carousel(`.carousel-welcome`, `.progress-bar`,7000 );
    new Carousel(`.carousel-schools`, null, 3000 );
});

var prevScrollpos = window.pageYOffset;
var header = document.querySelector("nav")

window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (currentScrollPos >= 0) {
        if (prevScrollpos > currentScrollPos) {
            header.classList.add('fixed');
            header.classList.remove('hidden');
        } else {
            header.classList.remove('fixed');
            header.classList.add('hidden');
        }
    }
    prevScrollpos = currentScrollPos;
}
