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
    <title>16. Сложные задачи прикладного характера</title>
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
                    <h1 class="catalog-heading">16. Сложные задачи прикладного характера</h1>
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
                                    <p class="container-solve-example-task">Антон взял кредит в банке на срок 6 месяцев.
                                        В конце каждого месяца общая сумма оставшегося долга увеличивается на одно и то
                                        же число процентов (месячную процентную ставку), а затем уменьшается на сумму,
                                        уплаченную Антоном. Суммы, выплачиваемые в конце каждого месяца, подбираются
                                        так, чтобы в результате сумма долга каждый месяц уменьшалась равномерно, то есть
                                        на одну и ту же величину. Общая сумма выплат превысила сумму кредита на 63%.
                                        Найдите месячную процентную ставку.
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
                                        <p class="container-solve-example-task">Пусть сумма кредита S у. е., процентная
                                            ставка банка x %.</p>
                                        <p class="container-solve-example-task">Предложение «Суммы, выплачиваемые в
                                            конце каждого месяца, подбираются так, чтобы в результате сумма долга каждый
                                            месяц уменьшалась равномерно, то есть на одну и ту же величину» означает:
                                            Антон взятую сумму возвращал в банк равными долями. Сумма, образованная
                                            применением процентной ставки, составляет:</p>
                                        <img src="../../img-tasks/Задача 16.1 Дано 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 16.1 Дано 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 16.1 Дано 3.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Общая сумма, выплаченная Антоном за 6
                                            месяцев: <img src="../../img-tasks/Задача 16.1 Дано 4.png" alt=""
                                                class="example-dano"> (у. е.). А эта сумма по условию задачи равна 1,63S
                                            у. е.
                                            Решим уравнение:</p>
                                        <img src="../../img-tasks/Задача 16.1 Дано 5.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 16.1 Дано 6.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ: 18.
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
                                    <p class="container-solve-example-task">Василий кладет в банк 1 000 000 рублей под
                                        10% годовых на 4 года (проценты начисляются один раз после истечения года) с
                                        правом докладывать три раза (в конце каждого года после начисления процентов) на
                                        счет фиксированную сумму 133 000 рублей. Какая максимальная сумма может быть на
                                        счете у Василия через 4 года?
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
                                        <p class="container-solve-example-task">Максимальная сумма на счетё будет в
                                            случае, если Василий все три раза воспользуется правом дополнительно внести
                                            133 000 рублей на счёт.
                                        </p>
                                        <p class="container-solve-example-task">1.  После первого года хранения вклада:
                                            Сумма вклада возрастает до 1 000 000 · 1,1  =  1 100 000 (руб.);
                                            Дополнительное пополнение счета 1 100 000 + 133 000  =  1 233 000 (руб.);
                                        </p>
                                        <p class="container-solve-example-task">2.  После второго года хранения вклада:
                                            Сумма вклада возрастает до 1 233 000 · 1,1  =  1 356 300 (руб.);
                                            Дополнительное пополнение счета 1 356 300 + 133000  =  1 489 300 (руб.);
                                        </p>
                                        <p class="container-solve-example-task">3.  После третьего года хранения вклада:
                                            Сумма вклада возрастает до 1 489 300 · 1,1  =  1 638 230 (руб.);
                                            Дополнительное пополнение счета 1 638 230 + 133 000  =  1 771 230 (руб.);
                                        </p>
                                        <p class="container-solve-example-task"> 4.  После четвертого года хранения
                                            вклада:
                                            Сумма вклада возрастает до 1 771 230 · 1,1  =  1 948 353 (руб.).
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong class="font-weight__normal">
                                                Ответ: 1 948 353 рубля.
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
                                    <p class="container-solve-example-task">Производство x тыс. единиц продукции
                                        обходится в q  =  0,5x2 + x + 7 млн руб. в год. При цене p тыс. руб. за единицу
                                        годовая прибыль от продажи этой продукции (в млн руб.) составляет px − q. При
                                        каком наименьшем значении p через три года суммарная прибыль составит не менее
                                        75 млн руб.?
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
                                        <p class="container-solve-example-task">Прибыль (в млн рублей) за один год
                                            выражается величиной</p>
                                        <img src="../../img-tasks/Задача 16.3 Дано 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Квадратный трехчлен с отрицательным
                                            старшим коэффициентом достигает наибольшего значения в точке <img
                                                src="../../img-tasks/Задача 16.3 Дано 2.png" alt=""
                                                class="example-dano"> Подставляя,
                                            находим, что наибольшее значение равно <img
                                                src="../../img-tasks/Задача 16.3 Дано 3.png" alt=""
                                                class="example-dano"> Прибыль составит не менее 75 млн
                                            руб., если</p>
                                        <img src="../../img-tasks/Задача 16.3 Дано 4.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 16.3 Дано 5.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">то есть при p ≥ 9, поскольку цена
                                            продукции не может быть отрицательной. Таким образом, наименьшее значение
                                            p  =  9, искомая наименьшая цена 9 тыс. руб.</p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: p  =  9.
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
                                    <p class="container-solve-example-task">15-го декабря планируется взять кредит в
                                        банке на 21 месяц. Условия возврата таковы:
                                        — 1-го числа каждого месяца долг возрастает на 3% по сравнению с концом
                                        предыдущего месяца;
                                        — со 2-го по 14-е число каждого месяца необходимо выплатить часть долга;
                                        — 15-го числа каждого месяца с 1-го по 20-й долг должен быть на 30 тысяч рублей
                                        меньше долга на 15-е число предыдущего месяца;
                                        — к 15-му числу 21-го месяца кредит должен быть полностью погашен.
                                        Какую сумму планируется взять в кредит, если общая сумма выплат после полного
                                        его погашения составит 1604 тысяч рублей?
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
                                        <p class="container-solve-example-task">Пусть сумма кредита A тысяч рублей. По
                                            условию, долг перед банком (в тыс. рублей) по состоянию на 15-е число должен
                                            уменьшаться до нуля следующим образом:
                                            А, А − 30, А − 60, ..., А − 570, А − 600, 0.</p>
                                        <p class="container-solve-example-task">Первого числа каждого месяца долг
                                            возрастает на 3%, значит, последовательность размеров долга (в тыс. рублей)
                                            по состоянию на 1-е число такова:
                                            1,03А, 1,03(А − 30), ..., 1,03(А − 570), 1,03(А − 600).
                                        </p>
                                        <p class="container-solve-example-task">Следовательно, выплаты (в тыс. рублей)
                                            должны быть следующими:
                                            0,03А + 30, 0,03(А − 30) + 30, ..., 0,03(А − 570) + 30,  1,03(А − 600).
                                            Всего следует выплатить
                                        </p>
                                        <img src="../../img-tasks/Задача 16.4 Дано 1.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Откуда
                                        </p>
                                        <img src="../../img-tasks/Задача 16.4 Дано 2.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="container-solve-example-task">Значит, сумма, которую планируется взять
                                            в кредит равна 1100 тыс. рублей.
                                        </p>
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: 1 100 000 рублей.</strong>
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
                                    <p class="container-solve-example-task">Фермер получил кредит в банке под
                                        определенный процент годовых. Через год фермер в счет погашения кредита вернул в
                                        банк <img src="../../img-tasks/Задача 16.5 Дано 1.png" alt=""
                                            class="example-dano"> от всей суммы, которую он должен банку к этому
                                        времени, а еще через год в
                                        счет полного погашения кредита он внес в банк сумму, на 21% превышающую величину
                                        полученного кредита. Каков процент годовых по кредиту в данном банке?
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
                                        <p class="container-solve-example-task">Пусть сумма кредита составляет S у. е.,
                                            а процентная ставка по кредиту x%. К концу первого года сумма долга фермера
                                            в
                                            банк с учетом начисленных процентов составила <img
                                                src="../../img-tasks/Задача 16.5 Дано 2.png" alt=""
                                                class="example-dano">
                                        <p class="container-solve-example-task">После возвращения банку <img
                                                src="../../img-tasks/Задача 16.5 Дано 1.png" alt=""
                                                class="example-dano"> части от суммы
                                            долга долг фермера на следующий год составил <img
                                                src="../../img-tasks/Задача 16.5 Дано 3.png" alt=""
                                                class="example-dano">

                                            На эту сумму в следующем году вновь начислены проценты. Сумма долга фермера
                                            к концу второго года погашения кредита с учетом процентной ставки составила
                                            <img src="../../img-tasks/Задача 16.5 Дано 4.png" alt=""
                                                class="example-dano">
                                            у. е. По условию задачи эта сумма равна 1,21S у. е.
                                            Решим уравнение <img src="../../img-tasks/Задача 16.5 Дано 4.png" alt=""
                                                class="example-dano">=1,21S на множестве положительных чисел.
                                        </p>
                                        <img src="../../img-tasks/Задача 16.5 Дано 5.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <img src="../../img-tasks/Задача 16.5 Дано 6.png" alt=""
                                            class="solve-tasks-item-formyla">
                                        <p class="solve-tasks-item-contant-text"><strong
                                                class="font-weight__normal">Ответ: 120%
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