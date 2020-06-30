const body = document.querySelector('body');
const openButton = document.querySelector('[js-hook-open-button]');
const closeButton = document.querySelector('[js-hook-close-button]');
const menu = document.querySelector('[js-hook-mobile-menu]');

const btn = document.getElementById('elem');

class mobileMenu {
    constructor(){
        this.bindEvents();
    }

    bindEvents = () => {
        openButton.addEventListener('click', () => {
            menu.classList.add('u-display--flex'); 
            body.classList.add('u-overflow-hidden');
        });

        closeButton.addEventListener('click', () => {
            menu.classList.remove('u-display--flex'),  
            body.classList.remove('u-overflow-hidden');
        });

        menu.querySelectorAll('a').forEach(item => item.addEventListener('click', () => {
            menu.classList.remove('u-display--flex'),  
            body.classList.remove('u-overflow-hidden');
        }))
    }
}

export default new mobileMenu