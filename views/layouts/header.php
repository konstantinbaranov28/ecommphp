<!DOCTYPE html>
<!--[if IE 8]>
<html class="ie8"> <![endif]-->
<!--[if IE 9]>
<html class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Venedor - Responsive eCommerce Template</title>
    <meta name="description" content="Responsive modern ecommerce Html5 Template">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='//fonts.googleapis.com/css?family=PT+Sans:400,700,400italic,700italic%7CPT+Gudea:400,700,400italic%7CPT+Oswald:400,700,300'
          rel='stylesheet' id="googlefont">

    <link rel="stylesheet" href="/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template/css/font-awesome.min.css">
    <link rel="stylesheet" href="/template/css/prettyPhoto.css">
    <link rel="stylesheet" href="/template/css/owl.carousel.css">
    <link rel="stylesheet" href="/template/css/style.css">
    <link rel="stylesheet" href="/template/css/responsive.css">

    <!--[if lt IE 9]>
    <script src="/template/js/html5shiv.js"></script>
    <script src="/template/js/respond.min.js"></script>
    <![endif]-->

    <style id="custom-style">

    </style>
</head>
<body>
<div id="wrapper">
    <header id="header">
        <div id="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-top-left">
                            <ul id="top-links" class="clearfix">

                                <?php if (User::isGuest()): ?>
                                    <li><a href="/user/login/"><i class="fa fa-lock"></i> Вход</a></li>
                                    <li><a href="/user/register/"><i class="fa fa-lock"></i> Регистрация</a></li>
                                <?php else: ?>
                                    <li><a href="/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                                    <li><a href="/user/logout/"><i class="fa fa-unlock"></i> Выход</a></li>
                                <?php endif; ?>

                                </li>
                            </ul>
                        </div><!-- End .header-top-left -->
                        <div class="header-top-right">




                        </div><!-- End .header-top-right -->
                    </div><!-- End .col-md-12 -->
                </div><!-- End .row -->
            </div><!-- End .container -->
        </div><!-- End #header-top -->

        <div id="inner-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-5 col-xs-12 logo-container">
                        <h1 class="logo clearfix">
                            <span>Responsive eCommerce Template</span>
                            <a href="index.html" title="Venedor eCommerce Template"><img src="/template/images/logo.png"
                                                                                         alt="Venedor Commerce Template"
                                                                                         width="238" height="76"></a>
                        </h1>
                    </div><!-- End .col-md-5 -->
                    <div class="col-md-7 col-sm-7 col-xs-12 header-inner-right">

                        <div class="header-box contact-infos pull-right">
                            <ul>
                                <li><span class="header-box-icon header-box-icon-skype"></span>venedor_support</li>
                                <li><span class="header-box-icon header-box-icon-email"></span><a
                                            href="mailto:konstantinbaranov25@mail.ru">konstantinbaranov25@mail.ru</a></li>
                            </ul>
                        </div><!-- End .contact-infos -->

                        <div class="header-box contact-phones pull-right clearfix">
                            <span class="header-box-icon header-box-icon-earphones"></span>
                            <ul class="pull-left">
                                <li>+7-950-558-59-86</li>
                                <li>+7-912-288-03-19</li>
                            </ul>
                        </div><!-- End .contact-phones -->

                    </div><!-- End .col-md-7 -->
                </div><!-- End .row -->
            </div><!-- End .container -->

            <div id="main-nav-container">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 clearfix">

                            <nav id="main-nav">
                                <div id="responsive-nav">
                                    <div id="responsive-nav-button">
                                        Menu <span id="responsive-nav-button-icon"></span>
                                    </div><!-- responsive-nav-button -->
                                </div>
                                <ul class="menu clearfix">
                                    <li class="mega-menu-container"><a href="/">Главная</a></li>
                                    <li class="mega-menu-container"><a href="/catalog/">Каталог товаров</a></li>
                                    <li><a href="/news/">Блог</a></li>
                                </ul>
                            </nav>

                            <div id="quick-access">
                                <div class="dropdown-cart-menu-container pull-right">
                                    <div class="btn-group dropdown-cart">
                                        <button type="button" class="btn btn-custom dropdown-toggle"
                                                data-toggle="dropdown">
                                            <span class="cart-menu-icon"></span>
                                            0 item(s) <span class="drop-price">- $0.00</span>
                                        </button>

                                        <div class="dropdown-menu dropdown-cart-menu pull-right clearfix" role="menu">
                                            <p class="dropdown-cart-description">Recently added item(s).</p>
                                            <ul class="dropdown-cart-product-list">
                                                <li class="item clearfix">
                                                    <a href="#" title="Delete item" class="delete-item"><i
                                                                class="fa fa-times"></i></a>
                                                    <a href="#" title="Edit item" class="edit-item"><i
                                                                class="fa fa-pencil"></i></a>
                                                    <figure>
                                                        <a href="product.html"><img
                                                                    src="/template/images/products/thumbnails/item12.jpg"
                                                                    alt="phone 4"></a>
                                                    </figure>
                                                    <div class="dropdown-cart-details">
                                                        <p class="item-name">
                                                            <a href="product.html">Cam Optia AF Webcam </a>
                                                        </p>
                                                        <p>
                                                            1x
                                                            <span class="item-price">$499</span>
                                                        </p>
                                                    </div><!-- End .dropdown-cart-details -->
                                                </li>
                                                <li class="item clearfix">
                                                    <a href="#" title="Delete item" class="delete-item"><i
                                                                class="fa fa-times"></i></a>
                                                    <a href="#" title="Edit item" class="edit-item"><i
                                                                class="fa fa-pencil"></i></a>
                                                    <figure>
                                                        <a href="product.html"><img
                                                                    src="/template/images/products/thumbnails/item13.jpg"
                                                                    alt="phone 2"></a>
                                                    </figure>
                                                    <div class="dropdown-cart-details">
                                                        <p class="item-name">
                                                            <a href="product.html">Iphone Case Cover Original</a>
                                                        </p>
                                                        <p>
                                                            1x
                                                            <span class="item-price">$499<span
                                                                        class="sub-price">.99</span></span>
                                                        </p>
                                                    </div><!-- End .dropdown-cart-details -->
                                                </li>
                                            </ul>

                                            <ul class="dropdown-cart-total">
                                                <li><span class="dropdown-cart-total-title">Shipping:</span>$7</li>
                                                <li><span class="dropdown-cart-total-title">Total:</span>$1005<span
                                                            class="sub-price">.99</span></li>
                                            </ul><!-- .dropdown-cart-total -->
                                            <div class="dropdown-cart-action">
                                                <p><a href="cart.html" class="btn btn-custom-2 btn-block">Cart</a></p>
                                                <p><a href="checkout.html" class="btn btn-custom btn-block">Checkout</a>
                                                </p>
                                            </div><!-- End .dropdown-cart-action -->

                                        </div><!-- End .dropdown-cart -->
                                    </div><!-- End .btn-group -->
                                </div><!-- End .dropdown-cart-menu-container -->


                                <form class="form-inline quick-search-form" role="form" action="#">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Search here">
                                    </div><!-- End .form-inline -->
                                    <button type="submit" id="quick-search" class="btn btn-custom"></button>
                                </form>
                            </div><!-- End #quick-access -->
                        </div><!-- End .col-md-12 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->

            </div><!-- End #nav -->
        </div><!-- End #inner-header -->
    </header><!-- End #header -->