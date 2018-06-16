<?php include ROOT . '/views/layouts/header.php'; ?>

<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="/">Главная</a></li>
                <li class="/news/">Блог</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title">
                    <h1 class="title">Blog Post</h1>
                    <p class="title-desc">Page for Single Post. Read post details.</p>
                </header>
                <div class="xs-margin"></div><!-- space -->
                <div class="row">

                    <div class="col-md-9 col-sm-8 col-xs-12 articles-container single-post">

                        <article class="article">
                            <h2 class="title"><a
                                        href='/news/<?php echo $newsItem['id']; ?>'><?php echo $newsItem['title'] . ' # ' . $newsItem['id']; ?></a>
                            </h2>
                            <div class="article-meta-date">
                                <span><?php echo $newsItem['date']; ?></span>
                                Aug
                            </div><!-- End .article-meta-date -->

                            <figure class="article-media-container">
                                <img src="/template/images/blog/post1-large.jpg" alt="blog post">
                            </figure>

                            <div class="article-meta-container clearfix">
                                <div class="article-meta-more">
                                    <span class="separator"><i
                                                class="fa fa-user"></i></span><?php echo $newsList['author']; ?>
                                </div><!-- End. pull-left -->
                            </div><!-- End .article-meta-container -->

                            <div class="article-content-container">
                                <p><?php echo $newsList['short_content']; ?></p>
                            </div><!-- End .article-content-container -->

                            <div class="article-author clearfix">
                                <figure class="article-author-image">
                                    <img src="/template/images/blog/author.jpg" alt="Author">
                                </figure>
                            </div><!-- End .article-author -->


                        </article><!-- End .article -->
                        <a href='/news/' class="permalink"> Back to HomePage</a></p>
                    </div><!-- End .col-md-9 -->
                </div><!-- End .row -->

            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

</section><!-- End #content -->
<?php include ROOT . '/views/layouts/footer.php'; ?>
