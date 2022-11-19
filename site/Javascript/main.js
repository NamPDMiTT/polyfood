if (document.querySelector('.menu__mobile')) {
    document.addEventListener('click', function (event) {
        const listMenu = document.querySelector('.menu__mobile')
        const menuMobile_btn = document.querySelector('#menu-mobile-btn')
        if (menuMobile_btn.contains(event.target)) {
            listMenu.classList.toggle('hidden')
            listMenu.classList.toggle('list-menu-mobile')
        } else {
            if (!listMenu.classList.contains('hidden')) {
                listMenu.classList.add('hidden')
                listMenu.classList.remove('list-menu-mobile')
            }
        }
    })
}