function afficherMenu() {
    const openMenu = document.getElementById('open-menu');
    const closeMenu = document.getElementById('close-menu');
    const menu = document.getElementById('menu');

    menu.classList.toggle('open');
    if (menu.classList.contains('open')) {
        openMenu.classList.add('open');
        closeMenu.classList.add('open');
    } else {
        openMenu.classList.remove('open');
        closeMenu.classList.remove('open');
    }
}