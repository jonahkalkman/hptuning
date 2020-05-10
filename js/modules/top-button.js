const button = document.querySelector('[js-hook-top-button]');

class topButton {
    constructor(){
        this.scrollTrigger = 700;
        this.bindEvents();
    }

    bindEvents = () => {
        button.addEventListener('click', (e) => {
            e.preventDefault();
            window.scroll({
                top: 0, 
                left: 0, 
                behavior: 'smooth' 
            });
        });

        window.addEventListener('scroll', () => {
            console.log('dwadwad')
            window.scrollY >= this.scrollTrigger ? button.classList.add('u-visible--show') : button.classList.remove('u-visible--show');
        });
    }
}

export default new topButton