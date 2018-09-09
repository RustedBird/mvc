<div class="main-content-inner content-width">

    <div class="column-container">

        <div class="column-one-third">
            <div class="icons-column">
                <!-- Icon Backing -->
                <div class="icon-backing" style="background-color: #916C6C;">
                    <!-- Icon -->
                    <i class="fa fa-heart"></i>
                </div>
            </div>
            <div class="content-column">
                <!-- Title -->
                <h3>Дизайн</h3>
                <!-- Text -->
                <p>Интересно отметить, что каждая сфера рынка притягивает план размещения. </p>
            </div>
        </div>

        <div class="column-one-third">
            <div class="icons-column">
                <!-- Icon Backing -->
                <div class="icon-backing" style="background-color: #7089AD;">
                    <!-- Icon -->
                    <i class="fa fa-font"></i>
                </div>
            </div>
            <div class="content-column">
                <!-- Title -->
                <h3>Верстка</h3>
                <!-- Text -->
                <p>Интересно отметить, что каждая сфера рынка притягивает план размещения. </p>
            </div>
        </div>

        <div class="column-one-third">
            <div class="icons-column">
                <!-- Icon Backing -->
                <div class="icon-backing" style="background-color: #63885F;">
                    <!-- Icon -->
                    <i class="fa fa-fullscreen"></i>
                </div>
            </div>
            <div class="content-column">
                <!-- Title -->
                <h3>Разработка</h3>
                <!-- Text -->
                <p>Интересно отметить, что каждая сфера рынка притягивает план размещения. </p>
            </div>
        </div>

    </div>

    <div class="divider"></div>

    <h3 class="section-title">Топ новости</h3>

    <div id="portfolio-nav" class="carousel-nav">
        <div class="back"></div>
        <div class="next"></div>
    </div>

    <div class="carousel">
        <ul id="portfolio-carousel" class="slider-container">

            <? foreach ($this->lastNews as $item):?>

                <!-- One Fourth -->

                <li class="column-one-fourth portfolio-item branding">
                    <!-- Image -->
                    <a href="/news/post/<?= $item['news_id']?>" class="image-link"><img alt="" src="<?= $item['news_img']?>" class="fullwidth">
                    </a>
                    <!-- Title -->
                    <h3><a href="/news/post/<?= $item['news_id']?>"><?= $item['news_title']?></a></h3>
                    <!-- Tags -->
                    <div class="tags">Категория <?= $item['news_category']?></div>
                </li>

            <? endforeach;?>
        </ul>
    </div>

    <div class="column-container">
        <div class="column-three-qtr">
            <div class="divider"></div>
            <h3 class="section-title">Последние новости</h3>
            <div id="blog-nav" class="carousel-nav">
                <div class="back"></div>
                <div class="next"></div>
            </div>
            <div class="carousel">
                <ul id="blog-carousel" class="slider-container">

                    <? foreach ($this->allNews as $item): ?>

                        <li class="column-one-fourth">
                            <!-- Image -->
                            <a href="/news/post/<?= $item['news_id']?>" class="image-link"><img alt="" src="<?= $item['news_img']?>" class="fullwidth">
                            </a>
                            <!-- Title -->
                            <h3><a href="/news/post/<?= $item['news_id']?>"><?= $item['news_title']?></a></h3>
                            <!-- Date -->
                            <div class="date"><?= date('d-m-Y', strtotime($item['news_date']))?></div>
                            <!-- Excerpt -->
                            <p><?= $item['news_short_content']?></p>
                            <!-- Read More Link -->
                            <a href="/news/post/<?= $item['news_id']?>">Подробнее</a>
                        </li>

                    <? endforeach;?>

                </ul>
            </div>

        </div>

        <div class="column-one-fourth">

            <div class="divider"></div>

            <h3 class="section-title">Комментарии</h3>

            <div id="testimonials-nav" class="carousel-nav">
                <div class="back"></div>
                <div class="next"></div>
            </div>

            <div class="carousel">
                <ul id="testimonials-carousel" class="slider-container">


                    <? foreach ($this->comments as $comment): ?>

                        <li class="column-one-fourth">
                            <!-- Text -->
                            <div class="testimonial-text">
                                <p><?= $comment['message']?></p>
                            </div>
                            <!-- Name -->
                            <div class="testimonial-name">
                                <?= $comment['name']?>
                            </div>
                            <!-- Company URL -->
                            <div class="testimonial-link">
                                <a href="/news/post/<?= $comment['news_id']?>">Посетитель</a>
                            </div>
                        </li>

                    <? endforeach;?>


                </ul>
            </div>

        </div>

    </div>


</div>