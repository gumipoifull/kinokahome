const mneuBtn = document.getElementById('js-mobile-menu__btn');
const slideMenu = document.getElementById('js-mobile-menu__cover');

function menuClick(){
    mneuBtn.classList.toggle("active");
    slideMenu.classList.toggle("active");
}

mneuBtn.addEventListener('click', menuClick);
