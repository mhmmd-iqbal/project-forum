<!DOCTYPE html>
<html lang="en">
<?= $this->include('template/main-head') ?>

<body>
    <?= $this->include('template/main-navbar') ?>
    <?= $this->renderSection('slider') ?>
    <main id="main">
        <?= $this->renderSection('konten') ?>
    </main><!-- End #main -->
    <?= $this->include('template/main-footer') ?>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
    <?= $this->include('template/main-script') ?>
</body>

</html>