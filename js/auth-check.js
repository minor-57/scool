

(() =>{
    const button = document.querySelector('.auth-alert__btn');
    const modal = document.querySelector('.auth-alert');
    const block = document.querySelector('.block');
    
    button.addEventListener('click', () => {
        window.location.replace('../../index.html')
    })

    if(!sessionStorage.token){
        modal.classList.add('active');
        block.classList.add('active');
        body.classList.add('no-scroll');
    }
})()