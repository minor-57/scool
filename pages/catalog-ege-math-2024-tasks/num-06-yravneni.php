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
                                    <p class="container-solve-example-task">Найдите корень уравнения <span class="example-dano">\[3^{log_{27}(8_{x}+4)}=4\]</span></p>
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                    <p><span class="math-display">\[3^{log_{27}(8_{x}+4)}=4\]</span></p>
                                    <p><span class="math-display">\[3^{log_{3}3(8_{x}+4)}=4\]</span></p>
                                    <p><span class="math-display">\[3^{\frac{1}{3}\cdot log_{3}(8_{x}+4)}=4\]</span></p>
                                    <p><span class="math-display">\[3^{log_{3}(8_{x}+4)^{\frac{1}{3}}}=4\]]</span></p>
                                    <p><span class="math-display">\[(8_{x}+4)^{\frac{1}{3}}=4\mid^3\]</span></p>
                                    <p><span class="math-display">\[(8_{x}+4)^{\frac{1}{3}\cdot3}=4^3\]</span></p>
                                    <p><span class="math-display">\[8x+4=64\]</span></p>
                                    <p><span class="math-display">\[8x=64-4\]</span></p>
                                    <p><span class="math-display">\[8x=60\]</span></p>
                                    <p><span class="math-display">\[x=\frac{60}{8}=7,5\]</span></p>
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
                                    <p><span class="math-display">\[log_3(5-2x)=log_3(1-4x)+1\]</span></p>
                                    <p><span class="math-display">\[log_3(5-2x)=log_3(1-4x)+log_33\]</span></p>
                                    <p><span class="math-display">\[log_3(5-2x)=log_3((1-4x)\cdot3)\]</span></p>
                                    <p><span class="math-display">\[log_3(5-2x)=log_3(3-12x)\]</span></p>
                                    <p><span class="math-display">\[5-2x=3-12x\]</span></p>
                                    <p><span class="math-display">\[5-2x=-12x+2x\]</span></p>
                                    <p><span class="math-display">\[2=-10x\]</span></p>
                                    <p><span class="math-display">\[x=\frac{2}{-10}=-0,2\]</span></p>
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
                                    <p><span class="math-display">\[log_{27}3^{5-4x}=9\]</span></p>
                                    <p><span class="math-display">\[3^{5-4x}=27^9\]</span></p>
                                    <p><span class="math-display">\[3^{5-4x}=(3^3)^{9}\]</span></p>
                                    <p><span class="math-display">\[3^{5-4x}=3^{3\cdot9}\]</span></p>
                                    <p><span class="math-display">\[3^{5-4x}=3^{27}\]</span></p>
                                    <p><span class="math-display">\[{5-4x}={27}\]</span></p>
                                    <p><span class="math-display">\[-4x=27-5\]</span></p>
                                    <p><span class="math-display">\[-4x=22\]</span></p>
                                    <p><span class="math-display">\[x=\frac{22}{(-4)}=-5,5\]</span></p>                                    
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
                                    <p class="container-solve-example-task">Найдите корень уравнения<span class="example-dano">\[\sqrt{9-8x}=-x\]</span> Если
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
                                    <p><span class="math-display">\[ОДЗ:-x\geq0\]</span></p> 
                                    <p><span class="math-display">\[x\leq0\]</span></p> 
                                    <p><span class="math-display">\[\sqrt{9-8x}=-x\]</span></p> 
                                        <p class="container-solve-example-task">Возведём обе части части уравнения в
                                            квадрат:</p>
                                            <p><span class="math-display">\[(\sqrt{9-8x})^2=(-x)^2\]</span></p> 
                                            <p><span class="math-display">\[9-8x=x^2\]</span></p> 
                                            <p><span class="math-display">\[x^2+8x-9=0\]</span></p> 
                                            <p><span class="math-display">\[D=8^2-4\cdot1\cdot(-9)=64-(-36)=100=10^2\]</span></p> 
                                            <p><span class="math-display">\[x_1=\frac{-8+10}{2\cdot1}=\frac{2}{2}=1\]</span></p> 
                                            <p><span class="math-display">\[x_2=\frac{-8-10}{2\cdot1}=\frac{-18}{2}=-9\]</span></p> 
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
                                    <p class="container-solve-example-task">Найдите корень уравнения <span class="example-dano">\[tg\frac{\pi(x+6)}{3}=\sqrt3\]</span>
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
                                    <p><span class="math-display">\[\frac{\pi(x+6)}{3}=\frac{\pi}{3}+\pi  n,n\in  Z\mid:\pi\]</span></p> 
                                    <p><span class="math-display">\[\frac{x+6}{3}=\frac{1}{3}+  n\mid\cdot3\]</span></p> 
                                    <p><span class="math-display">\[x+6=1+3n\]</span></p> 
                                    <p><span class="math-display">\[x=1-6+3n\]</span></p> 
                                    <p><span class="math-display">\[x=-5+3n\]</span></p> 
                                        <p class="container-solve-example-task">Подберём такое n, что бы х был
                                            наименьший положительный:</p>
                                            <p><span class="math-display">\[n=2,x=-5+3\cdot2=-5+6=1\]</span></p> 
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