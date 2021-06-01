
const connexion = document.querySelector('.mdp');
const email = document.querySelector('.email');
const passForm = document.querySelector('.formulairePassword');
const emailForm = document.querySelector('.formulaireEmail');
const buttonClose = document.querySelector('.buttonClose');
const modal = document.querySelector('.overlay');
const menu = document.querySelector('.menu_burger');


connexion.addEventListener('click', () => {
    passForm.classList.toggle('openForm');
    modal.classList.add('overlayy');
    emailForm.classList.remove('openFormEmail');
    buttonClose.classList.add('buttonCloseShow');
});

email.addEventListener('click', () => {
    emailForm.classList.toggle('openFormEmail');
    modal.classList.add('overlayy');
    passForm.classList.remove('openForm');
    buttonClose.classList.add('buttonCloseShow');
});

buttonClose.addEventListener('click', () => {
    emailForm.classList.remove('openFormEmail');
    passForm.classList.remove('openForm');
    modal.classList.remove('overlayy');
    buttonClose.classList.remove('buttonCloseShow');
});
