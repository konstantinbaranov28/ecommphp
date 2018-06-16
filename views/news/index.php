<?php include ROOT . '/views/layouts/header.php'; ?>

<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li class="/news/">Блог</li>
            </ul>
        </div><!-- End .container -->
    </div><!-- End .breadcrumb-container -->
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title">
                    <h1 class="title">Блог</h1>
                </header>
                <div class="xs-margin"></div><!-- space -->
                <div class="row">

                    <div class="col-md-9 col-sm-8 col-xs-12 articles-container">
                        <?php foreach ($newsList as $newsItem): ?>
                            <article class="article">
                                <div class="article-meta-date">
                                    <span><?php echo $newsItem['date']; ?></span>
                                </div><!-- End .article-meta-date -->

                                <figure class="article-media-container">
                                    <img src="/template/images/blog/post2-large.jpg" alt="blog post">
                                </figure>

                                <h2><a href="/news/<?php echo $newsItem['id']; ?>"><?php echo $newsItem['title']; ?></a>
                                </h2>

                                <div class="article-meta-container clearfix">
                                    <div class="article-meta-more">
                                        <span class="separator"><i
                                                    class="fa fa-user"></i></span><?php echo $newsItem['author']; ?>
                                    </div><!-- End. pull-left -->
                                </div><!-- End .article-meta-container -->

                                <div class="article-content-container">
                                    <p><?php echo $newsItem['short_content']; ?></p>
                                    <a href="/news/<?php echo $newsItem['id']; ?>">
                                        <button class="btn btn-custom">Подробнее</button>
                                    </a>
                                </div><!-- End .article-content-container -->
                            </article><!-- End .article -->
                        <?php endforeach; ?>


                        <div class="pagination-container clearfix">
                            <div class="pull-left page-count">
                                Page 1 of 5
                            </div><!-- End .pull-left -->

                            <div class="pull-right">
                                <ul class="pagination">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                            </div><!-- End .pull-right -->
                        </div><!-- End pagination-container -->
                    </div><!-- End .col-md-9 -->


                </div><!-- End .row -->

            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

</section><!-- End #content -->
<?php include ROOT . '/views/layouts/footer.php'; ?>
