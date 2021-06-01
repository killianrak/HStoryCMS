const inscription = document.getElementById('inscription');
const close = document.querySelector('.buttonClose');
const popup = document.querySelector('.popup');
const overlay = document.querySelector('.popup_container');

inscription.addEventListener('click', (e) => {
    e.preventDefault();
    overlay.style.display = 'block';
    popup.style.opacity = 1;
    popup.style.top = 50 + "%";
});

close.addEventListener('click', () => {
    
    overlay.style.display = 'none';
});