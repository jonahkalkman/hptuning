const body = document.querySelector('body');
const html = document.documentElement;
const images = document.querySelectorAll('[js-hook-image-popup]');
const imageModal = document.querySelector('[js-hook-image-modal]');

class imagePopup {
    constructor(){
        this.imagesArray = Array.prototype.slice.call(images);
        this.bindEvents();
    }

    bindEvents = () => {
        // Open Popup
        if(this.imagesArray){
            imagesArray.forEach( (image) => {
                image.addEventListener("click", () => {
                    imageModal.children[0].src = image.src;
                    imageModal.classList.remove('c-modal--closing');
                    imageModal.classList.add('c-modal--visible');
                    body.classList.add('u-overflow-hidden');
                    html.classList.add('u-overflow-hidden');
                });
            });
        }
        // Close Popup
        if(imageModal){
            imageModal.addEventListener('click', (element) => {
                if(element.target != this){
                    return null;
                }
                imageModal.classList.add('c-modal--closing');
                setTimeout(() => imageModal.classList.remove('c-modal--visible'), 400)
                body.classList.remove('u-overflow-hidden');
                html.classList.remove('u-overflow-hidden');
            });
        }
    }
}

export default new imagePopup