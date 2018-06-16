<?php include ROOT . '/views/layouts/header.php'; ?>

    <section id="content">


        <div id="category-header">

        </div><!-- End #category-header -->
        <div id="category-breadcrumb">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="#">Electronics</a></li>
                    <li class="active">Mobile</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                    <div class="row">

                        <div class="col-md-9 col-sm-8 col-xs-12 main-content">

                            <div class="category-toolbar clearfix">
                                <div class="toolbox-filter clearfix">

                                    <div class="sort-box">
                                        <span class="separator">sort by:</span>
                                        <div class="btn-group select-dropdown">
                                            <button type="button" class="btn select-btn">Position</button>
                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Date</a></li>
                                                <li><a href="#">Name</a></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="view-box">
                                        <a href="category.html" class="active icon-button icon-grid"><i
                                                    class="fa fa-th-large"></i></a>
                                        <a href="category-list.html" class="icon-button icon-list"><i
                                                    class="fa fa-th-list"></i></a>
                                    </div><!-- End .view-box -->

                                </div><!-- End .toolbox-filter -->
                                <div class="toolbox-pagination clearfix">
                                    <ul class="pagination">
                                        <li class="active"><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">5</a></li>
                                        <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                    </ul>
                                    <div class="view-count-box">
                                        <span class="separator">view:</span>
                                        <div class="btn-group select-dropdown">
                                            <button type="button" class="btn select-btn">10</button>
                                            <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">15</a></li>
                                                <li><a href="#">30</a></li>
                                            </ul>
                                        </div>
                                    </div><!-- End .view-count-box -->

                                </div><!-- End .toolbox-pagination -->


                            </div><!-- End .category-toolbar -->
                            <div class="md-margin"></div><!-- .space -->
                            <div class="category-item-container">
                                <div class="row">
                                    <div class="col-md-4 col-sm-6 col-xs-12">
                                        <?php foreach ($latestProducts as $product): ?>
                                            <div class="item item-hover">
                                                <div class="item-image-wrapper">
                                                    <figure class="item-image-container">
                                                        <a href="/product/<?php echo $product['id']; ?>">
                                                            <img src="/template/images/products/item2.jpg" alt="item1"
                                                                 class="item-image">
                                                        </a>
                                                        <p>Код товара: <?php echo $product['code']; ?></p>
                                                    </figure>
                                                    <div class="item-price-container">
                                                    <span class="old-price">
                                                        <?php if (!empty($product['old_price'])) {
                                                            echo $product['old_price'], ' р.';
                                                        } ?><span
                                                                class="sub-price"></span></span>
                                                        <span class="item-price"><?php echo $product['price'], ' р.'; ?>
                                                            <span
                                                                    class="sub-price"></span></span>
                                                    </div><!-- End .item-price-container -->
                                                    <?php if ($product['is_new']): ?>
                                                        <span class="new-rect">New</span>
                                                    <?php endif; ?>
                                                </div><!-- End .item-image-wrapper -->
                                                <div class="item-meta-container">
                                                    <hr>
                                                    <h3 class="item-name"><a
                                                                href="/product/<?php echo $product['id']; ?>">
                                                            <?php if (!empty($product['name'])) {
                                                                echo $product['name'];
                                                            } ?>
                                                        </a>
                                                    </h3>
                                                    <h5 style="font-size:14px; " class="item-name">
                                                        <?php if (!empty($product['description'])) {
                                                            echo $product['description'];
                                                        } ?>
                                                    </h5>
                                                    <div class="item-action">
                                                        <a href="#" class="item-add-btn">
                                                            <span class="icon-cart-text">Купить</span>
                                                        </a>
                                                        <div class="item-action-inner">
                                                            <a href="#" class="icon-button icon-like">Favourite</a>
                                                            <a href="#" class="icon-button icon-compare">Checkout</a>
                                                        </div><!-- End .item-action-inner -->
                                                    </div><!-- End .item-action -->
                                                </div><!-- End .item-meta-container -->
                                            </div><!-- End .item -->
                                        <?php endforeach; ?>
                                    </div><!-- End .col-md-4 -->
                                </div><!-- End .row -->
                            </div><!-- End .category-item-container -->

                            <div class="pagination-container clearfix">
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

                                <div class="pull-right view-count-box hidden-xs">
                                    <span class="separator">view:</span>
                                    <div class="btn-group select-dropdown">
                                        <button type="button" class="btn select-btn">10</button>
                                        <button type="button" class="btn dropdown-toggle" data-toggle="dropdown">
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">15</a></li>
                                            <li><a href="#">30</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div><!-- End pagination-container -->


                        </div><!-- End .col-md-9 -->

                        <aside class="col-md-3 col-sm-4 col-xs-12 sidebar">
                            <div class="widget">
                                <div class="panel-group custom-accordion sm-accordion" id="category-filter">
                                    <div class="panel">
                                        <div class="accordion-header">
                                            <div class="accordion-title"><span>Категории</span></div>
                                            <!-- End .accordion-title -->
                                            <a class="accordion-btn opened" data-toggle="collapse"
                                               data-target="#category-list-1"></a>
                                        </div><!-- End .accordion-header -->

                                        <div id="category-list-1" class="collapse in">
                                            <div class="panel-body">
                                                <?php foreach ($categories as $categoryItem): ?>
                                                    <ul class="category-filter-list jscrollpane">
                                                        <li>
                                                            <a href="/category/<?php echo $categoryItem['id']; ?>">
                                                                <?php if (!empty($categoryItem['name'])) {
                                                                    echo $categoryItem['name'];
                                                                } ?>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                <?php endforeach; ?>


                                            </div><!-- End .panel-body -->
                                        </div><!-- #collapse -->
                                    </div><!-- End .panel -->

                                    <div class="panel">
                                        <div class="accordion-header">
                                            <div class="accordion-title"><span>Brand</span></div>
                                            <!-- End .accordion-title -->
                                            <a class="accordion-btn opened" data-toggle="collapse"
                                               data-target="#category-list-2"></a>
                                        </div><!-- End .accordion-header -->

                                        <div id="category-list-2" class="collapse in">
                                            <div class="panel-body">
                                                <ul class="category-filter-list jscrollpane">
                                                    <li><a href="#">Samsung (50)</a></li>
                                                    <li><a href="#">Apple (80)</a></li>
                                                    <li><a href="#">HTC (20)</a></li>
                                                    <li><a href="#">Motoroloa (20)</a></li>
                                                    <li><a href="#">Nokia (11)</a></li>
                                                </ul>
                                            </div><!-- End .panel-body -->
                                        </div><!-- #collapse -->
                                    </div><!-- End .panel -->

                                    <div class="panel">
                                        <div class="accordion-header">
                                            <div class="accordion-title"><span>Price</span></div>
                                            <!-- End .accordion-title -->
                                            <a class="accordion-btn opened" data-toggle="collapse"
                                               data-target="#category-list-3"></a>
                                        </div><!-- End .accordion-header -->

                                        <div id="category-list-3" class="collapse in">
                                            <div class="panel-body">
                                                <div id="price-range">

                                                </div><!-- End #price-range -->
                                                <div id="price-range-details">
                                                    <span class="sm-separator">from</span>
                                                    <input type="text" id="price-range-low" class="separator">
                                                    <span class="sm-separator">to</span>
                                                    <input type="text" id="price-range-high">
                                                </div>
                                                <div id="price-range-btns">
                                                    <a href="#" class="btn btn-custom-2 btn-sm">Ok</a>
                                                    <a href="#" class="btn btn-custom-2 btn-sm">Clear</a>
                                                </div>

                                            </div><!-- End .panel-body -->
                                        </div><!-- #collapse -->
                                    </div><!-- End .panel -->

                                    <div class="panel">
                                        <div class="accordion-header">
                                            <div class="accordion-title"><span>Color</span></div>
                                            <!-- End .accordion-title -->
                                            <a class="accordion-btn opened" data-toggle="collapse"
                                               data-target="#category-list-4"></a>
                                        </div><!-- End .accordion-header -->

                                        <div id="category-list-4" class="collapse in">
                                            <div class="panel-body">
                                                <ul class="filter-color-list clearfix">
                                                    <li><a href="#" data-bgcolor="#fff" class="filter-color-box"></a>
                                                    </li>
                                                    <li><a href="#" data-bgcolor="#ffff33" class="filter-color-box"></a>
                                                    </li>
                                                    <li><a href="#" data-bgcolor="#ff9900" class="filter-color-box"></a>
                                                    </li>
                                                    <li class="last-md"><a href="#" data-bgcolor="#ff9999"
                                                                           class="filter-color-box"></a></li>
                                                    <li class="last-lg"><a href="#" data-bgcolor="#99cc33"
                                                                           class="filter-color-box"></a></li>
                                                    <li><a href="#" data-bgcolor="#339933" class="filter-color-box"></a>
                                                    </li>
                                                    <li><a href="#" data-bgcolor="#ff0000" class="filter-color-box"></a>
                                                    </li>
                                                    <li class="last-md"><a href="#" data-bgcolor="#ff3366"
                                                                           class="filter-color-box"></a></li>
                                                    <li><a href="#" data-bgcolor="#cc33ff" class="filter-color-box"></a>
                                                    </li>
                                                    <li class="last-lg"><a href="#" data-bgcolor="#9966cc"
                                                                           class="filter-color-box"></a></li>
                                                    <li><a href="#" data-bgcolor="#99ccff" class="filter-color-box"></a>
                                                    </li>
                                                    <li class="last-md"><a href="#" data-bgcolor="#3333cc"
                                                                           class="filter-color-box"></a></li>
                                                    <li><a href="#" data-bgcolor="#999999" class="filter-color-box"></a>
                                                    </li>
                                                    <li><a href="#" data-bgcolor="#663300" class="filter-color-box"></a>
                                                    </li>
                                                    <li class="last-lg"><a href="#" data-bgcolor="#000"
                                                                           class="filter-color-box"></a></li>
                                                </ul>
                                            </div><!-- End .panel-body -->
                                        </div><!-- #collapse -->
                                    </div><!-- End .panel -->
                                </div><!-- .panel-group -->
                            </div><!-- End .widget -->

                            <div class="widget featured">
                                <h3>Featured</h3>

                                <div class="featured-slider flexslider sidebarslider">
                                    <ul class="featured-list clearfix">
                                        <li>
                                            <div class="featured-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item5.jpg" alt="item5">
                                                </figure>
                                                <h5><a href="#">Jacket Suiting Blazer</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="84"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="featured-price">$40</div><!-- End .featured-price -->
                                            </div><!-- End .featured-product -->

                                            <div class="featured-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item1.jpg" alt="item1">
                                                </figure>
                                                <h5><a href="#">Gap Graphic Cuffed</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="84"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="featured-price">$18</div><!-- End .featured-price -->
                                            </div><!-- End .featured-product -->

                                            <div class="featured-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item2.jpg" alt="item2">
                                                </figure>
                                                <h5><a href="#">Women's Lauren Dress</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="84"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="featured-price">$30</div><!-- End .featured-price -->
                                            </div><!-- End .featured-product -->
                                        </li>
                                        <li>
                                            <div class="featured-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item3.jpg" alt="item3">
                                                </figure>
                                                <h5><a href="#">Swiss Mobile Phone</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="64"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="featured-price">$39</div><!-- End .featured-price -->
                                            </div><!-- End .featured-product -->

                                            <div class="featured-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item4.jpg" alt="item4">
                                                </figure>
                                                <h5><a href="#">Zwinzed HeadPhones</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="94"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="featured-price">$18.99</div><!-- End .featured-price -->
                                            </div><!-- End .featured-product -->

                                            <div class="featured-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item7.jpg" alt="item7">
                                                </figure>
                                                <h5><a href="#">Kless Man Suit</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="74"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="featured-price">$99</div><!-- End .featured-price -->
                                            </div><!-- End .featured-product -->
                                        </li>
                                        <li>

                                            <div class="featured-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item4.jpg" alt="item4">
                                                </figure>
                                                <h5><a href="#">Gap Graphic Cuffed</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="84"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="featured-price">$17</div><!-- End .featured-price -->
                                            </div><!-- End .featured-product -->

                                            <div class="featured-product clearfix">
                                                <figure>
                                                    <img src="images/products/thumbnails/item6.jpg" alt="item6">
                                                </figure>
                                                <h5><a href="#">Women's Lauren Dress</a></h5>
                                                <div class="ratings-container">
                                                    <div class="ratings">
                                                        <div class="ratings-result" data-result="84"></div>
                                                    </div><!-- End .ratings -->
                                                </div><!-- End .rating-container -->
                                                <div class="featured-price">$30</div><!-- End .featured-price -->
                                            </div><!-- End .featured-product -->
                                        </li>
                                    </ul>
                                </div><!-- End .featured-slider -->
                            </div><!-- End .widget -->

                            <div class="widget banner-slider-container">
                                <div class="banner-slider flexslider">
                                    <ul class="banner-slider-list clearfix">
                                        <li><a href="#"><img src="images/banner1.jpg" alt="Banner 1"></a></li>
                                        <li><a href="#"><img src="images/banner2.jpg" alt="Banner 2"></a></li>
                                        <li><a href="#"><img src="images/banner3.jpg" alt="Banner 3"></a></li>
                                    </ul>
                                </div>
                            </div><!-- End .widget -->

                        </aside><!-- End .col-md-3 -->
                    </div><!-- End .row -->


                </div><!-- End .col-md-12 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

    </section><!-- End #content -->

<?php include ROOT . '/views/layouts/footer.php'; ?>