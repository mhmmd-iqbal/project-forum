<?= $this->extend('template/admin-template') ?>
<?= $this->section('konten') ?>
<div>
    <h1 class="h3 mb-4 text-gray-800">Data Admin</h1>
    <div class="row">
        <div class="col-md-12">
            <div class="card border-left-primary">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-4 form-group">
                            <label for="">Username</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="col-lg-4 form-group">
                            <label for="">Status</label>
                            <div class="form-inline">
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="status" id="input" value="1" checked="checked">
                                        <div class="badge badge-success ml-2">
                                            User Aktif</div>
                                    </label>
                                </div>
                                <div class="radio pl-5">
                                    <label>
                                        <input type="radio" name="status" id="input" value="0">
                                        <div class="badge badge-danger ml-2">
                                            User Tidak Aktif</div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <button class="btn btn-success">
                                <i class="fa fa-search"></i> Cari Data
                            </button>
                            <button class="btn btn-danger">
                                <i class="fa fa-refresh"></i> Reset Pencarian
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card border-left-primary mt-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Nama Lengkap User</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection('konten') ?>