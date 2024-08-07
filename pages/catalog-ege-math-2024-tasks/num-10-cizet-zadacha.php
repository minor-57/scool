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
    <title>10. Сюжетные текстовые задачи</title>
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
                    <h1 class="catalog-heading">10. Сюжетные текстовые задачи</h1>
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
                                    <p class="container-solve-example-task">Из пункта A круговой трассы выехал
                                        велосипедист. Через 30 минут он еще не вернулся в пункт А и из пункта А следом
                                        за ним отправился мотоциклист. Через 10 минут после отправления он догнал
                                        велосипедиста в первый раз, а еще через 30 минут после этого догнал его во
                                        второй раз. Найдите скорость мотоциклиста, если длина трассы равна 30 км. Ответ
                                        дайте в км/ч.
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
                                        <p class="container-solve-example-task"> К моменту первого обгона мотоциклист за
                                            10 минут проехал столько же, сколько
                                            велосипедист за 40 минут, следовательно, его скорость в 4 раза больше.
                                            Поэтому,
                                            если скорость велосипедиста принять за x км/час, то скорость мотоциклиста
                                            будет
                                            равна 4x, а скорость их сближения  — 3x км/час.
                                        </p>
                                        <p class="container-solve-example-task">
                                            C другой стороны, второй раз мотоциклист догнал велосипедиста за 30 минут,
                                            за
                                            это время он проехал на 30 км больше. Следовательно, скорость их сближения
                                            составлят 60 км/час.

                                            Итак, 3х  =  60 км/час, откуда скорость велосипедиста равна 20 км/час, а
                                            скорость мотоциклиста равна 80 км/час.</p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                80.</strong></p>
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
                                    <p class="container-solve-example-task">Первый и второй насосы наполняют бассейн за
                                        35 минут, второй и третий – за 40 минут, а первый и третий – за 56 минут. За
                                        сколько минут эти три насоса заполнят бассейн, работая вместе?
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
                                        <p class="container-solve-example-task">По условию задачи насосы работают
                                            совместно, заполняя бассейн водой. За одну минуту они заполнят</p>
                                        <img src="../../img-tasks/Задача 10.1 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Здесь деление на 2 в дроби позволяет
                                            избавиться от дублирования насосов, указанных в условии задачи. В итоге,
                                            полностью заполнить бассейн водой они смогут за</p>
                                        <img src="../../img-tasks/Задача 10.1 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                28.</strong></p>
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
                                    <p class="container-solve-example-task">Имеется два сплава. Первый сплав содержит 5
                                        % никеля, второй – 14 % никеля. Масса второго сплава больше массы первого на 8
                                        кг. Из этих двух сплавов получили третий сплав, содержащий 11 % никеля. Найдите
                                        массу третьего сплава. Ответ дайте в килограммах.
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
                                        <p class="container-solve-example-task">Обозначим за х кг массу первого сплава,
                                            тогда масса второго х + 8 кг.
                                            Масса никеля в первом сплаве 0,05·х, во втором 0,14·(х + 8), зная, что
                                            третий сплав получили сложением первых двух (х + х + 8) и там 11%
                                            никеля составим уравнение:</p>
                                        <img src="../../img-tasks/Задача 10.2 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Найдем массу третьего сплава:</p>
                                        <p class="solve-tasks-item-formyls">8 + 16 = 24 кг</p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                24.</strong>
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
                                    <p class="container-solve-example-task">Баржа в 10:00 вышла из пункта А в пункт В,
                                        расположенный в 15 км от А. Пробыв 45 минут в пункте В, баржа отправилась назад
                                        и вернулась в пункт А в 16:00 того же дня. Определите (в км/ч) скорость течения
                                        реки, если известно, что собственная скорость баржи равна 7 км/ч.
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
                                        <p class="container-solve-example-task">Баржа была в пути:</p>
                                        <p class="solve-tasks-item-formyls">16:00 – 10:00 – 45 минут = 6 часов – 45
                                            минут = 6 часов – </p>
                                        <p class="solve-tasks-item-formyls"> часов = 6 часов – 0,75 часа = </p>
                                        <p class="solve-tasks-item-formyls">5,25 часа</p>
                                        <p class="container-solve-example-task">Пусть скорость течения реки х км/ч,
                                            тогда скорость баржи по течению 7 +
                                            х км/ч, а против течения 7 — х км/ч.
                                            Время движения по течению <img
                                                src="../../img-tasks/Задача 10.3 формула 1.png" alt=""
                                                class="example-dano"> часов, время против течения <img
                                                src="../../img-tasks/Задача 10.3 формула 2.png" alt=""
                                                class="example-dano">. часов.
                                            Зная, что всего баржа двигалась 5,25 часа, составим уравнение:</p>
                                        <img src="../../img-tasks/Задача 10.4 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Скорость течения реки не может быть
                                            отрицательной, поэтому она равна
                                            3 км/ч.</p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                3.</strong></p>
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
                                    <p class="container-solve-example-task">Заказ на изготовление 238 деталей первый
                                        рабочий выполняет на 3 часа быстрее, чем второй. Сколько деталей за час
                                        изготавливает второй рабочий, если известно, что первый за час изготавливает на
                                        3 детали больше?
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
                                        <p class="container-solve-example-task">Пусть второй рабочий делает х деталей в
                                            час, тогда первый рабочий х + 3 детали в час.
                                            Время работы первого равно <img
                                                src="../../img-tasks/Задача 10.5 формула 1.png" alt=""
                                                class="example-dano">, а второго <img
                                                src="../../img-tasks/Задача 10.5 формула 2.png" alt=""
                                                class="example-dano">.
                                            Зная, что первый рабочий затрачивает на 3 часа меньше, чем
                                            второй, составим уравнение:
                                        </p>
                                        <img src="../../img-tasks/Задача 10.5 формула 3.png" alt=""
                                            class="solve-tasks-item-formyla">
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