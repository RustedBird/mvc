<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title>Wonde - универсальный бизнес шаблон сайта</title>

    <link href="\template\css\styles.css" rel="stylesheet">
    <link href="\template\css\font-awesome.css" rel="stylesheet">

    <script type="text/javascript" src="\template\js\jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="\template\js\common.js"></script>
    <script type="text/javascript" src="\template\js\jquery.carousel-main.min.js"></script>
    <script type="text/javascript" src="\template\js\jquery.carousel-content.min.js"></script>
    <script type="text/javascript" src="\template\js\home-slider-settings.js"></script>
    <script type="text/javascript" src="\template\js\carousel-portfolio-settings.js"></script>
    <script type="text/javascript" src="\template\js\carousel-blog-settings.js"></script>
    <script type="text/javascript" src="\template\js\carousel-testimonials-settings.js"></script>
    <script type="text/javascript" src="\template\js\carousel-clients-settings.js"></script>
    <script type="text/javascript" src="\template\js\portfolio-blog-slider-settings.js"></script>
</head>

<body class="light-bg <? if ($_SERVER['REQUEST_URI'] == '/'): ?>home<? endif;?>">
<div class="main-container">
    <div class="topbar-outer dark">
        <div class="topbar content-width">
            <div class="table fullheight">
                <div class="table-cell fullheight middle">
                    <div class="logo">
                        <a href="/"><img alt="" src="\template\images\topbar\logo_white.png" height="17">
                        </a>
                    </div>
                </div>
            </div>

            <ul class="topsocial">
                <li><a href="#"><i class="fa fa-linkedin-square"></i><div class="tooltip">LinkedIn</div></a>
                </li>
                <li><a href="#"><i class="fa fa-facebook"></i><div class="tooltip">Facebook</div></a>
                </li>
                <li><a href="#"><i class="fa fa-twitter"></i><div class="tooltip">Twitter</div></a>
                </li>
                <li><a href="#"><i class="fa fa-google-plus"></i><div class="tooltip">Google+</div></a>
                </li>
            </ul>

            <ul class="topnav">
                <li><a href="/" class="<? if ($_SERVER['REQUEST_URI'] == '/'): ?>current<? endif;?>">Главная</a>
                </li>
                <li><a href="/about" class="<? if ($_SERVER['REQUEST_URI'] == '/about'): ?>current<? endif;?>">О компании</a>
                </li>
                <li><a href="portfolio.html" class="drop">Проекты</a>
                    <ul>
                        <li><a href="#">Название проекта №1</a></li>
                        <li><a href="#">Название проекта №2</a></li>
                        <li><a href="#">Название проекта №3</a></li>
                    </ul>
                </li>
                <li><a href="/news" class="drop <? if ($_SERVER['REQUEST_URI'] == '/news'): ?>current<? endif;?>">Новости</a>
                    <ul>
                        <li><a href="/news">Категории</a>
                        </li>
                        <li><a href="blog-post.html">Описание новости</a>
                        </li>
                    </ul>
                </li>
                <li><a href="/contacts" class="<? if ($_SERVER['REQUEST_URI'] == '/contacts'): ?>current<? endif;?>">Контакты</a>
                </li>
            </ul>

            <a href="#" class="mobilenav-click">
                <div class="mobilenav-button-container">
                    <div class="mobilenav-button-inner">
                        <div class="mobilenav-button"></div>
                    </div>
                </div>
            </a>

            <div class="mobilenav-container">
                <ul class="mobilenav">
                </ul>
            </div>
        </div>
    </div>
        <? if ($_SERVER['REQUEST_URI'] == '/'): ?>
    <div class="home-banner dark">

        <ul class="slider-container" id="home-slider">
            <li class="slide-outer">
                <div class="slide-inner">
                    <div class="content-width">
                        <div class="slide-style-1">
                            <!-- Title -->
                            <h1>Бесплатный шаблон <span>HTML5</span> с адаптивным дизайном<span>.</span></h1>
                            <!-- Text -->
                            <p>Системный анализ, отбрасывая подробности, подсознательно концентрирует конкурент.</p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="slide-outer">
                <div class="slide-inner">
                    <div class="content-width">
                        <div class="slide-style-2">
                            <div class="icon-container">
                                <!-- Icon Backing -->
                                <div class="icon-backing">
                                    <!-- Icon -->
                                    <i class="fa fa-css3"></i>
                                </div>
                            </div>
                            <!-- Title -->
                            <h1>Современный шбалон сайта<span>.</span></h1>
                            <!-- Text -->
                            <p>Системный анализ, отбрасывая подробности, подсознательно концентрирует конкурент.</p>
                        </div>
                    </div>
                </div>
            </li>

            <li class="slide-outer">
                <div class="slide-inner">
                    <div class="content-width">
                        <div class="slide-style-1">
                            <!-- Title -->
                            <h1>Бесплатный шаблон <span>HTML5</span> с адаптивным дизайном<span>.</span></h1>
                            <!-- Text -->
                            <p>Системный анализ, отбрасывая подробности, подсознательно концентрирует конкурент.</p>
                        </div>
                    </div>
                </div>
            </li>

        </ul>

        <div class="slider-nav-container">
            <div class="slider-nav-inner">
                <div class="slider-nav content-width">

                    <ul id="bx-pager">
                        <li><a data-slide-index="0" href="">Вступление</a>
                        </li>
                        <li><a data-slide-index="1" href="">Описание</a>
                        </li>
                        <li><a data-slide-index="2" href="">Предложения</a>
                        </li>
                    </ul>

                    <div class="slider-controls">
                        <div id="slider-pause"></div>
                        <div id="slider-prev"></div>
                        <div id="slider-next"></div>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="home-cta-bar-container accent">

        <div class="content-width">
            <div class="home-cta-bar">
                <!-- Text -->
                <div class="text">
                    Системный анализ, отбрасывая подробности, подсознательно концентрирует конкурент.
                </div>
                <!-- Button -->
                <div class="home-cta-bar-button">
                    <a class="button transparent" href="#"><i class="fa fa-shopping-cart"></i>Подробнее</a>
                </div>
            </div>
        </div>

    </div>
        <? endif;?>
    <div class="main-content">

        <?php echo $this->content?>

    </div>

    <div class="footer-container">

        <div class="spacer"></div>

        <div class="footer-infobar">
            <div class="content-width">
                <!-- Text -->
                Мы предоставляем только проверенную информацию. Все права защищены.
            </div>
        </div>

        <div class="footer">
            <div class="content-width">


                <!-- Four Columns -->

                <div class="column-container">

                    <div class="column-one-fourth">

                        <h3>Подписаться</h3>
                        <div class="footer-newsletter">
                            <form id="newsletter" name="newsletter" method="post" action="#">
                                <div class="container">
                                    <input type="text" name="name" class="textbox" placeholder="Email Address">
                                    <input type="submit" name="submit" id="submit" value="Готово" class="button">
                                </div>
                            </form>
                        </div>

                    </div>

                </div>

                <div class="footer-lower-container">

                    <ul class="footer-lower">
                        <li><a href="index.html">Главная</a>
                        </li>
                        <li><a href="about.html">О нас</a>
                        </li>
                        <li><a href="portfolio.html">Проекты</a>
                        </li>
                        <li><a href="blog.html">Новости</a>
                        </li>
                        <li><a href="contact.html">Контакты</a>
                        </li>
                    </ul>

                    <div class="footer-copyright">
                        &copy; 2016 | Wonde - универсальный бизнес шаблон сайта
                    </div>

                </div>

                <a class="top-of-page-link" href="#"><i class="fa fa-chevron-up"></i></a>

            </div>
        </div>

    </div>

</div>

</body>

</html>