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
    <title>Каталог заданий ЕГЭ 2024</title>
    <?php
    require_once __DIR__ . '/../../php/reg-auth/config.php';
    require_once __DIR__ . '/../../php/reg-auth/auth-check.php';
    ?> 
</head>

<body>
    <div class="wrapper">
        <div class="body-content">
            <section class="body-content__section main-section">
                <div class="side-section">
                    <div class="side-section__button-back"></div>
                    <div class="side-section__main-text">
                        <div class="menu-logo">
                            <a href="../../index.php" class="logo-olimpys"></a>
                        </div>
                        <ul class="side-section__list">
                            <li class="side-section__item"><a href="../catalog-page.php?page=math&type=ege&sec=vid&lvl=main"
                                    class="side-section__link">Видеоуроки</a>
                            </li>
                            <li class="side-section__item"><a
                                    href="../catalog-ege-math-2024-tasks/catalog-ege-math-tasks.php"
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
                    <h1 class="catalog-heading">Каталог заданий</h1>
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
            <div class="catalog-container-tasks">
                <div class="catalog-title-tasks">
                    <spant class="catalog-title-tasks-text">Задания по темам:</span>
                </div>
                <div class="catalog-tasks-list">
                    <div class="catalog-tasks-list-content-first">
                        <div class="catalog-tasks-list-left">
                            <div class="catalog-tasks-list-left-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-01-planik.php" class="link-left-tasks">01.
                                    Геометрия на плоскости (планиметрия)</a></div>
                        </div>
                        <div class="catalog-tasks-list-left">
                            <div class="catalog-tasks-list-left-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-02-vectors.php"
                                    class="link-left-tasks">02. Задачи на
                                    векторы</a></div>
                        </div>
                        <div class="catalog-tasks-list-left">
                            <div class="catalog-tasks-list-left-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-03-cterioma.php"
                                    class="link-left-tasks">03. Геометрия
                                    в
                                    пространстве (стереометрия)</a></div>
                        </div>
                        <div class="catalog-tasks-list-left">
                            <div class="catalog-tasks-list-left-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-04-teori-veroatnoct.php"
                                    class="link-left-tasks">04. Введение в
                                    теорию вероятностей</a></div>
                        </div>
                        <div class="catalog-tasks-list-left">
                            <div class="catalog-tasks-list-left-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-05-teori-veroatnoct.php"
                                    class="link-left-tasks">05. Задачи на
                                    теорию вероятностей</a></div>
                        </div>
                        <div class="catalog-tasks-list-left">
                            <div class="catalog-tasks-list-left-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-06-yravneni.php"
                                    class="link-left-tasks">06. Решение
                                    уравнений</a></div>
                        </div>
                        <div class="catalog-tasks-list-left">
                            <div class="catalog-tasks-list-left-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-07-word-number.php"
                                    class="link-left-tasks">07.
                                    Преобразование числовых и буквенных выражений</a></div>
                        </div>
                        <div class="catalog-tasks-list-left">
                            <div class="catalog-tasks-list-left-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-08-proizvodna.php"
                                    class="link-left-tasks">08.
                                    Взаимосвязь
                                    функции и ее производной</a></div>
                        </div>
                        <div class="catalog-tasks-list-left">
                            <div class="catalog-tasks-list-left-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-09-priklad-xarakter.php"
                                    class="link-left-tasks">09. Задачи
                                    прикладного характера</a></div>
                        </div>
                        <div class="catalog-tasks-list-left">
                            <div class="catalog-tasks-list-left-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-10-cizet-zadacha.php"
                                    class="link-left-tasks">10. Сюжетные
                                    текстовые задачи</a></div>
                        </div>
                    </div>
                    <div class="catalog-tasks-list-content-second">
                        <div class="catalog-tasks-list-right">
                            <div class="catalog-tasks-list-right-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-11-grafik-fynksi.php"
                                    class="link-right-tasks">11. Задачи
                                    на свойства графиков функций</a></div>
                        </div>
                        <div class="catalog-tasks-list-right">
                            <div class="catalog-tasks-list-right-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-12-ucledovanie-fynksi.php"
                                    class="link-right-tasks">12.
                                    Исследование функций с помощью производной</a></div>
                        </div>
                        <div class="catalog-tasks-list-right">
                            <div class="catalog-tasks-list-right-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-13-reshenie-yravneni.php"
                                    class="link-right-tasks">13. Решение
                                    уравнений</a></div>
                        </div>
                        <div class="catalog-tasks-list-right">
                            <div class="catalog-tasks-list-right-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-14-ctereoma.php"
                                    class="link-right-tasks">14. Задачи
                                    по стереометрии</a></div>
                        </div>
                        <div class="catalog-tasks-list-right">
                            <div class="catalog-tasks-list-right-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-15-neravenctva.php"
                                    class="link-right-tasks">15. Решение
                                    неравенств</a></div>
                        </div>
                        <div class="catalog-tasks-list-right">
                            <div class="catalog-tasks-list-right-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-16-priklad-xarakter.php"
                                    class="link-right-tasks">16. Сложные
                                    задачи прикладного характера</a></div>
                        </div>
                        <div class="catalog-tasks-list-right">
                            <div class="catalog-tasks-list-right-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-17-planik-hard.php"
                                    class="link-right-tasks">17. Задачи
                                    по планиметрии</a></div>
                        </div>
                        <div class="catalog-tasks-list-right">
                            <div class="catalog-tasks-list-right-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-18-parametr.php"
                                    class="link-right-tasks">18. Задачи с
                                    параметром</a></div>
                        </div>
                        <div class="catalog-tasks-list-right">
                            <div class="catalog-tasks-list-right-title"><a
                                    href="../catalog-ege-math-2024-tasks/num-19-teori-chicel.php"
                                    class="link-right-tasks">19. Задачи
                                    на теорию чисел</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../../js/catalog.js"></script>
</body>

</html>