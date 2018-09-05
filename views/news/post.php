<div class="main-content-inner content-width">

    <!-- Main Column / Sidebar -->

    <div class="column-container">

        <!-- Main Column -->

        <div class="column-three-qtr">

            <!-- Blog Post -->

            <div class="blog-post actual-post">
                <!-- Title -->
                <h1><?= $this->selectedNews[0]['news_title']?></h1>

                <!-- Meta -->
                <div class="blog-meta">
                    <div class="meta-item"><div class="meta-title published">Дата:</div><a href="#"><?= $this->selectedNews[0]['news_date_text']?></a></div>
                    <div class="meta-item"><div class="meta-title views">Просмотры:</div><a href="#"><?= $this->selectedNews[0]['view_count']?></a></div>
                    <div class="meta-item"><div class="meta-title comments">Комментарии:</div><a href="#"><?= count($this->comments)?></a></div>
                </div>

                <!-- Content -->

                <div class="blog-content">
                    <!-- Paragraph -->
                    <p><?= $this->selectedNews[0]['news_short_content']?></p>

                    <div class="media">
                        <div id="portfolio-blog-slider-container">

                            <div id="portfolio-blog-slider">

                                <!-- Actual Images -->

                                <img alt="" src="<?= $this->selectedNews[0]['news_img']?>" class="fullwidth">
                                <img alt="" src="<?= $this->selectedNews[0]['news_img']?>" class="fullwidth">

                                <!-- END Actual Images -->

                            </div>


                            <!-- Slide Controls -->

                            <div class="portfolio-blog-slider-controls">
                                <div id="portfolio-blog-slider-prev"></div>
                                <div id="portfolio-blog-slider-next"></div>
                            </div>

                            <!-- END Slide Controls -->

                        </div>
                    </div>

                    <!-- END Image -->

                    <!-- Paragraph -->
                    <p><?= $this->selectedNews[0]['news_content']?></p>
                </div>

                <!-- END Content -->


            </div>

            <!-- END Blog Post -->



            <!-- Share Links -->

            <ul class="post-sharing">
                <li><a href="#"><i class="fa fa-facebook"></i><div class="tooltip">Поделиться в Facebook</div></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i><div class="tooltip">Поделиться в Twitter</div></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i><div class="tooltip">Поделиться в LinkedIn</div></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i><div class="tooltip">Поделиться в Pinterest</div></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i><div class="tooltip">Поделиться в Google+</div></a></li>
            </ul>

            <!-- END Share Links -->



            <!-- Divider -->

            <div class="divider"></div>

            <!-- END Divider -->



            <!-- Reader Comments -->

            <div class="comments">
                <h2>Комментарии к статьи</h2>

                <? foreach ($this->comments as $item): ?>
                    <div class="comment">
                        <!-- Username -->
                        <div class="username">
                            <a href="#"><?= $item['name']?></a> пишет:
                        </div>
                        <!-- Date -->
                        <div class="date">
                            31 августа 2016
                        </div>
                        <!-- Message -->
                        <div class="message">
                            <p><?= $item['message']?></p>
                        </div>
                        <!-- Reply Link -->
                        <div class="link">
                            <a href="#">Ответить</a>
                        </div>
                    </div>
                <? endforeach;?>
            </div>

            <!-- END Reader Comments -->



            <!-- Divider -->

            <div class="divider"></div>

            <!-- END Divider -->



            <!-- Post Comment Form -->
            <div class="comment-form">
                <h2>Оставить комментарий</h2>
                <form id="comment-form" name="comment-form" method="post" action="/news/comment">
                    <!-- Textbox -->
                    <input type="text" name="name" placeholder="Имя *" required>
                    <!-- Textbox -->
                    <input type="text" name="mail" placeholder="Email *" required>
                    <!-- Textbox -->
                    <input type="text" name="theme" placeholder="Тема *" required>
                    <input type="hidden" name="news_id" value="<?= $this->selectedNews[0]['news_id']?>">
                    <!-- Comment box -->
                    <textarea name="message" placeholder="Сообщение *"></textarea>
                    <!-- Submit Button -->
                    <input type="submit" class="accent" value="Готово">
                </form>
            </div>

            <!-- END Post Comment Form -->


        </div>

        <!-- END Main Column -->



        <!-- Sidebar -->

        <div class="column-one-fourth sidebar">


            <!-- Categories -->

            <div class="sidebar-widget categories">
                <!-- Title -->
                <h3>Категории новостей</h3>
                <!-- Category Links -->
                <? foreach ($this->allCategories as $item):?>
                    <a href="#"><?= $item['news_category']?></a>
                <? endforeach;?>
            </div>

            <!-- END Categories -->

            <!-- Latest Project -->

            <div class="sidebar-widget project">
                <!-- Title -->
                <h3>Новость дня</h3>
                <!-- Image -->
                <a href="#" class="image-link"><img alt="" src="<?= $this->topNews[0]['news_img']?>" class="fullwidth"></a>
                <!-- Project Title -->
                <h3 class="sub-title"><a href="#"><?= $this->topNews[0]['news_title']?></a></h3>
                <!-- Tags -->
                <div class="tags"><?= $this->topNews[0]['news_category']?></div>
            </div>

            <!-- END Latest Project -->



            <!-- Popular Posts -->

            <div class="sidebar-widget posts">
                <!-- Title -->
                <h3>Последнее</h3>

                <? foreach ($this->lastNews as $item):?>
                    <div class="post">
                        <!-- Image Column -->
                        <div class="img-column">
                            <a href="blog-post.html" class="image-link mini"><img alt="" src="<?= $item['news_img']?>" class="fullwidth"></a>
                        </div>
                        <!-- Content Column -->
                        <div class="content-column">
                            <!-- Post Title -->
                            <h3 class="sub-title"><a href="blog-post.html"><?= $item['news_title']?></a></h3>
                            <!-- Date -->
                            <div class="date"><?= $item['news_date_text']?></div>
                        </div>
                    </div>
                <? endforeach;?>

            </div>

                <!-- END Post -->
        </div>

        <!-- END Sidebar -->


    </div>

    <!-- END Main Column / Sidebar -->


</div>