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
    <title>19. Задачи на теорию чисел</title>
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
                            <li class="side-section__item"><a href=
                            in"
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
                    <h1 class="catalog-heading">19. Задачи на теорию чисел</h1>
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
                                    <p class="container-solve-example-task">Из первых 22 натуральных чисел 1, 2, ..., 22
                                        выбрали 2k различных чисел. Выбранные числа разбили на пары и посчитали суммы
                                        чисел в каждой паре. Оказалось, что все полученные суммы различны и не
                                        превосходят 27.
                                    </p>
                                    <p class="container-solve-example-task">а)  Может ли получиться так, что сумма всех
                                        2k выбранных чисел равняется 170 и в каждой паре одно из чисел ровно в три раза
                                        больше другого?
                                    </p>
                                    <p class="container-solve-example-task">б)  Может ли число k быть равным 11?
                                    </p>
                                    <p class="container-solve-example-task">в)  Найдите наибольшее возможное значение
                                        числа k.
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
                                        <p class="container-solve-example-task">а)  Если в каждой паре одно число втрое
                                            больше другого, то сумма чисел в каждой паре делится на 4. Значит, сумма
                                            всех выбранных чисел делится на 4. Число 170 не делится на 4, поэтому такого
                                            быть не может.
                                        </p>
                                        <p class="container-solve-example-task">б)  Если k = 11 то выбраны все 22 числа
                                            от 1 до
                                            22. Их сумма равна 253. С другой стороны, по условию суммы чисел в каждой
                                            паре различны и не превосходят 27. Значит, их сумма не превосходит 27 + 26
                                            +...+ 17 = 242
                                            Полученное противоречие показывает, что число k не может быть равным 11.
                                        </p>
                                        <p class="container-solve-example-task">в)  В предыдущем пункте было показано,
                                            что k не может равняться 11. Десять пар (13; 14), (11; 15), (9; 16),
                                            (7; 17), (5; 18), (3; 19), (1; 20), (2; 8), (4; 10), (6; 12) удовлетворяют
                                            всем условиям задачи. Значит, наибольшее возможное значение числа k  — это
                                            10.
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ: а) нет; б) нет; в) 10.
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
                                    <p class="container-solve-example-task">Участники одной школы писали тест.
                                        Результатом каждого ученика является целое неотрицательное число баллов. Ученик
                                        считается сдавшим тест, если он набрал не менее 73 баллов. Из-за того, что
                                        задания оказались слишком трудными, было принято решение всем участникам теста
                                        добавить по 5 баллов, благодаря чему количество сдавших тест увеличилось.
                                    </p>
                                    <p class="container-solve-example-task">а)  Могло ли оказаться так, что после этого
                                        средний балл участников, не сдавших тест, понизился?
                                    </p>
                                    <p class="container-solve-example-task">б)  Могло ли оказаться так, что после этого
                                        средний балл участников, сдавших тест, понизился, и средний балл участников, не
                                        сдавших тест, тоже понизился?
                                    </p>
                                    <p class="container-solve-example-task">в)  Известно, что первоначально средний балл
                                        участников теста составил 80, средний балл участников, сдавших тест, составил
                                        90, а средний балл участников, не сдавших тест, составил 65. После добавления
                                        баллов средний балл участников, сдавших тест, стал равен 93, а не сдавших  — 69.
                                        При каком наименьшем числе участников теста возможна такая ситуация?
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
                                        <p class="container-solve-example-task">а)  Пусть было 3 участника, которые
                                            набрали 90, 72 и 2 балла. Средний балл участников, не сдавших тест <img
                                                src="../../img-tasks/Задача 19.2 Дано 1.png" alt=""
                                                class="example-dano"> балла.
                                            После добавления баллов у участников оказалось 95, 77 и 7 баллов. Средний
                                            балл участников, не сдавших тест, составил 7 баллов.
                                        </p>
                                        <p class="container-solve-example-task">б)  В примере предыдущего пункта средний
                                            балл участников теста, сдавших тест, первоначально составлял 90 баллов, а
                                            после добавления баллов составил <img
                                                src="../../img-tasks/Задача 19.2 Дано 2.png" alt=""
                                                class="example-dano">= 86 баллов.
                                        </p>
                                        <p class="container-solve-example-task">в)  Пусть всего было N участников теста,
                                            сдали тест a участников, после добавления баллов сдали тест b участников.
                                            Заметим, что средний балл после добавления составил 85. Имеем два уравнения:
                                            80N  =  65(N − a) + 90a и 85N  =  69(N − b) + 93b, откуда 15N = 25a, то есть
                                            3N = 5a, и 16N = 24b, то есть 2N = 3b. Поэтому целое число N делится на 5 и
                                            на 3, то есть делится на 15. Таким образом, N ≥ 15.

                                            Покажем, что N могло равняться 15. Пусть изначально 5 участников набрали по
                                            64 балла, 1 участник  — 70 баллов и 9 участников по 90 баллов. Тогда средний
                                            балл был равен 80, средний балл участников, сдавших тест, был равен 90, а
                                            средний балл участников, не сдавших тест, был равен 65. После добавления
                                            средний балл участников, сдавших тест, стал равен 93, средний балл
                                            участников, не сдавших тест, стал равен 69. Таким образом, все условия
                                            выполнены.
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ: а) да; б) да; в) 15.
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
                                    <p class="container-solve-example-task">Вася и Петя решали задачи из сборника, и они
                                        оба решили все задачи этого сборника. Каждый день Вася решал на одну задачу
                                        больше, чем в предыдущий день, а Петя решал на две задачи больше, чем в
                                        предыдущий день. Они начали решать задачи в один день, при этом в первый день
                                        каждый из них решил хотя бы одну задачу.
                                    </p>
                                    <p class="container-solve-example-task">а)  Могло ли получиться так, что Вася в
                                        первый день решил на одну задачу меньше, чем Петя, а Петя решил все задачи из
                                        сборника ровно за 5 дней?
                                    </p>
                                    <p class="container-solve-example-task">б)  Могло ли получиться так, что Вася в
                                        первый день решил на одну задачу больше, чем Петя, а Петя решил все задачи из
                                        сборника ровно за 4 дня?
                                    </p>
                                    <p class="container-solve-example-task">в)  Какое наименьшее количество задач могло
                                        быть в сборнике если каждый из ребят решал задачи более 6 дней, причем в первый
                                        день один из мальчиков решил на одну задачу больше чем другой?
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
                                        <p class="container-solve-example-task">а)  Пусть Петя в первый день решил x
                                            задач. Тогда в оставшиеся дни он решил x + 2, x + 4, x + 6, x + 8 задач.
                                            Всего в сборнике оказывается 5x + 20 задач. Вася в первый день решил x – 1
                                            задачу. В следующие дни он решал x, x + 1, x + 2, x + 3, x + 4, ... задач.
                                            За пять дней решить все задачи Вася не мог. Если Вася решил все задачи
                                            сборника за шесть дней, то он решил 6x + 9 задач. Уравнение 5x + 20 = 6x + 9
                                            имеет решение x = 11. Тем самым приведен пример, удовлетворяющий условию:
                                            Вася решил в первый день 10 задач, Петя  — 11 задач.</p>
                                        <p class="container-solve-example-task">б)  Вновь обозначим за x число задач,
                                            решенных Петей в первый день. Тогда всего Петя решил 4x + 12 задач. Вася
                                            решал x + 1, x + 2, x + 3, x + 4, x + 5, ... задач. Если Вася решил все
                                            задачи сборника за четыре дня или менее, то он решил не более 4x + 10 задач.
                                            Но тогда Вася решил меньше задач, чем Петя. Противоречие. Если Вася решал
                                            задачи пять дней или более, то он решил как минимум 5x + 15 задач. Тогда
                                            Вася решил больше задач, чем Петя. Противоречие.
                                        </p>
                                        <p class="container-solve-example-task">в)  Петя решал задачи не менее семи
                                            дней. Начнем со случая, когда он решал задачи ровно семь дней.
                                        </p>
                                        <p class="container-solve-example-task">Тогда в сборнике оказывается 7x + 42
                                            задачи. Если Вася решил в первый день
                                            на одну задачу больше, чем Петя, то за семь дней он решил 7x + 28 задач.
                                            Следовательно, Вася решал задачи более семи дней. За восемь дней он бы решил
                                            8x + 36 задач. Уравнение 7x + 42 = 8x + 36 имеет решение x = 6. За девять
                                            или более дней Вася бы решил как минимум 9x + 45 задач, что превосходит
                                            число задач в сборнике. Если Вася в первый день решил на одну задачу меньше,
                                            чем Петя, то вновь ему, очевидно, придется решать задачи более семи дней. За
                                            восемь дней он бы решил 8x + 20 задач, за девять дней 9x + 27 задач, за
                                            десять дней 10x + 35 задач, за большее число дней как минимум 11x + 44
                                            задачи (что заведомо больше числа задач в сборнике). Уравнения 7x + 42 = 8x
                                            + 20, 7x + 42 = 9x + 27, 7x + 42 = 10x + 35 не имеют целых решений, меньших
                                            6.
                                        </p>
                                        <p class="container-solve-example-task"> Тем самым, в случае, когда Петя решал
                                            задачи ровно семь дней, в сборнике не
                                            могло оказаться меньше 7x + 42 = 7 ⋅ 6 + 42 = 84 задач (напомним, что такое
                                            могло быть, если Петя
                                            решил в первый день 6 задач, а Вася 7, Петя решал задачи 7 дней, а Вася 8).
                                        </p>
                                        <p class="container-solve-example-task">
                                            Перейдем к случаям, когда Петя решал задачи более семи дней. Перечислим
                                            всевозможные значения, которые может принимать сумма 1 + 2 + ... + n: это 1,
                                            3, 6, 10, 15, 21, 28, 36, 45, 55, 66, 78, 91, ... (так называемые
                                            «треугольные числа»).

                                        </p>
                                        <p class="container-solve-example-task"> Если Петя решил весь сборник за 8 дней,
                                            то он решил 8x + 56 задач. Нас
                                            интересует, может ли это число быть меньше 84. Необходимо проверить x = 1, x
                                            = 2, x = 3.
                                        </p>
                                        <p class="container-solve-example-task"> При x = 1 задач в сборнике 8 ⋅ 1 + 56 =
                                            64. Вася в первый день решил 2
                                            задачи, то есть всего
                                            Вася решил 2 + 3 + 4 + 5 + ... задач. Следовательно, 64 должно быть меньше
                                            треугольного числа на 1. Противоречие.
                                        </p>
                                        <p class="container-solve-example-task"> При x = 2 задач в сборнике 8 ⋅ 2 + 56 =
                                            72. Вася в первый день решил или 1
                                            задачу, или 3
                                            задачи. Следовательно, 72 должно или совпадать с треугольным числом, либо
                                            быть меньше него на 1 + 2  =  3. Противоречие.
                                        <p class="container-solve-example-task"> При x = 3 задач в сборнике 8 ⋅ 3 + 56 =
                                            80. Вася в первый день решил или 2,
                                            или 4 задачи.
                                            Следовательно, 80 должно быть меньше треугольного числа или на 1, или на
                                            1 + 2 + 3  =  6. Противоречие.
                                        </p>
                                        <p class="container-solve-example-task"> Если же Петя решил весь сборник за 9
                                            дней, то он решил 9x + 72 задач.
                                            Единственная подходящая возможность, чтобы задач в сборнике было меньше 84,
                                            это x = 1. Но тогда в сборнике 81 задача. В первый день Вася решил 2 задачи.
                                            Следовательно, 81 должно быть на 1 меньше треугольного числа. Противоречие.

                                            Если Петя решал сборник более 9 дней, то он решил как минимум 10x + 90
                                            задач, что заведомо больше 84.
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: а) да; б) нет; в) 84.
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
                                    <p class="container-solve-example-task">Можно ли из последовательности 1, 1/2, 1/3,
                                        1/4,… выделить арифметическую прогрессию
                                    </p>
                                    <p class="container-solve-example-task">
                                        а)  длиной 4
                                    </p>
                                    <p class="container-solve-example-task">
                                        б)  длиной 5
                                    </p>
                                    <p class="container-solve-example-task">
                                        в)  длиной k, где k  — любое натуральное число?
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
                                        <p class="container-solve-example-task">а)  Например, годится такая прогрессия:
                                            <img src="../../img-tasks/Задача 19.4 Дано 1.png" alt=""
                                                class="example-dano">
                                        </p>
                                        <p class="container-solve-example-task">б)  Например, годится такая прогрессия:
                                            <img src="../../img-tasks/Задача 19.4 Дано 2.png" alt=""
                                                class="example-dano">
                                        </p>
                                        <p class="container-solve-example-task">в)  Ясно, что последовательность <img
                                                src="../../img-tasks/Задача 19.4 Дано 3.png" alt=""
                                                class="example-dano">
                                            является арифметической прогрессией с разностью <img
                                                src="../../img-tasks/Задача 19.4 Дано 4.png" alt=""
                                                class="example-dano"> Кроме того, каждый член
                                            такой последовательности можно сократить так, чтобы в числителе была
                                            единица. Значит, все они являются членами исходной последовательности.
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
                                    <p class="container-solve-example-task">Множество чисел назовём хорошим, если его
                                        можно разбить на два подмножества с одинаковой суммой чисел.
                                    </p>
                                    <p class="container-solve-example-task">
                                        а)  Является ли множество {100; 101; 102; ...; 199} хорошим?
                                    </p>
                                    <p class="container-solve-example-task">
                                        б)  Является ли множество {2; 4; 8; ...; 2<sup>200</sup> } хорошим?
                                    </p>
                                    <p class="container-solve-example-task">
                                        в)  Сколько хороших четырёхэлементных подмножеств у множества {3; 4; 5; 6; 8;
                                        10; 12}?
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
                                        <p class="container-solve-example-task">а)  Разобьём множество {100, 101, 102,
                                            ..., 199} на два множества пятидесятиэлементных множества следующим образом:
                                            {100, 199, 102, 197, 104, 195, ..., 148, 151},
                                            {101; 198; 103; 196; 105, 194, ..., 149, 150}.
                                            Сумма чисел в этих двух подмножествах одинакова, поэтому исходное множество
                                            является хорошим. (Возможны и другие примеры.)
                                        </p>
                                        <p class="container-solve-example-task">б)  Заметим, сумма чисел в подмножестве,
                                            которое будет содержать число 2<sup>200</sup> будет больше суммы чисел в
                                            другом
                                            подмножестве, поскольку 2<sup>200</sup> больше суммы всех остальных чисел:
                                        </p>
                                        <img src="../../img-tasks/Задача 19.5 Дано 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">
                                            Следовательно, множество {2; 4; 8; ...; 2<sup>200</sup>} не является
                                            хорошим.
                                        </p>
                                        <p class="container-solve-example-task">в)  Заметим, что четырёхэлементное
                                            множество является хорошим в двух случаях: либо одно число является суммой
                                            трёх других, либо множество содержит две пары чисел с равными суммами.
                                        </p>
                                        <p class="container-solve-example-task"> Единственное подмножество множества {3;
                                            4; 5; 6; 8; 10; 12}, удовлетворяющее
                                            первому случаю,  — это {3; 4; 5; 12}. Других вариантов нет, поскольку сумма
                                            трёх чисел, отличных от 3, 4 и 5, будет больше 12.
                                        </p>
                                        <p class="container-solve-example-task"> Рассмотрим второй случай и заметим, что
                                            если множество содержит две пары
                                            чисел с равными суммами, то сумма всех чисел чётна. Следовательно, нечетные
                                            числа 3 и 5 либо одновременно входят в хорошее четырёхэлементное
                                            подмножество, либо одновременно не входят в него.
                                        </p>
                                        <p class="container-solve-example-task">Если 3 и 5 входят в подмножество, то
                                            либо сумма двух других чисел равна 8
                                            (что невозможно), либо разность двух других чисел равна 2. Получаем хорошие
                                            подмножества:
                                            {3; 4; 5; 6}; {3; 5; 6; 8}; {3; 5; 8; 10}; {3; 5; 10; 12}.
                                        </p>
                                        <p class="container-solve-example-task">Если 3 и 5 не входят в подмножество, то
                                            хорошее подмножество лежит во
                                            множестве {4; 6; 8; 10; 12}. Получаем хорошие подмножества:
                                            {4; 6; 8; 10}; {4; 6; 10; 12}; {6; 8; 10; 12}.
                                        </p>
                                        <p class="container-solve-example-task">
                                            Всего найдено 8 хороших подмножеств: {3; 4; 5; 12}, {3; 4; 5; 6}; {3; 5; 6;
                                            8}; {3; 5; 8; 10}; {3; 5; 10; 12}, {4; 6; 8; 10}; {4; 6; 10; 12}; {6; 8; 10;
                                            12}. Других вариантов нет.
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: а) да; б) нет; в) 8.
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