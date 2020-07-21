<?= $this->extend('template/admin-template') ?>
<?= $this->extend('template/admin-template') ?>
<?= $this->section('style') ?>
<?= $this->endSection('style') ?>

<?= $this->section('konten') ?>
<div>
    <h1 class="h3 mb-4 text-gray-800">Team Member</h1>
    <div class="row">
        <div class="col-lg-12">
            <a href="/admin/profile" class="btn btn-primary my-1">Profile Aplikasi</a>
            <a href="/admin/visimisi" class="btn btn-primary my-1">Visi Misi</a>
            <a href="/admin/contact" class="btn btn-primary my-1">Contact</a>
            <a href="/admin/team" class="btn btn-primary my-1 active">Anggota Team</a>
        </div>
    </div>
    <div class="card bg-white my-2 border-left-primary">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 py-2">
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('konten') ?>


<?= $this->section('javascript') ?>
<script src="<?= base_url() ?>/assets/admin/myjs/team.js"></script>
<?= $this->endSection('javascript') ?>