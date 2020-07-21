<?= $this->extend('template/admin-template') ?>
<?= $this->section('style') ?>
<!-- <link rel="stylesheet" href="<?= base_url() ?>/assets/summernote/summernote-bs4.css"> -->
<?= $this->endSection('style') ?>

<?= $this->section('konten') ?>
<div>
    <h1 class="h3 mb-4 text-gray-800">Profile Aplikasi</h1>
    <div class="row">
        <div class="col-lg-12">
            <a href="/admin/profile" class="btn btn-primary my-1 active">Profile Aplikasi</a>
            <a href="/admin/visimisi" class="btn btn-primary my-1">Visi Misi</a>
            <a href="/admin/contact" class="btn btn-primary my-1">Contact</a>
            <a href="/admin/team" class="btn btn-primary my-1">Anggota Team</a>
        </div>
    </div>
    <div class="card bg-white my-2 border-left-primary">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 py-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="" id="form-update">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="id" id="id-profile" disabled>
                                <!-- <div id="profile-desc"></div> -->
                                <textarea name="profile_desc" class="form-control" id="profile" cols="30" rows="10" readonly style="resize: none;"></textarea>
                            </form>
                        </div>
                        <div class="col-lg-12 py-2" id="form-confirm">
                            <button class="btn btn-primary" id="update">Update</button>
                        </div>
                        <div class="col-lg-12 py-2" id="form-action" hidden>
                            <button class="btn btn-danger" id="cancel">Batal</button>
                            <button class="btn btn-primary" id="submit">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('konten') ?>

<?= $this->section('javascript') ?>
<script src="<?= base_url() ?>/assets/admin/myjs/profile.js"></script>
<!-- <script src="<?= base_url() ?>/assets/summernote/summernote-bs4.min.js"></script> -->

<?= $this->endSection('javascript') ?>