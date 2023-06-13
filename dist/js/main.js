function toggleGrid() {
    const grid = document.querySelector('.grid');
    grid.classList.toggle('active');
}

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
function imageTop(image1, image2, image3) {
    var image1 = document.getElementById(image1);
    var image2 = document.getElementById(image2);
    var image3 = document.getElementById(image3);
    image1.style.zIndex = 4;
    image2.style.zIndex = 3;
    image3.style.zIndex = 2;

}
function filtreRealisation(e, categorie) {
    const btnCategorie = document.getElementById('btn-' + categorie);
    const btns = document.getElementsByClassName('btn-categorie');
    const projects = document.querySelectorAll(".realisations .single-project");
    const filter = e.target.dataset.filter;

    Array.from(btns).forEach(btn => btn.classList.remove('active'));
    btnCategorie.classList.add('active');
    if (filter === '*') {
        projects.forEach(project => project.style.display = 'flex');
    } else {
        projects.forEach(project => {

            project.style.display = project.classList.contains(filter) ? 'flex' : 'none';
        });
    }
}

function afficherRealisation(id) {
    console.log(id)
    var url = "/pages/realisation.php?id=" + id;

    window.location.href = url;
}