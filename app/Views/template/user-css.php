<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">

<title><?= $judul; ?></title>

<!-- Custom fonts for this template-->
<link href="<?= base_url() ?>/assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
<!-- <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"> -->
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<!-- Custom styles for this template-->
<link href="<?= base_url() ?>/assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/toaster/jquery.toast.min.css">
<link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/confirm-button/jquery-confirm.min.css">

<style type="text/css">
    .gambar {
        max-width: 400px;
        /*width: 400px;*/
        height: auto;
        float: none;
        margin-right: auto;
        margin-left: auto;
        margin-bottom: none;
    }

    .gambar img {
        object-fit: cover;
        width: 100%;
    }

    .loader {
        border: 10px solid #f3f3f3;
        /* Light grey */
        border-top: 10px solid #3498db;
        /* Blue */
        border-radius: 50%;
        width: 50px;
        height: 50px;
        animation: spin 2s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    /* .sidebar .nav-item .nav-link {
        padding: 0.7rem;
    } */
</style>
<style type="text/css">
    #imgView {
        padding: 5px;
    }

    .loadAnimate {
        animation: setAnimate ease 2.5s infinite;
    }

    @keyframes setAnimate {
        0% {
            color: #000;
        }

        50% {
            color: transparent;
        }

        99% {
            color: transparent;
        }

        100% {
            color: #000;
        }
    }

    .custom-file-label {
        cursor: pointer;
    }
</style>
<?= $this->renderSection('style') ?>