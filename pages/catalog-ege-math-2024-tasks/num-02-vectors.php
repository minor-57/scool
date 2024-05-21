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
    <title>02. Задачи на векторы</title>
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
                    <h1 class="catalog-heading">02. Задачи на векторы</h1>
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
                                    <p class="container-solve-example-task">Даны векторы <img
                                            src="../../img-tasks/Задача 2 Дано Вектор (a).png" alt=""
                                            class="example-dano">(1; 2) , <img class="example-dano"
                                            src="../../img-tasks/Задача 2 Дано Вектор (b).png" alt="">(–3; 6) и <img
                                            src="../../img-tasks/Задача 2 Дано Вектор (с).png" alt=""
                                            class="example-dano">(4; –2). Найдите длину вектора 
                                            <span class="example-dano">\[\overrightarrow{a}-\overrightarrow{b}+\overrightarrow{c}\]</span></p>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <p class="solve-tasks-item-contant-text">Найдём <strong
                                                class="font-weight__normal">координаты</strong>
                                            искомого
                                            <strong class="font-weight__normal">вектора</strong>:
                                        </p>
                                        <p><span class="math-display adaptiv-formyls">\[\overrightarrow{a}-\overrightarrow{b}+\overrightarrow{c} \space \left\{{x_1-x_2+x_3;y_1-y_2+y_3}\right\}\]</span></p>
                                        <p><span class="math-display adaptiv-formyls">\[\overrightarrow{a}-\overrightarrow{b}+\overrightarrow{c} \space \left\{{1-(-3)+4;2-6+(-2)}\right\}\]</span></p>
                                        <p><span class="math-display">\[\overrightarrow{a}-\overrightarrow{b}+\overrightarrow{c} \space \left\{8;-6\right\}\]</span></p>
                                        <p class="solve-tasks-item-contant-text">Найдём <strong
                                                class="font-weight__normal">длину</strong> искомого
                                            <strong class="font-weight__normal">вектора</strong>:
                                        </p>
                                        <p> <span class="math-display">\[\mid\overrightarrow{a}-\overrightarrow{b}+\overrightarrow{c}\mid= \sqrt{8^2+(-6)^2}=\]</span></p>
                                        <p><span class="math-display">\[\sqrt{64+36}=\sqrt{100}=10\]</span></p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                10.</strong></p>
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
                                    <p class="container-solve-example-task">На координатной плоскости изображены векторы
                                        <img src="../../img-tasks/Задача 2 Дано Вектор (a).png" alt=""
                                            class="example-dano"> и <img class="example-dano"
                                            src="../../img-tasks/Задача 2 Дано Вектор (b).png" alt="">. Найдите длину
                                        вектора<img src="../../img-tasks/Задача 2 Дано Вектор (2a).png" alt=""
                                            class="example-dano">-<img
                                            src="../../img-tasks/Задача 2 Дано Вектор (b).png" alt=""
                                            class="example-dano">
                                    </p>
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 2.2 рисунок.png" alt=""
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
                                    <p><span class="math-display">\[2\overrightarrow{a}-\overrightarrow{b}=2\cdot\overrightarrow{a}+\overrightarrow{(-b)}\]</span></p>
                                        <p class="solve-tasks-item-contant-text">
                                            <strong class="font-weight__normal">Вектор <em>а</em> </strong>увеличим по
                                            <strong class="font-weight__normal">длине в 2
                                                раза</strong>, у <strong class="font-weight__normal">вектора
                                                <em>b</em></strong>
                                            поменяем<strong class="font-weight__normal"> направление</strong>
                                            на<strong class="font-weight__normal">
                                                противоположное</strong>, <strong class="font-weight__normal">сохранив
                                                угол наклона</strong> и
                                            перенесём его <strong class="font-weight__normal">начало в конец вектора
                                                <em>а</em></strong>:
                                        </p>
                                        <p class="solve-tasks-item-contant-text">Искомое длину вектора 
                                            <p><span class="example-dano">\[2\overrightarrow{a}-\overrightarrow{b}\]</span></p>, можно найти как <strong
                                                class="font-weight__normal">гипотенузу</strong> прямоугольного
                                            треугольника по <strong class="font-weight__normal">теореме
                                                Пифагора</strong>
                                        </p>
                                        <p><span class="math-display">\[x^2=4^2+3^2\]</span></p>
                                        <p><span class="math-display">\[x^2=16+9\]</span></p>
                                        <p><span class="math-display">\[x^2=25\]</span></p>
                                        <p><span class="math-display">\[x=5\]</span></p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                5.</strong></p>
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
                                    <p class="container-solve-example-task">На координатной плоскости изображены
                                        векторы<img src="../../img-tasks/Задача 2 Дано Вектор (a).png" alt=""
                                            class="example-dano"> и <img class="example-dano"
                                            src="../../img-tasks/Задача 2 Дано Вектор (b).png" alt=""> с целочисленными
                                        координатами. Найдите скалярное произведение <img
                                            src="../../img-tasks/Задача 2.3 формула 1.png" alt="" class="example-dano">
                                    </p>
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 2.3 рисунок.png" alt=""
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
                                        <p class="solve-tasks-item-contant-text">Найдём <strong
                                                class="font-weight__normal">координаты
                                                векторов</strong>, найдя на рисунке
                                            координаты точек начала и точек конца каждого вектора:</p>
                                            <p><span class="math-display">\[\overrightarrow{a}=\left\{x_2-x_1;y_2-y_1\right\}\]</span></p>
                                            <p><span class="math-display">\[\overrightarrow{a}=\left\{2-5;2-7\right\}=\overrightarrow{a}\left\{-3;-5\right\}\]</span></p>
                                            <p><span class="math-display">\[\overrightarrow{b}=\left\{x_2-x_1;y_2-y_1\right\}\]</span></p>
                                            <p><span class="math-display">\[\overrightarrow{b}=\left\{8-2;4-2\right\}=\overrightarrow{b}\left\{6;2\right\}\]</span></p>
                                        <p class="solve-tasks-item-contant-text">Найдём<strong
                                                class="font-weight__normal"> скалярное произведение векторов</strong>:
                                        </p>
                                        <p><span class="math-display">\[\overrightarrow{a}\cdot\overrightarrow{b}=x_1\cdot x_2+y_1\cdot y_2\]</span></p>
                                        <p><span class="math-display adaptiv-formyls">\[=-3\cdot 6+(-5)\cdot 2= -18+(-10)=-28\]</span></p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: -28.</strong></p>
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
                                    <p class="container-solve-example-task">На координатной плоскости изображены
                                        векторы<img src="../../img-tasks/Задача 2 Дано Вектор (a).png" alt=""
                                            class="example-dano"> и <img class="example-dano"
                                            src="../../img-tasks/Задача 2 Дано Вектор (b).png" alt="">. Найдите
                                        скалярное произведение векторов<img
                                            src="../../img-tasks/Задача 2 Дано Вектор (2b).png" alt=""
                                            class="example-dano"> и <img class="example-dano" src="../../img-tasks/"
                                            alt="">
                                    </p>
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 2.4 рисунок.png" alt=""
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
                                        <p class="solve-tasks-item-contant-text">Найдём <strong
                                                class="font-weight__normal">координаты векторов</strong>, найдя на
                                            рисунке
                                            координаты точек начала и точек конца каждого вектора:</p>
                                            <p><span class="math-display">\[\overrightarrow{a}=\left\{x_2-x_1;y_2-y_1\right\}\]</span></p>
                                            <p><span class="math-display adaptiv-formyls">\[\overrightarrow{a}=\left\{-6-(-2);-4-5\right\}=\overrightarrow{a}\left\{-4;-9\right\}\]</span></p>
                                            <p><span class="math-display">\[\overrightarrow{b}=\left\{x_2-x_1;y_2-y_1\right\}\]</span></p>
                                            <p><span class="math-display">\[\overrightarrow{b}=\left\{1-6;-2-2\right\}=\overrightarrow{b}\left\{-5;-4\right\}\]</span></p>
                                        <p class="solve-tasks-item-contant-text">
                                            Умножим координаты вектора<em> b</em> на 2 и найдём
                                            <img src="../../img-tasks/Задача 2 Дано Вектор (2b).png" alt=""
                                                class="example-dano">
                                        </p>
                                        <p><span class="math-display adaptiv-formyls">\[2\overrightarrow{b}=\left\{2\cdot(-5);2\cdot(-4)\right\}=\left\{-10;-8\right\}\]</span></p>
                                        <p class="solve-tasks-item-formyla">Найдём<strong class="font-weight__normal">
                                                скалярное произведение векторов</strong>:
                                        </p>
                                        <p><span class="math-display">\[\overrightarrow{a}\cdot2\overrightarrow{b}=\left\{x_1\cdot x_2+y_2\cdot y_1\right\}\]</span></p>
                                        <p><span class="math-display adaptiv-formyls">\[\overrightarrow{a}\cdot2\overrightarrow{b}=-4\cdot (-10)+(-9)\cdot (-8)=40+72=112\]</span></p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                112.</strong></p>
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
                                    <p class="container-solve-example-task">На координатной плоскости изображены
                                        векторы<img src="../../img-tasks/Задача 2 Дано Вектор (a).png" alt=""
                                            class="example-dano"> , <img class="example-dano"
                                            src="../../img-tasks/Задача 2 Дано Вектор (b).png" alt=""> и <img
                                            src="../../img-tasks/Задача 2 Дано Вектор (с).png" alt=""
                                            class="example-dano"> целочисленными координатами. Найдите длину вектора<img
                                            class="example-dano" src="../../img-tasks/Задача 2.5 формула 1.png" alt="">
                                    </p>
                                    <div class="container-solve-example-draw"><img
                                            src="../../img-tasks/Задача 2.5 рисунок.png" alt=""
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
                                        <p class="solve-tasks-item-contant-text">Отметим <strong
                                                class="font-weight__normal">точки начала и
                                                конца</strong class="font-weight__normal"> каждого<strong
                                                class="font-weight__normal">
                                                вектора</strong class="font-weight__normal"> с их <strong
                                                class="font-weight__normal">координатами</strong>:</p>
                                        <img src="../../img-tasks/Задача 2.5 формула 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text">Найдём <strong
                                                class="font-weight__normal">координаты
                                                векторов</strong>:</p>
                                                <p><span class="math-display">\[\overrightarrow{a}=(6-3;3-6)=(3;-3)\]</span></p>
                                                <p><span class="math-display">\[\overrightarrow{b}=(5-1;1-1)=(4;0)\]</span></p>
                                                <p><span class="math-display">\[\overrightarrow{c}=(8-9;6-3)=(-1;3)\]</span></p>
                                        <p class="solve-tasks-item-contant-text">Вычтем </strong
                                                class="font-weight__normal">вектора:</span></p>
                                                <p><span class="math-display adaptiv-formyls">\[\overrightarrow{a}-\overrightarrow{b}=(3-4;-3-0)=(-1;-3)\]</span></p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Умножим</strong> результат результат
                                            <em>а</em> –
                                            <em class="font-weight__normal">b</em> на вектор <em
                                                class="font-weight__normal">с</em>:
                                        </p>
                                        <p><span class="math-display adaptiv-formyls">\[(\overrightarrow{a}-\overrightarrow{b})\cdot\overrightarrow{c}=(-1;-3)\cdot(-1;3)=1-9=-8\]</span></p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: -8.</strong></p>
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