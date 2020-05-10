const button = document.querySelector('[js-hook-arrow-down]');

class arrowDown {
    constructor(){
        this.scrollTrigger = 700;
        this.bindEvents();
    }

    bindEvents = () => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            window.scroll({
                top: 700,    
                left: 0, 
                behavior: 'smooth' 
            });
        });
    }
}

export default new arrowDown