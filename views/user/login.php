<?php include ROOT . '/views/layouts/header.php'; ?>
    <section id="content">
        <div id="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="/">Главная</a></li>
                    <li class="/user/login/">Вход</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="content-title">
                        <h1 class="title">Вход на сайт</h1>
                        <div class="md-margin"></div><!-- space -->
                    </header>

                    <div class="row">


                        <div class="col-md-10 col-sm-10 col-xs-12">
                            <h2>Введите регистрационные данные</h2>

                            <div class="xs-margin"></div>
                            <?php if (isset($errors) && is_array($errors)): ?>
                                <ul>
                                    <?php foreach ($errors as $error): ?>
                                        <li> - <?php echo $error; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                            <form id="login-form" method="post" action="#">


                                <div class="input-group">
                                    <span class="input-group-addon"><span
                                                class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>
                                    <input class="form-control input-lg" type="email" name="email" placeholder="E-mail"
                                           value="<?php echo $email; ?>"/>
                                </div><!-- End .input-group -->
                                <div class="input-group xs-margin">
                                    <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span
                                                class="input-text">Password&#42;</span></span>
                                    <input class="form-control input-lg" type="password" name="password"
                                           placeholder="Пароль" value="<?php echo $password; ?>"/>
                                </div><!-- End .input-group -->

                                <button class="btn btn-custom-2" type="submit" name="submit">Вход</button>
                            </form>
                            <div class="sm-margin"></div><!-- space -->
                        </div><!-- End .col-md-6 -->

                    </div><!-- End.row -->

                </div><!-- End .col-md-12 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

    </section><!-- End #content -->

<?php include ROOT . '/views/layouts/footer.php'; ?>