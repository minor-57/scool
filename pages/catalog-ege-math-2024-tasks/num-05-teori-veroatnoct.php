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
    <title>05. Задачи на теорию вероятностей</title>
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
                    <h1 class="catalog-heading">05. Задачи на теорию вероятностей</h1>
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
                                    <p class="container-solve-example-task">Автоматическая линия изготавливает
                                        батарейки. Вероятность того, что готовая батарейка неисправна, равна 0,02. Перед
                                        упаковкой каждая батарейка проходит систему контроля. Вероятность того, что
                                        система забракует неисправную батарейку, равна 0,99. Вероятность того, что
                                        система по ошибке забракует исправную батарейку, равна 0,01. Найдите вероятность
                                        того, что случайно выбранная изготовленная батарейка будет забракована системой
                                        контроля.</p>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="solve-tasks-item-contant-text">Ситуация, при которой батарейка будет
                                            забракована, может сложиться в результате следующих событий: батарейка
                                            действительно неисправна и забракована справедливо или батарейка исправна,
                                            но по ошибке забракована. По формуле условной вероятности, вероятности этих
                                            событий равны соответственно 0,02·0,99 и 0,98·0,01.
                                            События быть неисправной батарейкой или быть исправной образуют полную
                                            группу (они несовместны и одно из них непременно происходит), поэтому можно
                                            применить формулу полной вероятности. Получим:</p>
                                        <p class="solve-tasks-item-formyls">
                                            0,0198 + 0,0098=0,0296
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
                                    <p class="container-solve-example-task">Вероятность того, что батарейка бракованная,
                                        равна 0,06. Покупатель в магазине выбирает случайную упаковку, в которой две
                                        таких батарейки. Найдите вероятность того, что обе батарейки окажутся
                                        исправными.
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
                                        <p class="solve-tasks-item-contant-text">Вероятность того, что батарейка
                                            исправна, равна 0,94. Вероятность произведения независимых событий (обе
                                            батарейки окажутся исправными) равна произведению вероятностей этих событий:
                                            0,94·0,94  =  0,8836.
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                0,8836.</strong></p>
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
                                    <p class="container-solve-example-task">Из районного центра в деревню ежедневно
                                        ходит автобус. Вероятность того, что в понедельник в автобусе окажется меньше 20
                                        пассажиров, равна 0,94. Вероятность того, что окажется меньше 15 пассажиров,
                                        равна 0,56. Найдите вероятность того, что число пассажиров будет от 15 до 19.
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
                                        <p class="solve-tasks-item-contant-text">Рассмотрим события A = «в автобусе
                                            меньше 15 пассажиров» и В = «в автобусе от 15 до 19 пассажиров». Их сумма  —
                                            событие A + B  =  «в автобусе меньше 20 пассажиров». События A и В
                                            несовместные, вероятность их суммы равна сумме вероятностей этих событий:
                                        </p>
                                        <p class="solve-tasks-item-formyls">
                                            P(A + B) = P(A) + P(B).
                                        </p>
                                        <p class="solve-tasks-item-contant-text">Тогда, используя данные задачи,
                                            получаем: 0,94 = 0,56 + P(В), откуда P(В) = 0,94 − 0,56 = 0,38.
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: 0,38.</strong></p>
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
                                    <p class="container-solve-example-task">Игральный кубик бросают дважды. Известно,
                                        что в сумме выпало 8 очков. Найдите вероятность того, что во второй раз выпало 3
                                        очка.
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
                                        <p class="solve-tasks-item-contant-text">При двукратном бросании кубика 8 очков
                                            может получиться только в пяти случаях: 6 + 2, 5 + 3, 4 + 4, 3 + 5 и 2 + 6.
                                            При этом во второй раз только единожды выпало 3 очка. Значит, вероятность
                                            того, что во второй раз выпало 3 очка при условии, что в сумме выпало 8
                                            очков, равна одной пятой.
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                0,2.</strong></p>
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
                                    <p class="container-solve-example-task">При изготовлении подшипников диаметром 67 мм
                                        вероятность того, что диаметр будет отличаться от заданного не больше, чем на
                                        0,01 мм, равна 0,965. Найдите вероятность того, что случайный подшипник будет
                                        иметь диаметр меньше чем 66,99 мм или больше чем 67,01 мм.
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
                                        <p class="solve-tasks-item-contant-text">По условию, диаметр подшипника будет
                                            лежать в пределах от 66,99 до 67,01 мм с вероятностью 0,965. Поэтому искомая
                                            вероятность противоположного события равна 1 − 0,965  =  0,035.</p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: 0,035.</strong></p>
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