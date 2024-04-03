window.addEventListener('DOMContentLoaded', function(){
    const btn = document.querySelector('.side-section__button-back');
    const menu = document.querySelector('.side-section');

    btn.classList.add('active');
    menu.classList.add('active');

    window.addEventListener("resize", () => {
        let currentWidth = (window.innerWidth > 0) ? window.innerWidth : screen.width;
        if(currentWidth <= 669 ) {
            btn.classList.remove('active');
            menu.classList.remove('active');
        }
        else{
            btn.classList.add('active');
            menu.classList.add('active');
        }
    })

    btn.addEventListener('click', function(){
            btn.classList.toggle('active');
            menu.classList.toggle('active');        

    })

    

})