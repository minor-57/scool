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
    <title>06. Решение уравнений</title>
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
                    <h1 class="catalog-heading">06. Решение уравнений</h1>
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
                                    <p class="container-solve-example-task">Найдите корень уравнения <img
                                            src="../../img-tasks/Задача 6.1 Дано .png" alt="" class="example-dano"></p>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <img src="../../img-tasks/Задача 6.1 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                7,5.</strong></p>
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
                                    <p class="container-solve-example-task">Найдите корень уравнения log<sub>3</sub>
                                        (5−2x) =
                                        log<sub>3</sub>(1−4x) + 1
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
                                        <img src="../../img-tasks/Задача 6.2 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                -0,2.</strong></p>
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
                                    <p class="container-solve-example-task">Решите
                                        уравнение log<sub>27</sub> 3<sup>5–4<em>x</em></sup>= 9.</p>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <img src="../../img-tasks/Задача 6.3 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: -5,5.</strong></p>
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
                                    <p class="container-solve-example-task">Найдите корень уравнения <img
                                            src="../../img-tasks/Задача 6.4 Дано .png" alt="" class="example-dano"> Если
                                        уравнение имеет более одного корня, в ответе запишите больший из корней.</p>
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
                                        <img src="../../img-tasks/Задача 6.4 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 6.4 Дано .png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Возведём обе части части уравнения в
                                            квадрат:</p>
                                        <img src="../../img-tasks/Задача 6.4 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 6.4 формула 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">ОДЗ принадлежит только 2-й корень -9,
                                            т.к. он меньше 0, его и запишем в
                                            ответ. (х = 1 не является корнем исходного уравнения)</p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                -9.</strong></p>
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
                                    <p class="container-solve-example-task">Найдите корень уравнения <img
                                            src="../../img-tasks/Задача 6.5 Дано .png" alt="" class="example-dano">
                                    </p>
                                    <p class="container-solve-example-task">В ответе запишите наименьший положительный
                                        корень.
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
                                        <img src="../../img-tasks/Задача 6.5 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Подберём такое n, что бы х был
                                            наименьший положительный:</p>
                                        <img src="../../img-tasks/Задача 6.5 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
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