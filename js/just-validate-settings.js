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
    ])

