// main css import
import '../scss/main.scss';

import Navigation from './components/Navigation.js';

window.addEventListener('load', () => {
    const navigationTrigger = document.querySelector('.burger');
    const navigationList = document.querySelector('.main-navigation__list');
    
    const navigation = new Navigation(navigationTrigger, navigationList);
})
