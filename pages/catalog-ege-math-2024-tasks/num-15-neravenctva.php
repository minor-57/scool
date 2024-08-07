<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../css/catalog.css">
    <link rel="icon" type="image/png" href="../../img/main-icon.png">
    <title>15. Решение неравенств</title>
    <?php
    require_once __DIR__ . '/../../php/reg-auth/config.php';
    require_once __DIR__ . '/../../php/reg-auth/auth-check.php';
    ?> 
    <style>@media (max-width: 1400px) {
    html{
        font-size: 14px;
    }

    .wrapper{
        padding-left: 20px;
    }
    .side-section__button-back{
        display: initial;
        -webkit-transform: none;
            -ms-transform: none;
                transform: none;
    }
    .catalog-heading{
        text-align: center;
    }
    .subject-name{
        display: block;
        text-align: center;
    }
}
    @media (max-width:550px){
        .container-solve-tasks{
            padding: 70px 10px;
        }
        .solve-tasks-item-contant-text{
            font-size: 1rem;
            padding: 10px;
        }
        .container-solve-example-task{
            font-size: 1rem;
        }
}
@media (max-width:400px){
        .container-solve-tasks{
            padding: 60px 5px;
        }
        .contant-container-solve-tasks{
            padding: 20px;
        }        
}
@media (max-width:400px){
        .acardion-triggers{
            font-size: 0.80rem;
        }
}
</style>
</head>

