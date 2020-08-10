<!-- Bootstrap core JavaScript-->
<script src="<?= base_url() ?>/assets/admin/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>/assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="<?= base_url() ?>/assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="<?= base_url() ?>/assets/admin/js/sb-admin-2.min.js"></script>

<!-- My Javascript -->
<script>
    const baseUrl = '<?= base_url() ?>'
    const siteUrl = '<?= site_url() ?>'
</script>

<script src="<?= base_url() ?>/assets/sweetalert/sweetalert.min.js"></script>
<script src="<?= base_url() ?>/assets/toaster/jquery.toast.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

<script src="<?= base_url('/assets/datatables/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('/assets/datatables/responsive/js/dataTables.responsive.min.js') ?>"></script>
<script src="<?= base_url() ?>/assets/summernote/summernote-bs4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

<script type="text/javascript">
    function notif(title, text, icon) {
        swal({
            title: title,
            text: text,
            icon: icon,
            buttons: false,
            timer: 1500,
        });
    }

    function loading() {
        swal({
            title: "Memeriksa...",
            text: "Sedang diproses. Harap menunggu...",
            icon: baseUrl + "/assets/sweetalert/loader.gif",
            button: false,
        });
    }

    function toaster(head, text, icon) {
        $.toast({
            text: text, // Text that is to be shown in the toast
            heading: head, // Optional heading to be shown on the toast
            icon: icon, // Type of toast icon
            showHideTransition: 'plain', // fade, slide or plain
            allowToastClose: true, // Boolean value true or false
            hideAfter: 4000, // false to make it sticky or number representing the miliseconds as time after which toast needs to be hidden
            stack: 5, // false if there should be only one toast at a time or a number representing the maximum number of toasts to be shown at a time
            position: 'top-right',


            textAlign: 'left', // Text alignment i.e. left, right or center
            loader: false, // Whether to show loader or not. True by default
            loaderBg: '#9EC600', // Background color of the toast loader
            beforeShow: function() {}, // will be triggered before the toast is shown
            afterShown: function() {}, // will be triggered after the toat has been shown
            beforeHide: function() {}, // will be triggered before the toast gets hidden
            afterHidden: function() {} // will be triggered after the toast has been hidden
        });
    }
</script>

<?= $this->renderSection('javascript') ?>