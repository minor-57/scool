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
    <title>01. Геометрия на плоскости (планиметрия)</title>
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
                    <h1 class="catalog-heading">01. Геометрия на плоскости (планиметрия)</h1>
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
                                    <p class="container-solve-example-task">Четырёхугольник АВСD вписан в окружность.
                                        Угол ВАD равен 127°. Найдите угол ВСD. Ответ дайте в градусах.</p>
                                    <div class="container-solve-example-draw"><img src="../../img-tasks/Задача 1.1.jpg"
                                            alt="" class="image-solve-example-draw"></div>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Сумма</strong> противоположных
                                            углов
                                            <strong class="font-weight__normal">∠A</strong>&nbsp;и <strong
                                                class="font-weight__normal">∠С </strong>четырёхугольника
                                            вписанного в окружность равна <strong
                                                class="font-weight__normal">180º</strong>. Угол ∠С
                                            равна: <strong class="font-weight__normal">∠С
                                                =</strong> 180º – ∠A = 180 – 127 =<strong class="font-weight__normal">
                                                53º</strong>
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                53.</strong></p>
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
                                    <p class="container-solve-example-task">Площадь ромба равна 10. Одна из его
                                        диагоналей равна 8. Найдите другую диагональ.</p>
                                    <div class="container-solve-example-draw"><img src="../../img-tasks/Задача 1.2.jpg"
                                            alt="" class="image-solve-example-draw"></div>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="solve-tasks-item-contant-text">
                                            <strong class="font-weight__normal"> Площадь ромба</strong>, <strong
                                                class="font-weight__normal">через</strong> его
                                            <strong class="font-weight__normal">диагонали</strong>, находится по<strong
                                                class="font-weight__normal">
                                                формуле</strong>:
                                        </p>
                                        <p><span class="math-display">\[S = {\frac{1}{2}}\cdot d_1\cdot d_2\]</span></p>
                                        <p class="solve-tasks-item-contant-text">
                                            Зная площадь ромба и одну из его диагоналей,<strong
                                                class="font-weight__normal">найдём
                                                другую диагональ</strong>:</p>
                                                <p><span class="math-display">\[10 = {\frac{1}{2}}\cdot 8\cdot d_2\]</span></p>
                                                <p><span class="math-display">\[10 = 4\cdot d_2\]</span></p>
                                                <p><span class="math-display">\[d_2 = \frac {10}{4}=2,5\]</span></p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                2,5.</strong></p>
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
                                    <p class="container-solve-example-task">Площадь ромба равна 9. Одна из его
                                        диагоналей в 8 раз больше другой. Найдите меньшую диагональ.</p>
                                    <div class="container-solve-example-draw"><img src="../../img-tasks/Задача 1.3.jpg"
                                            alt="" class="image-solve-example-draw"></div>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="solve-tasks-item-contant-text">
                                            Пусть <strong class="font-weight__normal">меньшая диагональ</strong> равна
                                            <strong><em class="font-weight__normal">d</em></strong>, тогда <strong
                                                class="font-weight__normal">большая диагональ</strong>
                                            равна <strong class="font-weight__normal">8·<em
                                                    class="font-weight__normal">d</em></strong>. <b
                                                class="font-weight__normal">Площадь ромба</b>
                                            равна
                                            <strong class="font-weight__normal">половине произведения его
                                                диагоналей</strong>:
                                        </p>
                                        <p><span class="math-display">\[S_\diamond = \frac {1}{2}\cdot d_1\cdot d_2\]</span></p>
                                        <p><span class="math-display">\[9= \frac {1}{2}\cdot d\cdot 8d\]</span></p>
                                        <p><span class="math-display">\[9= 4d^2\]</span></p>
                                        <p><span class="math-display">\[d^2=\frac{9}{4}\]</span></p>
                                        <p><span class="math-display">\[d=\sqrt\frac{9}{4}=\frac{3}{2}=1,5\]</span></p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: 1,5.</strong></p>
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
                                    <p class="container-solve-example-task">Стороны АВ, ВС, CD и AD четырёхугольника
                                        ABCD стягивают дуги описанной окружности, градусные величины которых равны
                                        соответственно 46°, 115°, 122°, 77°. Найдите угол ABC. Ответ дайте в градусах.
                                    </p>
                                    <div class="container-solve-example-draw"><img src="../../img-tasks/Задача 1.4.jpg"
                                            alt="" class="image-solve-example-draw"></div>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="solve-tasks-item-contant-text">
                                            Найдём<strong class="font-weight__normal"> градусную величину дуги
                                                ADC</strong>:</p>
                                                <p><span class="math-display adaptiv-formyls">\[\smile ADC=\smile AD+ \smile CD= 77^\circ+122^\circ=199^\circ\]</span></p>
                                        <p class="solve-tasks-item-contant-text">Вписанный
                                            ∠АВС</strong> равен
                                            <strong class="font-weight__normal">половине дуги</strong> на которую
                                            <strong class="font-weight__normal">опирается</strong>:
                                        </p>
                                        <p><span class="math-display adaptiv-formyls">\[\angle ABC=\frac{\smile ADC}{2}= \frac{199^\circ}{2}=99,5^\circ\]</span></p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                99,5.</strong></p>
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
                                    <p class="container-solve-example-task">Точки А, B, С, D, расположенные на
                                        окружности, делят эту окружность на четыре дуги АВ, ВС, CD и AD, градусные
                                        величины которых относятся соответственно как 12:4:7:13. Найдите угол BAD. Ответ
                                        дайте в градусах.</p>
                                    <div class="container-solve-example-draw"><img src="../../img-tasks/Задача 1.5.jpg"
                                            alt="" class="image-solve-example-draw"></div>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="solve-tasks-item-contant-text">Вся <strong
                                                class="font-weight__normal">окружность</strong>
                                            равна<strong class="font-weight__normal"> 360°</strong>. Её
                                            <strong class="font-weight__normal">поделили</strong> на:
                                        </p>
                                        <p class="solve-tasks-item-contant-text">12 + 4 + 7 + 13 = <strong
                                                class="font-weight__normal">36
                                                частей</strong></p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Одна часть</strong> равна:</p>
                                        <p class="solve-tasks-item-contant-text">360°/36
                                            = <strong class="font-weight__normal">10°</strong></p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Угол BAD</strong> равен
                                            <strong class="font-weight__normal">половине дуги
                                                ‿ВСD</strong> на которую <strong
                                                class="font-weight__normal">опирается</strong>:
                                        </p>
                                        <p><span class="math-display">\[\smile BCD=10^\circ\cdot(4+7)=110^\circ\]</span></p>
                                        <p><span class="math-display">\[\angle BAD=\frac{\smile BCD}{2}= \frac{110^\circ}{2}=55^\circ\]</span></p>
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: 55.</strong></p>
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