<body>
    <div class="wrapper">
        <div class="body-content">
            <section class="body-content__section main-section">
                <div class="side-section">
                    <div class="side-section__button-back"></div>
                    <div class="side-section__main-text">
                        <div class="menu-logo">
                            <a href="../../index.html" class="logo-olimpys"></a>
                        </div>
                        <ul class="side-section__list">
                            <li class="side-section__item"><a href="../catalog-page.php?page=math&type=ege&sec=vid&lvl=main"
                                    class="side-section__link">Видеоуроки</a>
                            </li>
                            <li class="side-section__item"><a
                                    href="../catalog-ege-math-2024-tasks/catalog-ege-math-tasks.html"
                                    class="side-section__link active">Каталог заданий</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
        </div>



        <div class="container-fluid container-limit">
            <div class="row">
                <div class="col-xxl-6 col-xl-8 col-lg-10 col-md-12">
                    <span class="subject-name">ЕГЭ - Математика</span>
                    <h1 class="catalog-heading">15. Решение неравенств</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="catalog-info">
                        <h3 class="catalog-info__heding">Бесплатный каталог заданий по математике.</h3>
                        <p class="catalog-info__description">Здесь вы можете ознакомиться с решением большинства типовых
                            задач разной сложности.</p>
                    </div>
                </div>
            </div>
            <div class="container-solve-tasks">
                <div class="container-solve-tasks-title">Решаем задачи</div>
                <div class="container-solve-tasks-list">
                    <div class="container-solve-tasks-item">
                        <div class="contant-container-solve-tasks">
                            <div class="contant-container-solve-tasks-title"><span
                                    class="contant-container-solve-tasks-title-text">Задача №1</span></div>
                            <div class="contant-container-solve-tasks-text">
                                <div class="container-solve-tasks-text">
                                    <p class="container-solve-example-task">Решите неравенство <img
                                            src="../../img-tasks/Задача 15.1 Дано 1.png" alt="" class="example-dano">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="container-solve-example-task">Сделав замену <img
                                                src="../../img-tasks/Задача 15.1 Формула1.png" alt=""
                                                class="example-dano"> получаем: </p>
                                        <img src="../../img-tasks/Задача 15.1 Дано 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Значит,</p>
                                        <img src="../../img-tasks/Задача 15.1 Дано 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                <img src="../../img-tasks/Задача 15.1 Ответ 1.png" alt=""
                                                    class="example-dano"></strong></p>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>
                    <div class="container-solve-tasks-item">
                        <div class="contant-container-solve-tasks">
                            <div class="contant-container-solve-tasks-title"><span
                                    class="contant-container-solve-tasks-title-text">Задача №2</span></div>
                            <div class="contant-container-solve-tasks-text">
                                <div class="container-solve-tasks-text">
                                    <p class="container-solve-example-task">Решите неравенство: <img
                                            src="../../img-tasks/Задача 15.2 Дано 1.png" alt="" class="example-dano">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="container-solve-example-task">Воспользуемся тем, что для суммы <img
                                                src="../../img-tasks/Задача 15.2 Дано 2.png" alt=""
                                                class="example-dano">
                                            возможны четыре случая раскрытия модулей, откуда заключаем:
                                        </p>
                                        <img src="../../img-tasks/Задача 15.2 Дано 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Тогда имеем: </p>
                                        <img src="../../img-tasks/Задача 15.2 Дано 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ: [ -3;7 ].
                                            </strong></p>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>
                    <div class="container-solve-tasks-item">
                        <div class="contant-container-solve-tasks">
                            <div class="contant-container-solve-tasks-title"><span
                                    class="contant-container-solve-tasks-title-text">Задача №3</span></div>
                            <div class="contant-container-solve-tasks-text">
                                <div class="container-solve-tasks-text">
                                    <p class="container-solve-example-task">Решите неравенство: <img
                                            src="../../img-tasks/Задача 15.3 Дано 1.png" alt="" class="example-dano">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="container-solve-example-task">Так как <img
                                                src="../../img-tasks/Задача 15.3 Дано 2.png" alt=""
                                                class="example-dano"> и <img
                                                src="../../img-tasks/Задача 15.3 Дано 3.png" alt=""
                                                class="example-dano"> для любого x, воспользовавшись
                                            тождеством <img src="../../img-tasks/Задача 15.3 Дано 4.png" alt=""
                                                class="example-dano"> заключаем, что слагаемые в левой части неравенства
                                            равны. Тогда получаем:
                                            <img src="../../img-tasks/Задача 15.3 Дано 5.png" alt=""
                                                class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Заметим, что при x = 0 неравенство
                                            верно. При
                                            <img src="../../img-tasks/Задача 15.3 Дано 7.png" alt=""
                                                class="example-dano"> основание степени больше 1, поэтому показатель
                                            степени должен быть неположительным:
                                            <img src="../../img-tasks/Задача 15.3 Дано 8.png" alt=""
                                                class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Объединяя рассмотренные случаи,
                                            получаем: <img src="../../img-tasks/Задача 15.3 Дано 9.png" alt=""
                                                class="example-dano">
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                <img src="../../img-tasks/Задача 15.3 Ответ 1.png" alt=""
                                                    class="example-dano"></strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>
                    <div class="container-solve-tasks-item">
                        <div class="contant-container-solve-tasks">
                            <div class="contant-container-solve-tasks-title"><span
                                    class="contant-container-solve-tasks-title-text">Задача №4</span></div>
                            <div class="contant-container-solve-tasks-text">
                                <div class="container-solve-tasks-text">
                                    <p class="container-solve-example-task">Решите неравенство <img
                                            src="../../img-tasks/Задача 15.4 Дано 1.png" alt="" class="example-dano">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="container-solve-example-task">Найдём ОДЗ неравенства:</p>
                                        <img src="../../img-tasks/Задача 15.4 Дано 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Применим теорему о знаке логарифма: знак
                                            <img src="../../img-tasks/Задача 15.4 Дано 3.png" alt=""
                                                class="example-dano">
                                            на ОДЗ совпадает со знаком произведения (a-1)(b-1) Имеем:
                                        </p>
                                        <img src="../../img-tasks/Задача 15.4 Дано 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 15.4 Дано 5.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">С учётом ОДЗ получаем: <img
                                                src="../../img-tasks/Задача 15.4 Дано 6.png" alt=""
                                                class="example-dano"> или x > -2
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: <img
                                                    src="../../img-tasks/Задача 15.4 Ответ 1.png" alt=""
                                                    class="example-dano"> </strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>
                    <div class="container-solve-tasks-item">
                        <div class="contant-container-solve-tasks">
                            <div class="contant-container-solve-tasks-title"><span
                                    class="contant-container-solve-tasks-title-text">Задача №5</span></div>
                            <div class="contant-container-solve-tasks-text">
                                <div class="container-solve-tasks-text">
                                    <p class="container-solve-example-task">Решите неравенство <img
                                            src="../../img-tasks/Задача 15.5 Дано 1.png" alt="" class="example-dano">
                                    </p>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="container-solve-example-task">Перенесём все члены в левую часть и
                                            умножим на 4:
                                            <img src="../../img-tasks/Задача 15.5 Дано 2.png" alt=""
                                                class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Заметим, что x > 0, поэтому x + 1 > 0.
                                            Получаем:
                                        </p>
                                        <img src="../../img-tasks/Задача 15.5 Дано 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 15.5 Дано 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                <img src="../../img-tasks/Задача 15.5 Ответ 1.png" alt=""
                                                    class="example-dano"></strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </details>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../js/catalog.js"></script>
    <script src="../../js/acardion-tasks.js"></script>
    <script type="text/javascript" async="" src="https://cdnjs.cloudflare.com/ajax/libs/mathjax/2.7.4/MathJax.js?config=TeX-MML-AM_CHTML"></script>
</body>

</html>