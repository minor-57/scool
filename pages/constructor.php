<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Крнструктор</title>
    <link rel="stylesheet" href="../css/normalize.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <?php
    // require_once __DIR__ . '/../php/reg-auth/config.php';
    // require_once __DIR__ . '/../php/reg-auth/auth-check.php';
    ?>
</head>
<body>
    <div class="container justify-content-center pt-5">
        <div class="row mb-3">
            <h2 class="">Конструктор редактирования структуры каталога</h2>
        </div>
        <div class="row mb-3">
            <p class="">В Данном конструкторе вы можете создавать новые разделы и наполнять их контентом.</p>
        </div>
        <div class="row mb-5">
            <p class="">Пример заполнения поля с сылками на веб ресурсы: <br>
            <!--  -->
        </p>
        </div>
        <div class="form-floating mb-3 row">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Выбрать</option>
                <option value="1">ОГЭ Физика</option>
                <option value="2">ОГЭ Информатика</option>
                <option value="3">ОГЭ Математика</option>
                <option value="4">ОГЭ Химия</option>
                <option value="5">ЕГЭ Математика</option>
                <option value="6">ЕГЭ Физика</option>
                <option value="7">ЕГЭ Информатика</option>
                <option value="8">ЕГЭ Химия</option>
            </select>
            <label for="floatingSelect">Выберете раздел, в котором будет добавлена секция</label>
        </div>
        <div class="form-floating mb-3 row">
            <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                <option selected>Выбрать</option>

            </select>
            <label for="floatingSelect">Выберете подраздел</label>
        </div>    
        <div class="row mb-3">
            <label for="Input1" class="form-label col-md-3">Название секции</label>
            <input type="text" class="form-control col-md-8" id="Input1" placeholder="имя папки">
        </div>
        <div class="row mb-3">
            <div class="form-check form-switch mb-2">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                <label class="form-check-label" for="flexSwitchCheckDefault">Видео</label>
            </div>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Подраздел</label>
            </div>
        </div>
        <div class="row mb-5 justify-content-between">
            <div class="col-md-5">
                <label for="Input2" class="form-label col-md-3">Название ролика</label>
                <input type="text" class="form-control col-md-8" id="Input2" placeholder="Название">
            </div>
            <div class="col-md-5">
                <label for="Input2" class="form-label col-md-3">Ссылка на ролик</label>
                <input type="text" class="form-control col-md-8" id="Input2" placeholder="Ссылка">
            </div>
        </div>
        <div class="row mb-5 justify-content-between">
            <div class="col-md-5">
                <label for="Input2" class="form-label col-md-8">Название папки</label>
                <input type="text" class="form-control col-md-8" id="Input2" placeholder="Название">
            </div>
            <div class="col-md-5">
                <label for="Input2" class="form-label col-md-8">Название секции, на которую ссылается папка</label>
                <input type="text" class="form-control col-md-8" id="Input2" placeholder="Например: num12_vecturs">
            </div>
        </div>
    </div>
</body>
</html>