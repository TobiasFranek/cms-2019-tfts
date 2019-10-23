export default class Navigation {

    constructor(trigger, nav) {
        this.trigger = trigger;
        this.nav = nav;
        this.initEvents();
    }

    clickHandler() {
        this.nav.classList.toggle('open');
        this.trigger.classList.toggle('open')
    }

    initEvents() {
        this.trigger.addEventListener('click', this.clickHandler.bind(this));
    }
}