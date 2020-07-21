<?= $this->extend('template/admin-template') ?>
<?= $this->section('style') ?>
<?= $this->endSection('style') ?>

<?= $this->section('konten') ?>
<div>
    <h1 class="h3 mb-4 text-gray-800">Kontak Aplikasi</h1>
    <div class="row">
        <div class="col-lg-12">
            <a href="/admin/profile" class="btn btn-primary my-1">Profile Aplikasi</a>
            <a href="/admin/visimisi" class="btn btn-primary my-1">Visi Misi</a>
            <a href="/admin/contact" class="btn btn-primary my-1 active">Contact</a>
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
                                <input type="hidden" name="id" id="id-contact" disabled>
                                <div class="row form-group">
                                    <div class="col-lg-2">
                                        <?= form_label('Email', "email") ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_input([
                                            'type'  => 'email',
                                            'name'  => 'email',
                                            'id'    => 'email',
                                            'class' => 'form-control',
                                            'readonly' => TRUE
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-2">
                                        <?= form_label('No Telpon', "telpon") ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_input([
                                            'type'  => 'text',
                                            'name'  => 'phone',
                                            'id'    => 'phone',
                                            'class' => 'form-control',
                                            'readonly' => TRUE
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-2">
                                        <?= form_label('Alamat Kantor', "alamat") ?>
                                    </div>
                                    <div class="col-lg-6">
                                        <?= form_textarea([
                                            'name'  => 'address',
                                            'id'    => 'address',
                                            'class' => 'form-control',
                                            'rows'   => '3',
                                            'readonly' => TRUE
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-2">
                                        <?= form_label('Akun Instagram', "instagram") ?>
                                    </div>
                                    <div class="col-lg-4">
                                        <?= form_input([
                                            'type'  => 'text',
                                            'name'  => 'instagram',
                                            'id'    => 'instagram',
                                            'class' => 'form-control',
                                            'readonly' => TRUE
                                        ]) ?>
                                    </div>
                                </div>
                                <div class="row form-group">
                                    <div class="col-lg-2">
                                        <?= form_label('Akun Facebook', "facebook") ?>
                                    </div>
                                    <div class="col-lg-4">
                                        <?= form_input([
                                            'type'  => 'text',
                                            'name'  => 'facebook',
                                            'id'    => 'facebook',
                                            'class' => 'form-control',
                                            'readonly' => TRUE
                                        ]) ?>
                                    </div>
                                </div>
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
<script src="<?= base_url() ?>/assets/admin/myjs/contact.js"></script>
<?= $this->endSection('javascript') ?>