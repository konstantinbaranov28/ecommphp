<?php include ROOT . '/views/layouts/header.php'; ?>
<section id="content">
    <div id="breadcrumb-container">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">Главная</a></li>
                <li class="active">Редактирование данных</li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <header class="content-title">
                    <h1 class="title">Редактирование данных</h1>
                    <p class="title-desc">Если у вас уже есть учетная запись, войдите на страницу входа. <a href="/user/login">login</a>.
                    </p>
                </header>
                <div class="xs-margin"></div><!-- space -->
                <form action="#" method="post" id="register-form">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <fieldset>
                                <?php if ($result): ?>
                                    <p>Данные отредактированы!</p>
                                <?php else: ?>
                                    <?php if (isset($errors) && is_array($errors)): ?>
                                        <ul>
                                            <?php foreach ($errors as $error): ?>
                                                <li> - <?php echo $error; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">Имя&#42;</span></span>
                                        <input class="form-control input-lg" type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>"/>
                                    </div><!-- End .input-group -->

                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">Фамилия&#42;</span></span>
                                        <input class="form-control input-lg" type="text" name="lastname" placeholder="Фамилия" value="<?php echo $lastname; ?>"/>
                                    </div><!-- End .input-group -->

                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-user"></span><span class="input-text">Отчество&#42;</span></span>
                                        <input class="form-control input-lg" type="text" name="middlename" placeholder="Отчество" value="<?php echo $middlename; ?>"/>
                                    </div><!-- End .input-group -->

                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">E-mail - 1&#42;</span></span>
                                        <input class="form-control input-lg" type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>"/>
                                    </div><!-- End .input-group -->

                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-email"></span><span class="input-text">E-mail - 2&#42;</span></span>
                                        <input class="form-control input-lg" type="email" name="addemail" placeholder="Дополнительный E-mail" value="<?php echo $addemail; ?>"/>
                                    </div><!-- End .input-group -->

                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-phone"></span><span class="input-text">Телефон&#42;</span></span>
                                        <input class="form-control input-lg" type="text" name="phone" placeholder="Телефон" value="<?php echo $phone; ?>"/>
                                    </div><!-- End .input-group -->

                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-phone"></span><span class="input-text">Домашний телефон&#42;</span></span>
                                        <input class="form-control input-lg" type="text" name="phonehome" placeholder="Домашний телефон" value="<?php echo $phonehome; ?>"/>
                                    </div><!-- End .input-group -->

                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-phone"></span><span class="input-text">Рабочий телефон&#42;</span></span>
                                        <input class="form-control input-lg" type="text" name="phonejob" placeholder="Рабочий телефон" value="<?php echo $phonejob; ?>"/>
                                    </div><!-- End .input-group -->

                                    <div class="input-group">
                                        <span class="input-group-addon"><span class="input-icon input-icon-password"></span><span class="input-text">Пароль&#42;</span></span>
                                        <input class="form-control input-lg" type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>"/>
                                    </div><!-- End .input-group -->


                                    <input type="submit" name="submit" class="btn btn-custom-2" value="Сохранить"/>
                                <?php endif; ?>
                            </fieldset>
                        </div><!-- End .col-md-6 -->
                    </div><!-- End .row -->
                </form>
            </div><!-- End .col-md-12 -->
        </div><!-- End .row -->
    </div><!-- End .container -->

</section><!-- End #content -->
<?php include ROOT . '/views/layouts/footer.php'; ?>
