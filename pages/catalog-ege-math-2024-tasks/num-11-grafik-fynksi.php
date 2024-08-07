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
    <title>11. Задачи на свойства графиков функций</title>
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
                    <h1 class="catalog-heading">11. Задачи на свойства графиков функций</h1>
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
                                    <p class="container-solve-example-task"> На рисунке изображён график функции f(x) =
                                        ax<sup>2</sup>+bx+c. Найдите c.
                                    </p>
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 11.1 Дано.png" alt=""
                                            class="image-solve-example-draw"></div>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="container-solve-example-task">Для нахождения коэффициентов a, b, c
                                            выберем на графике три точки:
                                            (6; 2), (3; -1), (5; -3)</p>
                                        <p class="container-solve-example-task">и запишем систему из трех уравнений:</p>
                                        <img src="../../img-tasks/Задача 11.1 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Решаем систему, получаем коэффициенты:
                                        </p>
                                        <p class="solve-tasks-item-formyls">a = 2; b = -17; c = 32;</p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                32.</strong></p>
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
                                    <p class="container-solve-example-task">На рисунке изображён график функции f(x) = b
                                        + log<sub>a</sub>x.
                                        Найдите f=(81).
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
                                        <p class="container-solve-example-task">Возьмём две точки (1; -2) и (3; -1) на
                                            графике, подставим их координаты
                                            в функцию f(x), из получившийся системы уравнений найдём a и b:</p>
                                        <img src="../../img-tasks/Задача 11.2 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Вычтем из второго уравнения первое
                                            уравнение:</p>
                                        <img src="../../img-tasks/Задача 11.2 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Из первого уравнения найдём b, подставив
                                            а = 3:</p>
                                        <img src="../../img-tasks/Задача 11.2 формула 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Тогда функция имеет вид:</p>
                                        <p class="solve-tasks-item-formyls">f(x) = -2+log<sub>3</sub>x</p>
                                        <p class="container-solve-example-task">Найдём f(81)</p>
                                        <img src="../../img-tasks/Задача 11.2 формула 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                2.</strong></p>
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
                                    <p class="container-solve-example-task">На рисунке изображён график функции f(x) =
                                        a<sup>x+2</sup>. Найдите f(6)
                                    </p>
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 11.3 формула 1.png" alt=""
                                            class="image-solve-example-draw"></div>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="container-solve-example-task">Возьмём точку (0; 2) принадлежащую
                                            графику и подставим её координаты
                                            х, у (это f(x)) в функцию, найдём при этом коэффициент а:</p>
                                        <img src="../../img-tasks/Задача 11.3 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Значит функция имеет вид:</p>
                                        <img src="../../img-tasks/Задача 11.3 формула 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Найдём f(6)</p>
                                        <img src="../../img-tasks/Задача 11.3 формула 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                16.</strong>
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
                                    <p class="container-solve-example-task">На рисунке изображены графики двух линейных
                                        функций. Найдите ординату точки пересечения графиков.
                                    </p>
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 11.4 формула 1.png" alt=""
                                            class="image-solve-example-draw"></div>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="container-solve-example-task">На рисунке изображены прямые, линейных
                                            функции их вид имеет вид: y = kx+b</p>
                                        <p class="container-solve-example-task">Найдём k и b функции справа. Для этого
                                            составим систему из двух
                                            уравнений и подставим туда координаты x и y 2-x точек принадлежащих
                                            прямой: </p>
                                        <img src="../../img-tasks/Задача 11.4 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Из 1-го уравнения выразим b: b = 1 - k
                                        </p>
                                        <p class="container-solve-example-task">И подставим во 2-е уравнение:
                                        </p>
                                        <img src="../../img-tasks/Задача 11.4 формула 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Зная k, найдем b: 1 – k = 1 – (–2,5) = 1
                                            + 2,5 = 3,5
                                        </p>
                                        <p class="container-solve-example-task">Функции справа имеет вид: y = -2,5x +
                                            3,5
                                        </p>
                                        <p class="container-solve-example-task">Аналогично найдем k и b функции слева.
                                        </p>
                                        <img src="../../img-tasks/Задача 11.4 формула 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Функции слева имеет вид: y = -4x -10
                                        </p>
                                        <p class="container-solve-example-task">В точке пересечения прямых значения
                                            функций (у) равны, найдём
                                            абсциссу (х) точки пересечения:
                                        </p>
                                        <p class="container-solve-example-task">Подставим в любое из уравнений значение
                                            х и найдём значение у
                                            (ордината):
                                        </p>
                                        <img src="../../img-tasks/Задача 11.4 формула 6.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                26.</strong></p>
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
                                    <p class="container-solve-example-task">На рисунке изображён график функции f(x) =
                                        kх + b. Найдите f(-14).
                                    </p>
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 11.5 Дано.png" alt=""
                                            class="image-solve-example-draw"></div>
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
                                        <p class="solve-tasks-item-formyls">f(x) = kx + b</p>
                                        <p class="container-solve-example-task">k тангенс угла наклона прямой, по
                                            отношению к оси x. Тангенс это отношение
                                            противолежащего катета, к прилежащему катету:
                                        </p>
                                        <img src="../../img-tasks/Задача 11.5 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Т.к. прямая убывает, то k будет со
                                            знаком «–», k = -1,75.
                                        </p>
                                        <p class="container-solve-example-task">Подставим координаты точки принадлежащей
                                            прямой (-2; 2) k =-1,75 в функции и
                                            найдём b:
                                        </p>
                                        <img src="../../img-tasks/Задача 11.5 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Функция имеет вид:
                                        </p>
                                        <img src="../../img-tasks/Задача 11.5 формула 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Найдём f(-14):
                                        </p>
                                        <img src="../../img-tasks/Задача 11.5 формула 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                23.</strong></p>
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