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
    <title>12. Исследование функций с помощью производной</title>
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
                    <h1 class="catalog-heading">12. Исследование функций с помощью производной</h1>
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
                                    <p class="container-solve-example-task">Найдите наименьшее значение функции y =
                                        (x<sup>2</sup> -10x + 10)∙e<sup>2-x</sup> на отрезке [-1;7]
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
                                        <p class="container-solve-example-task">При нахождении наименьшего значения
                                            функции, во время подстановки вместо x,
                                            функция должна равняться пелому числу или конечной десятичной дроби (иначе
                                            не
                                            сможем записать в ответ ЕГЭ). Т.е. при вычислениях должно сократиться
                                            «e<sup>2-x</sup>», которые
                                            присутствует в начальной функции.
                                            На отрезке [-1; 7] можно подобрать только одно такое значение x = 2:</p>
                                        <img src="../../img-tasks/Задача 12.1 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Найдите наименьшее значение функции
                                        </p>
                                        <img src="../../img-tasks/Задача 12.1 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                -6.</strong></p>
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
                                    <p class="container-solve-example-task">Найдите наибольшее значение функции y =
                                        ln(x+18)<sup>12</sup> - 12x на отрезке [-17,5;0]
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
                                        <p class="container-solve-example-task">При нахождении наименьшего значения
                                            функции, во время подстановки вместо x,
                                            функция должна равняться пелому числу или конечной десятичной дроби (иначе
                                            не
                                            сможем записать в ответ ЕГЭ). Т.е. при вычислениях должно сократиться
                                            «ln(x+18)<sup>12</sup>», которые
                                            присутствует в начальной функции.
                                            На отрезке [-17,5;0] можно подобрать только одно такое значение:</p>
                                        <img src="../../img-tasks/Задача 12.2 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Найдите наименьшее значение функции
                                        </p>
                                        <p class="container-solve-example-task">Вычтем из второго уравнения первое
                                            уравнение:</p>
                                        <img src="../../img-tasks/Задача 12.2 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                204.</strong></p>
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
                                    <p class="container-solve-example-task">Найдите точку максимума функции y =
                                        x<sup>3</sup> + 5,5x<sup>2</sup> -42x + 18
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
                                        <p class="container-solve-example-task">Найдём производную функции:</p>
                                        <img src="../../img-tasks/Задача 12.3 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Найдём нули функции:</p>
                                        <img src="../../img-tasks/Задача 12.3 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Определим знаки производной функции и
                                            изобразим поведение функции:</p>
                                        <img src="../../img-tasks/Задача 12.3 формула 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Точка максимума: x =-6</p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                -6.</strong>
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
                                    <p class="container-solve-example-task">Найдите наибольшее значение функции y = 49x
                                        - 46sinx + 37 на отрезке<img src="../../img-tasks/Задача 12.4 Дано.png" alt=""
                                            class="image-solve-example-draw">
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
                                        <p class="container-solve-example-task">Найдём производную функции:</p>
                                        <img src="../../img-tasks/Задача 12.4 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Найдём нули функции:</p>
                                        <img src="../../img-tasks/Задача 12.4 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Максимумов и минимумов у функции нет,
                                            она монотонна или всегда возрастает или
                                            всегда убывает, проверим концы отрезка:</p>
                                        <img src="../../img-tasks/Задача 12.4 формула 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 12.4 формула 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                37.</strong></p>
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
                                    <p class="container-solve-example-task">Найдите точку максимума функции y = <img
                                            src="../../img-tasks/Задача 12.4 Дано.png" alt=""
                                            class="image-solve-example-draw">
                                    </p>
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
                                        <img src="../../img-tasks/Задача 12.5 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Найдём производную функции:</p>
                                        <img src="../../img-tasks/Задача 12.5 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Найдём нули функции:</p>
                                        <img src="../../img-tasks/Задача 12.5 формула 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Определим знаки производной функции и
                                            изобразим поведение функции:</p>
                                        <img src="../../img-tasks/Задача 12.5 формула 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Точка максимума: x = 14</p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                14.</strong></p>
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