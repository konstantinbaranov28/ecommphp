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

                    <div class="row">

                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <h2>Кабинет пользователя</h2>
                            <h4>Имя: <?php echo $user['name']; ?></h4>
                            <h4>Фамилия: <?php echo $user['lastname']; ?></h4>
                            <h4>Отчество: <?php echo $user['middlename']; ?></h4>
                            <h4>E-Mail-1: <?php echo $user['email']; ?></h4>
                            <h4>E-Mail-2: <?php echo $user['addemail']; ?></h4>
                            <h4>Телефон: <?php echo $user['phone']; ?></h4>
                            <h4>Домашний телефон: <?php echo $user['phonehome']; ?></h4>
                            <h4>Рабочий телефон: <?php echo $user['phonejob']; ?></h4>

                            <h3 style="color: #0b9a0b;"><?php

                            if (isset($user['radio'])) {
                                switch ($user['radio']) {
                                    case '1':
                                        echo 'Главным является - E-Mail-1';
                                        break;
                                    case '2':
                                        echo 'Главным является - E-Mail-2';
                                        break;
                                }
                            }
                            ?></h3>


                            <div class="md-margin"></div><!-- space -->

                            <a href="/cabinet/edit" class="btn btn-custom-2">Редактировать данные</a>
                            <div class="lg-margin"></div><!-- space -->
                        </div><!-- End .col-md-6 -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="xs-margin"></div>

                        </div><!-- End .col-md-6 -->

                    </div><!-- End.row -->

                </div><!-- End .col-md-12 -->
            </div><!-- End .row -->
        </div><!-- End .container -->

    </section><!-- End #content -->

<?php include ROOT . '/views/layouts/footer.php'; ?>