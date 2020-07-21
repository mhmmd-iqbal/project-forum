<?= $this->extend('template/admin-template') ?>


<?= $this->section('konten') ?>
<div>
    <h1 class="h3 mb-4 text-gray-800">Visi dan Misi</h1>
    <div class="row">
        <div class="col-lg-12">
            <a href="/admin/profile" class="btn btn-primary my-1">Profile Aplikasi</a>
            <a href="/admin/visimisi" class="btn btn-primary my-1 active">Visi Misi</a>
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
                            <form action="" id="form-update-1">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="id" class="id-visimisi" disabled>
                                <textarea name="vision_desc" class="form-control" id="visi" cols="30" rows="10" readonly style="resize: none;" placeholder="Update Visi..."></textarea>
                            </form>
                        </div>
                        <div class="col-lg-12 py-2" id="form-confirm-1">
                            <button class="btn btn-primary" id="update-1">Update</button>
                        </div>
                        <div class="col-lg-12 py-2" id="form-action-1" hidden>
                            <button class="btn btn-danger" id="cancel-1">Batal</button>
                            <button class="btn btn-primary" id="submit-1">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card bg-white my-2 border-left-primary">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 py-2">
                    <div class="row">
                        <div class="col-lg-12">
                            <form action="" id="form-update-2">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="id" class="id-visimisi" disabled>
                                <textarea name="mision_desc" class="form-control" id="misi" cols="30" rows="10" readonly style="resize: none;" placeholder="Update Misi..."></textarea>
                            </form>
                        </div>
                        <div class="col-lg-12 py-2" id="form-confirm-2">
                            <button class="btn btn-primary" id="update-2">Update</button>
                        </div>
                        <div class="col-lg-12 py-2" id="form-action-2" hidden>
                            <button class="btn btn-danger" id="cancel-2">Batal</button>
                            <button class="btn btn-primary" id="submit-2">Simpan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('konten') ?>

<?= $this->section('javascript') ?>
<script src="<?= base_url() ?>/assets/admin/myjs/visimisi.js"></script>
<?= $this->endSection('javascript') ?>