const form = document.querySelector(".call-back__form");
form.addEventListener("submit", formSend);

async function formSend(event) {
    event.preventDefault();

    const formData = new FormData(form);

    let response = await fetch('php/sendmail.php', {
        method: 'POST',
        body: formData,
        mode: 'no-cors'
    });

    if(response.ok){
        alert("mail sent");
        form.reset();
    } else{
        alert("error");
    }
}