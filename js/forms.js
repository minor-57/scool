"use strict"

window.addEventListener('DOMContentLoaded', function(){
    const form = document.getElementById('call-back-form');
    form.addEventListener("submit", formSend);

    async function formSend(e){
        e.preventDefault();

        let error =  formValidate(form);
        const formData = new FormData(form);

        if (error === 0){
            let response = await fetch('php/sendmail.php', {
                method: 'POST',
                body: formData,
                mode: 'no-cors'
            });
            if (response.ok){
                alert("Письмо отправлено")
                form.reset();
            }else{
                alert('Error!!');
            }

        }else{
            // alert('Заполните обязательные поля!'); 
        }
    }

    function formValidate(form){
        let error = 0;
        let formReq = document.querySelectorAll('._req');

        formReq.forEach(function(el){
            const input = el;
            formRemoveError(input);

            if(input.classList.contains('_email')){
                if(emailTest(input)){
                    formAddError(input);
                    error++;
                }
            }else if (input.getAttribute("type") === "checkbox" && input.checked === false){
                    formAddError(input);
                    error++;
                }else{
                    if(input.value === ''){
                        formAddError(input);
                        error++;
                    }
                }

            
        })
        return error;
    }

    function formAddError(input){
        input.parentElement.classList.add('_error');
        input.classList.add('_error');
    }

    function formRemoveError(input){
        input.parentElement.classList.remove('_error');
        input.classList.remove('_error');
    }

    function emailTest(input){
        return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
    }


     // ---------------- account forms----------------------

     const login_validator = new JustValidate('#login-form');
     const registration_validator = new JustValidate('#registration-form');
     const recovery_validator = new JustValidate('#recovery-form');
 
     login_validator
         .addField('#login-email', [
             {
                 rule: 'required',
                 errorMessage: 'Поле не заполнено',
             },
             {
                 rule: 'email',
                 errorMessage: 'Неверный email-адрес'
             },
 
         ])
         .addField('#login-pass', [
             {
                 rule: 'required',
                 errorMessage: 'Поле не заполнено',
             },
             {
                 rule: 'password',
                 errorMessage: 'Пароль должен содержать от 8 символов, мнимум 1 цифру и букву',
             },
         ]);
 
     registration_validator
         .addField('#registrtion__name', [
             {
                 rule: 'required',
                 errorMessage: 'Поле не заполнено',
             },
             {
                 rule: 'maxLength',
                 value: 35,
                 errorMessage: 'Слишком длинное имя',
             },
             {
                 rule: 'minLength',
                 value: 2,
                 errorMessage: 'Слишком короткое имя',
             },
         ])
         .addField('#registrtion__surname', [
             {
                 rule: 'required',
                 errorMessage: 'Поле не заполнено',
             },
             {
                 rule: 'maxLength',
                 value: 35,
                 errorMessage: 'Слишком длинная фамилия',
             },
             {
                 rule: 'minLength',
                 value: 2,
                 errorMessage: 'Слишком короткая фамилия',
             },
         ])
         .addField('#registrtion__email', [
             {
                 rule: 'required',
                 errorMessage: 'Поле не заполнено',
             },
             {
                 rule: 'email',
                 errorMessage: 'Неверный email-адрес'
             },
         ])
         .addField('#registrtion__pass', [
             {
                 rule: 'required',
                 errorMessage: 'Поле не заполнено',
             },
             {
                 rule: 'password',
                 errorMessage: 'Пароль должен содержать от 8 символов, мнимум 1 цифру и букву',
             },
         ])
         .addField('#personal-check', [
             {
                 rule: 'required',
                 errorMessage: 0
             },
         ]);
 
     recovery_validator
         .addField('#recovery__email', [
             {
                 rule: 'required',
                 errorMessage: 'Поле не заполнено',
             },
             {
                 rule: 'email',
                 errorMessage: 'Неверный email-адрес'
             },
         ]);
 
 
 
 
     document.querySelectorAll('.account-tab-btn').forEach(function(el){
         el.addEventListener('click', function(){
             login_validator.refresh();
             registration_validator.refresh();
             recovery_validator.refresh();
         });
     })
 
    //  const reg_form = document.getElementById('registration-form')
    //  reg_form.addEventListener("submit", regFormSend);
 
    //  async function regFormSend(el){
    //      el.preventDefault();
 
         
    //      const formData = new FormData(reg_form);
 
 
    //          const test = await registration_validator.revalidate()
    //          if(test){
    //              let response = await fetch('php/reg.php', {
    //              method: 'POST',
    //              body: formData,
    //              mode: 'no-cors'
    //              });
    //              if (response.ok){
    //                  alert('form sent');
    //                  reg_form.reset();
     
    //              }
    //          } else {
    //              alert('errrrrooorrr');
 
    //          }
 
    //  };


     const loginForm = document.getElementById('login-form');
     const registrationForm = document.getElementById('registration-form');

     function login(form){
        form.addEventListener('submit', async (ev) => {
            ev.preventDefault();
            const errors = document.querySelectorAll('.just-validate-error-label')

            if(errors.length){
                console.log('не пройдена валидация полей авторизации');
                return;
            }

            const name = form.elements["username"].value;
            const password = form.elements["password"].value;
            console.log(JSON.stringify({username: name, password: password}));
            let response = await fetch('http://localhost:5000/auth/login', {
                method: 'POST',
                body: JSON.stringify({username: name, password: password}),
                headers: {
                    'Origin': 'http://127.0.0.1:5500/index.html',
                    'Content-Type': 'application/json'
                }
            })  
            console.log(response);
            if(response.ok){
                document.querySelectorAll('._modal-wraper').forEach((el)=>{
                    el.classList.remove('active');
                })
                document.querySelectorAll('.login-btn').forEach((el) =>{
                    el.classList.add('disabled');
                })
                document.querySelectorAll('.logout-btn').forEach((el) =>{
                    el.classList.add('active');
                })
                sessionStorage.setItem("token", response.body)
                console.log(`ваш токен ${response.body}`)
            }
        })
     }

     function registrate(form){
        form.addEventListener('submit', async (ev)=>{
            ev.preventDefault();
            const errors = document.querySelectorAll('.just-validate-error-label')

            if(errors.length){
                console.log('не пройдена валидация полей авторизации');
                return;
            }
            const name = form.elements["username"].value;
            const password = form.elements["password"].value;
            let response = await fetch('http://localhost:5000/auth/registration', {
                method: 'POST',
                body: JSON.stringify({username: name, password: password}),
                headers: {
                    'Origin': 'http://127.0.0.1:5500/index.html',
                    'Content-Type': 'application/json'
                }
            })
            if(response.ok){
                let loginResponse = await fetch('http://localhost:5000/auth/login', {
                method: 'POST',
                body: JSON.stringify({username: name, password: password}),
                headers: {
                    'Origin': 'http://127.0.0.1:5500/index.html',
                    'Content-Type': 'application/json'
                    }
                })
                if(loginResponse.ok){
                    document.querySelectorAll('._modal-wraper').forEach((el)=>{
                        el.classList.remove('active');
                    })
                    document.querySelectorAll('.login-btn').forEach((el) =>{
                        el.classList.add('disabled');
                    })
                    document.querySelectorAll('.logout-btn').forEach((el) =>{
                        el.classList.add('active');
                    })
                    sessionStorage.setItem("token", response.body)
                    console.log(`ваш токен ${response.body}`)
                }
            }
        })
     }
     registrate(registrationForm);
     login(loginForm);
 
     
 })
