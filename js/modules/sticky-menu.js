const menu = document.querySelector('.c-header'); 

class stickyMenu {
    constructor(){
        this.sticky = menu.offsetTop;
        this.bindEvents();
    }

    bindEvents(){
        window.addEventListener('scroll', () => {
            if(window.pageYOffset > this.sticky) {
                menu.classList.add("c-header--sticky");
            } 
            else {
                menu.classList.remove("c-header--sticky");
            }
        });
    }
}

export default new stickyMenu

