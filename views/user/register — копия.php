<?php include ROOT . '/views/layouts/header.php'; ?>

    <section id="content">
        <div id="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Register Account</li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <header class="content-title">
                        <h1 class="title">Регистрация на сайте</h1>
                        <p class="title-desc">Если у вас уже есть учетная запись, войдите на страницу входа. <a href="#">login page</a>.
                        </p>
                    </header>
                    <div class="xs-margin"></div><!-- space -->
                    <form action="#" id="register-form">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <fieldset>
                                    <h2 class="sub-title">Ваши персональные данные</h2>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span
                                                    class="input-text">Имя&#42;</span></span>
                                        <input type="text" name="name" required class="form-control input-lg" placeholder="Имя">
                                    </div><!-- End .input-group -->
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span
                                                    class="input-text">Фамилия&#42;</span></span>
                                        <input type="text" name="lastname" required class="form-control input-lg" placeholder="Фамилия">
                                    </div><!-- End .input-group -->
                                    <div class="input-group">
                                        <span class="input-group-addon"><span
                                                    class="input-icon input-icon-email"></span><span class="input-text">Email&#42;</span></span>
                                        <input type="text" name="email" required class="form-control input-lg" placeholder="Email">
                                    </div><!-- End .input-group -->
                                    <div class="input-group">
                                        <span class="input-group-addon"><span
                                                    class="input-icon input-icon-phone"></span><span class="input-text">Телефон&#42;</span></span>
                                        <input type="text" name="phone" required class="form-control input-lg" placeholder="Телефон">
                                    </div><!-- End .input-group -->
                                    <div class="input-group">
                                        <span class="input-group-addon"><span
                                                    class="input-icon input-icon-password"></span><span
                                                    class="input-text">Пароль&#42;</span></span>
                                        <input type="password" name="password" required class="form-control input-lg"
                                               placeholder="Пароль">
                                    </div><!-- End .input-group -->

                                    <input type="submit" name="submit" value="РЕГИСТРАЦИЯ" class="btn btn-custom-2 md-margin">

                                </fieldset>
                            </div><!-- End .col-md-6 -->
                        </div><!-- End .row -->
                    </form>
                </div><!-- End .col-md-12 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

    </section><!-- End #content -->

<?php include ROOT . '/views/layouts/footer.php'; ?>