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