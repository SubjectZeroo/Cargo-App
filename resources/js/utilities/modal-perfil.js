const modalOpen = document.querySelector(".openModalPerfil");

const modalClose = document.querySelector(".closeModalPerfil");
modalOpen.addEventListener("click", () => {
    document.querySelector('#modalPerfil').classList.toggle('hidden')
});
modalClose.addEventListener("click", () => {
    document.querySelector('#modalPerfil').classList.toggle('hidden')
});
