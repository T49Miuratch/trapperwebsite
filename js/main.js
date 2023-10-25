{
    const trapperMenuP = document.querySelector('.trapper_menu_parent');
    const trapperMenuC = document.querySelector('.trapper_menu_child');

        trapperMenuP.addEventListener('click', () => {
        trapperMenuC.classList.toggle('active');
        trapperMenuP.classList.toggle('active');
    });

}