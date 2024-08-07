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
    <title>18. Задачи с параметром</title>
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
                    <h1 class="catalog-heading">18. Задачи с параметром</h1>
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
                                    <p class="container-solve-example-task">Найдите все такие значения параметра a, при
                                        каждом из которых уравнение <img src="../../img-tasks/Задача 18.1 Дано 1.png"
                                            alt="" class="example-dano"> имеет решения на отрезке <img
                                            src="../../img-tasks/Задача 18.1 Дано 2.png" alt="" class="example-dano">
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
                                        <p class="container-solve-example-task">Заметим, что
                                        </p>
                                        <img src="../../img-tasks/Задача 18.1 Дано 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Преобразуем уравнение:
                                        </p>
                                        <img src="../../img-tasks/Задача 18.1 Дано 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 18.1 Дано 5.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Рассмотрим два случая.
                                        </p>
                                        <p class="container-solve-example-task">Пусть a = 1 тогда из неравенства:</p>
                                        <img src="../../img-tasks/Задача 18.1 Дано 6.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 18.1 Дано 7.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Отрезку <img
                                                src="../../img-tasks/Задача 18.1 Дано 8.png" alt=""
                                                class="example-dano"> принадлежат два числа <img
                                                src="../../img-tasks/Задача 18.1 Дано 9.png" alt=""
                                                class="example-dano">
                                        </p>
                                        <p class="container-solve-example-task">Пусть <img
                                                src="../../img-tasks/Задача 18.1 Дано 15.png" alt=""
                                                class="example-dano"> тогда имеем:
                                        </p>
                                        <img src="../../img-tasks/Задача 18.1 Дано 10.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">В первой серии не содержится корней,
                                            лежащих на отрезке <img src="../../img-tasks/Задача 18.1 Дано 2.png" alt=""
                                                class="example-dano"> Среди корней, содержащихся во второй серии,
                                            отрезку <img src="../../img-tasks/Задача 18.1 Дано 2.png" alt=""
                                                class="example-dano">
                                            принадлежит одно число <img src="../../img-tasks/Задача 18.1 Дано 11.png"
                                                alt="" class="example-dano"> Подставляя его в неравенство, получаем:<img
                                                src="../../img-tasks/Задача 18.1 Дано 12.png" alt=""
                                                class="example-dano">
                                            откуда<img src="../../img-tasks/Задача 18.1 Дано 13.png" alt=""
                                                class="example-dano">
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ: <img src="../../img-tasks/Задача 18.1 Дано 14.png" alt=""
                                                    class="example-dano">
                                            </strong></p>
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
                                    <p class="container-solve-example-task">Найдите все значения a, при которых любое
                                        решение уравнения<img src="../../img-tasks/Задача 18.2 Дано 1.png" alt=""
                                            class="example-dano">
                                        принадлежит отрезку [1;3].
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
                                        <p class="container-solve-example-task">Рассмотрим функцию <img
                                                src="../../img-tasks/Задача 18.2 Дано 2.png" alt=""
                                                class="example-dano"> Она определена при <img
                                                src="../../img-tasks/Задача 18.2 Дано 3.png" alt=""
                                                class="example-dano">
                                            возрастает на области определения и принимает все значения от <img
                                                src="../../img-tasks/Задача 18.2 Дано 4.png" alt=""
                                                class="example-dano"> Значит,
                                            уравнение имеет единственное решение. Это решение f(x) = 0 принадлежит
                                            отрезку [1;3] тогда
                                            и только тогда, когда и <img src="../../img-tasks/Задача 18.2 Дано 5.png"
                                                alt="" class="example-dano"> Получаем систему неравенств:
                                        </p>
                                        <img src="../../img-tasks/Задача 18.2 Дано 6.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ: <img src="../../img-tasks/Задача 18.2 Дано 6.png" alt=""
                                                    class="example-dano">
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
                                    <p class="container-solve-example-task">Найдите все значения a, при каждом из
                                        которых уравнение<img src="../../img-tasks/Задача 18.3 Дано 1.png" alt=""
                                            class="example-dano">
                                        имеет ровно один корень на отрезке [4; 8].
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
                                        <p class="container-solve-example-task">Уравнение равносильно следующей системе:
                                        </p>
                                        <img src="../../img-tasks/Задача 18.3 Дано 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 18.3 Дано 8.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Рассмотрим первый случай, когда корни
                                            совпадают: <img src="../../img-tasks/Задача 18.3 Дано 3.png" alt=""
                                                class="example-dano"> Тогда корень<img
                                                src="../../img-tasks/Задача 18.3 Дано 4.png" alt=""
                                                class="example-dano"> принадлежит отрезку [4; 8] и
                                            удовлетворяет ОДЗ.
                                            Рассмотрим второй случай, когда первый корень x = a + 7 принадлежит отрезку
                                            [4; 8] и
                                            удовлетворяет ОДЗ. Тогда уравнение имеет единственное решение на заданном
                                            отрезке, если второй корень не принадлежит отрезку [4; 8] или не
                                            удовлетворяет ОДЗ. Имеем:
                                        </p>
                                        <p class="container-solve-example-task">Имеем:
                                        </p>
                                        <img src="../../img-tasks/Задача 18.3 Дано 5.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 18.3 Дано 6.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Рассмотрим второй случай, когда второй
                                            корень x = 2 - a принадлежит отрезку [4; 8] и удовлетворяет ОДЗ. Тогда
                                            уравнение имеет
                                            единственное решение на заданном отрезке, если первый корень не принадлежит
                                            отрезку [4; 8] или не удовлетворяет ОДЗ.
                                        </p>
                                        <p class="container-solve-example-task">Имеем:
                                        </p>
                                        <img src="../../img-tasks/Задача 18.3 Дано 9.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 18.3 Дано 10.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: <img
                                                    src="../../img-tasks/Задача 18.3 Дано 7.png" alt=""
                                                    class="example-dano">
                                            </strong>
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
                                    <p class="container-solve-example-task">Найдите все значения a, при каждом из
                                        которых модуль разности корней уравнения <img
                                            src="../../img-tasks/Задача 18.4 Дано 1.png" alt="" class="example-dano">
                                        принимает наибольшее значение.
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
                                        <p class="container-solve-example-task">Поскольку <img
                                                src="../../img-tasks/Задача 18.4 Дано 2.png" alt=""
                                                class="example-dano"> получаем:</p>
                                        <img src="../../img-tasks/Задача 18.4 Дано 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Полученное выражение, а вместе с ним и
                                            исходное, достигают наибольшего значения при a = 2
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: a = 2.</strong>
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
                                    <p class="container-solve-example-task">Найдите все такие значения параметра a, при
                                        каждом из которых уравнение <img src="../../img-tasks/Задача 18.5 Дано 1.png"
                                            alt="" class="example-dano"> имеет хотя бы одно решение.
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
                                        <p class="container-solve-example-task">Положим <img
                                                src="../../img-tasks/Задача 18.5 Дано 2.png" alt=""
                                                class="example-dano"> где <img
                                                src="../../img-tasks/Задача 18.5 Дано 3.png" alt=""
                                                class="example-dano"> так как <img
                                                src="../../img-tasks/Задача 18.5 Дано 4.png" alt=""
                                                class="example-dano">
                                        </p>
                                        <p class="container-solve-example-task">Тогда, исходное уравнение принимает вид
                                            <img src="../../img-tasks/Задача 18.5 Дано 5.png" alt=""
                                                class="example-dano">
                                            Найдем множество значений функции <img
                                                src="../../img-tasks/Задача 18.5 Дано 6.png" alt=""
                                                class="example-dano"> на отрезке [0; 2]. Так как <img
                                                src="../../img-tasks/Задача 18.5 Дано 7.png" alt=""
                                                class="example-dano"> на промежутке
                                            [0; 2), то функция убывает на отрезке [0; 2], и, следовательно, множество ее
                                            значений на отрезке [0; 2] ― отрезок <img
                                                src="../../img-tasks/Задача 18.5 Дано 8.png" alt=""
                                                class="example-dano"> то есть отрезок [-48; 0] Таким образом,
                                            уравнение <img src="../../img-tasks/Задача 18.5 Дано 9.png" alt=""
                                                class="example-dano"> имеет решения тогда и только тогда, когда
                                            выполняются условия <img src="../../img-tasks/Задача 18.5 Дано 10.png"
                                                alt="" class="example-dano">
                                        </p>
                                        <img src="../../img-tasks/Задача 18.5 Дано 11.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: <img
                                                    src="../../img-tasks/Задача 18.5 Дано 12.png" alt=""
                                                    class="example-dano">
                                            </strong>
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