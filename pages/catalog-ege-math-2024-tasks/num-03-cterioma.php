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
    <title>03. Геометрия в пространстве (стереометрия)</title>
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
                    <h1 class="catalog-heading">03. Геометрия в пространстве (стереометрия)</h1>
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
                                    <p class="container-solve-example-task">Длина окружности основания цилиндра равна 5,
                                        высота равна 6. Найдите площадь боковой поверхности цилиндра.</p>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="solve-tasks-item-contant-text"> <strong
                                                class="font-weight__normal">Поверхность цилиндра</strong> состоит из
                                            <strong class="font-weight__normal">прямоугольника и 2-х кругов</strong>.
                                        </p>
                                        <p class="solve-tasks-item-contant-text">
                                            <strong class="font-weight__normal"> Боковая поверхность цилиндра</strong>
                                            это
                                            <strong class="font-weight__normal">прямоугольник</strong> со <strong
                                                class="font-weight__normal">сторонами 5</strong>
                                            (<em class="font-weight__normal">длина окружности</em>) и <strong
                                                class="font-weight__normal">6</strong> (<em
                                                class="font-weight__normal">высота</em>).
                                            Найдём площадь боковой поверхности цилиндра:
                                        </p>
                                        <p class="solve-tasks-item-formyls"><strong class="font-weight__normal">S<sub
                                                    class="font-weight__normal">бок.
                                                    пов. цилиндра</sub> =</strong class="font-weight__normal"> 5·6
                                            <strong class="font-weight__normal">= 30</strong>
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                30.</strong></p>
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
                                    <p class="container-solve-example-task">Цилиндр вписан в прямоугольный
                                        параллелепипед. Радиус основания и высота цилиндра равны 8. Найдите объём
                                        параллелепипеда.
                                    </p>
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 3.2 рисунок.png" alt=""
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
                                        <p class="solve-tasks-item-contant-text">У <strong
                                                class="font-weight__normal">прямоугольного параллелепипеда
                                                основанием</strong>
                                            является прямоугольник, но вписать окружность (<em
                                                class="font-weight__normal">основание
                                                цилиндра</em>) можно только в <strong
                                                class="font-weight__normal">квадрат</strong>.
                                            <strong class="font-weight__normal">Длина и ширина параллелепипеда</strong>
                                            будут равны<strong class="font-weight__normal">диаметру</strong> основания
                                            <strong class="font-weight__normal">цилиндра</strong>:
                                        </p>
                                        <p class="solve-tasks-item-formyls">
                                            <strong class="font-weight__normal">a</strong>
                                            =<strong> <em class="font-weight__normal">b</em></strong> =<strong><em
                                                    class="font-weight__normal">
                                                    d</em></strong> =
                                            <strong><em class="font-weight__normal">r</em></strong> + <strong><em
                                                    class="font-weight__normal">r</em></strong> = 8 + 8
                                            =<strong class="font-weight__normal">
                                                16</strong>
                                        </p>
                                        <p class="solve-tasks-item-contant-text">
                                            Высота параллелепипеда равна высоте цилиндра 8. Найдём объём
                                            параллелепипеда:
                                        </p>
                                        <p class="solve-tasks-item-formyls"><strong class="font-weight__normal">V
                                                =</strong><strong class="font-weight__normal">a</strong>·<strong><em
                                                    class="font-weight__normal">b</em></strong>·<strong
                                                class="font-weight__normal">c</strong>
                                            = <strong class="font-weight__normal">16</strong>·<strong
                                                class="font-weight__normal">16</strong>·8 <strong
                                                class="font-weight__normal">=
                                                2048</strong></p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                2048.</strong></p>
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
                                    <p class="container-solve-example-task">Длина окружности основания конуса равна 6,
                                        образующая равна 4. Найдите площадь боковой поверхности конуса.</p>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="solve-tasks-item-contant-text">Площадь боковой поверхности конуса
                                            находится по формуле:</p>
                                            <p><span class="math-display">\[S_{бок}=\pi rl\]</span></p>
                                        <p class="solve-tasks-item-contant-text">Из <strong
                                                class="font-weight__normal">формулы длины
                                                окружности</strong> равной
                                            <strong class="font-weight__normal">6</strong>, <strong
                                                class="font-weight__normal">выразим π<em
                                                    class="font-weight__normal">r</em></strong>:
                                        </p>
                                        <p><span class="math-display">\[C =2\pi r\]</span></p>
                                        <p><span class="math-display">\[6 =2\pi r\]</span></p>
                                        <p><span class="math-display">\[\pi r =\frac{6}{2}\]</span></p>
                                        <p><span class="math-display">\[\pi r =3\]</span></p>
                                        <p class="solve-tasks-item-contant-text">Найдём <strong
                                                class="font-weight__normal">площадь боковой
                                                поверхности
                                                конуса</strong>:</p>
                                        <p><span class="math-display">\[S_{бок}=\pi rl=3\cdot4=12\]</span></p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: 12.</strong></p>
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
                                    <p class="container-solve-example-task">Высота конуса равна 18, а длина образующей
                                        равна 30. Найдите площадь осевого сечения этого конуса.
                                    </p>
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 3.4 рисунок.png" alt=""
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
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Осевым сечением конуса</strong> является
                                            <strong class="font-weight__normal">равнобедренный треугольник</strong>
                                            с<strong class="font-weight__normal"></strong
                                                class="font-weight__normal">высотой</strong>

                                            равной <strong class="font-weight__normal">высоте конуса
                                                18</strong>,<strong class="font-weight__normal">
                                                боковыми рёбрами</strong> равными<strong
                                                class="font-weight__normal">образующими конуса
                                                30</strong>.<br>
                                            <strong class="font-weight__normal"> Основание равнобедренного
                                                треугольника</strong class="font-weight__normal"> делится высотой на
                                            <strong class="font-weight__normal">две
                                                равных части <em class="font-weight__normal">х</em></strong
                                                class="font-weight__normal">, найдём
                                            <strong class="font-weight__normal">одну</strong> из них по <strong
                                                class="font-weight__normal">теореме Пифагора</strong
                                                class="font-weight__normal"> из
                                            прямоугольного треугольника:
                                        </p>
                                        <p><span class="math-display">\[x^2=30^2-18^2\]</span></p>
                                        <p><span class="math-display">\[x^2=900-324\]</span></p>
                                        <p><span class="math-display">\[x^2=576\]</span></p>
                                        <p><span class="math-display">\[S_{бок}=\pi rl\]</span></p>
                                        <p class="solve-tasks-item-contant-text">
                                            Тогда всё основания равно:
                                        </p>
                                        <p><span class="math-display">\[2x=2\cdot 24=48\]</span></p>                                        
                                        <p class="solve-tasks-item-contant-text">
                                            Найдём площадь сечения по формуле площади треугольника:
                                        </p>
                                        <p><span class="math-display">\[S_\bigtriangleup=\frac{1}{2}\cdot 48\cdot 18=24\cdot 18=432\]</span></p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                432.</strong></p>
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
                                    <p class="container-solve-example-task">В кубе ABCDA1B1C1D1 найдите угол между
                                        прямыми DC1 и BD. Ответ дайте в градусах.
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
                                        <p class="solve-tasks-item-contant-text">Сделаем чертеж и отметим линии DC1
                                            и BD:</p>
                                        <img src="../../img-tasks/Задача 3.5 рисунок.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text">Угол между прямыми DC1 и BD – это угол
                                            в плоскости DBC1. Можно заметить, что эта плоскость определяется тремя
                                            равными отрезками BD, DC1 и BC1 – как диагонали куба. Следовательно,
                                            треугольник DBC1 – равносторонний с углами в 60º. Значит, угол между прямыми
                                            DC1 и BD равен 60º.</p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: 60.</strong></p>
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