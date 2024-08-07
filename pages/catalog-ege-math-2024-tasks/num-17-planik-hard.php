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
    <title>17. Задачи по планиметрии</title>
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
                    <h1 class="catalog-heading">17. Задачи по планиметрии</h1>
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
                                    <p class="container-solve-example-task">Точка I  — центр окружности S1, вписанной в
                                        треугольник ABC, точка O  — центр окружности S2, описанной около треугольника
                                        BIC.
                                    </p>
                                    <p class="container-solve-example-task">а)  Докажите, что точка O лежит на
                                        окружности, описанной около треугольника ABC.
                                    </p>
                                    <p class="container-solve-example-task">б)  Найдите косинус угла BAC, если радиус
                                        описанной окружности треугольника ABC
                                        относится к радиусу окружности S2 как 3:5.
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
                                        <img src="../../img-tasks/Задача 17.1 Рисунок 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">а)  Обозначим <img
                                                src="../../img-tasks/Задача 17.1 Дано 1.png" alt=""
                                                class="example-dano"> Поскольку I  — точка
                                            пересечения биссектрис треугольника ABC , получаем, <img
                                                src="../../img-tasks/Задача 17.1 Дано 2.png" alt=""
                                                class="example-dano"> что Дуга BC окружности
                                            S<sub>2</sub>, не содержащая точки I, вдвое больше вписанного в эту
                                            окружность угла
                                            BIC, т. е. равна 180° + α. Значит, дуга BIC окружности S<sub>2</sub> равна
                                            <img src="../../img-tasks/Задача 17.1 Дано 3.png" alt=""
                                                class="example-dano"> Сумма углов
                                            при вершинах A и O четырехугольника ABOC равна 180°, значит, этот
                                            четырехугольник вписанный. Следовательно, точка O лежит на окружности,
                                            описанной около треугольника ABC.
                                        </p>
                                        <p class="container-solve-example-task">б)  Пусть r и R  — радиусы описанной
                                            окружности треугольника ABC и окружности S<sub>2</sub> соответственно. По
                                            теореме
                                            синусов:</p>
                                        <img src="../../img-tasks/Задача 17.1 Дано 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Значит,</p>
                                        <img src="../../img-tasks/Задача 17.1 Дано 5.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">откуда <img
                                                src="../../img-tasks/Задача 17.1 Дано 6.png" alt=""
                                                class="example-dano"> Следовательно, <img
                                                src="../../img-tasks/Задача 17.1 Дано 7.png" alt=""
                                                class="example-dano"> </p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ: <img src="../../img-tasks/Задача 17.1 Дано 8.png" alt=""
                                                    class="example-dano">
                                            </strong></p>
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
                                    <p class="container-solve-example-task">Точка B лежит на отрезке AC. Прямая,
                                        проходящая через точку A, касается окружности с диаметром BC в точке M и второй
                                        раз пересекает окружность с диаметром AB в точке K. Продолжение отрезка MB
                                        пересекает окружность с диаметром AB в точке D.
                                    </p>
                                    <p class="container-solve-example-task">
                                        а)  Докажите, что прямые AD и MC параллельны.
                                    </p>
                                    <p class="container-solve-example-task">
                                        б)  Найдите площадь треугольника DBC, если AK  =  3 и MK  =  12.
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
                                        <img src="../../img-tasks/Задача 17.2 Рисунок 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">а)  Точки M и D лежат на окружностях с
                                            диаметрами BC и AB соответственно, поэтому<img
                                                src="../../img-tasks/Задача 17.2 Дано 1.png" alt=""
                                                class="example-dano">
                                            Прямые AD и MC перпендикулярны одной и той же прямой MD, следовательно,
                                            прямые AD и MC параллельны.
                                        </p>
                                        <p class="container-solve-example-task">б)  Пусть точка  O  — центр окружности с
                                            диаметром BC. Тогда прямые OM и AM взаимно перпендикулярны. Прямые BK и AM
                                            также взаимно перпендикулярны. Таким образом, прямые OM и BK параллельны.
                                            Обозначим BK через x. Треугольник AMO подобен треугольнику AKB с
                                            коэффициентом 5, поэтому OB  =  OM  =  5x. Опустим перпендикуляр BP из точки
                                            B на прямую OM. Так как четырёхугольник BKMP  — прямоугольник, получаем:
                                        </p>
                                        <img src="../../img-tasks/Задача 17.2 Дано 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">По теореме Пифагора
                                            OB<sup>2</sup>  =  BP<sup>2</sup> + OP<sup>2</sup>,
                                            откуда 25x<sup>2</sup>  =  144 + 16x<sup>2</sup>. Получаем, что x  =  4.
                                            Поскольку прямые AD и MC
                                            параллельны, имеем:
                                        </p>
                                        <img src="../../img-tasks/Задача 17.2 Дано 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">3Значит, треугольники DBC и AMB
                                            равновелики. Следовательно,
                                        </p>
                                        <img src="../../img-tasks/Задача 17.2 Дано 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ: 30.
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
                                    <p class="container-solve-example-task">На диагонали параллелограмма взяли точку,
                                        отличную от её середины. Из неё на все стороны параллелограмма (или их
                                        продолжения) опустили перпендикуляры.
                                    </p>
                                    <p class="container-solve-example-task">
                                        а)  Докажите, что четырёхугольник, образованный основаниями этих
                                        перпендикуляров, является трапецией.
                                    </p>
                                    <p class="container-solve-example-task">
                                        б)  Найдите площадь полученной трапеции, если площадь параллелограмма равна 16,
                                        а один из его углов равен 60°.
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
                                        <img src="../../img-tasks/Задача 17.3 рисуунок 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">а)  Возьмём на диагонали AC
                                            параллелограмма ABCD точку O (не посередине) и проведём через неё
                                            перпендикуляры NL и KM к сторонам параллелограмма (см. рис.). Прямоугольные
                                            треугольники CKO и AMO подобны.
                                            Точно так же подобны треугольники CNO и ALO:
                                            OK:OM = OC:OA = ON:OL.
                                            Отсюда следует подобие треугольников ONK и OLM. Тогда накрестлежащие углы
                                            OML и OKN равны, а поэтому прямые NK и ML параллельны. Следовательно,
                                            четырёхугольник KLMN  — параллелограмм или трапеция.
                                            Докажем, что это трапеция. Если KLMN  — параллелограмм, то ON = OL.
                                            В этом случае OC = OA, то есть O – середина AC. Противоречие. Значит,
                                            KLMN  — трапеция.</p>
                                        <img src="../../img-tasks/Задача 16.3 Дано 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">б)  Обозначим площадь параллелограмма S,
                                            а его острый угол – α. Угол между диагоналями NL и KM трапеции KLMN равен
                                            углу между перпендикулярными диагоналям прямыми BC и CD, то есть этот угол
                                            равен α.
                                            Поэтому площадь трапеции равна:
                                        </p>
                                        <img src="../../img-tasks/Задача 17.3 Дано 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 17.3 Дано 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Подставляя α = 60° и S = 16, получаем,
                                            что площадь трапеции равна
                                        </p>
                                        <img src="../../img-tasks/Задача 17.3 Дано 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: 6.
                                            </strong>
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
                                    <p class="container-solve-example-task">Точка E  — середина боковой стороны CD
                                        трапеции ABCD. На стороне AB взяли точку K, так, что прямые CK и AE параллельны.
                                        Отрезки CK и BE пересекаются в точке O.
                                    </p>
                                    <p class="container-solve-example-task">
                                        а)  Докажите, что CO  =  KO.
                                    </p>
                                    <p class="container-solve-example-task">
                                        б)  Найти отношение оснований трапеции BC и AD, если площадь треугольника BCK
                                        составляет <img src="../../img-tasks/Задача 17.4 Дано 1.png" alt=""
                                            class="example-dano"> площади трапеции ABCD.
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
                                        <img src="../../img-tasks/Задача 17.4 рисуунок 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">a)  Пусть BC ∩ AE = L, тогда
                                            треугольники
                                            AED и LEC равны, так как DE  =  CE, ∠AED = ∠LEC, ∠ADE = ∠LCE. Следовательно,
                                            BE  — медиана ABL. Далее, ΔABE ∼ ΔKBO,<img
                                                src="../../img-tasks/Задача 17.4 Дано 2.png" alt=""
                                                class="example-dano"> и ΔLBE ∼ ΔCBO с тем же коэффициентом
                                            подобия<img src="../../img-tasks/Задача 17.4 Дано 2.png" alt=""
                                                class="example-dano">. Тогда</p>
                                        <img src="../../img-tasks/Задача 17.4 Дано 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">б)  Поскольку ΔAED = ΔLEC,<img
                                                src="../../img-tasks/Задача 17.4 Дано 4.png" alt=""
                                                class="example-dano"> Далее,
                                            ΔKBC∼ΔABL. Значит,<img src="../../img-tasks/Задача 17.4 Дано 5.png" alt=""
                                                class="example-dano"> то есть<img
                                                src="../../img-tasks/Задача 17.4 Дано 6.png" alt=""
                                                class="example-dano"> Тогда
                                        </p>
                                        <img src="../../img-tasks/Задача 17.4 Дано 7.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: 3 : 7.</strong>
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
                                    <p class="container-solve-example-task">В треугольник ABC вписана окружность радиуса
                                        R, касающаяся стороны AC в точке M , причём AM  =  2R и CM  =  3R.
                                    </p>
                                    <p class="container-solve-example-task">
                                        а)  Докажите, что треугольник ABC прямоугольный.
                                    </p>
                                    <p class="container-solve-example-task">
                                        б)  Найдите расстояние между центрами его вписанной и описанной окружностей,
                                        если известно, что R  =  2 .
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
                                        <p class="container-solve-example-task">а)  Пусть вписанная окружность касается
                                            стороны BC в точке K. Обозначим BK  =  x. Пусть S  — площадь треугольника,
                                            p  — полупериметр. Тогда
                                        </p>
                                        <img src="../../img-tasks/Задача 17.5 Дано 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 17.5 Дано 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">С другой стороны, по формуле Герона
                                        </p>
                                        <img src="../../img-tasks/Задача 17.5 Дано 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 17.5 Дано 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Из уравнения <img
                                                src="../../img-tasks/Задача 17.5 Дано 5.png" alt=""
                                                class="example-dano"> получаем, что R  =  x.
                                            Стороны треугольника ABC равны 5R, 4R и 3R, следовательно, этот треугольник
                                            прямоугольный с прямым углом при вершине B.
                                        </p>
                                        <p class="container-solve-example-task">б)  Пусть I и O  — центры соответственно
                                            вписанной и описанной окружностей треугольника ABC. Точка O  — середина
                                            гипотенузы AC  =  5R  =  10, и OM  =  AO − AM  =  5 − 2R  =  1.
                                        </p>
                                        <p class="container-solve-example-task">Тогда
                                        </p>
                                        <img src="../../img-tasks/Задача 17.5 Дано 6.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: <img
                                                    src="../../img-tasks/Задача 17.5 Дано 7.png" alt=""
                                                    class="example-dano">
                                            </strong>
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