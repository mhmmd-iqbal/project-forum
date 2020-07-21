<?= $this->extend('template/admin-template') ?>
<?= $this->section('style') ?>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
<?= $this->endSection('style') ?>

<?= $this->section('konten') ?>
<div>
    <h1 class="h3 mb-4 text-gray-800">Pendidikan</h1>
    <div class="card bg-white my-2 border-left-primary">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-primary" id="create-new">Tambah Baru</button>
                </div>
                <div class="col-lg-12 py-2">
                    <div class="">
                        <table class="table table-hover" id="data-table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Instansi Pendidikan</th>
                                    <th>Alamat</th>
                                    <th>Jenjang</th>
                                    <th>Tahun</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody id="table-temp"></tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-id">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Tambah Data Pendidikan</h4>
            </div>
            <div class="modal-body">
                <form method="POST" id="form-open" enctype="multipart/form-data">
                    <?= csrf_field(); ?>
                    <?= form_label("Nama Instansi Pendidikan") ?>
                    <?= form_input($nama_sekolah) ?>
                    <?= form_label("Asal Instansi Pendidikan") ?>
                    <?= form_input($asal_sekolah) ?>
                    <?= form_label("Jenjang") ?>
                    <?= form_dropdown($jenjang, $jenjang_option) ?>
                    <?= form_label("Tahun") ?>
                    <?= form_input($tahun) ?>
                    <?= form_label("File Ijazah") ?>
                    <?= form_upload($ijazah) ?>

                    <div class="alert alert-info">
                        <strong>Keterangan</strong> File yang diupload dalam bentuk GAMBAR dengan ukuran maksimal 1MB
                    </div>
                    <small>
                        <span class="text-danger text-center text-small" hidden id="file-desc"></span>
                    </small>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal" id="form-cancel">Batal</button>
                <button type="button" class="btn btn-primary" id="form-simpan"> <i class="fa fa-spin fa-spinner" id="spinner" hidden></i> Simpan</button>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection('konten') ?>
<?= $this->section('javascript') ?>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
<script src="<?= base_url() ?>/assets/admin/myjs/pendidikan.js"></script>
<?= $this->endSection('javascript') ?>