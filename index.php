<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="keywords" content="репетитор, егэ, репетитор по математике, олимпус, репетитор онлайн">
    <meta name="description" content="Подготовка к ЕГЭ, ОГЭ и Олимпиадам. Онлайн курсы и индивидуальные занятия.">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="/img/main-icon.png">
    <title>Olimpus - школа репетиторов</title>
    <?php
        require_once __DIR__ . '/php/reg-auth/config.php';
    ?>
</head>

<body <?php echo (isset($_GET['reg']))?'class="no-scrol"':'' ?>>
    <div class="wraper">
        <header class="header">
            <div class="header__container _container">
                <a href="#" class="header__logo logo nav-link">
                    <img src="./img/logo-rus-short.png" alt="Logo" class="header__logo-img">
                </a>
                <nav class="header__menu menu">
                    <ul class="menu__list">
                        <li class="menu__item">
                            <span class="catalog-btn">Каталог</span>

                            <div class="click-close"></div>

                            <div class="menu__catalog-menu catalog-menu">
                                <div class="catalog-menu__rectangle"></div>
                                <ul class="catalog-menu__sections">
                                    <li class="catalog-menu__sections-item active" data-path="p1">ОГЭ</li>
                                    <li class="catalog-menu__sections-item" data-path="p2">ЕГЭ</li>
                                    <li class="catalog-menu__sections-item" data-path="p3">ДВИ</li>
                                    <li class="catalog-menu__sections-item" data-path="p4">Другое</li>
                                </ul>
                                <div class="catalog-menu__content active" data-target="p1">
                                    <ul class="catalog-menu__subjecst-list">
                                        <li class="catalog-menu__subject"><a href="./pages/catalog-page.php?page=math&type=oge&sec=vid&lvl=main"
                                                class="catalog-menu__subject-link">Математика</a></li>
                                        <li class="catalog-menu__subject"><a href="./pages/catalog-page.php?page=fiz&type=oge&sec=vid&lvl=main"
                                                class="catalog-menu__subject-link">Физика</a></li>
                                        <li class="catalog-menu__subject"><a href="./pages/catalog-page.php?page=him&type=oge&sec=vid&lvl=main"
                                                class="catalog-menu__subject-link">Химия</a></li>
                                    </ul>
                                </div>
                                <div class="catalog-menu__content" data-target="p2">
                                    <ul class="catalog-menu__subjecst-list">
                                        <li class="catalog-menu__subject"><a
                                                href="./pages/catalog-page.php?page=math&type=ege&sec=vid&lvl=main"
                                                class="catalog-menu__subject-link">Математика</a></li>
                                        <li class="catalog-menu__subject"><a
                                                href="./pages/catalog-page.php?page=fiz&type=ege&sec=vid&lvl=main"
                                                class="catalog-menu__subject-link">Физика</a></li>
                                        <li class="catalog-menu__subject"><a
                                                href="./pages/catalog-page.php?page=him&type=ege&sec=vid&lvl=main"
                                                class="catalog-menu__subject-link">Химия</a></li>
                                        <li class="catalog-menu__subject"><a
                                                href="./pages/catalog-page.php?page=inf&type=ege&sec=vid&lvl=main"
                                                class="catalog-menu__subject-link">Информатика</a></li>
                                    </ul>
                                </div>
                                <div class="catalog-menu__content" data-target="p3">
                                    <ul class="catalog-menu__subjecst-list">
                                        <li class="catalog-menu__subject"><a href="./pages/catalog-page.php?page=math&type=dvi&sec=vid&lvl=main"
                                                class="catalog-menu__subject-link">Математика</a></li>
                                        <li class="catalog-menu__subject"><a href="./pages/catalog-page.php?page=fiz&type=dvi&sec=vid&lvl=main"
                                                class="catalog-menu__subject-link">Физика</a></li>
                                        <li class="catalog-menu__subject"><a href="./pages/catalog-page.php?page=him&type=dvi&sec=vid&lvl=main"
                                                class="catalog-menu__subject-link">Химия</a></li>
                                    </ul>
                                </div>
                                <div class="catalog-menu__content" data-target="p4">
                                    <ul class="catalog-menu__subjecst-list">
                                        <li class="catalog-menu__subject"><a href="./pages/catalog-page.php?page=math&type=other&sec=vid&lvl=main"
                                                class="catalog-menu__subject-link">Математика</a></li>
                                        <li class="catalog-menu__subject"><a href="./pages/catalog-page.php?page=fiz&type=other&sec=vid&lvl=main"
                                                class="catalog-menu__subject-link">Физика</a></li>
                                        <li class="catalog-menu__subject"><a href="./pages/catalog-page.php?page=him&type=other&sec=vid&lvl=main"
                                                class="catalog-menu__subject-link">Химия</a></li>

                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="menu__item">
                            <a href="#about" class="menu__link nav-link">О нас</a>
                        </li>
                        <li class="menu__item">
                            <a href="#courses" class="menu__link nav-link">Приобрести курс</a>
                        </li>
                        <li class="menu__item">
                            <a href="#tutors" class="menu__link nav-link">Наши преподаватели</a>
                        </li>
                        <li class="menu__item">
                            <a href="#exumples" class="menu__link nav-link">Как проходит обучение</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__right">
                    <div class="header__contact">

                        <a href="https://web.telegram.org/k/#@FAU_Teach" target="_blank" class="header__number">Задать
                            вопрос</a>
                        <span class="header__order-call">Заказать обратный звонок</span>
                    </div>
                    <button class="header__call-btn call-btn"></button>
                    <button class="header__login-btn login-btn <?php echo isset($_SESSION['auth'])?' hidden': ''; ?>">Войти</button>
                    <button class="header__burger burger"></button>
                </div>
            </div>

        </header>

        <nav class="left-menu">
            <div class="left-menu__btn-wrapper">
                <button class="left-menu__btn"></button>
                <button class="left-menu__login-btn login-btn">Войти</button>
            </div>
            <strong class="left-menu__heading">Выберите раздел</strong>
            <ul class="left-menu__list">

                <li class="left-menu__item">
                    <div class="left-menu__catalog catalog-acordion">
                        <div data-tab="acord-ege" class="catalog-acordion__title">
                            <strong class="catalog-acordion__title-text">ЕГЭ</strong><span
                                class="catalog-acordion__title-icon"></span>
                        </div>
                        <div id="acord-ege" class="catalog-acordion__content acordion-content">
                            <ul class="acordion-content__list">
                                <li class="acordion-content__item"><a
                                        href="./pages/catalog-page.php?page=math&type=ege&sec=vid&lvl=main"
                                        class="acordion-content__link">Математика</a></li>
                                <li class="acordion-content__item"><a
                                        href="./pages/catalog-page.php?page=fiz&type=ege&sec=vid&lvl=main"
                                        class="acordion-content__link">Физика</a></li>
                                <li class="acordion-content__item"><a
                                        href="./pages/catalog-page.php?page=fim&type=ege&sec=vid&lvl=main"
                                        class="acordion-content__link">Химия</a>
                                </li>
                                <li class="acordion-content__item"><a
                                        href="./pages/catalog-page.php?page=inf&type=ege&sec=vid&lvl=main"
                                        class="acordion-content__link">Информатика</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="left-menu__item">
                    <div class="left-menu__catalog catalog-acordion">
                        <div data-tab="acord-oge" class="catalog-acordion__title">
                            <strong class="catalog-acordion__title-text">ОГЭ</strong><span
                                class="catalog-acordion__title-icon"></span>
                        </div>
                        <div id="acord-oge" class="catalog-acordion__content acordion-content">
                            <ul class="acordion-content__list">
                                <li class="acordion-content__item"><a href="./pages/catalog-page.php?page=math&type=oge&sec=vid&lvl=main"
                                        class="acordion-content__link">Математика</a></li>
                                <li class="acordion-content__item"><a href="./pages/catalog-page.php?page=fiz&type=oge&sec=vid&lvl=main" class="acordion-content__link">Физика</a>
                                </li>
                                <li class="acordion-content__item"><a href="./pages/catalog-page.php?page=him&type=oge&sec=vid&lvl=main" class="acordion-content__link">Химия</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="left-menu__item">
                    <div class="left-menu__catalog catalog-acordion">
                        <div data-tab="acord-dvi" class="catalog-acordion__title">
                            <strong class="catalog-acordion__title-text">ДВИ</strong><span
                                class="catalog-acordion__title-icon"></span>
                        </div>
                        <div id="acord-dvi" class="catalog-acordion__content acordion-content">
                            <ul class="acordion-content__list">
                                <li class="acordion-content__item"><a href="./pages/catalog-page.php?page=math&type=dvi&sec=vid&lvl=main"
                                        class="acordion-content__link">Математика</a></li>
                                <li class="acordion-content__item"><a href="./pages/catalog-page.php?page=fiz&type=dvi&sec=vid&lvl=main" class="acordion-content__link">Физика</a>
                                </li>
                                <li class="acordion-content__item"><a href="./pages/catalog-page.php?page=him&type=dvi&sec=vid&lvl=main" class="acordion-content__link">Химия</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </li>

                <li class="left-menu__item"><a href="#about" class="left-menu__link nav-link text-center">О нас</a></li>
                <li class="left-menu__item"><a href="#courses" class="left-menu__link nav-link text-center">Приобрести
                        курс</a></li>
                <li class="left-menu__item"><a href="#tutors" class="left-menu__link nav-link text-center">Наши
                        преподаватели</a></li>
                <li class="left-menu__item"><a href="#exumples" class="left-menu__link nav-link text-center">Как
                        проходит обучение</a></li>


            </ul>
        </nav>
        <div class="menu-overlay <?php echo (isset($_GET['reg']))?' menu-overlay-active':'' ?>"></div>

        <div class="_modal-wraper call-back-wraper">
            <div class="call-back">
                <div class="call-back__content modal-content">
                    <img src="./img/3d-call.webp" alt="call-img" class="call-back__img modal-img">
                    <strong class="call-back__heading modal-heading">получить коснсультацию</strong>
                    <p class="call-back__description">оставьте свой номер телефона и мы свжемся с вами в течение 5 минут
                        (с 10:00 до 19:00)</p>

                    <form action="php/sendmail.php" method="post" id="call-back-form"
                        class="call-back__form modal-form">
                        <input type="text" name="name" placeholder="Ваше имя"
                            class="call-back__text-input modal-input _req ">
                        <div class="call-back__number-input number-input">
                            <div class="number-input__country-sign">+7</div>
                            <input type="tel" name="number" id="phone" placeholder="Номер телефона"
                                class="number-input__feald modal-input _req">

                        </div>
                        <button type="submit" class="call-back__submit-btn modal-btn">отправить</button>
                    </form>
                    <div class="call-back__agreements">
                        <span>Нажимая «отправить», даете свое соглашение на </span><a href="#" target="_blank"
                            class="link-underline">обработку персональных данных</a>
                    </div>
                </div>
            </div>
            <div class="modal-close"></div>
        </div>

        <?php
            include ('php/reg-auth/render.php'); 
         ?>

        <div class="main">
            <section class="hero">
                <div class="_container hero__container">
                    <div class="hero__left hero-left hero__card">
                        <div class="hero-left__text">Мы готовим школьников к ЕГЭ и ОГЭ. Наша цель - помочь вам достичь высоких баллов и поступить в сильные вузы.</div>
                        <div class="hero-left__buttons">
                            <a href="#courses" class="hero-left__btn nav-link">Начать обучение</a>
                            <button class="hero-left__btn hero__consult">Задать вопрос</button>
                        </div>
                    </div>
                    <div class="hero__right hero-right hero__card">
                        <div class="hero-right__img-container">
                            <img src="img/logo-icon.png" alt="logo" class="hero-right__img">
                        </div>
                        <div class="hero-right__slogan">Покоряйте экзамены <br class="hero-right__slogan-break"> с Олимпус!</div>
                    </div>
                </div>
            </section>

            <section class="exumples" id="exumples">
                <div class="_container exumples__container">
                    <h2 class="exumples__heading section-heading">Примеры наших уроков</h2>
                    <p class="exumples__description">
                        Здесь мы выкладываем самые свежие видео с нашего <a
                            href="https://www.youtube.com/@olympus_school" class="exumples__youtube-link">YouTube
                            канала</a>, на котором мы размещаем некоторые
                        актуальные уроки из наших курсов.
                    </p>

                    <div class="swiper swiper_1 swiper-horizontal swiper-grid swiper-grid-column swiper-backface-hidden">
                        <!-- Additional required wrapper -->
                        <div class="swiper-wrapper">
                            <div class="swiper-slide exumples__sw">
                            <iframe src="https://www.youtube.com/embed/ErawsEXg5uY" class="exumples__video"
                                        title="YouTube video player" frameborder="1"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="swiper-slide exumples__sw">
                                <iframe src="https://www.youtube.com/embed/e8o4g8bGRhQ" class="exumples__video"
                                            title="YouTube video player" frameborder="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen
                                            loading="lazy"></iframe>
                            </div>
                            <div class="swiper-slide exumples__sw">
                                <iframe src="https://www.youtube.com/embed/1_pPtipSAlw" class="exumples__video"
                                            title="Секретная формула для решения самых сложных задач первой части ЕГЭ по математике"
                                            frameborder="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen
                                            loading="lazy"></iframe>
                            </div>
                            <div class="swiper-slide exumples__sw">
                                <iframe src="https://www.youtube.com/embed/7BP7VTSaytE" class="exumples__video"
                                            title="Алгоритм решения 12 номеров на ЕГЭ по профильной математике" frameborder="1"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen
                                            loading="lazy"></iframe>
                            </div>
                            <div class="swiper-slide exumples__sw">
                                <iframe src="https://www.youtube.com/embed/IVMpEeo1ks0" class="exumples__video"
                                        title="Гроб в номере 10 на ЕГЭ по профильной математике?!" frameborder="1"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen
                                        loading="lazy"></iframe>
                            </div>
                            <div class="swiper-slide exumples__sw">
                                <iframe src="https://www.youtube.com/embed/YF9eI_TJ2X8" class="exumples__video"
                                        title="Самая сложная тема в 10 номере ЕГЭ по математике! Проценты" frameborder="1"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen
                                        loading="lazy"></iframe>
                            </div>
                            <div class="swiper-slide exumples__sw">
                                <iframe src="https://www.youtube.com/embed/zykfF42sSiI" class="exumples__video"
                                        title="Всё про логарифмы за 15 минут!" frameborder="1"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen
                                        loading="lazy"></iframe>
                            </div>
                            <div class="swiper-slide exumples__sw">
                                <iframe src="https://www.youtube.com/embed/8XD3Bgz3S-Y" class="exumples__video"
                                        title="Основы МКТ для ЕГЭ по физике за один вебинар!" frameborder="1"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                            </div>
                            <div class="swiper-slide exumples__sw">
                                <iframe src="https://www.youtube.com/embed/rPrFb-Aa7cw" class="exumples__video"
                                        title="19 номер на ЕГЭ по профильной математике. Составление уравнений"
                                        frameborder="1"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen
                                        loading="lazy"></iframe>
                            </div>
                            <div class="swiper-slide exumples__sw">
                                <iframe src="https://www.youtube.com/embed/JgXrpIlRlw4" class="exumples__video"
                                        title="Разбор 5 варианта из сборника ЕГЭ Демидовой по физике" frameborder="1"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen
                                        loading="lazy"></iframe>
                            </div>
                        </div>
                        <!-- If we need pagination -->
                        <div class="swiper-pagination exumples__sw"></div>

                        <!-- If we need navigation buttons -->
                        <div class="swiper-button-prev exumples__sw"></div>
                        <div class="swiper-button-next exumples__sw"></div>

                    </div>

                    <!-- <div class="exumples__video-container"></div> -->
                </div>
            </section>

            <section class="about" id="about">
                <div class="_container about__container">
                    <div class="about__content">
                        <h2 class="about__heading section-heading">О нас</h2>
                        <p class="about__description">Мы молодая онлайн школа по подготовке к ЕГЭ, ОГЭ и олимпиадам,
                            которая только начинает свой путь. Несмотря на это, мы собрали преподавателей, имеющих опыт
                            в подготоке к экзаменам и олимпиадам как онлайн, так и офлайн, а также успешные результаты
                            своих учеников, которые ответсвенно подходят ко всему процессу вашего образования.</p>
                    </div>
                </div>
            </section>

            <section class="courses" id="courses">
                <div class="_container courses__container">
                    <h2 class="courses__heading section-heading">Наши курсы</h2>
                    <div class="swiper swiper_2  swiper-horizontal swiper-backface-hidden">
                        <div class="swiper-wrapper coutses__swiper-wrapper">
                            <div class="swiper-slide courses__swiper-slide">
                                <div class=" courses__item course-card base">
                                    <div class="course-card__img-container">
                                        <img src="./img/base-course.png" alt="img" class="course-card__img">
                                    </div>
                                    <div class="course-card__content">
                                        <div class="course-card__text">
                                            <strong class="course-card__heding">Базовый курс <br> <span class="course-card__subjects">(математика, физика, химия)</span> </strong>
                                            <ul class="course-card__list">
                                                <li class="course-card__item">Онлайн-занятия с преподавателем;</li>
                                                <li class="course-card__item">От 3 до 5 вебинаров в неделю по 1.5 - 2 часа;</li>
                                                <li class="course-card__item">Домашние задания после вебинара <br> (без проверки
                                                    преподавателем);</li>
                                                <li class="course-card__item">Получение теоретического материала;</li>

                                            </ul>
                                        </div>
                                        <div class="course-card__btn-container">

                                            <a href="./pages/course/base-course-1.html" class="course-card__btn base">Взять курс</a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide courses__swiper-slide">
                                <div class=" courses__item course-card advansed">
                                    <div class="course-card__img-container">
                                        <img src="./img/advansed-course.png" alt="img" class="course-card__img object-top">
                                    </div>
                                    <div class="course-card__content">
                                        <div class="course-card__text">
                                            <strong class="course-card__heding">Продвинутый курс <br> <span class="course-card__subjects">(математика, физика, химия)</span> </strong>
                                            <ul class="course-card__list">
                                                <li class="course-card__item ">Все, что есть в базовом курсе;</li>
                                                <li class="course-card__item text-ind plus"><img src="./img/purple-plus.png" alt="+" class="course-card__plus"></li>
                                                <li class="course-card__item">Созвоны раз в две недели с преподавателем в мини
                                                группах в приложении Discord.</li>
                                                <li class="course-card__item ">Домашние задания после вебинара <br> (с проверкой
                                                    лично преподавателем по критериям ЕГЭ).</li>
                                            </ul>
                                        </div>
                                        <a href="./pages/course/advansed-course-2.html" class="course-card__btn advansed">Взять курс</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide courses__swiper-slide">
                                <div class=" courses__item course-card individ">
                                    <div class="course-card__img-container">

                                        <img src="./img/individ-course.png" alt="img" class="course-card__img object-center">

                                    </div>
                                    <div class="course-card__content">
                                        <div class="course-card__text">
                                            <strong class="course-card__heding">Индивидуальные занятия <br> <span class="course-card__subjects">(математика, физика, химия)</span> </strong>
                                            <ul class="course-card__list">
                                                <li class="course-card__item">Онлайн-занятия с преподавателем;</li>
                                                <li class="course-card__item">График занятий обсуждаемый;</li>
                                                <li class="course-card__item">Домашние задания проверяются лично преподавателем;
                                                </li>
                                                <li class="course-card__item">Получение теоретического материала;</li>
                                                <li class="course-card__item">Подготовка к ОГЭ, ЕГЭ, ДВИ, Олимпиадам.</li>
                                            </ul>
                                        </div>
                                            <a href="./pages/course/personal-lessons-3.html" class="course-card__btn individ">Взять
                                                курс</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </section>

            <section class="tutors" id="tutors">
                <div class="_container tutors__container">
                    <h2 class="section-heading tutors__heading">Наши преподаватели</h2>
                    <div class="swiper swiper_3 swiper-horizontal swiper-backface-hidden">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide tutors__swiper-slide">
                                <div class="tutor-card tutors__card">
                                    <div class="tutor-card__img-wraper">
                                        <img src="img/fedor.png" alt="avatar" class="tutor-card__img">
                                    </div>
                                    <div class="tutor-card__content">
                                        <div class="tutor-card__text">
                                            <strong class="tutor-card__name">Федор Ушков</strong>
                                            <ul class="tutors-card__list">
                                                <li class="tutor-card__item">Преподаватель по Математике и Физике;</li>
                                                <li class="tutor-card__item">Руководитель онлайн-школы Олимпус</li>
                                                <li class="tutor-card__item">Опыт преподавателя по математике и физике более 4-х лет;</li>
                                                <li class="tutor-card__item"> Подготовил к ЕГЭ по математике и физике более 50 учеников;</li>
                                                <li class="tutor-card__item">Сдал ЕГЭ на 99 баллов в 2021 году по физике и на 92 балла по математике;</li>
                                                <li class="tutor-card__item">Студент 4 курса СПБГУ направления «Фундаментальная механика».</li>
                                            </ul>
                                        </div>
                                        <a href="./pages/teachers/tutor-2.html" class="tutor-card__btn-more">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide tutors__swiper-slide">
                                <div class="tutor-card tutors__card">
                                    <div class="tutor-card__img-wraper">
                                        <img src="img/Maxim.png" alt="avatar" class="tutor-card__img">
                                    </div>
                                    <div class="tutor-card__content">
                                        <div class="tutor-card__text">
                                            <strong class="tutor-card__name">Максим Моисеев</strong>
                                            <ul class="tutors-card__list">
                                                <li class="tutor-card__item">Преподаватель по Химии</li>
                                                <li class="tutor-card__item">В сфере образования и репетиторства уже более 4-х
                                                    лет. </li>
                                                <li class="tutor-card__item">Обширный опыт работы с учениками разного возраста, как в решении
                                                задач, так и в подготовке к экзамену.</li>
                                                <li class="tutor-card__item">Сдал ЕГЭ по химии в 2021 году на 100 баллов.</li>
                                                <li class="tutor-card__item">Многочисленный участник олимпиад и первенств по химии (ВсОш, Высшая проба, Газпром)</li>
                                            </ul>
                                        </div>
                                        <a href="./pages/teachers/tutor-1.html" class="tutor-card__btn-more">Подробнее</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </section>

            

            <section class="clients">
                <div class="clients__container _container">
                    <h2 class="clients__heading section-heading">Отзывы учеников</h2>
                    <ul class="clients__list">
                        <li class="clients__item user-card">
                            <div class="user-card__profile">
                                <img src="img/student-female.png" alt="avatar" class="user-card__avatar">
                                <div class="user-card__user-info">
                                    <strong class="user-card__user-name">Елена<a target="_blank"
                                            href="https://orel.profi.ru/profile/UshkovFA"
                                            class="user-card__user-profi-link"></a></strong>
                                    <span class="user-card__user-class"> ЕГЭ Математика (профильный
                                        уровень)</span>
                                </div>
                            </div>
                            <p class="user-card__testimonial-text">Спасибо большое Федору за подготовку к экзамену!
                                Результат хороший. <img src="img/EGE-profil-86.jpg" alt=""></p>
                        </li>
                        <li class="clients__item user-card">
                            <div class="user-card__profile">
                                <img src="img/student-female.png" alt="avatar" class="user-card__avatar">
                                <div class="user-card__user-info">
                                    <strong class="user-card__user-name">Светлана<a target="_blank"
                                            href="https://orel.profi.ru/profile/UshkovFA"
                                            class="user-card__user-profi-link"></a></strong>
                                    <span class="user-card__user-class"> ЕГЭ Математика (профильный
                                        уровень)</span>
                                </div>
                            </div>
                            <p class="user-card__testimonial-text">Фёдор может объяснить одну и ту же тему несколькими
                                разными способами, шансов не понять просто не остаётся.
                                Занимались 2 недели прямо перед ЕГЭ, т.к. мне нужно было поработать над конкретными
                                заданиями. Как результат - написала экзамен на тот балл, на который и хотела.</p>
                        </li>
                        <li class="clients__item user-card">
                            <div class="user-card__profile">
                                <img src="img/student-male.png" alt="avatar" class="user-card__avatar">
                                <div class="user-card__user-info">
                                    <strong class="user-card__user-name">Дадаш<a target="_blank"
                                            href="https://orel.profi.ru/profile/UshkovFA"
                                            class="user-card__user-profi-link"></a></strong>
                                    <span class="user-card__user-class"> ЕГЭ Математика (профильный
                                        уровень)</span>
                                </div>
                            </div>
                            <p class="user-card__testimonial-text">Нет никаких минусов, Фёдор Андреевич вполне хорошо
                                преподносит материал и вместе мы хорошо всё отработываем, сейчас за короткие сроки, мы
                                быстро отработываем каждый номер. Жалко только, что не наткнулся на него раньше, а
                                только в марте. Из рекомендаций, можно посоветовать создать стабильное расписание, а так
                                всё хорошо.</p>
                        </li>
                        <li class="clients__item user-card">
                            <div class="user-card__profile">
                                <img src="img/student-female.png" alt="avatar" class="user-card__avatar">
                                <div class="user-card__user-info">
                                    <strong class="user-card__user-name">Евдокия<a target="_blank"
                                            href="https://orel.profi.ru/profile/UshkovFA"
                                            class="user-card__user-profi-link"></a></strong>
                                    <span class="user-card__user-class">Теоретическая механика</span>
                                </div>
                            </div>
                            <p class="user-card__testimonial-text">Отличный преподаватель, хорошо разбирается в теме
                                предмета, который объясняет. Благодаря ему, я разобралась в темах, которые не понимала
                                на парах. Всегда можно договориться о переносе занятий, если не получается в ранее
                                договоренное время. Если что-то до тебя долго не доходит, будет объяснять до того
                                момента, пока не поймёшь, и все это без каких-либо упреков. Легко найти общий язык, что
                                улучшает атмосферу изучения. В общем , я рада, что встретила такого преподавателя, ведь
                                он постоянно стремится к совершенствованию своего педагогического мастерства!!!🥰✨</p>
                        </li>
                        <li class="clients__item user-card">
                            <div class="user-card__profile">
                                <img src="img/student-male.png" alt="avatar" class="user-card__avatar">
                                <div class="user-card__user-info">
                                    <strong class="user-card__user-name">Леонид<a target="_blank"
                                            href="https://orel.profi.ru/profile/UshkovFA"
                                            class="user-card__user-profi-link"></a></strong>
                                    <span class="user-card__user-class"> ЕГЭ Математика (профильный
                                        уровень)</span>
                                </div>
                            </div>
                            <p class="user-card__testimonial-text">Меня очень порадовала методика преподавания Фёдора.
                                Он хорошо объясняет все задачи, благодаря занятиям все стало прозрачным. Фёдор всегда на
                                связи и поддерживает и консультирует по всем вопросам, связанным с подготовкой к
                                экзамену. Уже на второй месяц результаты пробников сильно возросли (с 50 до 75 баллов).
                                Мы быстро нашли общий язык, была составлена чёткая программа обучения и подготовки к
                                экзамену. Домашние задания были объемными и проверялись и разбирались. Буду продолжать с
                                ним заниматься и далее.</p>
                        </li>
                        <li class="clients__item user-card">
                            <div class="user-card__profile">
                                <img src="img/student-female.png" alt="avatar" class="user-card__avatar">
                                <div class="user-card__user-info">
                                    <strong class="user-card__user-name">Лена<a target="_blank"
                                            href="https://orel.profi.ru/profile/UshkovFA"
                                            class="user-card__user-profi-link"></a></strong>
                                    <span class="user-card__user-class">ЕГЭ Физика</span>
                                </div>
                            </div>
                            <p class="user-card__testimonial-text">Я закончила школу 10 лет назад и сейчас понадобилось
                                поступить в ВУЗ по ЕГЭ с физикой. Все школьные знания позабылась, поэтому пришлось
                                начинать с 0. Сменила 4-5 преподавателей, и только Фёдор оказался лучшим! За полгода
                                удалось вспомнить и выучить давно забытую информацию. Преподаватель понятно и спокойно
                                обьясняет, а если не понимаешь, всегда терпеливо объяснит до тех пор, пока ты не
                                поймёшь, разными путями. Мне всё очень нравится и менять преподавателя не собираюсь.</p>
                        </li>
                        <li class="clients__item user-card">
                            <div class="user-card__profile">
                                <img src="img/student-female.png" alt="avatar" class="user-card__avatar">
                                <div class="user-card__user-info">
                                    <strong class="user-card__user-name">Вика Литвинова<a target="_blank"
                                            href="https://vk.com/topic-218744262_50197831"
                                            class="user-card__user-vk-link"></a></strong>
                                    <span class="user-card__user-class"> ЕГЭ Математика (профильный
                                        уровень)</span>
                                </div>
                            </div>
                            <p class="user-card__testimonial-text">Фёдор Андреевич прекрасный репетитор, объясняет
                                максимально доступно и понятно! Терпеливый, все непонятные моменты разъясняет, на
                                занятиях комфортная атмосфера, и проходят они крайне эффективно. Благодаря ему я
                                получила те баллы, на которые надеялась. Он подробно объяснял темы и держал в тонусе
                                домашними заданиями, за что я очень благодарна. Смело рекомендую!</p>
                        </li>
                        <li class="clients__item user-card">
                            <div class="user-card__profile">
                                <img src="img/student-female.png" alt="avatar" class="user-card__avatar">
                                <div class="user-card__user-info">
                                    <strong class="user-card__user-name">Светлана Козлова<a target="_blank"
                                            href="https://vk.com/topic-218744262_50197831"
                                            class="user-card__user-vk-link"></a></strong>
                                    <span class="user-card__user-class"> ЕГЭ Математика (профильный
                                        уровень)</span>
                                </div>
                            </div>
                            <p class="user-card__testimonial-text">Фёдор объясняет все очень доступно и понятно. Если я
                                не понимала что-то с первого раза, он всегда объяснял заново, другими способами. Это
                                очень помогало.
                                Мне нужно было подтянуть конкретные задания, чтобы набрать нужное количество баллов для
                                подтверждения медали, поэтому занимались мы недолго. Но все те задания, которые мы
                                успели разобрать, я успешно выполнила!</p>
                        </li>
                        <li class="clients__item user-card">
                            <div class="user-card__profile">
                                <img src="img/student-female.png" alt="avatar" class="user-card__avatar">
                                <div class="user-card__user-info">
                                    <strong class="user-card__user-name">Аня Фролова<a target="_blank"
                                            href="https://vk.com/topic-218744262_50197831"
                                            class="user-card__user-vk-link"></a></strong>
                                    <span class="user-card__user-class"> ЕГЭ Физика</span>
                                </div>
                            </div>
                            <p class="user-card__testimonial-text">Прекрасный репетитор! Начинала заниматься с полного
                                нуля, но благодаря умению преподносить весь материал доступно и интересно, Фёдор
                                Андреевич смог поднять мой уровень знания физики до 74 баллов. Спасибо большое
                                преподавателю за отличную подготовку!</p>
                        </li>
                    </ul>
                    <button class="clients__btn-more btn btn-border">Показать больше отзывов</button>
                </div>
            </section>
        </вшм>
        <footer class="footer">
            <div class="footer__container _container">
                <a href="" class="footer__logo">
                    <img src="./img/logo-rus-short.png" alt="" class="footer__logo-img">
                </a>
                <nav class="footer__nav">
                    <ul class="footer__nav-list">
                        <li class="footer__nav-item">
                            <a href="#about" class="footer__nav-link nav-link">О нас</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="#tutors" class="footer__nav-link nav-link">Наши преподаватели</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="#courses" class="footer__nav-link nav-link">Приобрести курс</a>
                        </li>
                        <li class="footer__nav-item">
                            <a href="#exumples" class="footer__nav-link nav-link">Как проходит обучение</a>
                        </li>
                    </ul>
                </nav>
                <ul class="footer__cocial-list">
                    <li class="footer__social-item"><a href="https://vk.com/olympus_teach" target="_blank"
                            class="footer__social-link vk-link"></a>
                    </li>
                    <li class="footer__social-item"><a href="https://www.youtube.com/@olympus_school" target="_blank"
                            class="footer__social-link youtube-link"></a></li>
                    <li class="footer__social-item"><a href="https://web.telegram.org/k/#@FAU_Teach" target="_blank"
                            class="footer__social-link telegram-link"></a></li>
                </ul>
            </div>
        </footer>
    </div>
    <?php
        unset($_SESSION['validation']);
        unset($_SESSION['auth-val']);
    ?>
    <script src="./js/script.js"></script>
    <script src="./js/forms.js"></script>
    <script src="./js/nav-transitions.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="./js/swipers.js">
        
    </script>    
</body>

</html>