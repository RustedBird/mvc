<div class="main-content-inner content-width">

    <!-- Main Column / Sidebar -->

    <div class="column-container">


        <!-- Main Column -->

        <div class="column-three-qtr">

            <? foreach ($this->allNews as $item):?>
                <div class="blog-post">
                    <!-- Title -->
                    <h1><a href="/news/post/<?= $item['news_id']?>"><?= $item['news_title']?></a></h1>
                    <!-- Meta -->
                    <div class="blog-meta">
                        <div class="meta-item"><div class="meta-title published">Дата:</div><a href="/news/post/<?= $item['news_id']?>"><?= $item['news_date_text']?></a></div>
                        <div class="meta-item"><div class="meta-title views">Просмотры:</div><a href="/news/post/<?= $item['news_id']?>"><?= $item['view_count']?></a></div>
                    </div>
                    <!-- Image -->
                    <a href="/news/post/<?= $item['news_id']?>" class="media image-link"><img alt="" src="<?= $item['news_img']?>" class="fullwidth"></a>
                    <!-- Excerpt -->
                    <div class="blog-content">
                        <p><?= $item['news_short_content']?></p>
                        <!-- Read More Button -->
                        <a href="/news/post/<?= $item['news_id']?>" class="button accent">Читать далее</a>
                    </div>
                </div>
            <? endforeach;?>

            <!-- Navigation -->


            <div class="blog-nav">
                <a href="#" class="back">Назад</a>
                <a href="#" class="next">Вперед</a>
            </div>


            <!-- END Navigation -->

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

            <!-- END Popular Posts -->

        </div>

        <!-- END Sidebar -->


    </div>

    <!-- END Main Column / Sidebar -->


</div>
