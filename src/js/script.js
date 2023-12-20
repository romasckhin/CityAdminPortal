const burger = document.querySelector('.header__burger-menu');
const box = document.querySelector('.header__box');
const body = document.body;

if (burger && box) {
    burger.addEventListener('click', () => {
        burger.classList.toggle('_active');
        box.classList.toggle('_active');
    })
}



const items = document.querySelectorAll('.header__filter-block');

items.forEach(item => {
    item.addEventListener('click', event => {
        item.querySelector('.header__filter-dropdown').classList.toggle('_active');
        item.querySelector('.header__filter-block-icon').classList.toggle('_active');
    })
})