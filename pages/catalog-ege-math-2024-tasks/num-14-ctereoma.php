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
    <title>14. Задачи по стереометрии</title>
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
                    <h1 class="catalog-heading">14. Задачи по стереометрии</h1>
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
                                    <p class="container-solve-example-task">В правильной треугольной призме ABCA1B1C1
                                        все рёбра равны 6. На рёбрах AA1 и CC1 отмечены точки M и N соответственно,
                                        причём AM  =  2, CN  =  1.
                                    </p>
                                    <p class="container-solve-example-task">а)  Докажите, что плоскость MNB1 разбивает
                                        призму на два многогранника, объёмы которых равны.
                                    </p>
                                    <p class="container-solve-example-task">б)  Найдите объём тетраэдра MNBB1.
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
                                        <img src="../../img-tasks/Задача 14.1 рисунок.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Площадь основания призмы равна <img
                                                src="../../img-tasks/Задача 14.1 Дано 1.png" alt=""
                                                class="example-dano"> а объём призмы равен <img
                                                src="../../img-tasks/Задача 14.1 Дано 2.png" alt=""
                                                class="example-dano"></p>
                                        <p class="container-solve-example-task">В четырёхугольной пирамиде B1A1C1NM
                                            высота совпадает с высотой основания призмы A1B1C1, опущенной на сторону
                                            A1C1, и равна <img src="../../img-tasks/Задача 14.1 Дано 3.png" alt=""
                                                class="example-dano"> Основание A1C1NM пирамиды B1A1C1NM является
                                            трапецией, площадь которой равна 27. Значит, объём пирамиды B1A1C1NM равен
                                            <img src="../../img-tasks/Задача 14.1 Дано 4.png" alt=""
                                                class="example-dano"> то есть составляет половину объёма призмы. Поэтому
                                            объёмы многогранников B1A1C1NM и ABCMB1N равны.
                                        </p>
                                        <p class="container-solve-example-task">б)  В четырёхугольной пирамиде BACNM
                                            высота совпадает с высотой основания призмы ABC, опущенной на сторону AC, и
                                            равна <img src="../../img-tasks/Задача 14.1 Дано 3.png" alt=""
                                                class="example-dano"> Основание пирамиды BACNM является трапецией,
                                            площадь которой равна 9. Объём пирамиды BACNM равен <img
                                                src="../../img-tasks/Задача 14.1 Дано 1.png" alt=""
                                                class="example-dano"> многогранник ABCMB1N состоит из двух частей: BACNM
                                            и MNBB1. Значит, объём тетраэдра MNBB1 равен <img
                                                src="../../img-tasks/Задача 14.1 Дано 5.png" alt=""
                                                class="example-dano"></p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ:
                                                <img src="../../img-tasks/Задача 14.1 Дано 5.png" alt=""
                                                    class="example-dano"></strong></p>
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
                                    <p class="container-solve-example-task">Прямоугольник ABCD и цилиндр расположены
                                        таким образом, что AB  — диаметр верхнего основания цилиндра, а CD лежит в
                                        плоскости нижнего основания и касается его окружности, при этом плоскость
                                        прямоугольника наклонена к плоскости основания цилиндра под углом 60°.
                                    </p>
                                    <p class="container-solve-example-task">а)  Докажите, что ABCD  — квадрат.
                                    </p>
                                    <p class="container-solve-example-task">б)  Найдите длину той части отрезка BD,
                                        которая находится снаружи цилиндра, если радиус цилиндра равен <img
                                            src="../../img-tasks/Задача 14.2 Дано 1.png" alt=""
                                            class="example-dano"></strong>
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
                                        <img src="../../img-tasks/Задача 14.2 рисунок.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">а)  Пусть сторона CD прямоугольника
                                            касается окружности нижнего основания в точке K, O1  — центр нижнего
                                            основания, а O  — центр верхнего. Тогда O1O  — перпендикуляр к плоскости
                                            основания, отрезок O1K перпендикулярен отрезку CD и по теореме о трех
                                            перпендикулярах отрезок OK перпендикулярен CD. Поэтому K  — середина CD.
                                            Тогда упомянутый угол наклона  — угол OKO1  =  60° и <img
                                                src="../../img-tasks/Задача 14.2 Дано 2.png" alt=""
                                                class="example-dano"> где r  — радиус
                                            цилиндра. При этом <img src="../../img-tasks/Задача 14.2 Дано 3.png" alt=""
                                                class="example-dano"> поэтому <img
                                                src="../../img-tasks/Задача 14.2 Дано 4.png" alt=""
                                                class="example-dano"> значит, ABCD  — квадрат.
                                        </p>
                                        <p class="container-solve-example-task">б)  Пусть отрезок BD пересекает
                                            поверхность цилиндра в точке T; E и F  — проекции точек D и T соответственно
                                            на плоскость верхнего основания.
                                        <p class="container-solve-example-task">Тогда FT лежит на образующей, и поэтому
                                            отрезок FT параллелен отрезку DE. Значит, <img
                                                src="../../img-tasks/Задача 14.2 Дано 6.png" alt=""
                                                class="example-dano"> Поскольку <img
                                                src="../../img-tasks/Задача 14.2 Дано 5.png" alt=""
                                                class="example-dano"> как угол, опирающийся на
                                            диаметр, <img src="../../img-tasks/Задача 14.2 Дано 7.png" alt=""
                                                class="example-dano"> Поэтому и <img
                                                src="../../img-tasks/Задача 14.2 Дано 8.png" alt=""
                                                class="example-dano"> т. е. <img
                                                src="../../img-tasks/Задача 14.2 Дано 9.png" alt=""
                                                class="example-dano">
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ: 0,8.
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
                                    <p class="container-solve-example-task">Длина диагонали куба ABCDA1B1C1D1
                                        равна 3. На луче A1C отмечена точка P так, что A1P  =  4.
                                    </p>
                                    <p class="container-solve-example-task">
                                        а)  Докажите, что PBDC1 — правильный тетраэдр.
                                    </p>
                                    <p class="container-solve-example-task">
                                        б)  Найдите длину отрезка AP.
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
                                        <img src="../../img-tasks/Задача 14.3 рисунок.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">а)  Введём систему координат, как
                                            показано на рисунке. Поскольку ребро куба в корень <img
                                                src="../../img-tasks/Задача 14.3 Дано 1.png" alt=""
                                                class="example-dano"> меньше его диагонали,
                                            ребро данного куба равно <img src="../../img-tasks/Задача 14.3 Дано 1.png"
                                                alt="" class="example-dano">. Тогда точки B, D, C1 имеют координаты <img
                                                src="../../img-tasks/Задача 14.3 Дано 2.png" alt=""
                                                class="example-dano">
                                            соответственно.
                                            Поскольку P лежит на продолжении A1C, отрезок A1P можно рассматривать как
                                            диагональ куба с ребром <img src="../../img-tasks/Задача 14.3 Дано 3.png"
                                                alt="" class="example-dano"> Тогда точка P имеет координаты <img
                                                src="../../img-tasks/Задача 14.3 Дано 4.png" alt=""
                                                class="example-dano">
                                            Найдём расстояние от P до точек D, B и C1:
                                            <img src="../../img-tasks/Задача 14.3 Дано 5.png" alt=""
                                                class="solve-tasks-item-formyla">
                                            Отрезки C1B, DB и DC1  — диагонали граней куба, поэтому по теореме Пифагора
                                            <img src="../../img-tasks/Задача 14.3 Дано 6.png" alt=""
                                                class="example-dano">.
                                            Тогда <img src="../../img-tasks/Задача 14.3 Дано 7.png" alt=""
                                                class="example-dano">Значит, все рёбра тетраэдра DBC1P
                                            равны, поэтому он правильный.
                                        </p>
                                        <p class="container-solve-example-task">б)  Координаты точки A: <img
                                                src="../../img-tasks/Задача 14.3 Дано 8.png" alt=""
                                                class="example-dano"> Раcстояние от
                                            точки P до точки A равно
                                        </p>
                                        <img src="../../img-tasks/Задача 14.3 Дано 9.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                <img src="../../img-tasks/Задача 14.3 Ответ 1.png" alt=""
                                                    class="example-dano"></strong>
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
                                    <p class="container-solve-example-task">Дана правильная шестиугольная пирамида
                                        SABCDEF с вершиной S.
                                    </p>
                                    <p class="container-solve-example-task">а)  Докажите, что плоскость, проходящая
                                        через середины рёбер SA и SD и вершину
                                        C, делит апофему грани ASB в отношении 2 : 1, считая от вершины S.

                                    </p>
                                    <p class="container-solve-example-task"> б)  Найдите отношение, в котором плоскость,
                                        проходящая через середины рёбер SA и
                                        SD и вершину C, делит ребро SF, считая от вершины S.
                                </div>
                            </div>
                        </div>
                        <details class="container-solve-tasks-item-decision">
                            <summary class="acardion-triggers">Показать
                                ответ и решение<span class="acardion-triggers__icon"></span></summary>
                            <div class="acardion-content-solve">
                                <div class="container-solve-tasks-item-contant-text">
                                    <div class="solve-tasks-item-contant-text">
                                        <img src="../../img-tasks/Задача 14.4 рисунок.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">а)  Обозначим за M, N середины ребер SA
                                            и SD. Поскольку MN  — средняя линия треугольника SAD, то <img
                                                src="../../img-tasks/Задача 14.4 Дано 1.png" alt=""
                                                class="example-dano"> поэтому точка B
                                            также лежит в данной плоскости. Поэтому с гранью ABS данная плоскость
                                            пересекается по прямой BM  — медиане треугольника SAB. Она делит его медиану
                                            SQ (Q  — середина AB) в отношении 2 : 1 считая от вершины.</p>
                                        <p class="container-solve-example-task">б)  Пусть <img
                                                src="../../img-tasks/Задача 14.4 Дано 2.png" alt=""
                                                class="example-dano"> Поскольку MN  — средняя линия
                                            треугольника SAD, она делит отрезок SK пополам, то есть T  — середина SK.
                                            Ясно, что T лежит в данной плоскости.
                                            Рассмотрим теперь треугольник SBF. В нем проведена медиана SK и отмечена ее
                                            середина T. В данной плоскости лежит прямая BT, пересекающая SF в точке W.
                                            Осталось выяснить местоположение точки W.
                                            Напишем теорему Менелая для треугольника FSK и прямой <img
                                                src="../../img-tasks/Задача 14.4 Дано 3.png" alt=""
                                                class="example-dano"> откуда <img
                                                src="../../img-tasks/Задача 14.4 Дано 4.png" alt=""
                                                class="example-dano">
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: 1 : 2. </strong>
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
                                    <p class="container-solve-example-task">В кубе ABCDA1B1C1D1 рёбра равны 1. На
                                        продолжении отрезка A1C1 за точку C1 отмечена точка M так, что A1C1  =  C1M, а
                                        на продолжении отрезка B1C за точку C отмечена точка N так, что B1C  =  CN.
                                    </p>
                                    <p class="container-solve-example-task"> а)  Докажите, что MN  =  MB1.
                                    </p>
                                    <p class="container-solve-example-task"> б)  Найдите расстояние между прямыми B1C1 и
                                        MN.
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
                                        <img src="../../img-tasks/Задача 14.5 рисунок.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">а)  Введем систему координат, как
                                            показано на рисунке. В введенной системе координат имеем:
                                        </p>
                                        <img src="../../img-tasks/Задача 14.5 Дано 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Таким образом, у нас получилось, что
                                            <img src="../../img-tasks/Задача 14.5 Дано 2.png" alt=""
                                                class="example-dano">
                                        <p class="container-solve-example-task">б)  Заметим, что проекцией B1C1 на
                                            плоскость DCC1D1 является точка C1. Спроектируем MN на плоскость DCC1D1,
                                            получим отрезок M1N1. Таким образом, задача свелась к нахождению расстояния
                                            от точки C1 до M1N1. Это расстояние равно длине высоты, проведенной из
                                            вершины C1 треугольника N1C1M1. Очевидно, что данный треугольник является
                                            прямоугольным, а его катеты равны 2 и 1. Тогда его гипотенуза находится по
                                            теореме Пифагора, она <img src="../../img-tasks/Задача 14.5 Дано 3.png"
                                                alt="" class="example-dano"> равна Следовательно, высота равна
                                        </p>
                                        <img src="../../img-tasks/Задача 14.5 Дано 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ:
                                                <img src="../../img-tasks/Задача 14.5 Ответ 1.png" alt=""
                                                    class="example-dano"></strong>
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