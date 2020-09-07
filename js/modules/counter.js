import { CountUp } from 'countup.js';

const countElements = document.querySelectorAll('[js-hook-counter]');

class counter {
    constructor(){
        this.bindEvents();
    }

    bindEvents = () => {
        const options = {
            duration: 7
        }
        countElements.forEach(item => {
            const countUp = new CountUp(item, item.getAttribute('data-value'), options);
            if (!countUp.error) {
                countUp.start();
            } else {
                console.error(countUp.error);
            }
        })
    }
}

export default new counter