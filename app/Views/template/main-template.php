<!doctype html>
<html lang="en">

<head>
    <title><?= $judul ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/fonts/brand/style.css">

    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/css/aos.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/template/css/style.css">

    <!-- NEW CSS EMBENDED -->
    <?= $this->renderSection('style') ?>

</head>

<body>


    <div class="site-wrap" id="home-section">

        <!-- NAV BAR  -->
        <?= $this->include('template/main-navbar') ?>
        <!-- END NAV BAR  -->

        <!-- KONTEN  -->
        <?= $this->renderSection('konten') ?>
        <!-- END KONTEN  -->

        <!-- FOOTER -->
        <?= $this->include('template/main-footer') ?>
        <!-- END FOOTER  -->

    </div>

    <script src="<?= base_url() ?>/assets/template/js/jquery-3.3.1.min.js"></script>
    <script src="<?= base_url() ?>/assets/template/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/assets/template/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/template/js/owl.carousel.min.js"></script>
    <script src="<?= base_url() ?>/assets/template/js/jquery.sticky.js"></script>
    <script src="<?= base_url() ?>/assets/template/js/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>/assets/template/js/jquery.animateNumber.min.js"></script>
    <script src="<?= base_url() ?>/assets/template/js/jquery.fancybox.min.js"></script>
    <script src="<?= base_url() ?>/assets/template/js/jquery.easing.1.3.js"></script>
    <script src="<?= base_url() ?>/assets/template/js/bootstrap-datepicker.min.js"></script>
    <script src="<?= base_url() ?>/assets/template/js/aos.js"></script>

    <script src="<?= base_url() ?>/assets/template/js/main.js"></script>

    <!-- NEW SCRIPT EMBENDED  -->
    <?= $this->renderSection('script') ?>

</body>

</html>