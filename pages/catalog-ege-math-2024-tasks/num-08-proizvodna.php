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
    <title>08. Взаимосвязь функции и ее производной</title>
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
                    <h1 class="catalog-heading">08. Взаимосвязь функции и ее производной</h1>
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
                                    <p class="container-solve-example-task">На рисунке изображен график y=f'(x) —
                                        производной функции f(x), определённой на интервале (-8;3). Найдите промежутки
                                        возрастания функции f(x). В ответе укажите сумму целых точек, входящих в эти
                                        промежутки.
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 8.1 Дано .png" alt="" class="example-dano">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="container-solve-example-task">На рисунке к задаче изображен график
                                            производной функции. Производная функции отвечает за критические точки
                                            функции,
                                            за ее скорость изменения абсциссы при изменении ординаты. Там где
                                            производная
                                            пересекает ось Ox будет либо максимум, либо минимум функции.

                                            Если производная при пересечении оси Ox меняет знак с минуса на плюс, то в
                                            этой
                                            точке будет минимум функции, а если с плюса на минус — то будет максимум
                                            функции.
                                        </p>
                                        <p class="container-solve-example-task">В точке А таким образом функция
                                            производной
                                            переходит с минусовых значений в плюсовые, и в точке А будет точка минимума
                                            функции. Затем функция начнет возрастать и в точке B она достигнет своего
                                            максимума и начнет убывать. Промежуток возрастания функции — это промежуток
                                            AB.

                                            То есть интересующие нас целые значения в области возрастания функции
                                            находятся
                                            между точками A и B. Это значения:
                                            -4,  -3,  -2,  -1,  0,  1,  2.
                                            Сложим:
                                            -4+(-3)+(-2)+(-1)+0+1+2=-7
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                -7.</strong></p>
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
                                    <p class="container-solve-example-task">На рисунке изображен график производной
                                        функции f(x), определенной на интервале (−7; 14). Найдите количество точек
                                        максимума функции f(x) на отрезке [−6; 9].
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 8.2 Дано .png" alt="" class="example-dano">
                                    </div>
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
                                        <p class="container-solve-example-task">Точки максимума соответствуют точкам
                                            смены знака производной с положительного на отрицательный. На отрезке
                                            [−6; 9] функция имеет одну точку максимума x  =  7.</p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                1.</strong></p>
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
                                    <p class="container-solve-example-task">Функция y=f(x) определена на промежутке
                                        (-6;4). На рисунке изображен график ее производной. Найдите абсциссу точки, в
                                        которой функция y=f(x) принимает наибольшее значение.
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 8.3 Дано .png" alt="" class="example-dano">
                                    </div>
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
                                        <p class="container-solve-example-task">Cмена знака производной с положительного
                                            на отрицательный соответствует точке максимума, следовательно, в точке с
                                            абсциссой −2 достигается наибольшее значение функции.</p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: -2.</strong>
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
                                    <p class="container-solve-example-task">На рисунке изображён график функции у=f(х).
                                        Прямая, проходящая через начало координат, касается графика этой функции в точке
                                        с абсциссой -4.
                                        Найдите значение производной функции в точке х<sub>0</sub>=-4.
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 8.4 Дано .png" alt="" class="example-dano">
                                    </div>
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
                                        <img src="../../img-tasks/Задача 8.4 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Если прямая проходит через начало
                                            координат, то она имеет вид y=kх.
                                            Она проходит, через точку (-4; 3).
                                            Значение производной в точке равно угловому коэффициенту
                                            касательной в этой точке, найдём k:</p>
                                        <img src="../../img-tasks/Задача 8.4 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                -0,75.</strong></p>
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
                                    <p class="container-solve-example-task">На рисунке изображен график производной
                                        функции f(x), определенной на интервале (−18; 6). Найдите количество точек
                                        минимума функции f(x) на отрезке [−13;1].
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 8.5 Дано .png" alt="" class="example-dano">
                                    </div>
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
                                        Точки минимума соответствуют точкам смены знака производной с минуса на плюс. На
                                        отрезке [−13;1] функция имеет одну точку минимума x = −9.
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: 1.</strong></p>
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