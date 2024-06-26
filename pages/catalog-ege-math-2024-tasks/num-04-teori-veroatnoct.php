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
    <title>04. Введение в теорию вероятностей</title>
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
                    <h1 class="catalog-heading">04. Введение в теорию вероятностей</h1>
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
                                    <p class="container-solve-example-task">В соревновании по биатлону участвуют
                                        спортсмены из 25 стран, одна из которых ― Россия. Всего на старт вышло
                                        60 участников, из которых 6 ― из России. Порядок старта определяется жребием,
                                        стартуют спортсмены друг за другом. Какова вероятность того, что десятым
                                        стартовал спортсмен из России?</p>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="solve-tasks-item-contant-text">В соревновании принимает участие 6
                                            спортсменов из России, всего 60 участников. Тогда вероятность того, что
                                            спортсмен, выступающий десятым, окажется из России, равна</p>
                                        <p class="solve-tasks-item-formyls">
                                            6/60=0,1
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                0,1.</strong></p>
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
                                    <p class="container-solve-example-task">На экзамен вынесено 60 вопросов, Андрей не
                                        выучил 3 из них. Найдите вероятность того, что ему попадется выученный вопрос.
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
                                        <p class="solve-tasks-item-contant-text">Андрей выучил 60 − 3  =  57 вопросов.
                                            Поэтому вероятность того, что на экзамене ему попадется выученный вопрос
                                            равна
                                        </p>
                                        <p class="solve-tasks-item-formyls">
                                            57/60=19/20=0,95
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                0,95.</strong></p>
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
                                    <p class="container-solve-example-task">Из множества натуральных чисел от 10 до 19
                                        наудачу выбирают одно число. Какова вероятность того, что оно делится на 3?</p>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="solve-tasks-item-contant-text">Натуральных чисел от 10 до 19
                                            включительно десять, из них на три делятся три числа: 12, 15, 18.
                                            Следовательно, искомая вероятность равна 3:10  =  0,3.</p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: 0,3.</strong></p>
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
                                    <p class="container-solve-example-task">Проводится жеребьёвка Лиги Чемпионов. На
                                        первом этапе жеребьёвки восемь команд, среди которых команда «Барселона»,
                                        распределились случайным образом по восьми игровым группам  — по одной команде в
                                        группу. Затем по этим же группам случайным образом распределяются еще восемь
                                        команд, среди которых команда «Зенит». Найдите вероятность того, что команды
                                        «Барселона» и «Зенит» окажутся в одной игровой группе.
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
                                        <p class="solve-tasks-item-contant-text">По результатам первой жеребьёвки
                                            команда «Барселона» находится в одной из 8 групп. Вероятность того, что
                                            команда «Зенит» окажется в той же игровой группе равна одной восьмой.
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                0,125.</strong></p>
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
                                    <p class="container-solve-example-task">Игральный кубик бросают дважды. Сколько
                                        элементарных исходов опыта благоприятствуют событию «А = сумма очков равна 5»?
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
                                        <p class="solve-tasks-item-contant-text">Сумма очков может быть равна 5 в
                                            четырех случаях: «3 + 2», «2 + 3», «1 + 4», «4 + 1».</p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: 4.</strong></p>
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