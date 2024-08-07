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
    <title>09. Задачи прикладного характера</title>
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
                    <h1 class="catalog-heading">09. Задачи прикладного характера</h1>
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
                                    <p class="container-solve-example-task">Для получения на экране увеличенного
                                        изображения лампочки в лаборатории используется собирающая линза с главным
                                        фокусным расстоянием f= 60 см. Расстояние d<sub>1</sub> от линзы до лампочки
                                        может
                                        изменяться в пределах от 92 до 115 см, а расстояние d<sub>2</sub> от линзы до
                                        экрана — в пределах от 140 до 160 см. Изображение на экране будет четким, если
                                        выполнено
                                        соотношение <img src="../../img-tasks/Задача 9.1 Дано .png" alt=""
                                            class="example-dano"> На каком наименьшем расстоянии от линзы можно
                                        поместить лампочку, чтобы ее изображение на экране было чётким. Ответ выразите в
                                        сантиметрах.
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
                                        <img src="../../img-tasks/Задача 9.1 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">По условию расстояние до лампочки
                                            d<sub>1</sub> должно быть наименьшим, тогда выражение <img
                                                src="../../img-tasks/Задача 9.1 формула 3.png" alt=""
                                                class="example-dano"> будет наибольшим, что бы оно было наибольшим в
                                            правой части должны вычитать как можно меньше <img
                                                src="../../img-tasks/Задача 9.1 формула 3.png" alt=""
                                                class="example-dano">, тогда d<sub>2</sub> должно быть
                                            максимальным, т.е. d<sub>2</sub> = 160.
                                        </p>
                                        <img src="../../img-tasks/Задача 9.1 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                96.</strong></p>
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
                                    <p class="container-solve-example-task">Наблюдатель находится на высоте h,
                                        выраженной в метрах. Расстояние от
                                        наблюдателя до наблюдаемой им линии горизонта, выраженное в
                                        километрах, вычисляется по формуле <img
                                            src="../../img-tasks/Задача 9.2 Дано .png" alt="" class="example-dano">, где
                                        R=6400км - радиус Земли. На какой высоте находится наблюдатель, если он видит
                                        линию горизонта на расстоянии 25,6 километра? Ответ дайте в метрах.
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
                                        <p class="container-solve-example-task">Подставим все значения в формулу и
                                            найдём
                                            значение h:</p>
                                        <img src="../../img-tasks/Задача 9.2 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                51,2.</strong></p>
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
                                    <p class="container-solve-example-task">Груз массой 0,25 кг колеблется на пружине.
                                        Его скорость v меняется по закону <img
                                            src="../../img-tasks/Задача 9.3 Дано .png" alt="" class="example-dano">‚ где
                                        t — время с момента начала колебаний, Т = 2c — период
                                        колебаний, v<sub>0</sub>=1,6 м/с. Кинетическая энергия E (в джоулях) груза
                                        вычисляется по формуле <img src="../../img-tasks/Задача 9.3 Дано 1.png" alt=""
                                            class="example-dano">‚ где m — масса груза в килограммах, v — скорость груза
                                        в м/с<sup>2</sup>. Найдите кинетическую энергию груза через 56 секунд после
                                        начала колебаний.
                                        Ответ дайте в джоулях.
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
                                        <img src="../../img-tasks/Задача 9.3 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                -2.</strong>
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
                                    <p class="container-solve-example-task">Небольшой мячик бросают под острым углом α
                                        к плоской горизонтальной поверхности земли. Максимальная высота полёта мячика Н
                                        (в м)
                                        вычисляется по формуле <img src="../../img-tasks/Задача 9.4 формула 1.png"
                                            alt="" class="example-dano">, где v<sub>0</sub> = 12 м/с — начальная
                                        скорость мячика, а g — ускорение свободного падения (считайте g = 10
                                        м/с<sup>2</sup>). При каком наименьшем значении угла α мячик пролетит над стеной
                                        высотой 4,4 м на расстоянии 1 м? Ответ дайте в градусах.
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
                                        <img src="../../img-tasks/Задача 9.4 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                60.</strong></p>
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
                                    <p class="container-solve-example-task">Автомобиль разгоняется на прямолинейном
                                        участке шоссе с постоянным ускорением α (в км/ч<sup>2</sup>). Скорость у (в
                                        км/ч<sup>2</sup>) вычисляется по формуле v =<img
                                            src="../../img-tasks/Задача 9.5 Дано .png" alt="" class="example-dano">, где
                                        𝑙 – пройденный автомобилем путь (в км). Найдите ускорение, с которым должен
                                        двигаться автомобиль, чтобы, проехав 0,8 км, приобрести скорость 100 км/ч. Ответ
                                        дайте в км/ч
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
                                        <img src="../../img-tasks/Задача 9.5 формула 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                6250.</strong></p>
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